@extends("admin.layouts.app")
@section("contents")
 
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
           <div class="card state_hover shadow">
               <div class="card-header text-bolad text-capitalize text-black-50">Edit Course Credit </div>
               <div class="card-body">
                <div class="col-md-6">
                    <form action="{{ url("/admin/coursrlists/$coursrlists->id") }}" method="POST">
                        @csrf
                         @method("PUT")
                        <div class="form-group">
                            <label for="">Subject Name</label>
                            <input type="text" name="subject_id" id="" value="{{$coursrlists->subject_id}}" class="form-control" placeholder="Enter Subject Name" style="width: 650px">
                           
                       
                        </div>
                        <div class="form-group">
                            <label for="">Subject Name</label>
                            <input type="text" name="subject_id" id="" value="{{$coursrlists->subject_code_id}}" class="form-control" placeholder="Enter Subject Name" style="width: 650px">
                           
                       
                        </div>   <div class="form-group">
                            <label for="">Subject Name</label>
                            <input type="text" name="subject_id" id="" value="{{$coursrlists->subject_credit_id}}" class="form-control" placeholder="Enter Subject Name" style="width: 650px">
                           
                       
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-info" value="Update Credit">
                        </div>
                    </form>
                 </div> 
               </div>
           </div>
           
        </div>
    </div>
</div>

@endsection