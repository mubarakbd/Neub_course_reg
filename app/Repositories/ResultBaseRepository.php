<?php

namespace App\Repositories;

use App\Interfaces\IResultBaseRepository;
use App\Models\Result as ModelsResult;


class ResultBaseRepository extends BaseRepository implements IResultBaseRepository
{
   

    public function __construct(ModelsResult $model)
    {
       parent::__construct($model);
    }

 
    public function CreatResultSheet($request)
    {
        try{
            $res = $this->model;
            $res ->student_name =$request->student_name;
            $res->student_reg =$request->student_reg;
            $res->group_id =$request->group_id;
            $res->letter_grad =$request->letter_grad;
            $res->grad_point =$request->grad_point;
            $res->semester_id =$request->semester_id;
            $res->subject_id = $request->subject_id;
            $res->subject_code = $request->subject_code;
            $res->subject_credit = $request->subject_credit;
            $res->save();
        }catch(\Throwable $th) {
            flash("Something is wrong")->error();
         }
    }

    public function UpdateResultSheet($request, $id)
    {  
        $results =$this->model::find($id);
        if(!$results){
            return false;
        }
        $results->student_name =$request->student_name;
        $results->student_reg =$request->student_reg;
        $results->save();

        return true;
    }

}
