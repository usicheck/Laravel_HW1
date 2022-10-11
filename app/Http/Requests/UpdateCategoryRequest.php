<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check() && auth()->user()->is_admin;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $categoryId=$this->route('category')->id;

        return [
            'name' => ['required', 'string','min:2', 'max:50', Rule::unique('categories','name')->ignore($categoryId)],
            'description' => ['nullable', 'string', 'max:250']
        ];
    }
}
