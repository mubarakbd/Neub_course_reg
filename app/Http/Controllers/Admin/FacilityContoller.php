<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FacilitiesRequest;
use App\Interfaces\IFacilitesRepository;
use App\Models\Facilities;
use Illuminate\Http\Request;

class FacilityContoller extends Controller
{
    protected $faciliRepo;

    public function __construct(IFacilitesRepository $faciliRepo)
    {
        $this->faciliRepo = $faciliRepo;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        // $data['teacher_list'] = Facilities::get();
        $data['teacher_list'] =$this->faciliRepo->get();
        return view("admin.teacher.index",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.teacher.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FacilitiesRequest $request)
    {
      $this->faciliRepo->FacilitiesCreate($request);

        

        $notification =array(
            'message' => "Facility Information Insert Successfully",
            'alert-type' => "success"
        );
        return redirect("/admin/facilitis")->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
       
        $facilitis = $this->faciliRepo->find($id);
        if(!$facilitis){
          return redirect('/facilitis');
        }
        $data['facilitis'] = $facilitis;
        return view("admin.teacher.edit",$data);
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FacilitiesRequest $request, $id)
    {
        $this->faciliRepo->UpdateFacilities($request,$id);
     
        // $facilitis->name =$request->name;
        // $facilitis->email =$request->email;
        // $facilitis->phone =$request->phone;
        // $facilitis->save();
        $notification =array(
            'message' => "Facilitis Information  Updated Successfully",
            'alert-type' => "success"
        );
        return redirect('/admin/facilitis')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $this->faciliRepo->delete($id);
       $notification =array(
            'message' => " Delete Successfully",
            'alert-type' => "error"
        );
        return redirect('/admin/facilitis')->with($notification);
    }
}
