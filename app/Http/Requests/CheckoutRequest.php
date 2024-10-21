<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
            'country'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'governorate'=>'required',
            'city'=>'required',
            'address'=>'required',
            'apartment'=>'required',
            'email'=>'required|email',
            'phone'=>'required|max:11|min:11|unique:checkouts,phone',
            'notes'=>''
            
            
            
        ];
    }
}
