<?php

namespace App\Repositories;

use App\Interfaces\IExamRepository;
use App\Models\Exam;

class ExamRepostiory  extends BaseRepository implements IExamRepository
{
    

    public function __construct(Exam $model)
    {
        parent::__construct($model);
    }

   
     public function ExamCresate($request)
     {
         try{
            $exam = $this->model;
            $exam->semester_id =$request->semester_id;
            $exam->subject_id =$request->subject_id;
            $exam->exam_date =$request->exam_date;
            $exam->time =$request->time;
            $exam->room=$request->room;
            $exam->save();
         }catch(\Throwable $th) {
            flash("Something is wrong")->error();
         }
     }

     public function ExamUpdate($request, $id)
     {
        $exam = $this->model::find($id);
        if(!$exam){
          return false;
        }
        $exam->exam_date =$request->exam_date;
        $exam->time =$request->time;
        $exam->room =$request->room;
        $exam->save(); 
        return true;
     }

}
