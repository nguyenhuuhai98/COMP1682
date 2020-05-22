<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class VoucherRequest extends FormRequest
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
            'voucher_code' => ['bail', 'required', 'unique:vouchers'],
            'discount' => ['required'],
            'unit' => ['required'],
            'description' => ['required'],
            'end_date' => ['required'],
        ];
    }
}
