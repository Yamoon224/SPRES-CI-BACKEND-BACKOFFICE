<?php

namespace App\Http\Requests\Users;

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
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:150', 'unique:users,email'],
            'phone' => ['required', 'string', 'max:30'],
            'password' => ['required', 'string', 'min:6', 'max:255'],

            'status' => ['nullable', 'in:ENABLE,DISABLE'], // ENUM
            'locale' => ['nullable', 'string', 'max:4'],

            'role' => ['nullable', 'in:candidate,recruiter,admin'], // ENUM

            'company_id' => ['nullable', 'integer', 'exists:companies,id'],
        ];
    }
}
