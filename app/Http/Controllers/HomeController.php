<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ProductFormSubmission;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;
use App\Repositories\PartRepository;
use App\Repositories\CategoryRepository;
use App\Http\Requests\ProductFormRequest;
use App\Repositories\ProbeRepository;

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

    public function probes($category, $subCategory = null, $childCategory = null)
    {
        $viewPath = null;
        $data = [];

        if ($category && !$subCategory && !$childCategory) {
            $viewPath = "categories.$category";
        } elseif ($category && $subCategory && !$childCategory) {
            $data['parts'] = $this->probeRepo->getPartsByProbeSlug($subCategory);
            $viewPath = "probes.$subCategory";
        }
        // elseif ($category && $subCategory && $childCategory) {
        //     $viewPath = "childcategories.$childCategory";
        //     // $data['parts'] = $this->partRepo->showAll();
        // }

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
