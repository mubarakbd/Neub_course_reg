@extends("admin.layouts.app")
@section("page_title")
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <a href="{{ url('/admin/coursoffers/create')}}">Course Offer</a> ||
            <li class="breadcrumb-item active">Group</li>
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
                  <th>Course Name</th>
                  <th>Course Code</th>
                  <th>Course Credit</th>
                 
                  <th>Course Teacher Name</th>
                 
             
                </tr>
                @foreach ($courseofferlist as $item )
                <tr>
                    
                    
                      <td>{{ $item->coursedetalis ? $item->coursedetalis->subject_name : "" }}</td>
                     <td>{{ $item->coursedetalis ? $item->coursedetalis->subject_code : "" }}</td>
                     <td>{{ $item->coursedetalis ? $item->coursedetalis->subject_credit : "" }}</td> 
                     <td>{{ $item->facilities ? $item->facilities->name : "" }}</td>
                   

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