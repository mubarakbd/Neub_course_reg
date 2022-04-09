<?php

namespace App\Interfaces;

interface IsemesterRepositroy extends IBaseRepository
{
    public function CreateSemester($request);
    public function UpdateSemester($request,$id);

}
