<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Dashboard | SABO </title>
    <link rel="apple-touch-icon" href="{{ asset('images/favicon/apple-touch-icon-152x152.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon/favicon-32x32.png') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/vendors.min.css') }}">
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('vendors/sweetalert/sweetalert2.min.css') }}"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/data-tables/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/data-tables/css/select.dataTables.min.css') }}">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/dashboard.css') }}">
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('vendors/fullcalendar/css/fullcalendar.min.css') }}"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/themes/vertical-dark-menu-template/materialize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/themes/vertical-dark-menu-template/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/data-tables.css') }}">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/custom/dropify.css') }}"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom/custom.css') }}">
    <!-- END: Custom CSS-->
  </head>
  <!-- END: Head-->
  <body class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu 2-columns" data-open="click" data-menu="vertical-dark-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    @include('admin.layouts.header')
    <!-- END: Header-->

    <!-- BEGIN: SideNav-->
    @include('admin.layouts.sidenav')
    <!-- END: SideNav-->

    <!-- BEGIN: Page Main-->
    <div id="main">
      @yield('main')
    </div>
    <!-- END: Page Main-->

    <!-- BEGIN: Footer-->

    <footer class="page-footer footer footer-static footer-light navbar-border navbar-shadow">
      <div class="footer-copyright">
        <div class="container"><span>&copy; 2019          <a href="http://google.com" target="_blank">KKP Jambi</a> All rights reserved.</span><span class="right hide-on-small-only">Design and Developed by <a href="https://google.com/">Sab</a></span></div>
      </div>
    </footer>

    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('js/vendors.min.js') }}" type="text/javascript"></script>
    <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-database.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- <script src="{{ asset('vendors/chartjs/chart.min.js') }}"></script> -->
    <!-- <script src="{{ asset('vendors/fullcalendar/lib/jquery-ui.min.js') }}" type="text/javascript"></script> -->
    <!-- <script src="{{ asset('vendors/sweetalert/sweetalert2.all.min.js') }}"></script> -->
    <!-- <script src="{{ asset('vendors/fullcalendar/lib/moment.min.js') }}" type="text/javascript"></script> -->
    <!-- <script src="{{ asset('vendors/fullcalendar/js/fullcalendar.min.js') }}" type="text/javascript"></script> -->
    <script src="{{ asset('vendors/data-tables/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/data-tables/js/dataTables.select.min.js') }}" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="{{ asset('js/plugins.js') }}" type="text/javascript"></script>
    <!-- <script src="{{ asset('js/custom/tinymce/tinymce.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/custom/dropify.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/custom/wow.min.js') }}" type="text/javascript"></script> -->
    <script src="{{ asset('js/custom/custom-script.js') }}" type="text/javascript"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- <script src="{{ asset('js/scripts/dashboard-ecommerce.js') }}" type="text/javascript"></script> -->
    <!-- END PAGE LEVEL JS-->

    @yield('script')
  </body>
</html>