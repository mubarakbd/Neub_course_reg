
@extends("site.layouts.app");
@section("contents")
<section id="trainers" class="trainers">
  <div class="container" data-aos="fade-up">
  
    
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">
       
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
            {{-- @foreach ($teacher_list as $teac) --}}
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{asset("storage/$teac->image")}}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>{{$teacher_list->name}}</h4>
                <span>{{$teac->email}}</span>
                <p>
                 {{$teac->designation}}
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
{{-- @endforeach --}}
{{-- 
@foreach ($teacher_list as $teac)
<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
  <div class="member">
    <img src="{{asset("storage/$teac->image")}}" class="img-fluid" alt="">
    <div class="member-content">
      <h4>{{$teac->name}}</h4>
      <span>{{$teac->email}}</span>
      <p>
       {{$teac->designation}}
      </p>
      <div class="social">
        <a href=""><i class="bi bi-twitter"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
  </div>
</div>
@endforeach

@foreach ($teacher_list as $teac)
<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
  <div class="member">
    <img src="{{asset("storage/$teac->image")}}" class="img-fluid" alt="">
    <div class="member-content">
      <h4>{{$teac->name}}</h4>
      <span>{{$teac->email}}</span>
      <p>
       {{$teac->designation}}
      </p>
      <div class="social">
        <a href=""><i class="bi bi-twitter"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
  </div>
</div>
@endforeach

        </div> --}}

      </div>
    </section><!-- End Trainers Section -->      





















@endsection
