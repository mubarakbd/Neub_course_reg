@extends("site.layouts.app");
@section("contents")
<div class="breadcrumbs" data-aos="fade-in">
  <div class="container">
      <h2>North East University Bangaldesh</h2>
     <h2 class="text-center"> Result's of Student</h2>
  </div>
</div>

<section id="trainers" class="trainers">
  
    <div class="container" data-aos="fade-up">
        
        </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
  
           <div class="py-4">
          <table class="table table-bordered text-center">
             
            <tr>
                <th>Student Reg</th>
                <th>Student Name</th>
                <th>Program</th>
                <th>Semester</th>
                <th>Course Name</th>
                <th>Course Code</th>
                <th>Course Credit</th>
                <th>Letter Grad</th>
                <th>Grad Point</th>
              
            </tr>

            
            @foreach ($resultlist as $result )
            <tr>
                
              <td>{{$result->student_reg}}</td>
                <td>{{$result->student_name}}</td>
                <td>{{ $result->groups ? $result->groups->program_name : "" }}</td>
                <td>{{ $result->semesters ? $result->semesters->semester_name : "" }}</td>
                <td>{{ $result->coursedetalis ? $result->coursedetalis->subject_name : "" }}</td>
                <td>{{ $result->coursedetalis ? $result->coursedetalis->subject_code : "" }}</td>
                <td>{{ $result->coursedetalis ? $result->coursedetalis->subject_credit : "" }}</td>
                <td>{{ $result->gradpoints ? $result->gradpoints->letter_grad : "" }}</td>
                <td>{{ $result->gradpoints ? $result->gradpoints->grad_point : "" }}</td>
            
      
                         
                     
                 
          </tr>
                  @endforeach
                 
                </tbody>
            </table>
        </div>
    </div>
      
  </section><!-- End Trainers Section -->
   
@endsection