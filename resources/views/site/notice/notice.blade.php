@extends("site.layouts.app");
@section("contents")
@include("site.layouts.brade")
<section id="trainers" class="trainers">
  <div class="container" data-aos="fade-up">
       <h2 class="text-center text-bold">Exam Notice</h2>
      </div>
  <div class="row justify-content-center">
      <div class="col-md-8">

         <div class="py-4">
        <table class="table table-bordered text-center">
           
            <thead>
                <tr> 
                    <th>Semester</th>
                    <th>Course Name</th>
                    <th>Exam Date</th>
                    <th>Day</th>
                    <th>Exam Time</th>
                    <th>Room</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($examlist as $item )
             
                  <td>{{ $item->semesters ? $item->semesters->semester_name : "" }}</td>
                  <td>{{ $item->coursedetalis ? $item->coursedetalis->subject_name : "" }}</td>
                <td>{{date('d F,Y',strtotime($item->exam_date)) }}</td>
                <td>{{date('l',strtotime($item->exam_date))}}</td>
                <td> {{date('g:i a',strtotime($item->exam_date))}} to 
                    {{date('g:i a',strtotime($item->time))}}
                </td>
              
                <td> {{$item->room}}</td>
            
                       
                   
               
        </tr>
                @endforeach
               
              </tbody>
          </table>
      </div>
  </div>
    

                 
                </tbody>
            </table>
        </div>
    </div>
      
  </section><!-- End Trainers Section -->
   
@endsection