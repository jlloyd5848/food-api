<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FoodRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'barcode' => 'required|string|unique:foods,barcode,' . $this->food,
            'description' => 'required|string',
            'nutrition' => 'required|array',
            'nutrition.*.name' => 'required|string',
            'nutrition.*.value' => 'required|numeric',
            
        ];
    }
}
