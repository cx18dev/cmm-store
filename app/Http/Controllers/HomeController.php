<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;
use App\Mail\ProductFormSubmission;
use App\Repositories\PartRepository;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;
use App\Repositories\ProbeRepository;
use Illuminate\Support\Facades\Cache;
use App\Repositories\CategoryRepository;
use App\Http\Requests\ProductFormRequest;

class HomeController extends Controller
{
    protected $partRepo;
    protected $probeRepo;
    protected $categoryRepo;

    public function __construct()
    {
        $this->partRepo = new PartRepository;
        $this->probeRepo = new ProbeRepository;
        $this->categoryRepo = new CategoryRepository;
    }

    public function cart()
    {
        $cartItems = Cache::get('cart');
        return view('cart', compact('cartItems'));
    }

    public function addToCart(Request $request)
    {
        // Retrieve selected parts from the request
        $selectedParts = $request->input('parts');

        // If selectedParts is not an array, initialize it as an empty array
        if (!is_array($selectedParts)) {
            $selectedParts = [];
        }

        // Retrieve the existing cart from the cache, or initialize it as an empty array
        $cartItems = Cache::get('cart', []);

        $cartUpdated = false; // Track if the cart was updated

        // Process each selected part
        foreach ($selectedParts as $item) {
            $probe = $item['probe'];
            $part = $item['part'];

            // Check if the probe already exists in the cart
            if (null !== ($cartItems[$probe['name']] ?? null)) {
                // Check if the part already exists in this probe
                $existingPartKey = array_search($part['name'], array_column($cartItems[$probe['name']]['parts'], 'name'));

                if ($existingPartKey === false) {
                    // If the part doesn't exist, add it to the parts list
                    $cartItems[$probe['name']]['parts'][] = [
                        'name' => $part['name'],
                        'price' => $part['price'],
                        'quantity' => 1,  // quantity removed as per your request
                        'discount' => $part['discount'] . '%',
                    ];
                    $cartUpdated = true;
                }
            } else {
                // If the probe doesn't exist, add it and include the part
                $cartItems[$probe['name']] = [
                    'name' => $probe['name'],
                    'image' => $probe['probe_img'],
                    'probe_link' => $probe['probe_link'],
                    'parts' => [
                        [
                            'name' => $part['name'],
                            'price' => $part['price'],
                            'quantity' => 1,  // quantity removed as per your request
                            'discount' => $part['discount'] . '%',
                        ]
                    ],
                ];
                $cartUpdated = true;
            }
        }

        // Handle removing unchecked items
        if (null !== $request->input('remove_parts')) {
            $removeParts = $request->input('remove_parts');

            foreach ($removeParts as $item) {
                $probe = $item['probe'];
                $part = $item['part'];

                if (null !== ($cartItems[$probe['name']] ?? null)) {
                    // Filter out the part to remove it
                    $cartItems[$probe['name']]['parts'] = array_filter($cartItems[$probe['name']]['parts'], function ($cartPart) use ($part) {
                        return $cartPart['name'] !== $part['name'];
                    });
                    $cartUpdated = true;

                    // If there are no parts left under the probe, remove the probe
                    if (empty($cartItems[$probe['name']]['parts'])) {
                        unset($cartItems[$probe['name']]);
                        $cartUpdated = true; // Mark the cart as updated
                    }
                }
            }
        }

        // Use the if-else structure to check whether the cart was updated
        if ($cartUpdated) {
            // Save the updated cart to the cache for 5 hours
            Cache::put('cart', $cartItems, now()->addHours(5));

            return response()->json([
                'status' => true,
                'message' => 'Cart updated successfully.',
                'cart' => $cartItems,
            ]);
        } else {
            // If no changes were made to the cart
            return response()->json([
                'status' => false,
                'message' => 'No changes were made to the cart.',
            ]);
        }
    }

    public function removeFromCart(Request $request)
    {
        $probeName = $request->input('probe');
        $partName = $request->input('part');

        $cart = Cache::get('cart', []);

        if (isset($cart[$probeName])) {
            $cart[$probeName]['parts'] = array_filter($cart[$probeName]['parts'], function ($part) use ($partName) {
                return $part['name'] !== $partName;
            });

            // If no parts are left under this probe, remove the probe
            if (empty($cart[$probeName]['parts'])) {
                unset($cart[$probeName]);
            }

            Cache::put('cart', $cart, now()->addHours(5));

            return response()->json(['status' => true, 'message' => 'Item removed successfully.']);
        }

        return response()->json(['status' => false, 'message' => 'Item not found in the cart.']);
    }


    public function probes($category, $probSlug = null)
    {
        $viewPath = null;
        $data = [];

        // Retrieve category by slug if provided
        $categoryData = $this->categoryRepo->getBySlug($category);

        // If category is not found, abort early with 404
        if (!$categoryData) {
            abort(404, 'Category not found.');
        }

        // If no slug is provided, show the category view
        if ($probSlug === null) {
            $data['category'] = $categoryData;
            $data['probes'] = $this->probeRepo->getByCategoryProbes($categoryData->id);
            $viewPath = 'category';
        } else {
            // If a slug is provided, get parts for the specific probe
            $partsData = $this->probeRepo->getPartsByProbeSlug($probSlug);

            if (!$partsData) {
                abort(404, 'Probe not found.');
            }

            $data['parts'] = $partsData['parts'];
            $data['probe'] = $partsData['probe'];
            $viewPath = "probes.$probSlug";
        }

        // Get all probe links for navigation
        $data['probeLinks'] = $this->probeRepo->all()->map(function ($probe) {
            return [
                'name' => $probe['name'],
                'slug' => $probe['slug'],
            ];
        });

        // Return the appropriate view if it exists, otherwise 404
        if ($viewPath && View::exists($viewPath)) {
            return view($viewPath, $data);
        }

        abort(404, 'View not found or invalid category path.');
    }

    public function sendEmail(ProductFormRequest $request)
    {
        $validatedData = $request->validated();

        $formDetails = [
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'details' => $validatedData['details'],
            'selectedProducts' => $validatedData['selectedProducts'],
        ];

        // Send the email to the admin
        // Mail::to('admin@example.com')->send(new ProductFormSubmission($formDetails));
        Mail::send('emails.product-form', compact('formDetails'), function ($message) {
            $message->from('info@cmmstore.com', 'CMM Online Store')
                ->to('info@cmmstore.com')
                ->subject('Product Form Submission');
        });

        // Return a response (success message)
        return response()->json([
            'status' => true,
            'message' => 'Your form has been sent to the admin. Please wait for a response!'
        ]);
    }
}
