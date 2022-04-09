<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseOfferRequest extends FormRequest
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
            'semester_id' => 'required|unique:course_offers,semester_id',
            'subject_id' => 'required',
            'subject_code' => 'required',
            'subject_credit'=> 'required',
            'teacher_id' => 'required'
        
        ];
    }
}
