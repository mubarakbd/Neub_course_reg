<nav id="navbar" class="navbar order-last order-lg-0">
    <ul>
      <li><a class="active" href="{{ url('/',)}}">Home</a></li>
      <li><a href="{{url('showcourseoffers')}}">Course Offer List</a></li>
      <li><a href="{{ url('/showresult')}}">Result Information</a></li>

      @if (Route::has('login'))
      @auth
      <li><a href="{{ url('/coursereg')}}">Courses Registration</a></li>
        <li class="dropdown"><a href="#"><span>My Account</span> <i class="bi bi-chevron-down"></i></a>
          <ul>   
            <li><a href="#">Course Enrolment</a></li>
             <li><a href="{{ url('/payment')}}">Payment</a></li>
             <li><a href="{{ url('/application')}}">Course Application Form</a></li>
            <li><a href="{{ route('user.logout')}}">Logout</a></li>
          </ul>
        </li>
      @else
      <li><a href="{{ url('login')}}">Login</a></li>
         @if (Route::has('register'))
         <li><a href="{{ url('register')}}">Register</a></li>
         @endif
      @endauth
     @endif 
    </ul>
   
    
  </nav><!-- .navbar -->
