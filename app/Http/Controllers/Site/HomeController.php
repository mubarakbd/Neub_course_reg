<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRegistarionRequest;
use App\Models\CourseOffer;
use App\Models\CourseRegistarion;
use App\Models\Facilities;
use App\Models\Group;
use App\Models\Semester;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class HomeController extends Controller
{
    public function index(){
        $data['teacher_list'] = Facilities::get();
       return view("site.home.index",$data);
    }
    public function LoginStudent(){
     
        return view("site.student.login");
    } 


    public function couresreg(){
        $data['semester_list'] =Semester::get();
        $data['courseoffer'] = CourseOffer::with("coursedetalis")->get();
        // dd( $data['courseoffer']);
        // $data['courselist'] = Coursedetalis::get();

        $data['grouplist'] =Group::get();
        return view("site.coursereg.index",$data);
    }
    
    public function CoureRegForm(CourseRegistarionRequest $request){
        $subejctCount = count($request->course_id);
        if ($subejctCount !=NULL) {
            for ($i=0; $i <$subejctCount ; $i++) { 
                $courseoffer = new CourseRegistarion();
                $courseoffer->student_reg =$request->student_reg;
                $courseoffer->student_name =$request->student_name;
                $courseoffer->group_id =$request->group_id;
                $courseoffer->semester_id = $request->semester_id;
                $courseoffer->course_id = $request->course_id[$i];
                $courseoffer->course_code = $request->course_code[$i];
                $courseoffer->course_credit = $request->course_credit[$i];
                $courseoffer->save();
                   
                 
            } // End For Loop
        }
        

            $notification =array(
                'message' => "You Course Registration Succesfully done",
                'alert-type' => "success"
            );
            return redirect("/coursereg")->with($notification);

    }
   

    public function teacherlist(){
        $data['teacher_list'] = Facilities::get();
        return view("site.teacher.index",$data);
    }
    public function Logout(){
        Auth::logout();
        return redirect("/");
    }
}
