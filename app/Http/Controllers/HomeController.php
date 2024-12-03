<?php

namespace App\Http\Controllers;

use App\Helpers\CartHelper;
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
        // Sample array of products with parts
        $cartItems = [
            [
                'name' => 'PH10M-PLUS',
                'image' => 'https://cmmstore.com/assets/probes/PH10M/G2-PH10M.jpg',
                'parts' => [
                    ['code' => 'A-5863-5000', 'quantity' => 1, 'price' => 20.00, 'discount' => '20%'],
                    ['code' => 'B-5863-4000', 'quantity' => 2, 'price' => 15.00, 'discount' => '20%'],
                    ['code' => 'C-5863-3000', 'quantity' => 1, 'price' => 10.00, 'discount' => '20%'],
                ],
            ],
            [
                'name' => 'PH10T-PLUS',
                'image' => 'http://cmm-store.local/assets/probes/PH10T/G1-PH10T.jpg',
                'parts' => [
                    ['code' => 'D-5863-2000', 'quantity' => 3, 'price' => 25.00, 'discount' => '20%'],
                    ['code' => 'E-5863-1000', 'quantity' => 1, 'price' => 50.00, 'discount' => '20%'],
                ],
            ],
        ];

        return view('cart', compact('cartItems'));
    }

    public function savePartSelection(Request $request)
    {
        $part = $request->input('part');
        $isChecked = $request->input('isChecked');

        // Retrieve the cart from cache or create a new cart if it doesn't exist
        $cart = Cache::get('cart', []);

        // If the part is checked, add it to the cart, else remove it
        if ($isChecked) {
            // Add part to cart
            $cart[] = $part;
        } else {
            // Remove part from cart
            $cart = array_filter($cart, function ($item) use ($part) {
                return $item['code'] !== $part['code'];  // Filter out the unchecked part
            });
            $cart = array_values($cart); // Reindex array after filter
        }

        // Save the updated cart back to cache
        Cache::put('cart', $cart);

        return response()->json([
            'status' => 'success',
            'message' => 'Part selection saved successfully',
            'cart' => $cart,
        ]);
    }

    public function probes($category, $slug = null, $childCategory = null)
    {
        $viewPath = null;
        $data = [];

        if ($category && !$slug && !$childCategory) {
            $viewPath = "categories.$category";
        } elseif ($category && $slug && !$childCategory) {
            $data['parts'] = $this->probeRepo->getPartsByProbeSlug($slug);
            $viewPath = "probes.$slug";
        }
        // elseif ($category && $subCategory && $childCategory) {
        //     $viewPath = "childcategories.$childCategory";
        //     // $data['parts'] = $this->partRepo->showAll();
        // }

        $data['probeLinks'] = $this->probeRepo->all()->map(function($probe){
            return [
                'name' => $probe['name'],
                'slug' => $probe['slug'],
            ];
        });

        if ($viewPath && View::exists($viewPath)) {
            return view($viewPath, $data);
        }

        abort(404, "View not found or invalid category path.");
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
