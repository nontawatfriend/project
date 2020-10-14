@extends('layouts.master')
@section('title','contact')
@section('content')

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Set Message</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro sit nemo ab vel quam eaque, fuga, amet excepturi, eligendi aspernatur molestiae voluptatum molestias? Esse facere, veniam soluta laudantium quam nesciunt.</p>
      </div>

      <div class="row">
          <form action="{{url ('insert')}}" method="post" role="form" class="php-email-form">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Your Name</label>
                <input type="text" name="name" class="form-control" id="name" data-rule="required"  />
                <div class="validate"></div>
              </div>
              <div class="form-group col-md-6">
                <label for="email">Your Email</label>
                <input type="email" class="form-control" name="email" id="email" data-rule="email"  />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <label for="subject">Subject</label>
              <input type="text" class="form-control" name="subject" id="subject" data-rule="required"  />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control" name="message" rows="10" data-rule="required" ></textarea>
              <div class="validate"></div>
            </div>

            <div class="mb-3">
              <div class="loading">Loading</div>
              {{-- <div class="error-message"></div> --}}
              {{-- <div class="sent-message">Your message has been sent. Thank you!</div> --}}
              <div class="text-center"> <button type="submit"  >Send Message</button></div>
            </div>
          </form>
        {{-- </div> --}}
      </div>
    </div>
  </section><!-- End Contact Section -->

  @endsection