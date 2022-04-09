<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseRegistarion extends Model
{
 
    public function course_offers(){
        return $this->belongsTo(Coursedetalis::class,'course_id','id');
      }
      
      public function semesters(){
        return $this->belongsTo(Semester::class,'semester_id','id');
      }

}
