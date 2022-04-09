@extends("admin.layouts.app")
@section("contents")
 
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
           <div class="card state_hover shadow">
               <div class="card-header text-bolad text-capitalize text-black-50">Add Subject Name</div>
               <div class="card-body">
                <div class="col-md-6">
                    <form action="{{ route('courses.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Course Code</label>
                            <input type="text" name="course_code" id="" class="form-control" class="@error('course_credit') is-invalid @enderror" placeholder="Enter Course Code " style="width: 650px">
                            <br>
                            @error('course_code')
                            <p class="text-danger text-capitalize">{{ $message }}</p>
                        @enderror
                        </div>
                      
                        <div class="form-group">
                            <input type="submit" class="btn btn-info" value="Add Subject">
                        </div>
                    </form>
                 </div> 
               </div>
           </div>
           
        </div>
    </div>
</div>

@endsection