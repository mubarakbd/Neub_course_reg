<?php

namespace App\Repositories;

use App\Interfaces\IFacilitesRepository;
use App\Models\Facilities;

class FacilitesRepository extends BaseRepository implements IFacilitesRepository
{
    

    public function __construct(Facilities $model)
    {
        $this->model = $model;
    }

    
  public function FacilitiesCreate($request)
  {
  
try{
    if($request->hasFile('image')){  	
        $path = $request->file('image')->store('teacher_images', 'public');
    }else{
        $path =null;
    }

    $facilitis =$this->model;
    $facilitis->name =$request->name;
    $facilitis->email =$request->email;
    $facilitis->designation =$request->designation;
    $facilitis->phone = $request->phone;
    $facilitis->image =$path;
    $facilitis->save();
  }catch(\Throwable $th) {
    flash("Something is wrong")->error();
 }

}

  public function UpdateFacilities($request, $id)
  { 
     $facilitis = $this->model::find($id); 
     if(!$facilitis){
         return false;
     }
    $facilitis->name =$request->name;
    $facilitis->email =$request->email;
    $facilitis->phone =$request->phone;
    $facilitis->save();
    return true;
  }

}
