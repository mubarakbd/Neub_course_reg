@extends("admin.layouts.app")
@section("contents")
 
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
           <div class="card state_hover shadow">
               <div class="card-header text-bolad text-capitalize text-black-50">Add Teacher Information</div>
               <div class="card-body">
                <div class="col-md-6">
                    <form action="{{ url("/admin/facilitis/$facilitis->id")}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="form-group">
                            <label for="">Teacher Name</label>
                            <input type="text" name="name" id="" value="{{$facilitis->name}}" class="form-control" class="@error('name') is-invalid @enderror" placeholder="Enter Teacher Name" style="width: 650px">
                            <br>
                            @error('name')
                            <p class="text-danger text-capitalize">{{ $message }}</p>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" id="" value="{{$facilitis->email}}" class="form-control" class="@error('email') is-invalid @enderror" placeholder="Enter Email Address" style="width: 650px">
                            <br>
                            @error('email')
                            <p class="text-danger text-capitalize">{{ $message }}</p>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="number" name="phone" id="" value="{{$facilitis->phone}}" class="form-control" class="@error('phone') is-invalid @enderror" placeholder="Enter Email Address" style="width: 650px">
                            <br>
                            @error('phone')
                            <p class="text-danger text-capitalize">{{ $message }}</p>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Desgination</label>
                            <input type="text" name="designation" value="{{$facilitis->designation}}" id="" class="form-control" class="@error('designation') is-invalid @enderror" placeholder="Enter Teacher Designation" style="width: 650px">
                            <br>
                            @error('designation')
                            <p class="text-danger text-capitalize">{{ $message }}</p>
                        @enderror
                        </div>
                      
                        <div class="form-group">
                      
                            <div class="custom-file">
                              <input type="file" name="image" class="custom-file-input" id="customFile">
                              <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                          </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-info" value="Update Information">
                        </div>
                    </form>
                 </div> 
               </div>
           </div>
           
        </div>
    </div>
</div>

@endsection