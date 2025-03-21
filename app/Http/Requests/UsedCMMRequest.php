<?php

namespace App\Http\Requests;

use App\Models\UsedCMM;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class UsedCMMRequest extends FormRequest
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

        $imageRule = $this->isMethod('post')
            ? ['required', 'image']  // Image required for store method
            : ['nullable', 'image'];

        return [
            'cmm_name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'stock_number' => 'required',
            'measuring_range' => 'required',
            'software' => 'required',
            'probe_head' => 'required',
            'touch_probe' => 'required|string',
            'availablility' => 'nullable|string',
            'pc' => 'required|array|min:1',
            'pc.*' => 'required|string|max:255', 
            'image' => $imageRule ,
        ];
    }
}
