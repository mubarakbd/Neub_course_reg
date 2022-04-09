<?php

namespace App\Interfaces;

interface ICourseOfferRepository extends IBaseRepository
{
 public function CreateCoruseOffer($request);
 public function UpdateCourseOffer($request,$id);
}
