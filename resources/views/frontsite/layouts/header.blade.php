
<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">ST.JOSEPH SEMINARY-KAENGESA</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ url('/') }}" class="active">Home<br></a></li>
          <li><a href="{{ url('frontsite/about') }}">About</a></li>
          <li><a href="{{ url('frontsite/courses') }}">Courses</a></li>
          <li><a href="{{ url('frontsite/trainers') }}">Trainers</a></li>
          <li><a href="{{ url('frontsite/events') }}">Events</a></li>
          <li><a href="{{ url('frontsite/pricing') }}">Pricing</a></li>

          <li><a href="{{ url('frontsite/contact') }}">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="{{ url('auth/login') }}" class="rounded-0">SIMS</a>

    </div>
  </header>
