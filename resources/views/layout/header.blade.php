<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="ml-2 brand-logo" href="/dashboard"><img src="{{ asset('images/logo-mui.png') }} " class="mr-2" alt="logo" width="90"/></a>
    <a class="navbar-brand brand-logo-mini" href="/dashboard"><img src="{{ asset('images/logo-mui-small.png') }} " alt="logo"/></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="icon-menu"></span>
    </button>
    <ul class="navbar-nav mr-lg-2">
    </ul>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle rounded p-1 bg-light" href="#" data-toggle="dropdown" id="profileDropdown">
          <img class="img-thumbnail" src="{{ asset('/images/admin.png')}}" alt="">
          <span class="count">{{ session('user_name') }}</span>
          <i class="ti-shift-right-alt menu-icon mx-0"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <a class="dropdown-item" href="/logout">
            <i class="ti-power-off text-primary"></i>
            Logout
          </a>
        </div>
      </li>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="icon-menu"></span>
    </button>
  </div>
</nav>