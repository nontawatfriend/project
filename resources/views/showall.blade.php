    @extends('layouts.master')
    @section('title','Show-message')
    @section('content')
    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Message</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex, esse natus laborum porro laboriosam error quos expedita dicta quo ratione libero minus eos aliquam nemo, maiores delectus vitae similique voluptate.</p>
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
                  <br>
                </div>
               
                <a href = 'edit/{{ $rec->id }}' > <img src="assets/img/edit.png" width="35px" height="35px"> </a> &nbsp;
                <a href = 'delete/{{ $rec->id }}'onclick="return confirm('Are you sure?')"><img src="assets/img/delete.png" width="32px" height="32px"></a> 
              </div>
            </div>
        @endforeach
@endif

  

  

  
          </div>
  
        </div>
      </section><!-- End Team Section -->

      @endsection