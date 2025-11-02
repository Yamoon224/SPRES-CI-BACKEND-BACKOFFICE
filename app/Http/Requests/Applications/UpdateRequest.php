<?php

namespace App\Http\Requests\Applications;

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
            'cv_path' => ['sometimes', 'file', 'mimes:pdf,doc,docx', 'max:5120'],
            'status' => ['sometimes', 'string', 'in:pending,accepted,rejected'],
        ];
    }
}
