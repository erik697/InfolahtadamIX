<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApiServiceStoreRequest extends FormRequest
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
            'username' => ['required', 'string', 'max:200'],
            'api_key' => ['required', 'string', 'max:256'],
            'deleted_at' => ['nullable'],
        ];
    }
}
