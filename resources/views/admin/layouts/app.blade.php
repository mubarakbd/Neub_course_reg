
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NEUB ONLINE ADMIN</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset("admin/plugins/fontawesome-free/css/all.min.css")}}">
   <!-- DataTables -->
 <link rel="stylesheet" href="{{asset("admin/dist/css/magnific-popup.css")}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset("admin/dist/css/adminlte.min.css")}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('/admin/dashboard')}}" class="nav-link">Home</a>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <form action="{{ url('/logout')}}" method="POST">
        @csrf
      <button type="submit" class="btn btn-danger">Logout</button>
   </form>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
 

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

  
     
  
      <!-- Sidebar Menu -->
      @include("admin.layouts.nav")
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @yield("contents")

    <!-- Main content -->
    <section class="content">
      @include('flash::message')
      <!-- Default box -->
    @yield("page_title")
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      
    </div>
    <strong>Copyright &copy; 2022 <a href="#">North East Univeristy Bangaldesh</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
 <script src="{{asset("admin/plugins/jquery/jquery.min.js")}}"></script>
<!-- Bootstrap 4 -->
 <script src="{{asset("admin/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
 <script src="{{asset("admin/pop/jquery.magnific-popup.min.js")}}"></script>
 <script src="{{asset("admin/plugins/jszip/jszip.min.js")}}"></script>
 <script src="{{asset("admin/plugins/pdfmake/pdfmake.min.js")}}"></script>
 <script src="{{asset("admin/plugins/pdfmake/vfs_fonts.js")}}"></script>
 <script src="{{asset("admin/plugins/datatables-buttons/js/buttons.html5.min.js")}}"></script>
 <script src="{{asset("admin/plugins/datatables-buttons/js/buttons.print.min.js")}}"></script>
 <script src="{{asset("admin/plugins/datatables-buttons/js/buttons.colVis.min.j")}}s"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- AdminLTE App -->
<script src="{{asset("admin/dist/js/adminlte.min.js")}}"></script>
<script src="{{asset("admin/dist/js/main.js")}}"></script>
<!-- AdminLTE for demo purposes -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  <script>
      @if (Session::has('message'))
          var type = "{{ Session::get('alert-type', 'info') }}"
          switch(type){
          case 'info':
          toastr.info(" {{ Session::get('message') }} ");
          break;
      
          case 'success':
          toastr.success(" {{ Session::get('message') }} ");
          break;
      
          case 'warning':
          toastr.warning(" {{ Session::get('message') }} ");
          break;
      
          case 'error':
          toastr.error(" {{ Session::get('message') }} ");
          break;
          }
      @endif
  </script>
</body>
</html>
