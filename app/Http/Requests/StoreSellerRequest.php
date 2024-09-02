<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSellerRequest extends FormRequest
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
            'firstname' => 'required',
            'lastname' => 'required',
            'mobileno' => 'required',
            'email' => 'required',
            'businessname' => 'required',
            'establishdate' => 'required',
            'activities' => 'required',
            // 'registration_number' => 'required|unique:sellers',
            // 'vatno' => 'required',
            'address1' => 'required',
            'password' => 'required',
            // 'address2' => 'required',
            'postaladdress' => 'nullable|numeric', 
            'registration_documents' => 'required|mimes:jpg,jpeg,png',
            'company_logo' => 'required|mimes:jpg,jpeg,png',
            'vat_registration_documents' => 'required|mimes:pdf,jpg,jpeg,png',
        ];
    }
}
