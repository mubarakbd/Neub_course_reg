@extends("admin.layouts.app")
@section("contents")
 
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
           <div class="card state_hover shadow">
               <div class="card-header text-bolad text-capitalize text-black-50">Upload  Information</div>
               <div class="card-body">
                <div class="col-md-6">
                    <form action="{{ route('import.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group">
                      
                            <div class="custom-file">
                              <input type="file" name="file" class="custom-file-input" id="customFile" style="width: 570px">
                              <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
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