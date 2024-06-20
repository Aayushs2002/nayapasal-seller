<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePaymentDetail extends FormRequest
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
            // 'bank_name' => 'required',
            'account_number' => 'nullable|numeric',
            // 'account_holder_name' => 'required',
            'bank_Qr' =>'required',
            'esewa_id' => "",
            'esewa_Qr' => "",
            'khalti_id' => "",
            'khalti_Qr' => ""
        ];
    }
}
