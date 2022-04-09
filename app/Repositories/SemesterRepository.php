<?php

namespace App\Repositories;

use App\Interfaces\IsemesterRepositroy;
use App\Models\Semester;

class SemesterRepository extends BaseRepository implements IsemesterRepositroy
{

    public function __construct(Semester $model)
    {
        parent::__construct($model);
    }

   public function CreateSemester($request){
    try{
        $semester = $this->model;
        $semester->semester_name = $request->semester_name;
        $semester ->save();
        // flash("Semester Added Successfully")->success();
    }catch(\Throwable $th) {
       flash("Something is wrong")->error();
    }
   }
   public function UpdateSemester($request,$id){
    $semesters = $this->model;
    if($semesters){
        return false;
    }
    $semesters->semester_name = $request->semester_name;
    $semesters ->save();
    return true;
   }
}
