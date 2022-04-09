@extends("admin.layouts.app")
@section("contents")
 
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
           <div class="card state_hover shadow">
               <div class="card-header text-bolad text-capitalize text-black-50">Add Semester Name</div>
               <div class="card-body">
                <div class="col-md-6">
                    <form action="{{ route('semesters.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Semester Name</label>
                            <input type="text" name="semester_name" id="" value="{{old('semester_name')}}" class="form-control" class="@error('semester') is-invalid @enderror" placeholder="Enter Semester Name" style="width: 650px">
                            <br>
                            @error('semester_name')
                            <p class="text-danger text-capitalize">{{ $message }}</p>
                        @enderror
                        </div>
                     
                        <div class="form-group">
                            <input type="submit" class="btn btn-info" value="Add Semester">
                        </div>
                    </form>
                 </div> 
               </div>
           </div>
           
        </div>
    </div>
</div>

@endsection