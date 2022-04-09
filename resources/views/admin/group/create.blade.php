@extends("admin.layouts.app")
@section("contents")
 
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
           <div class="card state_hover shadow">
               <div class="card-header text-bolad text-capitalize text-black-50">Add Depratment History</div>
               <div class="card-body">
                <div class="col-md-6">
                    <form action="{{ route('groups.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Department Name</label>
                            <input type="text" name="group_name" id="" class="form-control" class="@error('group_name') is-invalid @enderror" placeholder="Enter Group Name" style="width: 650px">
                            <br>
                            @error('group_name')
                            <p class="text-danger text-capitalize">{{ $message }}</p>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Program</label>
                            <input type="text" name="program_name" id="" class="form-control" class="@error('program_name') is-invalid @enderror" placeholder="Enter Group Name" style="width: 650px">
                            <br>
                            @error('program_name')
                            <p class="text-danger text-capitalize">{{ $message }}</p>
                        @enderror
                        </div>
                      
                        <div class="form-group">
                            <input type="submit" class="btn btn-info" value="Add Group">
                        </div>
                    </form>
                 </div> 
               </div>
           </div>
           
        </div>
    </div>
</div>

@endsection