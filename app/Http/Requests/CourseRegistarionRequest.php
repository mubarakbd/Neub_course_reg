<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRegistarionRequest extends FormRequest
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
            'student_name' =>'required',
            'student_reg' =>'required|unique:course_registarions,student_reg',
            'group_id' =>'required',
            'semester_id' => 'required',
            'course_id' => 'required',
            'course_code' => 'required',
            'course_credit'=> 'required',
        ];
    }
}
