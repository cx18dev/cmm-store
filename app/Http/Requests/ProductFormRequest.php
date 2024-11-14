<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Allow the request (true) for now. You can add your authorization logic here if needed.
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|numeric|min:10',
            'details' => 'required|min:10',
            'selectedProducts' => 'required|array',
        ];
    }

    /**
     * Get the custom validation messages for the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Please enter your name.',
            'name.min' => 'Your name must be at least 3 characters long.',
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'phone.required' => 'Please enter your phone number.',
            'phone.numeric' => 'Please enter a valid phone number.',
            'phone.min' => 'Phone number must be at least 10 digits long.',
            'details.required' => 'Please enter some details.',
            'details.min' => 'Details must be at least 10 characters long.',
            'selectedProducts.required' => 'Please select at least one product.',
            'selectedProducts.array' => 'Selected products must be an array.',
        ];
    }
}
