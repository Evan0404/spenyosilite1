<header id="header" class="fixed-top header-inner-pages">
  <div class="container d-flex align-items-center justify-content-between">

    <h1 class="logo"><a href="/"><img src="https://1.bp.blogspot.com/-8Dm3ThIvss8/YJkx26zBFuI/AAAAAAAAAEI/p_DkdqIyr0opUs-4mUcILz_JzcXVfSHNgCLcBGAsYHQ/s0/1516587899302.jpg" alt="" class="img-fluid " style="width: 36px; border-radius: 75%;">SpenyosiLite</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <!-- <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link" href="/dassboard">Home</a></li>
        <li><a class="nav-link" href="/crud">CRUD</a></li>
        <li><a class="getstarted scrollto" href="/">Cek Web</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav> -->
    <!-- .navbar -->

    <nav class="navbar navbar-expand-md  navbar-light shadow-sm">
            <div class="container">
                <!-- <a class="navbar-brand bg-seccondary" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> -->
                <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> -->
                <button type="button" class="navbar-toggler" data-bs-toggle="modal" data-bs-target="#menu">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->


                    <!-- Right Side Of Navbar -->

                        <!-- Authentication Links -->
                        <!-- @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else -->

                        <!-- <li>        <a id="nav-item" class="nav-link text-light">
                                    {{ Auth::user()->name }}
                                </a>
                        </li> -->

                        <ul  class="navbar-nav ml-auto bg-seccondary" id="navbarSupportedContent">
                          <li>
                                  <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"> -->
                                      <a class=" bg-seccondary text-light" href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                                          {{ __('Logout') }}
                                      </a>
                          </li>
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                          @csrf
                                      </form>



                    </ul>
                </div>
            </div>
        </nav>

  </div>
</header><!-- End Header -->

<div class="modal fade" id="menu" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

          <a class=" bg-seccondary text-dark" href="{{ route('logout') }}"
             onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
        @endguest
      </div>
      <div class="modal-footer">
        <small>
          SupportByStevanus2021
        </small>
      </div>
    </div>
  </div>
</div>
