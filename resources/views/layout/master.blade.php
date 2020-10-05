<!doctype html>
<html lang="en">


<!-- Mirrored from abnasirmotors.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Sep 2020 11:01:58 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('frontend/bootstrap/css/bootstrap.min.css')}}" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/normalize.css')}}">
    <!-- reference your copy Font Awesome here (from our CDN or by hosting yourself) -->
    <link href="{{asset('frontend/fontawesome/css/fontawesome.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/fontawesome/css/brands.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/fontawesome/css/solid.css')}}" rel="stylesheet">
  {{-- <script src="{{('frontend/kit.fontawesome.com/b0d58c42f6.js')}}" crossorigin="anonymous"></script> --}}

  <!--Start of Tawk.to Script-->

  <!--End of Tawk.to Script-->
</head>

<body>
  <header>

    @include('layout.partials.navbar')
    <!--hero section-->

  <!--
  <section class="welcome text-center section_space">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="welcome_content">
            <h2 class="title_section">Welcome to Abnasir Motors</h2>
            <h6 class="title_bottom">the easiest way to find your next car</h6>
            <p class="welcome_p">For 25 years, Abnasir Motors has been raising the standard of used car retailing with
              one
              of the most
              innovative and reliable used vehicle programmes ever created. A comprehensive range of benefits as
              standard has evolved over time and, today, drivers can leave the forecourt with total reassurance and
              peace of mind. For used vehicles, we calculate a fair retail price based on a detailed analysis of
              comparable current and previous car listings in a given market. We call this estimate the Abnasir Motors
              Instant Market Value.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--our values-
  <section class="abnasir_values justify-content-center">
    <div class="container">
      <h2 class="title_section text-center pb-3">Why Choose Us</h2>
      <div class="abnasir_values_content text-center">
        <div class="row align-items-center">
          <div class="col-md-3 value_box_mobile">
            <i class="fas fa-heart circle-icon"></i>
            <h4>best value</h4>
          </div>
          <div class="col-md-3 value_box_mobile">
            <i class="far fa-handshake circle-icon"></i>
            <h4>Great Deals</h4>
          </div>
          <div class="col-md-3 value_box_mobile">
            <i class="far fa-thumbs-up circle-icon"></i>
            <h4>customer focus</h4>
          </div>
          <div class="col-md-3">
            <i class="fas fa-award circle-icon"></i>
            <h4>best experience</h4>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Gallery
  <section class="gallery section_space text-center">
    <div class="container-fluid">
      <h2 class="title_section text-center pb-3">Find Your Perfect Car</h2>
      <div class="row">
        <div class="col-lg-1 col-md-3 col-sm-12 offset-1 col-sm-offset-1 col-md-offset-3 gallery_box_home">
          <a href="#">
            <img src="img/cars/brands/toyota.png" class="mx-auto" alt="Toyota">
            <span class="car_horizontal_list">toyota</span>
          </a>
        </div>
        <div class="col-lg-1 col-md-3 col-sm-12 gallery_box_home">
          <a href="#">
            <img src="img/cars/brands/audi.png" class="mx-auto" alt="Audi">
            <span class="car_horizontal_list">audi</span>
          </a>
        </div>
        <div class="col-lg-1 col-md-3 col-sm-12 gallery_box_home">
          <a href="#">
            <img src="img/cars/brands/honda.png" class="mx-auto" alt="Honda">
            <span class="car_horizontal_list">honda</span>
          </a>
        </div>
        <div class="col-lg-1 col-md-3 col-sm-12 gallery_box_home">
          <a href="#">
            <img src="img/cars/brands/lexus.png" class="mx-auto" alt="Lexus">
            <span class="car_horizontal_list">lexus</span>
          </a>
        </div>
        <div class="col-lg-1 col-md-3 col-sm-12 gallery_box_home">
          <a href="#">
            <img src="img/cars/brands/mazda.png" class="mx-auto" alt="Mazda">
            <span class="car_horizontal_list">mazda</span>
          </a>
        </div>
        <div class="col-lg-1 col-md-3 col-sm-12 gallery_box_home">
          <a href="#">
            <img src="img/cars/brands/mercedes.png" class="mx-auto" alt="Mercedes">
            <span class="car_horizontal_list">mercedes benz</span>
          </a>
        </div>
        <div class="col-lg-1 col-md-3 col-sm-12 gallery_box_home">
          <a href="#">
            <img src="img/cars/brands/nissan.png" class="mx-auto" alt="Nissan">
            <span class="car_horizontal_list">nissan</span>
          </a>
        </div>
        <div class="col-lg-1 col-md-3 col-sm-12 gallery_box_home">
          <a href="#">
            <img src="img/cars/brands/suzuki.png" class="mx-auto" alt="Suzuki">
            <span class="car_horizontal_list">suzuki</span>
          </a>
        </div>
        <div class="col-lg-1 col-md-3 col-sm-12 gallery_box_home">
          <a href="#">
            <img src="img/cars/brands/daihatsu.png" class="mx-auto" alt="Daihatsu">
            <span class="car_horizontal_list">daihatsu</span>
          </a>
        </div>
        <div class="col-lg-1 col-md-3 col-sm-12 gallery_box_home">
          <a href="#">
            <img src="img/cars/brands/bmw.png" class="mx-auto" alt="bmw">
            <span class="car_horizontal_list">bmw</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  -->



  @yield('content')

  @include('layout.partials.footer')
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  @stack('script')
</body>


<!-- Mirrored from abnasirmotors.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Sep 2020 11:03:02 GMT -->
</html>
