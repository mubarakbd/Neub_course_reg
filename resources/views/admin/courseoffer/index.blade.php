@extends("admin.layouts.app")
@section("page_title")
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
       
          <a href="{{ url('/admin/coursoffers/create')}}" class="btn btn-primary">Add Course Offer</a>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Course offer</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Course List Of North East University Bangladesh</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
               
                <tr>
                  <th>Semester Name</th>
                  <th>Course Name</th>
                  <th>Course Code</th>
                  <th>Course Credit</th>
                  <th>Course Teacher</th>
                  <th>Action</th>
                  <tr>
       
               
                  </tr>
                  @foreach ($courseofferlist as $item )
                  <tr>
                    <td>{{ $item->semesters ? $item->semesters->semester_name : "" }}</td>
                   
                    <td>{{ $item->coursedetalis ? $item->coursedetalis->subject_name : "" }}</td>
                    <td>{{ $item->coursedetalis ? $item->coursedetalis->subject_code : "" }}</td>
                    <td>{{ $item->coursedetalis ? $item->coursedetalis->subject_credit : "" }}</td> 
                    <td>{{ $item->facilities ? $item->facilities->name : "" }}</td>
                      
                     
                  
                      
                      <td>
                    

                      {{-- <a href="{{ route("courseoffer.detalis",$item->semester_id) }}" class="btn btn-primary">Detalis</a> --}}

                    
                      <form action="{{ url("/admin/coursoffers/$item->id") }}" method="post" style="display:inline"
                        onSubmit="return confirm('Are you sure you want to delete?')">
                        @csrf
                        @method("delete")
                        <input type="submit" class="btn btn-danger" value="Delete" id="delete">
                    </form>
                     </td>
                    
                     

                @endforeach
              </table>
              {{-- <div class="pt-5 float-right">
              {{$group_list->links()}}
            </div> --}}
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>


  

@endsection