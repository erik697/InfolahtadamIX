<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonelStoreRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:200'],
            'nrp' => ['required', 'string', 'max:200'],
            'position_id' => ['required', 'integer', 'exists:positions,id'],
            'status' => ['required', 'in:Active,Nonactive'],
            'period_start' => ['required'],
            'period_end' => ['required'],
            'deleted_at' => ['nullable'],
        ];
    }
}
