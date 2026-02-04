<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateCourseRequest extends FormRequest
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
            'name' => 'required|max:255|unique:courses,name,' . $this->route('course'),
            'active' => 'required|in:1,2',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'name is required',
            'name.unique' => 'name already exists',
            'name.max' => 'name is too long',
            'active.required' => 'active is required',
            'active.boolean' => 'active must be true or false',
        ];
    }
}
