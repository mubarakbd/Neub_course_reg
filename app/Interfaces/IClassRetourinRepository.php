<?php

namespace App\Interfaces;

interface IClassRetourinRepository extends IBaseRepository
{
 public function CreateRoutine($request);

 public function UpdateRoutine($request,$id);
}
