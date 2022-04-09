<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ResultRequest;
use App\Interfaces\IResultBaseRepository;
use App\Models\Coursedetalis;
use App\Models\CourseRegistarion;
use App\Models\Gradpoint;
use App\Models\Group;
use App\Models\Result;
use App\Models\Semester;
use App\Models\User;
use Illuminate\Http\Request;

class ResultInfocontroller extends Controller
{
    protected $ResultRepo;

    public function __construct(IResultBaseRepository $ResultRepo)
    {
        $this->ResultRepo = $ResultRepo;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $data['resultlist'] = Result::get();
        // $data['resultlist'] = $this->ResultRepo->get();
      return view("admin.resultinfo.index",$data);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        $data['grouplist'] = Group::get();
        $data['course_reglist'] = CourseRegistarion::get();
        $data['semester_list'] = Semester::get();
        $data['courselist'] =Coursedetalis::get();
        $data['gradlist'] = Gradpoint::get();
        return view('admin.resultinfo.credit',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ResultRequest $request)
    { 
        
       $this->ResultRepo->CreatResultSheet($request);
        $notification =array(
            'message' => "Courses Information Insert Successfully",
            'alert-type' => "success"
        );
        return redirect("/admin/resultinfos")->with($notification);

   

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
        $results = $this->ResultRepo->find($id);
        if(!$results){
          return redirect('/resultinfos');
        }

        $data['semester_list'] =Semester::get();
        $data['gradlist'] = Gradpoint::get();
        $data['courselist'] =Coursedetalis::get();
        $data['grouplist'] =Group::get();
        $data['results'] = $results;
        return view("admin.resultinfo.edit",$data);
       
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
        $this->ResultRepo->UpdateResultSheet($request, $id);
        // if(!$results){
        //   return redirect('/resultinfos');
        // }
        
       
        $notification =array(
            'message' => "Result Rotuin  Updated Successfully",
            'alert-type' => "success"
        );
        return redirect('/admin/resultinfos')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $this->ResultRepo->delete($id);
    $notification =array(
            'message' => "Result Delete Successfully",
            'alert-type' => "error"
        );
        return redirect("/admin/resultinfos")->with($notification);
    }
 

    public function showresult(){
        $data['resultlist'] = $this->ResultRepo->get();
        return view("site.notice.result_notice",$data);
    }
}
