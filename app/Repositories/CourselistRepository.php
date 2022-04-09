<?php

namespace App\Repositories;

use App\Interfaces\ICourselistRepository;
use App\Models\Coursedetalis;

class CourselistRepository extends BaseRepository implements ICourselistRepository
{
  

    public function __construct(Coursedetalis $model)
    {
        parent::__construct($model);
    }

    public function CreateCourse($request)
    {
        try{
         $courslists = $this->model;
        $courslists->subject_name = $request->subject_name;
        $courslists->subject_code = $request->subject_code;
        $courslists->subject_credit = $request->subject_credit;
        $courslists->save();
        }catch(\Throwable $th) {
            flash("Something is wrong")->error();
         }
    }

    public function UpdateCourse($request, $id)
    {
       $courselist = $this->model::find($id);
        if(!$courselist){
            return false;
        }
        $courselist->subject_name =$request->subject_name;
        $courselist->subject_code =$request->subject_code;
        $courselist->subject_credit=$request->subject_credit;
        $courselist->save();
        return true;
    }


}
