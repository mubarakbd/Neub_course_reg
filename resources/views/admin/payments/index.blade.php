@extends("admin.layouts.app")
@section("page_title")
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">   
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Payment</li>
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
              <h3 class="card-title">Payment List Of North East University Bangladesh</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
               
                <tr>
                  <th>Student Reg No</th>
                  <th>Student Name</th>
                  <th>Semester</th>
                  <th>Payment Receipt</th>
                  <th>Action</th>                 
                  <tr>    
                  </tr>
                   @foreach ($payment_delatis as $item )
                  <tr>        
                    <td>{{$item->reg_no}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{ $item->semesters ? $item->semesters->semester_name : "" }}</td>
                    <td> <a class="view" href="{{asset("storage/$item->image")}}"><img style="width: 100px" height="100px" src="{{asset("storage/$item->image")}}" alt="image"></td> </a>
                    <td><a href="" class="btn btn-primary">Clearance</a></td>
                @endforeach 
              </table>           
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
