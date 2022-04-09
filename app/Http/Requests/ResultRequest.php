<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResultRequest extends FormRequest
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
            'student_name' => 'required',
            'student_reg' =>'required',
            'group_id' =>'required',
            'semester_id' =>'required',
            'subject_id' => 'required',
            'subject_code'=>'required',
            'subject_credit'=>'required',
            'letter_grad' =>'required',
            'grad_point' =>'required',
        ];
    }
}
