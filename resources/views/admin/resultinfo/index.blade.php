@extends("admin.layouts.app")
@section("page_title")
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
       
          <a href="{{ url('/admin/resultinfos/create')}}" class="btn btn-primary">Add Result</a>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Result`</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Course List Of North East University Bangladesh</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
               
                <tr>
                    <th>Student Reg</th>
                    <th>Student Name</th>
                    <th>Program</th>
                    <th>Semester</th>
                    <th>Course Name</th>
                    <th>Course Code</th>
                    <th>Course Credit</th>
                    <th>Letter Grad</th>
                    <th>Grad Point</th>
                  
                    <th>Action</th>
                </tr>
                @foreach ($resultlist as $result )
                <tr>
                    
                  <td>{{$result->student_reg}}</td>
                    <td>{{$result->student_name}}</td>
                    <td>{{ $result->groups ? $result->groups->program_name : "" }}</td>
                    <td>{{ $result->semesters ? $result->semesters->semester_name : "" }}</td>
                    <td>{{ $result->coursedetalis ? $result->coursedetalis->subject_name : "" }}</td>
                    <td>{{ $result->coursedetalis ? $result->coursedetalis->subject_code : "" }}</td>
                    <td>{{ $result->coursedetalis ? $result->coursedetalis->subject_credit : "" }}</td>
                    <td>{{ $result->gradpoints ? $result->gradpoints->letter_grad : "" }}</td>
                    <td>{{ $result->gradpoints ? $result->gradpoints->grad_point : "" }}</td>
                  
                    <td>
                        {{-- <a href="{{ route('courselists.edit', ['course'=>$course->id]) }}" class="btn btn-info">Edit</a> --}}
                        <a href="{{ url("/admin/resultinfos/$result->id/edit") }}" class="btn btn-info">Edit</a>
                        
                        <form action="{{ url("/admin/resultinfos/$result->id") }}" method="post" style="display:inline"
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