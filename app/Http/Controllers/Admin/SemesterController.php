<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SemesterRequest;
use App\Interfaces\IsemesterRepositroy;
use App\Models\Semester;
use Illuminate\Http\Request;

class SemesterController extends Controller
{ 
    protected $semesterRepo;

    public function __construct(IsemesterRepositroy $semesterRepo)
    {
        $this->semesterRepo = $semesterRepo;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['semester_list'] = $this->semesterRepo->paginate();
        return view("admin.semester.index",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.semester.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SemesterRequest $request)
    {
        $this->semesterRepo->CreateSemester($request);
        $notification =array(
         'message' => "Semester Added Successfully",
         'alert-type' => "success"
     );
     return redirect("/admin/semesters")->with($notification);
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
       $semesters = $this->semesterRepo->find($id);
        if(!$semesters){
          return redirect('/admin/semesters');
        }
        $data["semesters"] = $semesters;
         return view("admin.semester.edit",$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SemesterRequest $request, $id)
    {
       $this->semesterRepo->UpdateSemester($request,$id);
        $notification =array(
            'message' => "semester Updated Successfully",
            'alert-type' => "success"
        );
        return redirect('/admin/semesters')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->semesterRepo->delete($id);
        $notification =array(
            'message' => "Group Delete Successfully",
            'alert-type' => "error"
        );
        return redirect('/admin/semesters')->with($notification);
    }
}
