<?php

namespace App\Interfaces;

interface IFacilitesRepository extends IBaseRepository
{
  public function FacilitiesCreate($request);

  public function UpdateFacilities($request ,$id);
}
