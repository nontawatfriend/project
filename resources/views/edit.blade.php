@extends('layouts.master')
@section('title','edit')
@section ('content')

    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Contact</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>
      <div class="row">
        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form action="{{url('/update')}}/{{ $_data[0]->id }}" method="post" role="form" class="php-email-form">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Your Name</label>
                <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group col-md-6">
                <label for="email">Your Email</label>
                <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <label for="subject">Subject</label>
              <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
              <div class="validate"></div>
            </div>

            <div class="mb-3">
              <div class="loading">Loading</div>
              {{-- <div class="error-message"></div> --}}
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"> <button type="submit" onclick="window.location;" >Send Message</button></div>
          </form>
        </div>
      </div>
    </div>





@endsection