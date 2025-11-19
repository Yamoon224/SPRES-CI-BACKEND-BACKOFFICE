<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        // Si ta route est du type /users/{user}
        // $this->route('user') retourne l'ID ou le modèle User
        $userId = $this->route('user');

        return [
            'full_name' => ['sometimes', 'string', 'max:255'],

            'email' => [
                'sometimes',
                'email',
                'max:150',
                'unique:users,email,' . $userId
            ],

            'phone' => ['sometimes', 'string', 'max:30'],

            'password' => ['nullable', 'string', 'min:6', 'max:255'],

            'status' => ['nullable', 'in:ENABLE,DISABLE'], // ENUM

            'locale' => ['nullable', 'string', 'max:4'],

            'role' => ['nullable', 'in:candidate,recruiter,admin'], // ENUM

            'company_id' => ['nullable', 'integer', 'exists:companies,id'],
        ];
    }
}
