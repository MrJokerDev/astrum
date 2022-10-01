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
            <p class="p-3 mb-0 text-white"><span>&#129395;</span> Full stack разработчик с Javascript! <a id="arrow" href="#">Присоединится к
                    группе <i id="arrow_1" class="bi bi-arrow-right"></i></a></p>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <div class="d-flex flex-grow-1">
                <a class="navbar-brand text-right" href="{{ route('eng.index') }}">Logo</a>
                <div class="w-100 text-end">
                    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar7">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
            <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar7">
                <ul class="navbar-nav ms-auto flex-nowrap">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('eng.index') }}#location">Локатции</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('eng.gallery') }}">Фото</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('eng.job') }}">Карьера</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('eng.courses') }}">Курсы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('eng.index') }}#mentors">Менторы</a>
                    </li>

                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('eng.news') }}">Новости</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('eng.about_us') }}">О компании</a>
                    </li>
                    <li class="nav-item">
                        <a id="btn" class="btn btn-outline-light border-white" href="#"><i class="bi bi-telegram"></i> Добавляйся Free в Telegram</a>
                    </li>
                    <li class="nav-item">
                        <a id="btn" style="color: #333; font-weight: 700;" class="btn btn-light" type="button" href="#">Лутшие курсы</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button id="lang btn" class="btn btn-outline-light dropdown-toggle border-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            EN
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ route('uz.index') }}">UZ</a>
                                <a class="dropdown-item" href="{{ route('ru.index') }}">RU</a>
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
                <div class="col-md-7"></div>
                <div class="col-md-5 align-self-center">
                    <h1 class="text-white">Готовы стать <br> наши студентом?</h1>
                    <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos obcaecati dicta recusandae ex molestias beatae nostrum sapiente ab! Perspiciatis, commodi tenetur nostrum molestias veritatis excepturi assumenda libero? Fuga, deserunt accusantium!</p>
                    <a href="{{ route('eng.courses') }}" class="btn btn-light p-3 mt-5 rounded">Выбратть курс</a>
                </div>
            </div>

            <div class="row pt-5">
                <div class="col-md-3">
                    <p>КУРСЫ И ОБРАЗОВАНИЕ</p>
                    <hr>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <div class="d-flex">
                                    <img class="me-3 rounded" width="50" height="50" src="{{ asset('images/web-developer.jpg') }}" alt="">
                                    <p>Full Stack developer <br>
                                        12 moon
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <div class="d-flex">
                                    <img class="me-3 rounded" width="50" height="50" src="{{ asset('images/web-developer.jpg') }}" alt="">
                                    <p>Software engineer<br>
                                        12 moon
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <div class="d-flex">
                                    <img class="me-3 rounded" width="50" height="50" src="{{ asset('images/web-developer.jpg') }}" alt="">
                                    <p>Data science engineer <br>
                                        12 moon
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <div class="d-flex">
                                    <img class="me-3 rounded" width="50" height="50" src="{{ asset('images/web-developer.jpg') }}" alt="">
                                    <p>3D max specialist <br>
                                        12 moon
                                    </p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <p>МЕРОПРИЯТИЯ И ТРЕНИНГИ</p>
                    <hr>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">День открытых дверей</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Футбольный кубок Astrum</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Презентация курса Full Stack developer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Ярмарка курсов разных специальностей</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <p>ASTRUM</p>
                    <hr>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('eng.index') }}#location">Локатции</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('eng.gallery') }}">Фото</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('eng.job') }}">Карьера</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('eng.courses') }}">Курсы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('eng.news') }}">Новости</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('eng.about_us') }}">О компании</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <p>СВЯЗАТЬСИЯ</p>
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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit eveniet molestiae facere nihil, optio eos quia nulla facilis id libero placeat possimus ipsum quis quasi magnam enim, saepe beatae adipisci?</p>
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
