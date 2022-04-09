@extends("site.layouts.app");
@section("contents")

<section id="hero" class="d-flex justify-content-center align-items-center">
  <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
    <h1>Before Course Registation Please<br>Login Your Account</h1>
 
    <a href="{{ url('login') }}" class="btn-get-started">Get Course Registarion</a>
  </div>
</section>



  <div class="container" data-aos="fade-up">
    <section id="trainers" class="trainers">
      <h2 class="text-center text-dark font-bold">All Teacher's Information</h2>
      <div class="container" data-aos="fade-up">
        <section id="trainers" class="trainers">
          <div class="container" data-aos="fade-up">

            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                @foreach ($teacher_list as $teac)
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member">
                  <img src="{{asset("storage/$teac->image")}}" class="img-fluid" alt="">
                  <div class="member-content">
                    <h4>{{$teac->name}}</h4>
                    <span>{{$teac->email}}</span>
                    <p>
                     {{$teac->designation}}
                    </p>
                    <h6 class="text-danger">{{$teac->phone}}</h6>
                  </div>
                </div>
              </div>
    @endforeach
  
            
            </div>
          </div>
        </div>
        </section><!-- End Trainers Section -->      

        
  </div>
  
 


















@endsection