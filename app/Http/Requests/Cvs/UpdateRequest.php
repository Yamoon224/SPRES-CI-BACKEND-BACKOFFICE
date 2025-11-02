<?php

namespace App\Http\Requests\Cvs;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'user_id' => ['sometimes', 'exists:users,id'],
            'title' => ['sometimes', 'string', 'max:255'],
            'file_path' => ['sometimes', 'file', 'mimes:pdf,doc,docx', 'max:5120'],
            'description' => ['nullable', 'string'],
        ];
    }
}
