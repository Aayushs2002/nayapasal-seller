<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'product_name' => 'required',
            // 'product_name' => 'required|unique:products,product_name',
            'featured_image' => 'required',
            // 'brand' => 'required',
            'category' => 'required',
            'product_order' => 'numeric',
            'product_price' => 'required|numeric',
            'product_stock' => 'required|numeric',
            'discount_amount' => 'nullable|numeric',
            'description' => 'required',
            // 'attributes' => 'required|array',
        ];
    }
}
