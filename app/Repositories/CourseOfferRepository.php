<?php

namespace App\Repositories;

use App\Interfaces\ICourseOfferRepository;
use App\Models\CourseOffer;

class CourseOfferRepository extends BaseRepository implements ICourseOfferRepository
{
    

    public function __construct(CourseOffer $model)
    {
        parent::__construct($model);
    }


  public function CreateCoruseOffer($request)
  {
     
        // $subjectCount = count($request->subject_id);
        // if ($subjectCount !=NULL) {
        //     for ($i=0; $i <$subjectCount ; $i++) { 
        //         $courseoffer = $this->model;
        //         $courseoffer->semester_id = $request->semester_id;
        //         $courseoffer->subject_id = $request->subject_id[$i];
        //         $courseoffer->subject_code = $request->subject_code[$i];
        //         $courseoffer->subject_credit_id = $request->subject_credit[$i];
        //         $courseoffer->save();

        //     } // End For Loop
        // }
    
  }

  public function UpdateCourseOffer($request, $id)
  {
      
  }
}
