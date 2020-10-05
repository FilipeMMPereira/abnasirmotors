@extends('layout.master')

@section('title','Contact Us')

@section('content')
<section class="contactForm section-space justify-content-center">
    <div class="container">
      <div class="row align-items-center">
          <div class="col-md-12">
               <div class="about_content">
    
                <h2 class="title_section text-center mt-2">contact us</h2>
                <p class="about_p text-center">It would be great to hear from you!</p>
          </div>
                  
          <div class="contact_form mt-5">
            <form method="post" action="{{route('inicio.email')}}" enctype="multipart/form-data">
              @csrf
            <input class="form-control" name="name" placeholder="Full Name..." ><br>
            <input class="form-control" name="subject" placeholder="Subject..."><br>
            <input class="form-control" name="email" type="email" placeholder="Email..."><br>
            <textarea placeholder="Message..." class="form-control" name="message" cols="30" rows="10"></textarea><br>
            <input id="sendBtn" class="btn hero_btn mb-3" name="submit" type="submit" value="send email">
          </form>
          </div>
          </div>
      </div>
    </div>
  </section>  
@endsection

@push('script')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="{{asset('frontend/bootstrap/js/bootstrap.min.js')}}" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="{{asset('frontend/fontawesome/js/fontawesome.js')}}"></script>
    <script src="{{asset('frontend/fontawesome/js/brands.js')}}"></script>
    <script src="{{asset('frontend/fontawesome/js/solid.js')}}"></script>
@endpush