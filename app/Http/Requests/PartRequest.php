<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class PartRequest extends FormRequest
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
            'name' => [
                'required',
                'string',
                // Rule::unique('parts', 'name')->ignore($this->route('part')),
            ],
            'title' => 'nullable|string',
            'probe_id' => 'required|array',
            'price' => 'required|numeric|min:0',
            'discount' => 'required|numeric|min:0|max:100',
            'status' => 'nullable',
            'upgrade_to' => 'nullable',
            'part_category_id' => 'nullable',
            'module' => 'nullable'
        ];
    }
}
