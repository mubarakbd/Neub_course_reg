<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coursedetalis extends Model
{
    protected $table ="coursedetalis";
    protected $fillable =['subject_name','subject_code','subject_credit'];
}
