<?php

namespace App\Interfaces;

interface ICourselistRepository extends IBaseRepository
{
    public function CreateCourse($request);
    public function UpdateCourse($request,$id);
}
