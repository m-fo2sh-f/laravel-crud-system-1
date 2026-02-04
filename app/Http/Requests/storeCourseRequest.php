<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeCourseRequest extends FormRequest
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
            'name' => 'required|unique:courses,name|max:255',
            'active' => 'required|boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'name is required',
            'name.unique' => 'name already exists',
            'name.max' => 'name is too long',
            'active.required' => 'State is required',
            'active.boolean' => 'State must be active or disabled',
        ];
    }
}
