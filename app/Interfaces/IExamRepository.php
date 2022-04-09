<?php

namespace App\Interfaces;

interface IExamRepository extends IBaseRepository
{
  
 public function ExamCresate($request);
 public function ExamUpdate($request,$id);

}
