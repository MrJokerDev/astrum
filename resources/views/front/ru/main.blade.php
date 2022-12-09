<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astrum IT Academy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}"  type='image/x-icon'>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset("css/animate.css")}}">
    <link rel="stylesheet" href="{{ asset("css/carousel.css")}}">
    <link rel="stylesheet" href="{{ asset('css/img_animate.css')}}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  	@yield('style')
    <style>
        .navbar {
            width: 100%;
            background-color: #3a3a9257;
        }
    </style>
</head>
{{-- onload="myFunction()" style="margin:0;" --}}
<body>
    {{-- <div id="loader">
        <div class="set1">
            <div class="ball"></div>
            <div class="ball"></div>
        </div>
        <div class="set2">
            <div class="ball"></div>
            <div class="ball"></div>
        </div>
    </div> --}}
    <div id="myDiv">
    <nav class="navbar fixed-top navbar-expand-lg">
        <div class="container">
            <div class="d-flex flex-grow-1">
                <a class="navbar-brand text-right" href="{{ route('ru.index') }}"><img src="{{ asset('images/logo.png') }}" width="100" alt=""></a>
                <div class="w-100 text-end">
                    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar7">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
            <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar7">
                <ul class="navbar-nav ms-auto flex-nowrap">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ru.index') }}">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ru.about_us') }}">О нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ru.courses') }}">Курсы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ru.index') }}#location">Адрес</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ru.gallery') }}">Картинки</a>
                    </li>
                    <li class="nav-item">
                        <a id="btn teleg" class="btn btn-outline-light border-white border border-3" href="#"><i class="bi bi-telephone"></i> +998 (71) 202 42 22</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button id="lang btn" class="btn btn-outline-light dropdown-toggle border-white border border-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            RU
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ route('uz.index') }}">UZ</a>
                                <a class="dropdown-item" href="{{ route('eng.index') }}">EN</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer>
        <div class="container ">

            <div class="row text back">
                <div class="col-sm-7 col-md-7 col-xl-5 offset-xl-7 offset-md-5 offset-sm-5 align-self-center">
                    <h1 class="text-white">Готовы стать учеником Astrum?</h1>
                    <p class="text-white">Хотите стать учеником самой большой современной IT Академии в Средней Азии и сделать первые шаги к своему светлому будущему? Не упустите возможность записаться на курсы Astrum и начать изучать программирование.</p>
                    <a href="{{ route('ru.courses') }}" class="btn btn-light p-3 rounded">Зарегистрируйтесь сейчас</a>
                </div>
            </div>

            <div class="row mt-5 pt-5">
                <div class="text-center">
                    <p style="color: rgba(40, 156, 40, 0.521);" class="fw-bold">Расположение Академии</p>
                    <h1 class="fw-bold">Великие идеи рождаются в лучших местах</h1>
                    <p class="fw-semibold">А мы представляем вам самую удобную локацию</p>
                </div>
            </div>

            <div id="location" class="map mt-5 mb-5 shadow">
                <iframe src="https://yandex.com/map-widget/v1/?um=constructor%3Aa5fc6b59f0b521a61e6064a820c7118f80c70630fcb56c5d8a279fca0f74fda8&amp;source=constructor" width="1280" height="630" frameborder="0"></iframe>
            </div>

            <div class="row pt-5">
                <div class="col-md-4">
                    <p>КУРСЫ И ОБРАЗОВАНИЕ</p>
                    <hr>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <div class="d-flex">
                                    <img class="me-3 rounded" width="50" height="50" src="{{ asset('images/courses/1.png') }}" alt="">
                                    <p>Full Stack developer <br>
                                        12 oy
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <div class="d-flex">
                                    <img class="me-3 rounded" width="50" height="50" src="{{ asset('images/courses/2.png') }}" alt="">
                                    <p>Software engineer<br>
                                        12 oy
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <div class="d-flex">
                                    <img class="me-3 rounded" width="50" height="50" src="{{ asset('images/courses/3.png') }}" alt="">
                                    <p>Data science engineer <br>
                                        12 oy
                                    </p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <p>ASTRUM</p>
                    <hr>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('ru.index') }}">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('ru.about_us') }}">О нас</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('ru.courses') }}">Курсы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('ru.index') }}#location">Адрес</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('ru.gallery') }}">Картинки</a>
                        </li>
                        
                        
                    </ul>
                </div>
                <div class="col-md-4">
                    <p>ALOQA</p>
                    <hr>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="http://instagram.com/astrumuz"><i class="bi bi-instagram"></i> Instagram</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="https://www.facebook.com/Astrumuzb"><i class="bi bi-facebook"></i> Facebook</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="https://t.me/astrumuz"><i class="bi bi-telegram"></i> Telegram</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="info@astrumacademy.org"><i class="bi bi-envelope"></i> Email</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="https://tiktok.com/@astrumuz"><i class="bi bi-tiktok"></i> Tik Tok</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row pt-5 pb-5">
                <div class="col-md-3">
                    <img src="{{ asset('images/logo_1.png') }}" width="100" alt="">
                </div>
                <div class="col-md-5">
                    {{-- <p>Bizning maqsadimiz yordam berish va etkazishdir Siz bizning mahoratimiz va qobiliyatlarimizsiz!</p> --}}
                </div>
                <div class="col-md-4 text-end">
                    <p>Astrum IT academy Ltd 2022 <br> <span class="fw-bold">Terms & Privacy</span></p>
                </div>
            </div>
        </div>
    </footer>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.2/dist/index.bundle.min.js"></script>
 
    @yield('js')
    <script src="{{ asset('js/carusel.js')}}"></script>
</body>

</html>
