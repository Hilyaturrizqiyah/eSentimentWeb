<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-Sentiment Analysis</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="asset/img/sentimenticon.jpg" rel="icon">
  <link href="asset/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('asset/fontawesome-free/css/all.min.css') }}">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('asset/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/vendor/owl.carousel/asset/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  @include('landingpage.layout.HeaderLandingpage')
  <!-- End Header -->

  <!-- ======= Content ======= -->
  @yield('content')
  <!-- End Content -->
  
  <!-- ======= Footer ======= -->
  @include('landingpage.layout.FooterLandingpage')
  <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('asset/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('asset/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('asset/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('asset/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('asset/vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('asset/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('asset/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('asset/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('asset/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('asset/js/main.js') }}"></script>

</body>

</html>
