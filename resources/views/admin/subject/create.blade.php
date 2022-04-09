@extends("admin.layouts.app")
@section("contents")
 
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
           <div class="card state_hover shadow">
               <div class="card-header text-bolad text-capitalize text-black-50">Add Subject Name</div>
               <div class="card-body">
                <div class="col-md-6">
                    <form action="{{ route('subjects.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Subject Name</label>
                            <input type="text" name="subject_name" id="" class="form-control" class="@error('subject_name') is-invalid @enderror" placeholder="Enter Subject Name" style="width: 650px">
                            <br>
                            @error('subject_name')
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