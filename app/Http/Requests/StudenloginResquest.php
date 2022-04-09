<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudenloginResquest extends FormRequest
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
            'name' =>'required',
            'email' =>'required|unique:students,email',
            'reg_no' =>'required|unique: students,reg_no',
            'department' =>'required',
            'program' =>'required',
            'moblie' =>'required|digits:11',
            'password'=>"required",
        ];
    }
}
