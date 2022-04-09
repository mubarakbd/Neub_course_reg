<?php

namespace App\Repositories;

use App\Interfaces\IBaseRepository;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\PseudoTypes\False_;

class BaseRepository implements IBaseRepository
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }


   public function get()
   {
     return $this->model->get();
   }
   public function paginate()
   {
       return $this->model->paginate(6);
   }
 
   public function find($id)
   {
       $data = $this->model->find($id);
       if(!$data){
           flash("No Item Found")->error();
           return null;
       }else{
           return $data;
       }
   }
   public function delete($id)
   {
         $data =$this->find($id);
         if(!$data){
             flash('No Item Found')->error();
         }else{
             $data->delete();
         }
   }
}
