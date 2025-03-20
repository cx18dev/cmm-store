<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CmmQuoteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:15',
            'company_name' => 'required|string|max:255',
            'cmm_name' => 'required', // Assuming cmm_names is the table
            'cmm_stock_number' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ];
    }
}
