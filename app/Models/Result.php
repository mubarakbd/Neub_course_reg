<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    public function coursedetalis(){
        return $this->belongsTo(Coursedetalis::class,'subject_id','id');
        // return $this->belongsTo(Coursedetalis::class,'subject_code_id','id');
        // return $this->belongsTo(Coursedetalis::class,'subject_credit_id','id');
      
      }





      public function semesters(){
        return $this->belongsTo(Semester::class,'semester_id','id');
      }
      public function coursereg(){
        return $this->belongsTo(CourseRegistarion::class,'semester_id','id');
      }
      public function groups(){
        return $this->belongsTo(Group::class,'group_id','id');
      }
      public function gradpoints(){
        return $this->belongsTo(Gradpoint::class,'letter_grad','id');
        // return $this->belongsTo(Gradpoint::class,'grad_point','id');
      }
      
}
