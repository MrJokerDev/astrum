@extends('front.ru.main')

@section('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<style>
    .btn-toggle[aria-expanded="true"]::before {
        transform: rotate(90deg);
    }

    .btn-toggle::before {
        margin-right: 15px;
        width: 1.25em;
        line-height: 0;
        content: url(images/chevron-right.svg);
        transition: transform .35s ease;
        transform-origin: 0.5em 50%;
    }
    .btn:hover, .btn:active{
        background-color: #F5F4FF;
        border: 1px solid #F5F4FF;
    }

    .btn-toggle-nav{
        background-color: #F5F4FF;
    }

    [type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled), button:not(:disabled){
        background-color: #F5F4FF;
        color: #333;
    }
    #navbar-bg{
        width: 100%;
        background-color: #F5F4FF;
    }
    #navbar-bg > .nav-link{
        color: #333;
    }
    .nav-item > .nav-link{
        color: #333;
    }
    #lang_btn, #btn{
        border: 2px solid #333!important;
        color: #333;
        font-weight: 700;
        background-color: #fff;
    }
    .carousel-inner{
        max-width: 100%;
    }
    .carousel{
        padding: 0;
        min-height: 55vh;
    }
    .most-inner {
        left: 0;
    }

    .tabcontent{
        background-color: #F5F4FF;
    }
    .nav-item a.border-white{
        border-color: #333!important;
        color: #333!important;
    }
    .dropdown button.border-white{
        border-color: #333!important;
    }
    .sticky-top{
        top: 75px;
    }
    @media only screen and (max-width: 768px){
        .carousel {
            background-color: #fff;
        }
    }
    div.position-relative span{
        color: black;
        text-shadow: 0 0px 8px #fff, 0 0 5px #000118;
    }
    #header{
        padding-top: 200px;
        /* text-align: center;
        width: 65%;
        margin: auto; */
    }
</style>
@endsection
@section('content')
        <div id="header" class="container">
            <p class="text-center p-5 text-success"><span class="fw-bold"><a href="{{ route('ru.index') }}" class="text-success text-decoration-none">Главная</a> </span> | <a href="{{ route('ru.courses') }}" class="text-success text-decoration-none">Курсы и образование</a> | <a href="{{ route('ru.python') }}" class="text-success text-decoration-none">Full Stack Developer</a></p>
            <div class="row">
                <div class="col-md-6">
                    <h1 class="fw-bold">Full Stack Developer</h1>
                    <hr class="w-25" style="border: 2px solid #62BC9E;">

                    <p class="border border-2 rounded-2 border-dark ps-4 p-1">Html, Css, Javascript, ExpressJs Ruby, RubyonRails, SQLITE, Node.JS, ReactJs, Bootstrap, Aws Amazon</p>
                    <p>Это специалист, который должен понимать весь набор технологий и компонентов используемых в проекте, как со стороны Front-end, так и со стороны Back-end.</p>
                    {{-- <a href="{{ route('ru.register') }}" class="btn btn-dark mb-5 bg-dark p-3 text-white">Зарегистрируйтесь сейчас</a> --}}
                    {{-- @include('front.ru.component.registerLid') --}}
                </div>
                <div class="col-md-6">
                    <img loading="lazy" class="rounded w-100" src="{{ asset('images/courses/1.png') }}" alt="">
                </div>
            </div>
        </div>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <nav id="navbar-bg" class="navbar sticky-top rounded p-4">
                        <ul class ="nav navbar-nav w-100">
                            <li>
                                Full stack developer
                            </li>
                            <hr>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#about">О курсе</a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#lessons">Учебные программы</a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#mentors">Менторы</a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#developers">Языки программирования </a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#kurs_room">Классные комнаты</a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#kurs_total">Расписание занятий</a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#quetions">Вопросы</a>
                            </li>
                            <br>
                            @include('front.ru.component.registerLid')
                            {{-- <a href="{{ route('ru.register') }}" class="btn btn-danger bg-dark p-3 text-white">Зарегистрируйтесь сейчас</a> --}}
                        </ul>
                    </nav>
                </div>
                <div class="col-md-8">
                    <div>
                        <p id="about" class="fw-bold text-success">О курсе</p>
                        <h1>Заново раскройте для себя свои навыки программирования</h1>
                        <p>Наш курс Full Stack проходит от 8 до 12 месяцев. За это время, со студентами похожими на вас вы узнаете секреты программирования. Кроме того, во время занятий вы освоите создание функциональных веб-сайтов и программ . И эти знания станут самыми важными факторами в процессе поиска работы.</p>

                        <video class="w-100 rounded" playsinline="playsinline" controls="controls" preload="auto" onclick="this.play()"  muted="muted" loop="loop"> <!-- autoplay="autoplay" -->
                            <source src="{{ asset('images/video_gif.mp4') }}" type="video/mp4">
                        </video>
                    </div>

                    <hr class="fw-bold">
                    <div class="row mt-5">
                        <p id="lessons" class="fw-bold text-success">УЧЕБНАЯ ПРОГРАММА</p>
                        <h1 class="fw-bold mb-5">В курсе разработчика Full Stack вы освоите:</h1>

                        <div class="d-flex">
                            <i class="bi bi-check-lg me-1 mb-1 mt-1" style="font-size: 40px;"></i>
                            <p class="ms-3"><span class="fw-bold">Знания и навыки</span> <br> Вы изучите популярные языки программирования и примените их на практике</p>
                        </div>
                        <hr class="fw-bold border-1">

                        <div class="d-flex">
                            <i class="bi bi-check-lg me-1 mb-1 mt-1" style="font-size: 40px;"></i>
                            <p class="ms-3">
                            <span class="fw-bold">Современные языки программирования: </span>
                            <br>
                            Html, Css, Javascript, ExpressJs Ruby,
                            RubyonRails, SQLITE, Node.JS, ReactJs,
                            Bootstrap, Aws Amazon
                            </p>
                        </div>
                        <hr class="fw-bold border-1">

                        <div class="d-flex">
                            <i class="bi bi-check-lg me-1 mb-1 mt-1" style="font-size: 40px;"></i>
                            <p class="ms-3"><span class="fw-bold">Аналитика</span><br> Знание алгоритмов и способность анализировать процесс работ программ</p>
                        </div>
                        <hr class="fw-bold border-1">

                        <div class="d-flex">
                            <i class="bi bi-check-lg me-1 mb-1 mt-1" style="font-size: 40px;"></i>
                            <p class="ms-3"><span class="fw-bold">Разработка</span><br>Веб-интерфейсов и приложений, управление сборниками и базами данных, тестирование и масштабирование приложений.</p>
                        </div>
                        <hr class="fw-bold border-1">

                        <div class="d-flex">
                            <i class="bi bi-check-lg me-1 mb-1 mt-1" style="font-size: 40px;"></i>
                            <p class="ms-3"><span class="fw-bold">Организование </span><br>Организование системы безопасности сайта или приложения</p>
                        </div>
                        <hr class="fw-bold border-1">

                        <div class="d-flex">
                            <i class="bi bi-check-lg me-1 mb-1 mt-1" style="font-size: 40px;"></i>
                            <p class="ms-3"><span class="fw-bold">Презентация навыков</span><br> Обладеть с Soft skills и быть готовым к беседе на английском языке, а также способность представить себя и свой продукт.</p>
                        </div>
                        <hr class="fw-bold border-1">
                    </div>
                    <div class="row">
                        <p style="color: #62BC9E;" class="fw-bold mt-5">FULL STACK DEVELOPER</p>
                        <h1 class="fw-bold">Учитесь программировать с помощью практики</h1>
                        <p class="mb-5">Наша IT-Академия предназначена для поэтапного обучения программированию с помощью практической программы обучения, которая научит вас на 100%.</p>
                        <h1 class="fw-bold">Развивайте свои навыки программирования каждую неделю</h1>
                        <p class="mb-5">Каждую неделю во время нашего учебного курса для разработчиков Full stack вы можете освоить новые навыки работы с различными языками программирования, создания веб-сайтов, мобильных приложений и программ.</p>
                        <span class="fw-bold mb-3">План курса на 8-12 месяцев</span>  <br>
                        <p>Наш образовательный курс состоит из увлекательных занятий продолжительностью от 8 до 12 месяцев. Вы можете в любое время прийти в Astrum и учиться столько, сколько захотите, так как это позволит вам лучше понимать и изучать языки программирования.</p>
                    </div>

                    <hr class="mt-5 mb-5">
                    <div class="row">
                        <p id="mentors" style="color: #62BC9E;" class="fw-bold mt-5">КОМАНДА МЕНТОРОВ </p>
                        <h1 class="fw-bold">Изучайте программирование у экспертов</h1>
                        <p>Наши профессиональные учителя по программированию научат вас хорошим практикам и навыкам написания хорошего кода на современных языках программирования. Все учителя имеют большой опыт и сильные знания.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <img loading="lazy" src="{{ asset('images/mentors/sarvar_sh.jpg') }}" class="rounded w-100" alt="image">
                        </div>
                        <div class="col-md-7">
                            <div class="">
                                <h1>Шомуродов Сарвар</h1>
                                <p>Full Stack Developer</p>
                                <hr class="w-25" style="border: 2px solid #62BC9E;">
                                <p class="">"Привет, меня зовут Сарвар , я ментор по направлению Full stack developer. Я очень строгий учитель и не люблю неработающие коды."</p>
                            </div>
                        </div>
                        <p style="color: #62BC9E;" class="fw-bold mt-5">Команда менторов</p>
                        <div class="row">
                            <div class="col-md-4 mt-4">
                                <div class="position-relative">
                                    <img loading="lazy" src="{{ asset('images/mentors/aziza.jpg') }}" class="rounded w-100" alt="image">
                                    <span class="position-absolute top-0 start-0 border border-dark rounded text-white bg-dark p-2 ps-3 pe-3 m-2">Ментор</span>
                                    <span class="position-absolute bottom-0 start-0 p-3 text-white"><span class="fw-bold">Азизова Азиза </span> <br><span>Full Stack</span> <hr class="w-25 m-0" style="border: 2px solid #62BC9E;"></span>
                                </div>
                            </div>

                            <div class="col-md-4 mt-4">
                                <div class="position-relative">
                                    <img loading="lazy" src="{{ asset('images/mentors/baxtibek.jpg') }}" class="rounded w-100" alt="image">
                                    <span class="position-absolute top-0 start-0 border border-dark rounded text-white bg-dark p-2 ps-3 pe-3 m-2">Ментор</span>
                                    <span class="position-absolute bottom-0 start-0 p-3 text-white"><span class="fw-bold">Анваров Бахтибек</span> <br><span>Full Stack</span> <hr class="w-25 m-0" style="border: 2px solid #62BC9E;"></span>
                                </div>
                            </div>
                        </div>

                        <hr class="mt-5 mb-5">

                        <p id="developers" style="color: #62BC9E;" class="fw-bold mt-5">Рабочие инструменты программистов</p>
                        <h1 class="fw-bold">От нуля до профессионала</h1>
                        <p>Наши учебные курсы основаны на новейших средствах программирования, и в отличие от методов прохождения курсов которым обучали студентов на протяжении последних десятилетий, мы считаем, что новейшие технологии и сильная система обучения важны для программиста, чтобы построить свою карьеру и получить глубокие знания.</p>
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <img loading="lazy" src="{{ asset('images/logo_programminig/4.jpg') }}" class="w-100 h-auto m-auto" alt="image">
                            </div>
                            <div class="col-md-4 text-center">
                                <img loading="lazy" src="{{ asset('images/logo_programminig/6.jpg') }}" class="w-100 h-auto m-auto" alt="image">
                            </div>
                            <div class="col-md-4 text-center">
                                <img loading="lazy" src="{{ asset('images/logo_programminig/9.jpg') }}" class="w-100 h-auto m-auto" alt="image">
                            </div>
                        </div>

                        <hr class="mt-5 mb-5">

                        <p id="kurs_room" style="color: #62BC9E;" class="fw-bold mt-5">Современные учебные классы</p>
                        <h1 class="fw-bold">Удобные для обучения современные и изумительные учебные комнаты</h1>
                        <p>Мы считаем, что при обучении программированию важен индивидуальный подход к каждому ученику и поэтому каждый ученик может задавать вопросы менторам и получать помощь. А классы, рассчитанные ровно на 20 человек, помогут учащемуся понимать лучше и участвовать в обсуждениях и обмениваться идеями, не стесняясь других</p>

                    </div>
                    <div class="container-fluid" style="width: 100%">
                        <div class="carousel">
                            <div class="carusel-top">
                                <div class="carousel-inner">
                                    <div class="most-inner">
                                        <img loading="lazy" src="{{ asset('images/layout/gallery/1.jpg')}}">
                                        <img loading="lazy" src="{{ asset('images/layout/gallery/2.jpg')}}">
                                        <img loading="lazy" src="{{ asset('images/layout/gallery/5.jpg')}}">
                                        <img loading="lazy" src="{{ asset('images/layout/gallery/4.jpg')}}">
                                        <img loading="lazy" src="{{ asset('images/layout/gallery/3.jpg')}}">
                                        <img loading="lazy" src="{{ asset('images/layout/gallery/6.jpg')}}">
                                        <img loading="lazy" src="{{ asset('images/layout/gallery/7.jpg')}}">
                                        <img loading="lazy" src="{{ asset('images/layout/gallery/8.jpg')}}">
                                        <img loading="lazy" src="{{ asset('images/layout/gallery/9.jpg')}}">
                                        <img loading="lazy" src="{{ asset('images/layout/gallery/10.jpg')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="mt-5 mb-5">

                        <p id="kurs_total" style="color: #62BC9E;" class="fw-bold mt-5">Расписание курсов</p>
                        <h1 class="fw-bold">Скорость процесса набора</h1>
                        <p>На наших учебных курсах места заполняются очень быстро, поэтому мы заранее объявляем о наборе.</p>
                        <p class="fw-bold mt-5">30 августа 2022 г. - 03 ноября 2023г</p>

                        <div id="moon_1" class="tabcontent p-5 ps-3 pe-3 rounded">
                            <p class="fw-bold">Full stack developer</p>
                            <p>В дни недели:<span class="fw-bold"> Понедельник, вторник и четверг, 09:00-10:30 и 11:00-12:30, в классе 1/9.</span></p>
                            <p>Уроки для Pre-season</p>
                            <hr class="w-25" style="border: 2px solid #62BC9E;">
                            <p class="bg-warning rounded-1 text-center p-2">14 свободных мест</p>
                            <hr>
                            <div class="card_table">
                                <img loading="lazy" class="rounded-circle h-25 border border-warning me-3" src="{{ asset('images/python.png') }}" style="width: 6%;" alt="image">
                                <div class="d-block w-100">
                                <p class="w-100"><span class="fw-bold">Шукуров Жасур</span><br> Full Stack Developer - Mentor</p>
                                <hr class="w-25" style="border: 2px solid #62BC9E;">
                                </div>
                                {{-- @include('front.ru.component.registerLid') --}}
                                {{-- <a href="{{ route('ru.register') }}" class="btn btn-dark bg-dark w-100 text-white justify-content-center align-self-center">Зарегистрируйтесь сейчас</a> --}}
                            </div>
                        </div>

                        <div id="moon_2" class="tabcontent mt-5 p-5 ps-3 pe-3 rounded">
                            <p class="fw-bold">Full stack developer</p>
                            <p>В дни недели:<span class="fw-bold"> Понедельник, вторник и четверг, 09:00-10:30 и 11:00-12:30, в классе 2/10</span></p>
                            <p>Уроки для Pre-season</p>
                            <hr class="w-25" style="border: 2px solid #62BC9E;">
                            <p class="bg-warning rounded-1 text-center p-2">14 свободных мест</p>
                            <hr>
                            <div class="card_table">
                                <img loading="lazy" class="rounded-circle h-25 border border-warning me-3" src="{{ asset('images/python.png') }}" style="width: 6%;" alt="image">
                                <div class="d-block w-100">
                                <p class="w-100"><span class="fw-bold">Азизова Азиза</span><br> Full Stack Developer - Mentor</p>
                                <hr class="w-25" style="border: 2px solid #62BC9E;">
                                </div>
                                {{-- @include('front.ru.component.registerLid') --}}
                                {{-- <a href="{{ route('ru.register') }}" class="btn btn-dark bg-dark w-100 text-white justify-content-center align-self-center">Зарегистрируйтесь сейчас</a> --}}
                            </div>
                        </div>

                        <div id="moon_3" class="tabcontent mt-5 p-5 ps-3 pe-3 rounded">
                            <p class="fw-bold">Full stack developer</p>
                            <p>В дни недели: <span class="fw-bold">Понедельник, вторник и четверг, 09:00-10:30 и 11:00-12:30, в классе 2/8.</span></p>
                            <p>Уроки для Pre-season</p>
                            <hr class="w-25" style="border: 2px solid #62BC9E;">
                            <p class="bg-warning rounded-1 text-center p-2">14 bosh joylar</p>
                            <hr>
                            <div class="card_table">
                                <img loading="lazy" class="rounded-circle h-25 border border-warning me-3" src="{{ asset('images/python.png') }}" style="width: 6%;" alt="image">
                                <div class="d-block w-100">
                                <p class="w-100"><span class="fw-bold">Шомуродов Сарвар</span><br> Full Stack Developer - Mentor</p>
                                <hr class="w-25" style="border: 2px solid #62BC9E;">
                                </div>
                                {{-- @include('front.ru.component.registerLid') --}}
                                {{-- <a href="{{ route('ru.register') }}" class="btn btn-dark bg-dark w-100 text-white justify-content-center align-self-center">Зарегистрируйтесь сейчас</a> --}}
                            </div>
                        </div>


                    <hr class="mt-5 mb-5">

                    <p id="quetions" style="color: #62BC9E;" class="fw-bold mt-5">Вопросы</p>

                    <h1>Есть вопросы по курсу Full Stack Developer?</h1>
                    <p>Скорее всего, у вас могли возникнуть пару вопросов. Мы просим тех, кто следит за нами, задавать вопросы напрямую, а также вы можете связаться с нами по горячей линии в любое время.</p>

                    <ul class="list-unstyled ps-0">
                        <li class="mb-4 border shadow-sm rounded-1">
                            <button class="btn btn-toggle w-100 d-flex justify-content-start fw-bold p-3" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                                Сколько учеников будут в группе?
                            </button>
                            <div class="collapse" id="home-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal small p-5">
                                    Академия Astrum IT оснащена образовательной системой, работающей с использованием высокотехнологичных алгоритмов искусственного интеллекта. Вы можете приходить в Astrum в любое время когда захотите работать над собой и уходить, когда захотите.
                                </ul>
                            </div>
                        </li>
                        <li class="mb-4 border shadow-sm rounded-1">
                            <button class="btn btn-toggle w-100 d-flex justify-content-start fw-bold p-3" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                                Должен ли я иметь начальные знания для изучения программирования?
                            </button>
                            <div class="collapse" id="dashboard-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal small p-5">
                                    Система обучения в Академии Astrum IT устроена таким образом, что для прохождения одного из курсов вам не потребуется никаких начальных знаний. Через организованные в нашей академии Pre-season курсы, вы получите начальные знания, и сдав экзамен, перейдете на курсы Main Season.
                                </ul>
                            </div>
                        </li>
                        <li class="mb-4 border shadow-sm rounded-1">
                            <button class="btn btn-toggle w-100 d-flex justify-content-start fw-bold p-3" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                                Почему Astrum лучше других?
                            </button>
                            <div class="collapse" id="orders-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal p-5 small">
                                    Потому что у нас установлена современная система обучения, основанная на Искусственном интеллекте и по окончании курсов вам будет вручен международный сертификат QWASAR, который позволит вам работать в Силиконовой долине Америки. Кроме того, у нас имеются современные классы, Mac Valley, спортивные площадки кампуса работающие 24/7, внутренняя валюта Astrocoin и система круглосуточной охраны.
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <p style="font-size: 30px;">+998 (71) 202 42 22</p>
                    <p class="fw-bold">Bizga yozishingiz mumkin</p>
                    <div class="d-flex w-25">
                        <a href="https://t.me/astrumuz" target="_blank" class="text-dark"><i class="bi bi-telegram me-3" style="font-size: 45px;"></i></a>
                        <a href="https://www.facebook.com/Astrumuzb" class="text-dark" target="_blank"><i class="bi bi-facebook me-3" style="font-size: 45px;"></i></a>
                        <a href="http://instagram.com/astrumuz" class="text-dark" target="_blank"><i class="bi bi-instagram me-3" style="font-size: 45px;"></i> </a>
                        <a href="https://tiktok.com/@astrumuz" class="text-dark" target="_blank"><i class="bi bi-tiktok me-3" style="font-size: 45px;"></i> </a>
                    </div>
                </div>
            </div>
            <div class="row mt-5 mb-5">
                @include('components.course_in')
            </div>
        </div>
    </section>

@endsection
