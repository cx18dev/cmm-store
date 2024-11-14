<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ProductFormSubmission;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ProductFormRequest;

class HomeController extends Controller
{
    public function probes()
    {
        return view('probes');
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
}
