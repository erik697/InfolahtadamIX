<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WherehouseUpdateRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:200'],
            'user_id' => ['nullable', 'integer', 'exists:users,id'],
            'deleted_at' => ['nullable'],
        ];
    }
}
