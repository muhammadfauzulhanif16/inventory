<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool {
//        return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array {
        return [
          "name" => "required|min:3|max:255",
          "category" => "required",
          "quantity" => "required|numeric|min:1",
          "unit" => "required",
          "capital" => "required|numeric|min:100",
          "selling_price" => "required|numeric|min:100",
          "supplier" => "required",
        ];
    }
}
