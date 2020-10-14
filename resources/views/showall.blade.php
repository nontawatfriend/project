    @extends('layouts.master')
    @section('title','Show-message')
    @section('content')
    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Message</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut, facilis.</p>
          </div>


@if (count($_data)>0)
          <div class="row">
         @foreach ($_data as $rec)
            <div class="col-lg-6">
              <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                <div class="pic"><img src="assets/img/team/img-icon.png" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4> ID: {{ $rec->id }}</h4>
                  <span> Name : {{ $rec->name }}</span>
                  <span>Email : {{ $rec->email }} </span>
                <span>Message : {{ $rec->message }}</span>
                  <div class="social">
                    <a href="#"><i class="ri-twitter-fill"></i></a>
                    <a href="#"><i class="ri-facebook-fill"></i></a>
                    <a href="#"><i class="ri-instagram-fill"></i></a>
                    <a href="#"> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>
        @endforeach

@endif

  

  

  
          </div>
  
        </div>
      </section><!-- End Team Section -->

      @endsection