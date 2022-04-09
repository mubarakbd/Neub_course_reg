@extends("admin.layouts.app")

@section("page_title")
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Edite Semester</h3>
    </div>
    <div class="card-body">
     
      <form action="{{ url("/admin/semesters/$semesters->id") }}"  method="POST">
         @csrf
           @method("PUT")
              <div class="row justify-content-center">
              <div class="col-md-6">
                <div class="card-body">
          
                    <div class="form-group">
                      <label for="semester">Semester Name</label>
                      <input type="text" name="semester_name" id=""value="{{ $semesters->semester_name }}"   class="form-control"  placeholder="Enter Semester" style="width: 680px" >
                  
                    </div>
                <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Update Semester">
                    </div>
              </div>
              </div>
          </div>
          
          <!-- /.card-body -->
        </form>
    
</div>







@endsection