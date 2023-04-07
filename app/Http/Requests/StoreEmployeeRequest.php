<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
//        return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            "national_identity_number" =>"required|min:16|max:16|unique:users",
            "full_name" => "required|min:3|max:255",
            "full_address" => "required|max:255",
            "phone_number" => "required|min:11|max:13",
            "username" => "required|min:8|max:255|unique:users",
            "password" => "required|min:8|max:255",
        ];
    }
}
