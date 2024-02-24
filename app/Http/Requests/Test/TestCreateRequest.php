<?php

namespace App\Http\Requests\Test;

use Illuminate\Foundation\Http\FormRequest;

class TestCreateRequest extends FormRequest
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
            'full_name' => ['required', 'string', 'max:255'],
            'test_date' => ['required', 'string'],
            'location' => ['required', 'string', 'max:255'],
            'score' => ['sometimes', 'nullable', 'integer'],
            'criterion' => ['sometimes', 'nullable', 'integer'],
            'manager_id' => ['required', 'integer', 'exists:users,id']
        ];
    }
}
