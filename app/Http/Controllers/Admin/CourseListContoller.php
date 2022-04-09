<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourseList;
use App\Http\Requests\CourseListRequest;
use App\Imports\CourseDetalisImport;
use App\Interfaces\ICourselistRepository;
use App\Models\Coursedetalis;
use App\Models\CourseList as ModelsCourseList;
use App\Models\CourseOffer;
use App\Models\Gradpoint;
use App\Models\Group;
use App\Models\Semester;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CourseListContoller extends Controller
{
    protected $courselistRepo;

    public function __construct(ICourselistRepository $courselistRepo)
    {
        $this->courselistRepo = $courselistRepo;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        // $data['courselists'] = Coursedetalis::get();
        $data['courselists'] =$this->courselistRepo->get();
        return view("admin.courselist.index",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['semester_list'] = Semester::get();
        $data['gradlist'] = Gradpoint::get();
        $data['grouplist'] =Group::get();
        return view("admin.courselist.create",$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseListRequest $request)
    {
        
        // $courslists = new Coursedetalis();
        // $courslists->subject_id = $request->subject_id;
        // $courslists->subject_code_id = $request->subject_code_id;
        // $courslists->subject_credit_id = $request->subject_credit_id;
        // $courslists->save();
        $this->courselistRepo->CreateCourse($request);
        $notification =array(
            'message' => "Courses Information Insert Successfully",
            'alert-type' => "success"
        );
        return redirect("/admin/courselists")->with($notification);
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
        $courselist = $this->courselistRepo->find($id);
        if(!$courselist){
        flash("No item Found")->error();
        return redirect('/courselists');
        }
         $data['courselist'] =$courselist;
         return  view("admin.courselist.edit",$data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CourseListRequest $request, $id)
    {

        $this->courselistRepo->UpdateCourse($request,$id);
        // $courselist = Coursedetalis::find($id);
        // if(!$courselist){
        //     return redirect('/admin/courselists');
        // }
        // $courselist->subject_id =$request->subject_id;
        // $courselist->subject_code_id =$request->subject_code_id;
        // $courselist->subject_credit_id=$request->subject_credit_id;
        // $courselist->save();
        $notification =array(
            'message' => "Course List Updated Successfully",
            'alert-type' => "success"
        );
        return redirect("/admin/courselists")->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->courselistRepo->delete($id);
      $notification =array(
            'message' => "Course Delete Successfully",
            'alert-type' => "error"
        );
        return redirect("/admin/courselists")->with($notification);
    }

    public function Import(){
        return view("admin.courselist.courseimport");
    }

    public function Import_Form(Request $request){

        Excel::import(new CourseDetalisImport,$request->file);
        $notification =array(
            'message' => "Courses Information Upload Successfully",
            'alert-type' => "success"
        );
        return redirect("/admin/courselists")->with($notification);
        }
}

      