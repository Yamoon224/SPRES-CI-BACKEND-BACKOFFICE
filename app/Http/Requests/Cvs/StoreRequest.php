<?php

namespace App\Http\Requests\Cvs;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Ajuste si tu veux restreindre par rôle
    }

    public function rules(): array
    {
        return [
            'user_id' => ['required', 'exists:users,id'],
            'title' => ['required', 'string', 'max:255'],
            'file_path' => ['required', 'file', 'mimes:pdf,doc,docx', 'max:5120'], // max 5 Mo
            'description' => ['nullable', 'string'],
        ];
    }
}
