<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\InquiryRequest;
use Illuminate\Support\Facades\Cache;
use App\Repositories\InquiryRepository;

class CartController extends Controller
{
    protected $inquiryRepo;

    public function __construct()
    {
        $this->inquiryRepo = new InquiryRepository;
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

    public function updateCart(Request $request)
    {
        $probeName = $request->input('probe');
        $partName = $request->input('part');
        $quantity = $request->input('quantity');

        $cart = Cache::get('cart', []);

        if (isset($cart[$probeName])) {
            foreach ($cart[$probeName]['parts'] as &$part) {
                if ($part['name'] === $partName) {
                    $part['quantity'] = $quantity;
                    Cache::put('cart', $cart, now()->addHours(5));
                    return response()->json(['status' => true, 'message' => 'Cart updated successfully.']);
                }
            }
        }

        return response()->json(['status' => false, 'message' => 'Item not found in the cart.']);
    }

    public function checkout(Request $request)
    {
        if ($request->isMethod('post')) {
            $cartItems = $request->input('cartItems');

            // If cart is empty, redirect back to the cart page
            if (empty($cartItems)) {
                return redirect()->route('cart');
            }

            $cartItems = json_decode($cartItems, true);

            return view('checkout', compact('cartItems'));
        } else {
            return redirect()->route('cart');
        }
    }

    public function submitInquiry(InquiryRequest $request)
    {
        // Retrieve validated data from the InquiryRequest
        $validatedData = $request->validated();

        // Save the inquiry data using the repository
        $created = $this->inquiryRepo->create($validatedData);

        if ($created) {
            $formDetails = [
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'phone' => $validatedData['phone'],
                'message' => $validatedData['message'],
                'products' => $validatedData['products'] ? json_decode($validatedData['products'], true) : [],
            ];

            // Send the email to the admin
            try {
                Mail::send('emails.product-form', compact('formDetails'), function ($message) use ($formDetails) {
                    $message->from('info@cmmstore.com', 'CMM Online Store')
                        ->to('info@cmmstore.com')
                        ->subject('Product Form Submission - ' . $formDetails['email']);
                });

                if (Cache::has('cart')) {
                    Cache::forget('cart');
                }

                return response()->json([
                    'status' => true,
                    'message' => 'Your form has been sent to the admin. Please wait for a response!',
                ]);
            } catch (\Exception $e) {
                return response()->json([
                    'status' => false,
                    'message' => 'Failed to send email: ' . $e->getMessage(),
                ], 500);
            }
        }

        // Return error response if data saving fails
        return response()->json([
            'status' => false,
            'message' => 'Failed to save inquiry details. Please try again later.',
        ], 500);
    }
}
