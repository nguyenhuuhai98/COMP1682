<?php

namespace App\Http\Requests\Admin;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $request)
    {
        return [
            'name' => ['required'],
            'parent_id' => ['required'],
            'description' => ['bail', 'required', 'max:255'],
            'logo' => ['bail', 'nullable', 'mimes:jpg,jpeg,png,gif,svg', 'max:2048'],
            'image' => ['bail', 'nullable', 'mimes:jpg,jpeg,png,gif,svg', 'max:2048'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is require',
            'parent_id.required' => 'Parent Category is require',
            'description.required' => 'Description is require',
            'description.max' => 'Description is too long',
            'logo.mimes' => 'Logo is invalid',
            'logo.max' => 'File is too long',
            'image.mimes' => 'Image is invalid',
            'image.max' => 'File is too long',
        ];
    }
}
