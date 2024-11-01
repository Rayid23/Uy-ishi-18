<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdateRequest extends FormRequest
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
            'name' => 'max:255',
            'tr' => 'sometimes|integer|min:0',
        ];
    }

    public function messages(): array
    {
        return [
            'name.max' => 'Maksimal 255 harf kiriting!',
            'tr.integer' => 'tartib raqam son bolishi kerak',
            'tr.sometimes' => 'tartib raqam buttun son bo\'lishi kerak',
            'tr.min' => 'tartib raqam 0 dan kotta bolishi kerak'
        ];
    }
}
