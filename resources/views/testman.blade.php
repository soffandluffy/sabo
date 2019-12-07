<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>DataTable | Materialize</title>
    <link rel="apple-touch-icon" href="{{ asset('images/favicon/apple-touch-icon-152x152.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon/favicon-32x32.png') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/flag-icon/css/flag-icon.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/data-tables/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/data-tables/css/select.dataTables.min.css') }}">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/themes/vertical-dark-menu-template/materialize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/themes/vertical-dark-menu-template/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/layouts/style-horizontal.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/data-tables.css') }}">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom/custom.css') }}">
    <!-- END: Custom CSS-->
  </head>
  <!-- END: Head-->
  <body class="horizontal-layout page-header-light horizontal-menu 2-columns  " data-open="click" data-menu="horizontal-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <header class="page-topbar" id="header">
      <div class="navbar navbar-fixed"> 
        <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-light-blue-cyan">
          <div class="nav-wrapper">
            <ul class="left">
              <li>
                <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="index.html"><img src="{{asset('images/logo/materialize-logo.png')}}" alt="materialize logo"><span class="logo-text hide-on-med-and-down">Materialize</span></a></h1>
              </li>
            </ul>
            <div class="header-search-wrapper hide-on-med-and-down"><i class="material-icons">search</i>
              <input class="header-search-input z-depth-2" type="text" name="Search" placeholder="Explore Materialize">
            </div>
            <ul class="navbar-list right">
              <li class="hide-on-large-only"><a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);"><i class="material-icons">search         </i></a></li>
            </ul>
          </div>
          <nav class="display-none search-sm">
            <div class="nav-wrapper">
              <form>
                <div class="input-field">
                  <input class="search-box-sm" type="search" required="">
                  <label class="label-icon" for="search"><i class="material-icons search-sm-icon">search</i></label><i class="material-icons search-sm-close">close</i>
                </div>
              </form>
            </div>
          </nav>
        </nav>
        <!-- BEGIN: Horizontal nav start-->
        <nav class="white hide-on-med-and-down" id="horizontal-nav">
          <div class="nav-wrapper">
            <ul class="left hide-on-med-and-down" id="ul-horizontal-nav" data-menu="menu-navigation">
              <li><a class="dropdown-menu" href="#" data-target="DashboardDropdown"><i class="material-icons">dashboard</i><span>Dashboard<i class="material-icons right">keyboard_arrow_down</i></span></a>
                <ul class="dropdown-content dropdown-horizontal-list" id="DashboardDropdown">       
                  <li data-menu=""><a href="#">Modern</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- END: Horizontal nav start-->
        </nav>
      </div>
    </header>
    <!-- END: Header-->

    <!-- BEGIN: SideNav-->
    <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-fixed hide-on-large-only">
      <div class="brand-sidebar sidenav-light"></div>
      <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed hide-on-large-only menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
        <li class="bold"><a class="waves-effect waves-cyan " href="#"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="">Dashboard</span></a>
        </li>
      </ul>
      <div class="navigation-background"></div><a class="sidenav-trigger btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>
    <!-- END: SideNav-->

    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s12 m6 l6">
                <h5 class="breadcrumbs-title">DataTable</h5>
              </div>
              <div class="col s12 m6 l6 right-align-md">
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Table</a>
                  </li>
                  <li class="breadcrumb-item active">DataTable
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="col s12">
          <div class="container">
            <div class="section section-data-tables">
  <!-- Page Length Options -->
  <div class="row">
    <div class="col s12">
      <div class="card">
        <div class="card-content">
          <h4 class="card-title">Random page</h4>
          <div class="row">
            <div class="col s12">
              <table id="page-length-option" class="display">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nomor</th>
                    <th>Random</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($test as $key)
                    <tr>
                      <td>{{$key->id}}</td>
                      <td>{{$key->randomn}}</td>
                      <td>{{$key->randoms}}</td>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nomor</th>
                    <th>Random</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div><!-- START RIGHT SIDEBAR NAV -->
<aside id="right-sidebar-nav">
   <div id="slide-out-right" class="slide-out-right-sidenav sidenav rightside-navigation">
      <div class="row">
         <div class="slide-out-right-title">
            <div class="col s12 border-bottom-1 pb-0 pt-1">
               <div class="row">
                  <div class="col s2 pr-0 center">
                     <i class="material-icons vertical-text-middle"><a href="#" class="sidenav-close">clear</a></i>
                  </div>
                  <div class="col s10 pl-0">
                     <ul class="tabs">
                        <li class="tab col s4 p-0">
                           <a href="#messages" class="active">
                              <span>Messages</span>
                           </a>
                        </li>
                        <li class="tab col s4 p-0">
                           <a href="#settings">
                              <span>Settings</span>
                           </a>
                        </li>
                        <li class="tab col s4 p-0">
                           <a href="#activity">
                              <span>Activity</span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="slide-out-right-body">
            <div id="messages" class="col s12">
               <div class="collection border-none">
                  <input class="header-search-input mt-4 mb-2" type="text" name="Search" placeholder="Search Messages" />
                  <ul class="collection p-0">
                     <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                           ><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
                           <i></i>
                        </span>
                        <div class="user-content">
                           <h6 class="line-height-0">Elizabeth Elliott</h6>
                           <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank you</p>
                        </div>
                        <span class="secondary-content medium-small">5.00 AM</span>
                     </li>
                     <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                           ><img src="../../../app-assets/images/avatar/avatar-1.png" alt="avatar" />
                           <i></i>
                        </span>
                        <div class="user-content">
                           <h6 class="line-height-0">Mary Adams</h6>
                           <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello Boo</p>
                        </div>
                        <span class="secondary-content medium-small">4.14 AM</span>
                     </li>
                     <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                           ><img src="../../../app-assets/images/avatar/avatar-2.png" alt="avatar" />
                           <i></i>
                        </span>
                        <div class="user-content">
                           <h6 class="line-height-0">Caleb Richards</h6>
                           <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello Boo</p>
                        </div>
                        <span class="secondary-content medium-small">4.14 AM</span>
                     </li>
                     <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                           ><img src="../../../app-assets/images/avatar/avatar-3.png" alt="avatar" />
                           <i></i>
                        </span>
                        <div class="user-content">
                           <h6 class="line-height-0">Caleb Richards</h6>
                           <p class="medium-small blue-grey-text text-lighten-3 pt-3">Keny !</p>
                        </div>
                        <span class="secondary-content medium-small">9.00 PM</span>
                     </li>
                     <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                           ><img src="../../../app-assets/images/avatar/avatar-4.png" alt="avatar" />
                           <i></i>
                        </span>
                        <div class="user-content">
                           <h6 class="line-height-0">June Lane</h6>
                           <p class="medium-small blue-grey-text text-lighten-3 pt-3">Ohh God</p>
                        </div>
                        <span class="secondary-content medium-small">4.14 AM</span>
                     </li>
                     <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                           ><img src="../../../app-assets/images/avatar/avatar-5.png" alt="avatar" />
                           <i></i>
                        </span>
                        <div class="user-content">
                           <h6 class="line-height-0">Edward Fletcher</h6>
                           <p class="medium-small blue-grey-text text-lighten-3 pt-3">Love you</p>
                        </div>
                        <span class="secondary-content medium-small">5.15 PM</span>
                     </li>
                     <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                           ><img src="../../../app-assets/images/avatar/avatar-6.png" alt="avatar" />
                           <i></i>
                        </span>
                        <div class="user-content">
                           <h6 class="line-height-0">Crystal Bates</h6>
                           <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can we</p>
                        </div>
                        <span class="secondary-content medium-small">8.00 AM</span>
                     </li>
                     <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                           ><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
                           <i></i>
                        </span>
                        <div class="user-content">
                           <h6 class="line-height-0">Nathan Watts</h6>
                           <p class="medium-small blue-grey-text text-lighten-3 pt-3">Great!</p>
                        </div>
                        <span class="secondary-content medium-small">9.53 PM</span>
                     </li>
                     <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                           ><img src="../../../app-assets/images/avatar/avatar-8.png" alt="avatar" />
                           <i></i>
                        </span>
                        <div class="user-content">
                           <h6 class="line-height-0">Willard Wood</h6>
                           <p class="medium-small blue-grey-text text-lighten-3 pt-3">Do it</p>
                        </div>
                        <span class="secondary-content medium-small">4.20 AM</span>
                     </li>
                     <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                           ><img src="../../../app-assets/images/avatar/avatar-1.png" alt="avatar" />
                           <i></i>
                        </span>
                        <div class="user-content">
                           <h6 class="line-height-0">Ronnie Ellis</h6>
                           <p class="medium-small blue-grey-text text-lighten-3 pt-3">Got that</p>
                        </div>
                        <span class="secondary-content medium-small">5.20 AM</span>
                     </li>
                     <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                           ><img src="../../../app-assets/images/avatar/avatar-9.png" alt="avatar" />
                           <i></i>
                        </span>
                        <div class="user-content">
                           <h6 class="line-height-0">Daniel Russell</h6>
                           <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank you</p>
                        </div>
                        <span class="secondary-content medium-small">12.00 AM</span>
                     </li>
                     <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                           ><img src="../../../app-assets/images/avatar/avatar-10.png" alt="avatar" />
                           <i></i>
                        </span>
                        <div class="user-content">
                           <h6 class="line-height-0">Sarah Graves</h6>
                           <p class="medium-small blue-grey-text text-lighten-3 pt-3">Okay you</p>
                        </div>
                        <span class="secondary-content medium-small">11.14 PM</span>
                     </li>
                     <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                           ><img src="../../../app-assets/images/avatar/avatar-11.png" alt="avatar" />
                           <i></i>
                        </span>
                        <div class="user-content">
                           <h6 class="line-height-0">Andrew Hoffman</h6>
                           <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can do</p>
                        </div>
                        <span class="secondary-content medium-small">7.30 PM</span>
                     </li>
                     <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                           ><img src="../../../app-assets/images/avatar/avatar-12.png" alt="avatar" />
                           <i></i>
                        </span>
                        <div class="user-content">
                           <h6 class="line-height-0">Camila Lynch</h6>
                           <p class="medium-small blue-grey-text text-lighten-3 pt-3">Leave it</p>
                        </div>
                        <span class="secondary-content medium-small">2.00 PM</span>
                     </li>
                  </ul>
               </div>
            </div>
            <div id="settings" class="col s12">
               <p class="mt-8 mb-0 ml-5 font-weight-900">GENERAL SETTINGS</p>
               <ul class="collection border-none">
                  <li class="collection-item border-none mt-3">
                     <div class="m-0">
                        <span>Notifications</span>
                        <div class="switch right">
                           <label>
                              <input checked type="checkbox" />
                              <span class="lever"></span>
                           </label>
                        </div>
                     </div>
                  </li>
                  <li class="collection-item border-none mt-3">
                     <div class="m-0">
                        <span>Show recent activity</span>
                        <div class="switch right">
                           <label>
                              <input type="checkbox" />
                              <span class="lever"></span>
                           </label>
                        </div>
                     </div>
                  </li>
                  <li class="collection-item border-none mt-3">
                     <div class="m-0">
                        <span>Show recent activity</span>
                        <div class="switch right">
                           <label>
                              <input type="checkbox" />
                              <span class="lever"></span>
                           </label>
                        </div>
                     </div>
                  </li>
                  <li class="collection-item border-none mt-3">
                     <div class="m-0">
                        <span>Show Task statistics</span>
                        <div class="switch right">
                           <label>
                              <input type="checkbox" />
                              <span class="lever"></span>
                           </label>
                        </div>
                     </div>
                  </li>
                  <li class="collection-item border-none mt-3">
                     <div class="m-0">
                        <span>Show your emails</span>
                        <div class="switch right">
                           <label>
                              <input type="checkbox" />
                              <span class="lever"></span>
                           </label>
                        </div>
                     </div>
                  </li>
                  <li class="collection-item border-none mt-3">
                     <div class="m-0">
                        <span>Email Notifications</span>
                        <div class="switch right">
                           <label>
                              <input checked type="checkbox" />
                              <span class="lever"></span>
                           </label>
                        </div>
                     </div>
                  </li>
               </ul>
               <p class="mt-8 mb-0 ml-5 font-weight-900">SYSTEM SETTINGS</p>
               <ul class="collection border-none">
                  <li class="collection-item border-none mt-3">
                     <div class="m-0">
                        <span>System Logs</span>
                        <div class="switch right">
                           <label>
                              <input type="checkbox" />
                              <span class="lever"></span>
                           </label>
                        </div>
                     </div>
                  </li>
                  <li class="collection-item border-none mt-3">
                     <div class="m-0">
                        <span>Error Reporting</span>
                        <div class="switch right">
                           <label>
                              <input type="checkbox" />
                              <span class="lever"></span>
                           </label>
                        </div>
                     </div>
                  </li>
                  <li class="collection-item border-none mt-3">
                     <div class="m-0">
                        <span>Applications Logs</span>
                        <div class="switch right">
                           <label>
                              <input checked type="checkbox" />
                              <span class="lever"></span>
                           </label>
                        </div>
                     </div>
                  </li>
                  <li class="collection-item border-none mt-3">
                     <div class="m-0">
                        <span>Backup Servers</span>
                        <div class="switch right">
                           <label>
                              <input type="checkbox" />
                              <span class="lever"></span>
                           </label>
                        </div>
                     </div>
                  </li>
                  <li class="collection-item border-none mt-3">
                     <div class="m-0">
                        <span>Audit Logs</span>
                        <div class="switch right">
                           <label>
                              <input type="checkbox" />
                              <span class="lever"></span>
                           </label>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
            <div id="activity" class="col s12">
               <div class="activity">
                  <p class="mt-5 mb-0 ml-5 font-weight-900">SYSTEM LOGS</p>
                  <ul class="collection with-header">
                     <li class="collection-item">
                        <div class="font-weight-900">
                           Homepage mockup design <span class="secondary-content">Just now</span>
                        </div>
                        <p class="mt-0 mb-2">Melissa liked your activity.</p>
                        <span class="new badge amber" data-badge-caption="Important"> </span>
                     </li>
                     <li class="collection-item">
                        <div class="font-weight-900">
                           Melissa liked your activity Drinks. <span class="secondary-content">10 mins</span>
                        </div>
                        <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                        <span class="new badge light-green" data-badge-caption="Resolved"></span>
                     </li>
                     <li class="collection-item">
                        <div class="font-weight-900">
                           12 new users registered <span class="secondary-content">30 mins</span>
                        </div>
                        <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                     </li>
                     <li class="collection-item">
                        <div class="font-weight-900">
                           Tina is attending your activity <span class="secondary-content">2 hrs</span>
                        </div>
                        <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                     </li>
                     <li class="collection-item">
                        <div class="font-weight-900">
                           Josh is now following you <span class="secondary-content">5 hrs</span>
                        </div>
                        <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                        <span class="new badge red" data-badge-caption="Pending"></span>
                     </li>
                  </ul>
                  <p class="mt-5 mb-0 ml-5 font-weight-900">APPLICATIONS LOGS</p>
                  <ul class="collection with-header">
                     <li class="collection-item">
                        <div class="font-weight-900">
                           New order received urgent <span class="secondary-content">Just now</span>
                        </div>
                        <p class="mt-0 mb-2">Melissa liked your activity.</p>
                     </li>
                     <li class="collection-item">
                        <div class="font-weight-900">System shutdown. <span class="secondary-content">5 min</span></div>
                        <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                        <span class="new badge blue" data-badge-caption="Urgent"> </span>
                     </li>
                     <li class="collection-item">
                        <div class="font-weight-900">
                           Database overloaded 89% <span class="secondary-content">20 min</span>
                        </div>
                        <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                     </li>
                  </ul>
                  <p class="mt-5 mb-0 ml-5 font-weight-900">SERVER LOGS</p>
                  <ul class="collection with-header">
                     <li class="collection-item">
                        <div class="font-weight-900">System error <span class="secondary-content">10 min</span></div>
                        <p class="mt-0 mb-2">Melissa liked your activity.</p>
                     </li>
                     <li class="collection-item">
                        <div class="font-weight-900">
                           Production server down. <span class="secondary-content">1 hrs</span>
                        </div>
                        <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                        <span class="new badge blue" data-badge-caption="Urgent"></span>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Slide Out Chat -->
   <ul id="slide-out-chat" class="sidenav slide-out-right-sidenav-chat">
      <li class="center-align pt-2 pb-2 sidenav-close chat-head">
         <a href="#!"><i class="material-icons mr-0">chevron_left</i>Elizabeth Elliott</a>
      </li>
      <li class="chat-body">
         <ul class="collection">
            <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
                  ><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
               </span>
               <div class="user-content speech-bubble">
                  <p class="medium-small">hello!</p>
               </div>
            </li>
            <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
               <div class="user-content speech-bubble-right">
                  <p class="medium-small">How can we help? We're here for you!</p>
               </div>
            </li>
            <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
                  ><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
               </span>
               <div class="user-content speech-bubble">
                  <p class="medium-small">I am looking for the best admin template.?</p>
               </div>
            </li>
            <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
               <div class="user-content speech-bubble-right">
                  <p class="medium-small">Materialize admin is the responsive materializecss admin template.</p>
               </div>
            </li>

            <li class="collection-item display-grid width-100 center-align">
               <p>8:20 a.m.</p>
            </li>

            <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
                  ><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
               </span>
               <div class="user-content speech-bubble">
                  <p class="medium-small">Ohh! very nice</p>
               </div>
            </li>
            <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
               <div class="user-content speech-bubble-right">
                  <p class="medium-small">Thank you.</p>
               </div>
            </li>
            <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
                  ><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
               </span>
               <div class="user-content speech-bubble">
                  <p class="medium-small">How can I purchase it?</p>
               </div>
            </li>

            <li class="collection-item display-grid width-100 center-align">
               <p>9:00 a.m.</p>
            </li>

            <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
               <div class="user-content speech-bubble-right">
                  <p class="medium-small">From ThemeForest.</p>
               </div>
            </li>
            <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
               <div class="user-content speech-bubble-right">
                  <p class="medium-small">Only $24</p>
               </div>
            </li>
            <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
                  ><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
               </span>
               <div class="user-content speech-bubble">
                  <p class="medium-small">Ohh! Thank you.</p>
               </div>
            </li>
            <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
                  ><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
               </span>
               <div class="user-content speech-bubble">
                  <p class="medium-small">I will purchase it for sure.</p>
               </div>
            </li>
            <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
               <div class="user-content speech-bubble-right">
                  <p class="medium-small">Great, Feel free to get in touch on</p>
               </div>
            </li>
            <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
               <div class="user-content speech-bubble-right">
                  <p class="medium-small">https://pixinvent.ticksy.com/</p>
               </div>
            </li>
         </ul>
      </li>
      <li class="center-align chat-footer">
         <form class="col s12" onsubmit="slide_out_chat()" action="javascript:void(0);">
            <div class="input-field">
               <input id="icon_prefix" type="text" class="search" />
               <label for="icon_prefix">Type here..</label>
               <a onclick="slide_out_chat()"><i class="material-icons prefix">send</i></a>
            </div>
         </form>
      </li>
   </ul>
</aside>
<!-- END RIGHT SIDEBAR NAV -->
            <!-- <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top"><a class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow"><i class="material-icons">add</i></a> -->
    <!-- <ul>
        <li><a href="css-helpers.html" class="btn-floating blue"><i class="material-icons">help_outline</i></a></li>
        <li><a href="cards-extended.html" class="btn-floating green"><i class="material-icons">widgets</i></a></li>
        <li><a href="app-calendar.html" class="btn-floating amber"><i class="material-icons">today</i></a></li>
        <li><a href="app-email.html" class="btn-floating red"><i class="material-icons">mail_outline</i></a></li>
    </ul> -->
</div>
          </div>
        </div>
      </div>
    </div>
    <!-- END: Page Main-->

    <!-- BEGIN: Footer-->

    <footer class="page-footer footer footer-static footer-light navbar-border navbar-shadow">
      <div class="footer-copyright">
        <div class="container"><span>&copy; 2019          <a href="http://google.com" target="_blank">Test</a> All rights reserved.</span><span class="right hide-on-small-only">Design and Developed by <a href="https://google.com/">Sabo</a></span></div>
      </div>
    </footer>

    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('js/vendors.min.js') }}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{ asset('vendors/data-tables/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/data-tables/js/dataTables.select.min.js') }}" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="{{ asset('js/plugins.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/custom/custom-script.js') }}" type="text/javascript"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{ asset('js/scripts/data-tables.js') }}" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>