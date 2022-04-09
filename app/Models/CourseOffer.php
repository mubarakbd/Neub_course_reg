<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseOffer extends Model
{



  public function coursedetalis(){
  return $this->belongsTo(Coursedetalis::class,'subject_id');
  // return $this->belongsTo(Coursedetalis::class,'subject_code_id','id');
  // return $this->belongsTo(Coursedetalis::class,'subject_credit_id','id');

  
}

public function facilities(){
  return $this->belongsTo(Facilities::class,'teacher_id','id');
}

public function semesters(){
  return $this->belongsTo(Semester::class,'semester_id','id');
}

}
