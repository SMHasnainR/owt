  <!-- ======= Header ======= -->
  <?php 
  use Illuminate\Http\Request;
  ?>
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto row">
        <div class="col-sm-3 p-0 d-none d-sm-inline">
          <img src="{{asset('assets/img/owt-logo-real.png')}}" class='w-100' alt="">
        </div>
        <div class="col-sm-9 d-flex align-items-center">
          <a href="/">One Window<br>Technologies</a>
        </div>
      </h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="main-nav d-none d-lg-block">
        <ul>
          <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/">Home</a></li>
          {{-- <li class="{{ request()->is('about') ? 'active' : '' }}"><a href="#about">About Us</a></li> --}}
          <li class="{{ request()->is('services') ? 'active' : '' }}"><a href="/services">Services</a></li>
          <li class="{{ request()->is('portfolio') ? 'active' : '' }}"><a href="/portfolio">Portfolio</a></li>
          {{-- <li class="{{ request()->is('portfolio') ? 'active' : '' }}"><a href="/portfolio">Portfolio</a></li>     --}}
          
          <!-- <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li> -->
          
          <li class="{{ request()->is('contact-us') ? 'active' : '' }}"><a href="{{ route('contact') }}" >Contact Us</a></li>
          <li class="shop-button"  ><a href="{{ route('shop') }}"> store </a></li>
          
        </ul>
      </nav><!-- .main-nav-->

    </div>
  </header><!-- End Header -->