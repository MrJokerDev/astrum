    <link rel="stylesheet" href="{{ asset('css/navbar/style.css') }}">
    <script src="{{ asset('css/navbar/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('css/navbar/main.js') }}"></script>
    <script src="{{ asset('css/navbar/jquery.sticky.js') }}"></script>

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle">
            <i class="bi bi-x-lg"></i>
          </span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    <!-- .site-mobile-menu -->

    <div class="site-navbar-wrap">
      <div class="site-navbar-top">
        <div class="container py-3">
          <div class="row align-items-center">
            <div class="col-6">
              <div class="d-flex me-auto">
                <a
                  href="mailto:info@astrum.uz"
                  target="_blank"
                  class="d-flex align-items-center me-4"
                >
                  <i class="bi bi-envelope me-2"></i>
                  <span class="d-none d-md-inline-block">info@astrum.uz</span>
                </a>
                <a
                  href="tel:+998712024222"
                  class="d-flex align-items-center me-auto"
                >
                  <i class="bi bi-phone me-2"></i>
                  <span class="d-none d-md-inline-block"
                    >+998 71 202 42 22</span
                  >
                </a>
              </div>
            </div>
            <div class="col-6 text-end">
              <div class="me-auto">
                <a target="_blank" href="http://instagram.com/astrumuz" class="p-2 pl-0"><i class="bi bi-instagram"></i></a>
                <a target="_blank" href="https://www.facebook.com/Astrumuzb" class="p-2 pl-0"><i class="bi bi-facebook"></i></a>
                <a target="_blank" href="https://t.me/astrumuz" class="p-2 pl-0"><i class="bi bi-telegram"></i></a>
                <a target="_blank" href="https://tiktok.com/@astrumuz" class="p-2 pl-0"><i class="bi bi-tiktok"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="site-navbar site-navbar-target js-sticky-header">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-2">
              <h1 class="my-0 site-logo">
                <a href="{{ route('eng.index') }}">
                    <img loading="lazy" src="{{ asset('images/logo.png') }}" width="100" alt="logo">
                </a>
              </h1>
            </div>
            <div class="col-10">
              <nav class="site-navigation text-end" role="navigation">
                <div class="container">
                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3">
                    <a
                      href="#"
                      class="site-menu-toggle js-menu-toggle text-white"
                      ><i class="bi bi-list"></i
                    ></a>
                  </div>

                  <ul
                    class="site-menu main-menu js-clone-nav d-none d-lg-block"
                  >
                    <li class="active">
                      <a href="{{ route('eng.index') }}" class="nav-link">Home</a>
                    </li>
                    <li><a href="{{ route('eng.courses') }}" class="nav-link">Courses</a></li>
                    <li>
                      <a href="{{ route('eng.index') }}#location" class="nav-link">Address</a>
                    </li>
                    <li>
                      <a href="{{ route('eng.gallery') }}" class="nav-link">Pictures</a>
                    </li>
                    <li>
                      <a href="{{ route('eng.about_us') }}" class="nav-link">About us</a>
                    </li>
                    <li class="dropdown">
                      <button
                        class="btn btn-primary dropdown-toggle"
                        type="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        ENG
                      </button>
                      <ul class="dropdown-menu">
                          @php
                              $url_route = \Illuminate\Support\Facades\Route::current()->getName();
                              $link = explode('eng.',$url_route);
                          @endphp
                        <li>
                          <a class="dropdown-item" href="{{ route('ru.' . $link[1]) }}">RU</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="{{ route('uz.' . $link[1]) }}">UZ</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
