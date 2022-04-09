<?php

namespace App\Interfaces;

interface IGroupBaseRepository extends IBaseRepository
{
 public function CrateGroup($request);
 public function UpdateGroup($request,$id);
}
