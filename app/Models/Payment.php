<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function semesters(){
        return $this->belongsTo(Semester::class,'semester_id','id');
      }
}
