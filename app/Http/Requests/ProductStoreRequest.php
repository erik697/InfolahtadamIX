<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'category_product_id' => ['required', 'integer', 'exists:category_products,id'],
            'wherehouse_id' => ['required', 'integer', 'exists:wherehouses,id'],
            'serial_number' => ['required', 'string', 'max:256'],
            'status' => ['required', 'in:B,RR,RB'],
            'deleted_at' => ['nullable'],
            'year' => ['nullable'],
            'name' => ['nullable'],
            'description' => ['nullable'],
        ];
    }
}
