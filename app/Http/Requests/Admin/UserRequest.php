<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
    public function rules()
    {
        return [
            'name' => ['required'],
            'phone' => ['required'],
            'email' => ['bail', 'required', 'max:255', 'unique:users'],
            'birthday' => ['required'],
            'gender' => ['bail', 'required', 'numeric', 'min:0', 'max:1'],
            'address' => ['required'],
            'role' => ['bail', 'required', 'numeric', 'min:2', 'max:4'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is require',
            'phone.required' => 'Phone number is require',
            'email.required' => 'Email is require',
            'email.max' => 'Email is invalid!',
            'email.unique' => 'Email is exist!',
            'birthday.required' => 'Birthday is require',
            'gender.required' => 'Please choose a gender',
            'gender.numeric' => 'Gender is invalid',
            'gender.min' => 'Gender is invalid',
            'gender.max' => 'Gender is invalid',
            'address.required' => 'Address is require',
            'role.required' => 'Role is require',
            'role.numeric' => 'Role is invalid',
            'role.min' => 'Role is invalid',
            'role.max' => 'Role is invalid',
        ];
    }
}
