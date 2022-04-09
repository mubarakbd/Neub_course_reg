@extends("admin.layouts.app")
@section("contents")
 
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
           <div class="card state_hover shadow">
               <div class="card-header text-bolad text-capitalize text-black-50">Edit Courselit History</div>
               <div class="card-body">
                <div class="col-md-6">
                     <form method="POST" action="{{ url("/admin/courselists/$courselist->id") }}">
                        @csrf
                          @method("PUT")
                        <div class="form-group">
                            <label for="">Course Name</label>
                            <input type="text" name="subject_name" id="" value="{{$courselist->subject_name}}" class="form-control" placeholder="Enter course Name" style="width: 650px">
                        
                        
                        </div>
                        <div class="form-group">
                            <label for="">Course Code</label>
                            <input type="text" name="subject_code" id="" class="form-control" value="{{$courselist->subject_code}}" placeholder="Enter Coures Code " style="width: 650px">
                            <br>
                           
                        </div>
                        <div class="form-group">
                            <label for="">Course Credit</label>
                            <input type="text" name="subject_credit" id="" class="form-control" value="{{$courselist->subject_credit}}"  placeholder="Enter Group Name" style="width: 650px">
                            <br>
                           
                        </div>
                      
                      
                        <div class="form-group">
                            <input type="submit" class="btn btn-info" value="Update Course">
                        </div>
                    </form>
                 </div> 
               </div>
           </div>
           
        </div>
    </div>
</div>

@endsection