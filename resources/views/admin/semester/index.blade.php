@extends("admin.layouts.app")
@section("page_title")
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
       
          <a href="{{ url('/admin/semesters/create')}}" class="btn btn-primary">Add Semester</a>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Semester</li>
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
              <h3 class="card-title">Semester List Of North East University Bangladesh</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
               
                <tr>
                    <th>Sl No</th>
                  <th>Semester Name</th>
                  <th>Action</th>
                 
                </tr>
                @php($i = 1)
                    
                
                @foreach ($semester_list as $semester )
                <tr>
                     <td>{{$semester_list->firstItem()+$loop->index}}</td>
                    <td>{{$semester->semester_name}}</td>
                    <td>
                      <a href="{{ route('semesters.edit', ['semester'=>$semester->id]) }}" class="btn btn-info">Edit</a>
                        <form action="{{ url("/admin/semesters/$semester->id") }}" method="post" style="display:inline"
                          onSubmit="return confirm('Are you sure you want to delete?')">
                          @csrf
                          @method("delete")
                          <input type="submit" class="btn btn-danger" value="Delete" id="delete">
                      </form>
                    </td>
               
        </tr>
                @endforeach
              </table>
              <div class="pt-5 float-right">
              {{$semester_list->links()}}
            </div>
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