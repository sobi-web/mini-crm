<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class CustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
//    public function authorize(): bool
//    {
//        return false;
//    }
//
//    /**
//     * Get the validation rules that apply to the request.
//     *
//     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
//     */
   public function rules(): array
    {
        return [
            'name' => ['required', 'max:255' , 'min:3'],
            'last_name' => ['required', 'max:255' , 'min:3'],
            'email' => ['required', 'email',  Rule::unique('customers', 'email')->ignore($this->route()->customer)],
            'phone' => ['required', 'digits:11', Rule::unique('customers', 'phone')->ignore($this->route()->customer)],
            'card_number' => ['nullable' , 'digits:16'],
            'about' => [] ,

        ];
    }
//   public function messages(): array {
//     return [
//         'name.required' => 'ایننننننن',
//     ];
//    }
}

