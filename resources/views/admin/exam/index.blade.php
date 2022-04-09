@extends("admin.layouts.app")
@section("page_title")
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
       
          <a href="{{ url('/admin/exams/create')}}" class="btn btn-primary">Add Exam Routin</a>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Exam Routin</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
<section class="content">
    <div class="container-fluid">
      @php
        use Carbon\Carbon;
        $today_date =Carbon::today()->format('Y-m-d g:i a');

      @endphp
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Exam Rutine Of North East University Bangladesh</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
               
                <tr>
                  <th>Semester</th>
                  <th>Course Name</th>
                  <th>Exam Date</th>
                  <th>Day</th>
                  <th>Start Time</th>
                  <th>Room</th>
                  <th>Action</th>
                </tr>

                @foreach ($examlist as $item )
                
                <tr>
                     <td>{{ $item->semesters ? $item->semesters->semester_name : "" }}</td>
                     <td>{{ $item->coursedetalis ? $item->coursedetalis->subject_name : "" }}</td>
                <td>{{date('d F,Y',strtotime($item->exam_date)) }}</td>
                <td>{{date('l',strtotime($item->exam_date))}}</td>
                <td> {{date('g:i a',strtotime($item->exam_date))}} to
                  {{date('g:i a',strtotime($item->time))}}
                </td>
                <td> {{$item->room}}</td>
                <td>
                  {{-- <a href="{{ route('courselists.edit', ['course'=>$course->id]) }}" class="btn btn-info">Edit</a> --}}
                  <a href="{{ url("/admin/exams/$item->id/edit") }}" class="btn btn-info">Edit</a>
                  <form action="{{ url("/admin/exams/$item->id") }}" method="post" style="display:inline"
                    onSubmit="return confirm('Are you sure you want to delete?')">
                    @csrf
                    @method("delete")
                    <input type="submit" class="btn btn-danger" value="Delete" id="delete">
                </form>
                </td>

                       
                   
               
        </tr>
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