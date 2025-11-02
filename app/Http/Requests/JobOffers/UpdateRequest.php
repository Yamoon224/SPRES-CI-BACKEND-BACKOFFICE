<?php

namespace App\Http\Requests\JobOffers;

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
            'company_id' => ['sometimes', 'exists:companies,id'],
            'title' => ['sometimes', 'string', 'max:150'],
            'description' => ['sometimes', 'string'],
            'contract_type' => ['sometimes', 'in:Permanent,Temporary,Internship,Freelance'],
            'location' => ['sometimes', 'string', 'max:150'],
            'salary' => ['sometimes', 'numeric', 'min:0'],
            'education_level' => ['sometimes', 'string', 'max:100'],
            'experience_required' => ['sometimes', 'string', 'max:100'],
            'posted_at' => ['sometimes', 'date'],
            'expires_at' => ['sometimes', 'date', 'after_or_equal:posted_at'],
            'status' => ['sometimes', 'in:active,expired,deleted'],
        ];
    }
}
