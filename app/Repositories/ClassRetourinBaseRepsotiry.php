<?php

namespace App\Repositories;

use App\Interfaces\IClassRetourinRepository;
use App\Models\ClassRoutine;

class ClassRetourinBaseRepsotiry extends BaseRepository implements IClassRetourinRepository
{
    

    public function __construct(ClassRoutine $model)
    {
        parent::__construct($model);
    }

 public function CreateRoutine($request)
 {
    try{
    $data = $this->model;
    $data->class_time =$request->class_time;
    $data->time = $request->time;
    $data->subject_id =$request->subject_id;
    $data->semester_id =$request->semester_id;
    $data->teacher_id =$request->teacher_id;

    $data->save();
    }catch(\Throwable $th) {
        flash("Something is wrong")->error();
     }
 }

 public function UpdateRoutine($request, $id)
 {
     

 }
 

}
