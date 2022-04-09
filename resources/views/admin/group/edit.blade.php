@extends("admin.layouts.app")

@section("page_title")
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Edite Group</h3>
    </div>
    <div class="card-body">
     
      <form action="{{ url("/admin/groups/$groups->id") }}"  method="POST">
         @csrf
           @method("PUT")
              <div class="row justify-content-center">
              <div class="col-md-6">
                <div class="card-body">
          
                    <div class="form-group">
                      <label for="semester">Group Name</label>
                      <input type="text" name="group_name" id=""value="{{ $groups->group_name }}"   class="form-control"  placeholder="Enter Group" style="width: 680px" >
                  
                    </div>
                    <div class="form-group">
                      <label for="semester">Program Name</label>
                      <input type="text" name="program_name" id=""value="{{ $groups->program_name }}"   class="form-control"  placeholder="Enter Group" style="width: 680px" >
                  
                    </div>
                   
                 
                  
                   
    
                <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Update">
                    </div>
              </div>
              </div>
          </div>
          
          <!-- /.card-body -->
        </form>
    
</div>







@endsection