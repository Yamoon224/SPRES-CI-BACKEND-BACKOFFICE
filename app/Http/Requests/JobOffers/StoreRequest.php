<?php

namespace App\Http\Requests\JobOffers;

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
            'company_id' => ['required', 'exists:companies,id'],
            'title' => ['required', 'string', 'max:150'],
            'description' => ['required', 'string'],
            'contract_type' => ['nullable', 'in:Permanent,Temporary,Internship,Freelance'],
            'location' => ['nullable', 'string', 'max:150'],
            'salary' => ['nullable', 'numeric', 'min:0'],
            'education_level' => ['nullable', 'string', 'max:100'],
            'experience_required' => ['nullable', 'string', 'max:100'],
            'posted_at' => ['nullable', 'date'],
            'expires_at' => ['nullable', 'date', 'after_or_equal:posted_at'],
            'status' => ['nullable', 'in:active,expired,deleted'],
        ];
    }
}
