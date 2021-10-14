<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta -->
  <meta charset="utf-8">
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no"
  >
  <meta
    name="description"
    content=""
  >
  <meta
    name="author"
    content=""
  >
  <meta
    name="keywords"
    content="MediaCenter, Template, eCommerce"
  >
  <meta
    name="robots"
    content="all"
  >
  <title>Flipmart premium HTML5 & CSS3 Template</title>

  <!-- Bootstrap Core CSS -->
  <link
    rel="stylesheet"
    href="{{ asset('home/css/bootstrap.min.css') }}"
  >

  <!-- Customizable CSS -->
  <link
    rel="stylesheet"
    href="{{ asset('home/css/main.css') }}"
  >
  <link
    rel="stylesheet"
    href="{{ asset('home/css/blue.css') }}"
  >
  <link
    rel="stylesheet"
    href="{{ asset('home/css/owl.carousel.css') }}"
  >
  <link
    rel="stylesheet"
    href="{{ asset('home/css/owl.transitions.css') }}"
  >
  <link
    rel="stylesheet"
    href="{{ asset('home/css/animate.min.css') }}"
  >
  <link
    rel="stylesheet"
    href="{{ asset('home/css/rateit.css') }}"
  >
  <link
    rel="stylesheet"
    href="{{ asset('home/css/bootstrap-select.min.css') }}"
  >

  <!-- Icons/Glyphs -->
  <link
    rel="stylesheet"
    href="{{ asset('home/css/font-awesome.css') }}"
  >

  <!-- Fonts -->
  <link
    href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700'
    rel='stylesheet'
    type='text/css'
  >
  <link
    href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800'
    rel='stylesheet'
    type='text/css'
  >
  <link
    href='https://fonts.googleapis.com/css?family=Montserrat:400,700'
    rel='stylesheet'
    type='text/css'
  >
</head>

<body class="cnt-home">
  <!-- ============================================== HEADER ============================================== -->
  <x-home.header />

  <!-- ============================================== HEADER : END ============================================== -->
  <div
    class="body-content outer-top-xs"
    id="top-banner-and-menu"
  >
    {{ $slot }}
    <!-- /.container -->
  </div>
  <!-- /#top-banner-and-menu -->

  <!-- ============================================================= FOOTER ============================================================= -->
  <x-home.footer />
  <!-- ============================================================= FOOTER : END============================================================= -->

  <!-- For demo purposes – can be removed on production -->

  <!-- For demo purposes – can be removed on production : End -->

  <!-- JavaScripts placed at the end of the document so the pages load faster -->
  <script src="{{ asset('home/js/jquery-1.11.1.min.js') }}"></script>
  <script src="{{ asset('home/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('home/js/bootstrap-hover-dropdown.min.js') }}"></script>
  <script src="{{ asset('home/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('home/js/echo.min.js') }}"></script>
  <script src="{{ asset('home/js/jquery.easing-1.3.min.js') }}"></script>
  <script src="{{ asset('home/js/bootstrap-slider.min.js') }}"></script>
  <script src="{{ asset('home/js/jquery.rateit.min.js') }}"></script>
  <script
    type="text/javascript"
    src="{{ asset('home/js/lightbox.min.js') }}"
  ></script>
  <script src="{{ asset('home/js/bootstrap-select.min.js') }}"></script>
  <script src="{{ asset('home/js/wow.min.js') }}"></script>
  <script src="{{ asset('home/js/scripts.js') }}"></script>
</body>

</html>
