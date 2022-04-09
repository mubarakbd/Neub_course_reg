<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coursedetalis;
use App\Models\CourseRegistarion;
use Illuminate\Http\Request;

class StudentRegistarionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data['reglist'] = CourseRegistarion::select('student_reg')->groupBy('student_reg')->get();
        $data['reglist'] =CourseRegistarion::get();
        return view("admin.couresregform.index",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        // $coursreg_form = CourseRegistarion::Where('student_reg', $id)->orderby('student_reg','asc')->get();
        // if(!$coursreg_form){
        //   return redirect('/coursreg_form');
        // }
        // $data['coursreg_form'] = $coursreg_form;
        //  return view("admin.couresregform.edit",$data);
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reglist = CourseRegistarion::find($id);
        if(!$reglist){
          return redirect('/coursreg_form');
        }
        $reglist->delete();
    $notification =array(
            'message' => "Course Delete Successfully",
            'alert-type' => "error"
        );
        return redirect("/admin/coursreg_form")->with($notification);
    }
  
    public function DetalisCourseReg($student_reg){
         
        $data['coursereglist'] = CourseRegistarion::Where('student_reg',$student_reg)->orderby('student_reg')->get();
    
        return view("admin.couresregform.coursedetalis",$data);
    }
   
}
