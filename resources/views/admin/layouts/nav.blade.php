<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="{{ url('/admin/groups') }}" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
          <p>
            Department
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ url('/admin/semesters')}}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
          <p>
            Semester Mangement
          </p>
        </a>
      </li>

     
      </li>


      
      <li class="nav-item">
        <a href="{{url("/admin/courselists")}}" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Course Management
          </p>
        </a>
      
      <li class="nav-item">
        <a href="{{ url('/admin/coursoffers') }}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
          <p>
            Course Offer Information
          </p>
        </a>
      </li>
      <li class="nav-item">
 <a href="{{ url('/admin/application_detalis') }}"  class="nav-link">
  <i class="nav-icon fas fa-th"></i>
          <p>
            Course WithDraw
          </p>
  </a>
      </li>
      <li class="nav-item">
        <a href="{{url("/admin/payments_detlais")}}" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
          Payment Detalis
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ url('/admin/facilitis') }}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
          <p>
            Teacher Information
          </p>
        </a>
      </li>
    
      <li class="nav-item">
        <a href="{{url("/admin/coursreg_form")}}" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
           Coures Registration
          </p>
        </a>
      </li>

   


      <li class="nav-item">
        <a href="{{url("/admin/courses")}}" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Result Mangament
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ url('/admin/gradpoints') }}" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
              <p>
               Grad Point
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/resultinfos" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Result Information</p>
            </a>
          </li>
        </ul>
      </li>

    
   

    
    
    
  
    </ul>
  </nav>