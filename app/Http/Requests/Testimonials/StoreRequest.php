<?php

namespace App\Http\Requests\Testimonials;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'user_id' => ['nullable', 'exists:users,id'],
            'content' => ['required', 'string', 'max:16383'],
            'rating' => ['nullable', 'integer', 'between:1,5'],
        ];
    }
}
