<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-dark sidenav-active-rounded">
  <div class="brand-sidebar">
    <h1 class="logo-wrapper">
      <a class="brand-logo darken-1" href="{{ route('dashboard') }}">
        <img src="{{ asset('images/logo/materialize-logo.png') }}" alt="materialize-logo"/>
        <span class="logo-text hide-on-med-and-down">SABO</span>
      </a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
  </div>
  <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="accordion">
    <li class="bold {{ Request::segment(1) == 'admin' && Request::segment(2) == '' ? 'active' : '' }}"><a class="waves-effect waves-cyan " href="{{ route('dashboard')}}"><i class="material-icons">dashboard</i><span class="menu-title" data-i18n="">Dashboard</span></a>
    </li>
    <li class="bold {{ Request::segment(2) == 'menu' ? 'active' : '' }}"><a class="waves-effect waves-cyan " href="{{ route('menu.index')}}"><i class="material-icons">menu</i><span class="menu-title" data-i18n="">Menu</span></a>
    </li>
    <li class="bold {{ Request::segment(2) == 'page' ? 'active' : '' }}"><a class="waves-effect waves-cyan " href="{{ route('blog.index')}}"><i class="material-icons">pages</i><span class="menu-title" data-i18n="">Blog</span></a>
    </li>
    <!-- <li class="bold {{ Request::segment(2) == 'news' ? 'active' : '' }}"><a class="collapsible-header waves-effect waves-cyan " href=""><i class="material-icons">pages</i><span class="menu-title" data-i18n="">News</span></a>
      <div class="collapsible-body">
        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
          <li class=""><a class="collapsible-body {{ Request::segment(3) == 'category' ? 'active' : '' }}" href="{ route('news.category.index') }}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>News Category</span></a>
          </li>
          <li class=""><a class="collapsible-body {{ Request::segment(2) == 'news' && Request::segment(3) != 'category' ? 'active' : '' }}" href="{ route('news.index') }}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>News List</span></a>
          </li>
          <li><a class="collapsible-body" href="menu/ltr/dashboard-analytics.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Analytics</span></a>
          </li>
        </ul>
      </div>
    </li> -->
    <li class="bold {{ Request::segment(2) == 'user' ? 'active' : '' }}"><a class="waves-effect waves-cyan " href="{{ route('user.index')}}"><i class="material-icons">person</i><span class="menu-title" data-i18n="">Users</span></a>
    </li>
  </ul>
  <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>