<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourseOfferRequest;
use App\Imports\CourseDetalisImport;
use App\Interfaces\ICourseOfferRepository;
use App\Models\Coursedetalis;
use App\Models\CourseList;
use App\Models\CourseOffer;
use App\Models\CourseRegistarion;
use App\Models\Facilities;
use App\Models\Gradpoint;
use App\Models\Group;
use App\Models\Semester;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CourseOfferContoller extends Controller
{
    // protected $courseofferRepo;

    // public function __construct(ICourseOfferRepository $courseofferRepo)
    // {
    //     $this->courseofferRepo = $courseofferRepo;
    // }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {   
        
        // $data['courseofferlist'] = CourseOffer::get();
        // //   $data['courseofferlist'] =$this->courseofferRepo->get();
        // $data['courseofferlist'] = CourseOffer::select('semester_id')->groupBy('semester_id')->get();
        $data['courseofferlist'] = CourseOffer::get();
        return view("admin.courseoffer.index",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        $data['teacher_list'] = Facilities::get();
        $data['semester_list'] = Semester::get();
        $data['courselist'] = Coursedetalis::get();
        return view("admin.courseoffer.create",$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseOfferRequest $request)
    {
        $subjectCount = count($request->subject_id);
	    	if ($subjectCount !=NULL) {
	    		for ($i=0; $i <$subjectCount ; $i++) { 
	    			$courseoffer = new CourseOffer();
	    			$courseoffer->semester_id = $request->semester_id;
	    			$courseoffer->subject_id = $request->subject_id[$i];
	    			$courseoffer->subject_code = $request->subject_code[$i];
	    			$courseoffer->subject_credit= $request->subject_credit[$i];
                    $courseoffer->teacher_id =$request->teacher_id[$i];
	    			$courseoffer->save();
                       
	    		} // End For Loop
	    	}// End If Condition
        // $this->courseofferRepo->CreateCoruseOffer($request);
       

            $notification =array(
                'message' => "Courses Information Insert Successfully",
                'alert-type' => "success"
            );
            return redirect("/admin/coursoffers")->with($notification);
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
      
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CourseOfferRequest $request, $semeser_id)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $courseoffers = CourseOffer::find($id);
        if(!$courseoffers){
          return redirect('/coursoffers');
        }
        $courseoffers->delete();
    $notification =array(
            'message' => "Course Delete Successfully",
            'alert-type' => "error"
        );
        return redirect("/admin/coursoffers")->with($notification);
     }


    

    public function DetalisCourse($semeser_id){
        $data['courseofferlist'] = CourseOffer::Where('semester_id',$semeser_id)->orderby('semester_id')->get();
        return view("admin.courseoffer.coursedetalis",$data);
    
    }

    public function showcourseoffers(){
        $data['courseofferlist']=CourseOffer::get();
        return view("site.notice.courseoffer",$data);
    }
   
   
      
}
