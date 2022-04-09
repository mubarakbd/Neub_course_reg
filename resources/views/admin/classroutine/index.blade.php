@extends("admin.layouts.app")
@section("page_title")
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
       
          <a href="{{ url('/admin/classroutine/create')}}" class="btn btn-primary">Add Class Routin</a>
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
              <h3 class="card-title">Class Rutine Of North East University Bangladesh</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover text-center">
               
                <tr>
                 <th>Class_day</th>
                 <th>Semester</th>
                 <th>Class Time</th>   
                 {{-- <th>Class Time</th>      --}}
                  
                </tr>

                @foreach ($class_routine as $item )
                
                <tr>         
                <td>{{date('l',strtotime($item->class_time))}}</td>
                <td>{{ $item->semesters ? $item->semesters->semester_name : "" }}</td>
                <td> {{date('g:i a',strtotime($item->class_time))}}
                 to {{date('g:i a',strtotime($item->time))}} <br>
                 <span class="text-danger">
                    {{ $item->coursedetalis ? $item->coursedetalis->subject_name : "" }}
                 </span>
                     <br>
                  <span class="text-primary text-bold">
                    {{ $item->facilities ? $item->facilities->name : "" }}
                  </span>
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