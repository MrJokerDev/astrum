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

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QSSVRGJ4BK"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-QSSVRGJ4BK');
    </script>

</head>
<body>

    @include('front.uz.component.navbar')
    @yield('content')

    <footer>
        <div class="container">
            <div class="row text back">
                <div class="col-sm-7 col-md-7 col-xl-5 offset-xl-7 offset-md-5 offset-sm-5 align-self-center">
                    <h1 class="text-white">Astrum o'quvchisi bo'lishga tayyormisiz?</h1>
                    <p class="text-white">O'rta Osiyodagi eng katta zamonaviy IT Akademiyaning o'quvchisi bo'lishni va yorqin kelajagingiz tomon ilk qadamlarni qo'yishni xohlaysizmi? Fursatni boy bermang, Astrum kurslariga yoziling va dasturlashni o'rganishni boshlang.</p>
                </div>
            </div>

            <div class="row mt-5 pt-5">
                <div class="text-center">
                    <p style="color: rgba(40, 156, 40, 0.521);" class="fw-bold">Akademiya joylashuvi</p>
                    <h1 class="fw-bold">Buyuk g'oyalar eng yaxshi joylarda tug'iladi</h1>
                    <p class="fw-semibold">Biz esa sizga eng qulay lokatsiyani taqdim etamiz</p>
                </div>
            </div>

            <div id="location" class="map mt-5 mb-5 shadow">
                <iframe src="https://yandex.com/map-widget/v1/?um=constructor%3Aa5fc6b59f0b521a61e6064a820c7118f80c70630fcb56c5d8a279fca0f74fda8&amp;source=constructor" width="1280" height="630" frameborder="0"></iframe>
            </div>

            <div class="row pt-5">
                <div class="col-md-4">
                    <p>KURSLAR VA TA'LIM</p>
                    <hr>
                    <ul class="nav flex-column">
                        @foreach($courses as $course)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route($langRoute . '.' .$course->url) }}">
                                    <div class="d-flex">
{{--                                        <img loading="lazy" class="me-3 rounded" width="50" height="50" src="{{ asset('storage/courses/' . $course->image) }}" alt="">--}}
                                        <p>{{$course->title}}</p>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-4">
                    <p>ASTRUM</p>
                    <hr>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('uz.index') }}">Bosh sahifa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('uz.about_us') }}">Biz haqimizda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('uz.courses') }}">Kurslar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('uz.index') }}#location">Manzil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('uz.gallery') }}">Rasmlar</a>
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
                            <a class="nav-link" target="_blank" href="mailto:info@astrum.uz"><i class="bi bi-envelope"></i> Email</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="https://tiktok.com/@astrumuz"><i class="bi bi-tiktok"></i> Tik Tok</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row pt-5 pb-5">
                <div class="col-md-3">
                    <img loading="lazy" src="{{ asset('images/logo_1.png') }}" width="100" alt="">
                </div>
                <div class="col-md-5">
                </div>
                <div class="col-md-4 text-end">
                    <p>"Bilim-Tech" MChJ 2022 - <?php echo \Carbon\Carbon::now()->year ?> <br> <span class="fw-bold">Terms & Privacy</span></p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.2/dist/index.bundle.min.js"></script>
    @yield('js')
    <script src="{{ asset('js/carusel.js')}}"></script>
</body>

</html>
