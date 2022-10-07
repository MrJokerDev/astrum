<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astrum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset("css/animate.css")}}">
    <link rel="stylesheet" href="{{ asset("css/carousel.css")}}">
    <link rel="stylesheet" href="{{ asset('css/img_animate.css')}}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  	@yield('style')
</head>
<body>

    <div id="top-header" class="top-header top-header_1">
        <div class="text-center">
            <p class="p-3 mb-0 text-white"><span>&#129395;</span> Full stack programmisti! <a id="arrow" href="#">Guruhga qo'shiling <i id="arrow_1" class="bi bi-arrow-right"></i></a></p>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <div class="d-flex flex-grow-1">
                <a class="navbar-brand text-right" href="{{ route('uz.index') }}"><img src="{{ asset('images/logo.png') }}" width="100" alt=""></a>
                <div class="w-100 text-end">
                    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar7">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
            <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar7">
                <ul class="navbar-nav ms-auto flex-nowrap">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('uz.index') }}#location">Manzil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('uz.gallery') }}">Foto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('uz.job') }}">Bosh ish o'rinlari</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('uz.courses') }}">Kurslar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('uz.index') }}#mentors">Mentorlar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('uz.about_us') }}">Kompaniya xaqida</a>
                    </li>
                    <li class="nav-item">
                        <a id="btn teleg" class="btn btn-outline-light border-white border border-3" href="#"><i class="bi bi-telegram"></i> Telegramga qo'shing</a>
                    </li>
                    <li class="nav-item">
                        <a id="btn" style="color: #333; font-weight: 700;" class="btn btn-light border border-3" type="button" href="#">Eng yaxshi kurslar</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button id="lang btn" class="btn btn-outline-light dropdown-toggle border-white border border-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            UZ
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ route('ru.index') }}">RU</a>
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
                <div class="col-sm-8 col-md-8 col-xl-5 offset-xl-6 offset-md-6 offset-sm-6 align-self-center">
                    <h1 class="text-white">Astrum o'quvchisi bo'lishga tayyormisiz?</h1>
                    <p class="text-white">O'rta Osiyodagi eng katta zamonaviy IT Akademiyaning o'quvchisi bo'lishni va yorqin kelajaging tomon ilk qadamlarni qo'yishni xohlaysizmi? Fursatni boy bermang, Astrum kurslariga yozil va dasturlashni o'rganishni boshlang.</p>
                    <a href="{{ route('uz.courses') }}" class="btn btn-light p-3 rounded">Kursni tanlash</a>
                </div>
            </div>

            <div class="row pt-5">
                <div class="col-md-4">
                    <p>KURSLAR VA TA'LIM</p>
                    <hr>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <div class="d-flex">
                                    <img class="me-3 rounded" width="50" height="50" src="{{ asset('images/web-developer.jpg') }}" alt="">
                                    <p>Full Stack developer <br>
                                        12 oy
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <div class="d-flex">
                                    <img class="me-3 rounded" width="50" height="50" src="{{ asset('images/web-developer.jpg') }}" alt="">
                                    <p>Software engineer<br>
                                        12 oy
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <div class="d-flex">
                                    <img class="me-3 rounded" width="50" height="50" src="{{ asset('images/web-developer.jpg') }}" alt="">
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
                            <a class="nav-link" href="{{ route('uz.index') }}#location">Manzil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('uz.gallery') }}">Foto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('uz.job') }}">Bosh ish o'rinlari</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('uz.courses') }}">Kurslar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('uz.about_us') }}">Kompaniya xaqida</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <p>ALOQA</p>
                    <hr>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-instagram"></i> Instagram</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-facebook"></i> Facebook</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-telegram"></i> Telegram</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-envelope"></i> Email</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row pt-5 pb-5">
                <div class="col-md-3">
                    <img src="{{ asset('images/logo_1.png') }}" width="100" alt="">
                </div>
                <div class="col-md-5">
                    <p>Bizning maqsadimiz yordam berish va etkazishdir Siz bizning mahoratimiz va qobiliyatlarimizsiz!</p>
                </div>
                <div class="col-md-4 text-end">
                    <p>Astrum IT academy Ltd 2022 <br> <span class="fw-bold">Terms & Privacy</span></p>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    @yield('js')
    <script src="{{ asset('js/carusel.js')}}"></script>
</body>

</html>
