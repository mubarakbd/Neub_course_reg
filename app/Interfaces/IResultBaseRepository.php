<?php

namespace App\Interfaces;

interface IResultBaseRepository extends IBaseRepository
{
  public function CreatResultSheet($request);

  public function UpdateResultSheet($request ,$id);

}
