<?php

namespace App\Http\Requests\Applications;

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
            'job_offer_id' => ['required', 'exists:job_offers,id'],
            'user_id' => ['required', 'exists:users,id'],
            'cv_url' => ['required', 'string'],
            'status' => ['nullable', 'string', 'in:submitted,accepted,rejected'],
        ];
    }
}
