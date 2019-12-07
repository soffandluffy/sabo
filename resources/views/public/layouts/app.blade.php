<!DOCTYPE html>
<html>
<head class="loading" lang="en" data-textdirection="ltr">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
  <meta name="author" content="ThemeSelect">
	<title>Home</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- BEGIN: VENDOR CSS-->
  <!-- <link rel="stylesheet" type="text/css" href="{{ asset('vendors/vendors.min.css') }}"> -->
  <!-- <link rel="stylesheet" type="text/css" href="{{ asset('vendors/flag-icon/css/flag-icon.min.css') }}"> -->
  <!-- <link rel="stylesheet" type="text/css" href="{{ asset('vendors/magnific-popup/magnific-popup.css') }}"> -->
  <!-- <link rel="stylesheet" type="text/css" href="{{ asset('vendors/fullcalendar/css/fullcalendar.min.css') }}"> -->
  <!-- <link rel="stylesheet" type="text/css" href="{{ asset('vendors/data-tables/css/jquery.dataTables.min.css') }}"> -->
  <!-- <link rel="stylesheet" type="text/css" href="{{ asset('vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css') }}"> -->
  <!-- <link rel="stylesheet" type="text/css" href="{{ asset('vendors/data-tables/css/select.dataTables.min.css') }}"> -->
  <!-- <link rel="stylesheet" type="text/css" href="{{ asset('vendors/sweetalert/sweetalert2.min.css') }}"> -->
  <!-- END: VENDOR CSS-->
  <!-- BEGIN: Page Level CSS-->
  <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/themes/vertical-dark-menu-template/materialize.css') }}"> -->
  <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/themes/vertical-dark-menu-template/style.css') }}"> -->
  <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/component-navbar.css') }}"> -->
  <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/page-blog.css') }}"> -->
  <!-- <link rel="stylesheet" type="text/css" href="{{ asset('vendors/animate-css/animate.css') }}"> -->
  <!-- <script src="https://api.tiles.mapbox.com/mapbox-gl-js/v0.53.1/mapbox-gl.js"></script> -->
  <!-- <link href="https://api.tiles.mapbox.com/mapbox-gl-js/v0.53.1/mapbox-gl.css" rel="stylesheet" /> -->
  
  <!-- END: Page Level CSS-->
  <!-- BEGIN: Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/custom/startup-materialize.min.css') }}">
  <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/custom/plyr.css') }}"> -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/custom/custom.css') }}">
  <!-- END: Custom CSS-->

</head>
<body>

  <!-- Navbar -->
    @include('public.layouts.navbar')

    @include('public.layouts.sidenav')
      
    <!-- BEGIN: Header-->
    @include('public.layouts.header')
    <!-- END: Header-->

	<div id="main">
		@yield('main')
	</div>

	<!-- BEGIN: Footer-->

    <footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col s6 m3">
            <img class="materialize-logo" src="{{ asset('images/startup/materialize-teal.png') }}" alt="">
            <p>Made by SABO.</p>
          </div>
          <div class="col s6 m3">
            <h5>About</h5>
            <ul>
              <li><a href="#!">Blog</a></li>
              <!-- <li><a href="#!">Pricing</a></li> -->
              <!-- <li><a href="#!">Docs</a></li> -->
            </ul>
          </div>
          <div class="col s6 m3">
            <h5>Connect</h5>
            <ul>
              <li><a href="#!">Community</a></li>
              <li><a href="#!">Subscribe</a></li>
              <li><a href="#!">Email</a></li>
            </ul>
          </div>
          <div class="col s6 m3">
            <h5>Contact</h5>
            <ul>
              <li><a href="#!">Facebook</a></li>
              <li><a href="#!">Instagram</a></li>
              <li><a href="#!">Github</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="{{ asset('js/custom/materialize.min.js') }}" type="text/javascript"></script>
    <!-- <script src="{{ asset('js/vendors.min.js') }}" type="text/javascript"></script> -->
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- <script src="{{ asset('vendors/magnific-popup/jquery.magnific-popup.min.js') }}" type="text/javascript"></script> -->
    <script src="{{ asset('js/custom/imagesloaded.pkgd.min.js') }}" type="text/javascript"></script>
    <!-- <script src="{{ asset('vendors/fullcalendar/lib/jquery-ui.min.js') }}" type="text/javascript"></script> -->
    <!-- <script src="{{ asset('vendors/fullcalendar/lib/moment.min.js') }}" type="text/javascript"></script> -->
    <!-- <script src="{{ asset('vendors/fullcalendar/js/fullcalendar.min.js') }}" type="text/javascript"></script> -->
    <!-- <script src="{{ asset('vendors/data-tables/js/jquery.dataTables.min.js') }}" type="text/javascript"></script> -->
    <!-- <script src="{{ asset('vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js') }}" type="text/javascript"></script> -->
    <!-- <script src="{{ asset('vendors/data-tables/js/dataTables.select.min.js') }}" type="text/javascript"></script> -->
    <!-- <script src="{{ asset('vendors/formatter/jquery.formatter.min.js') }}" type="text/javascript"></script> -->
    <!-- <script src="{{ asset('vendors/sweetalert/sweetalert2.all.min.js') }}"></script> -->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <!-- <script src="{{ asset('js/plugins.js') }}" type="text/javascript"></script> -->
    <!-- <script src="{{ asset('js/custom/plyr.js') }}" type="text/javascript"></script> -->
    <!-- <script src="{{ asset('js/custom/wow.min.js') }}" type="text/javascript"></script> -->
    <!-- <script src="{{ asset('js/custom/materialize-music-player.js') }}" type="text/javascript"></script> -->
    <script src="{{ asset('js/custom/masonry.pkgd.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/custom/TweenMax.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/custom/ScrollMagic.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/custom/animation.gsap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/custom/startup.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/custom/init.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/custom/custom-script.js') }}" type="text/javascript"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
    <!-- SCRIPT -->
    <script type="text/javascript">
    	
    </script>
    @yield('script')
</body>
</html>