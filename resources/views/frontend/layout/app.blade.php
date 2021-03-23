<!DOCTYPE html>
<html lang="{{ GetLanguage() }}" dir="{{ GetDirection() }}" >

<head>
    <title>DWAM:Doctors With A Mission</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Calling Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/favicon.png') }}">
    <!-- Calling Favicon -->
    <!-- ********************* -->
    <!-- CSS files -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.css') }}" media="all">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" class="color-changing" href="{{ asset('frontend/assets/css/color6.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
    <!-- End CSS files -->
</head>

<body>
    <!-- Preloader start -->
    <div class="loader-out flex-center">
        <div class="loader"></div>
    </div>
    <!-- Preloader end -->

    <!-- ***** Header Area Start ***** -->
      @include('frontend.includes.header')
      <!-- ***** Header Area End ***** -->

      @yield('content')

      <!-- cta start -->
      <section class="cta bg-yellow pt-30 pb-30">
          <div class="container">
              <div class="row align-items-center">
                  <div class="col-lg-9 col-md-12 text-center text-lg-left">
                      <h3 class="f-700 fs-35 mb-md-20 txt-{{GetDirection()}}">{{ trans('main.connect_area') }}</h3>
                  </div>
                  <div class="col-lg-3 col-md-12 text-center text-lg-right"> <a href="/contact" class="btn btn-black shadow-1">{{ trans('main.connect_area_us') }}</a>
                  </div>
              </div>
          </div>
      </section>
      <!-- cta end -->

      <!-- ***** Footer Area Start ***** -->
      @include('frontend.includes.footer')
      <!-- ***** Footer Area End ***** -->




      <!-- ********************* -->
      <!-- JS Files -->
      <script src="{{ asset('frontend/assets/js/modernizr-3.5.0.min.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/jquery-1.12.4.min.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/jquery.waypoints.min.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/jquery.countdown.min.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/lightslider.min.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/jquery.meanmenu.min.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/tilt.jquery.min.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/audio-file.js') }}"></script>
      <!-- JS Files end -->
  </body>

  </html>
