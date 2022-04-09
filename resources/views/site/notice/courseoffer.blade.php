@extends("site.layouts.app");
@section("contents")
<div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
        <h2>North East University Bangaldesh</h2>
       <h4>Course Offer List</h4>
      
    </div>
  </div>

<section id="trainers" class="trainers">
  <div class="container" data-aos="fade-up">
      
      </div>
  <div class="row justify-content-center">
      <div class="col-md-8">

         <div class="py-4">
        <table class="table table-bordered text-center">
           
            <thead>
                <tr> 
                    <th>Semester</th>
                    <th>Course Title</th>
                    <th>Course Code</th>
                    <th>Course Credit</th>
                    <th>Course Teacher Name</th>
                 
                </tr>
              </thead>
              <tbody>
                @foreach ($courseofferlist as $item )
             
                  <td>{{ $item->semesters ? $item->semesters->semester_name : "" }}</td>
                  <td>{{ $item->coursedetalis ? $item->coursedetalis->subject_name : "" }}</td>
                  <td>{{ $item->coursedetalis ? $item->coursedetalis->subject_code : "" }}</td>
                  <td>{{ $item->coursedetalis ? $item->coursedetalis->subject_credit : "" }}</td> 
                
                  <td>{{ $item->facilities ? $item->facilities->name : "" }}</td>
            
                       
                   
               
        </tr>
                @endforeach
               
              </tbody>
          </table>
      </div>
  </div>
    
</section><!-- End Trainers Section -->
 
@endsection