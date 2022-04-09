<?php

namespace App\Repositories;

use App\Interfaces\IGroupBaseRepository;
use App\Models\Group;

class GropuRepository extends BaseRepository implements IGroupBaseRepository
{
 

    public function __construct(Group $model)
    {
       parent::__construct($model);
    }
  
     public function CrateGroup($request)
     {
        $groups = $this->model;
        $groups->group_name = $request->group_name;
        $groups->program_name =$request->program_name;
        $groups ->save();
     }

     public function UpdateGroup($request, $id)
     {
         $groups = $this->model->find($id);
        if(!$groups){
          return false;
        }
        $groups->group_name =$request->group_name;
        $groups->program_name=$request->program_name;
        $groups->save();
        return true;
       
        }

   
}
