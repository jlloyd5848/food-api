<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MealCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'name'=>'string|required|unique:meal_categories'
            
        ];
    }
}
