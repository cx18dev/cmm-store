<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ProductFormSubmission;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;
use App\Http\Requests\ProductFormRequest;

class HomeController extends Controller
{
    public function probes()
    {
        return redirect()->to('CMM/3-axis-systems');
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
        Mail::to('admin@example.com')->send(new ProductFormSubmission($formDetails));

        // Return a response (success message)
        return response()->json([
            'status' => true,
            'message' => 'Your form has been sent to the admin. Please wait for a response!'
        ]);
    }

    public function category($category, $subCategory = null, $childCategory = null)
    {
        if ($category && is_null($subCategory) && is_null($childCategory)) {
            $viewPath = "categories.$category";
        } elseif ($category && $subCategory && is_null($childCategory)) {
            $viewPath = "subcategories.$subCategory";
        } else {
            $viewPath = "childcategories.$childCategory";
        }

        if (View::exists($viewPath)) {
            return view($viewPath);
        } else {
            abort(404, "View not found: $viewPath");
        }
    }
}
