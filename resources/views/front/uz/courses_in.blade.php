@extends('front.uz.main')

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
        margin-top: 2vh;
        left: 0;
    }

    .tabcontent{
        background-color: #F5F4FF;
    }

</style>
@endsection
@section('content')
    <section>
        <div class="container">
            <p class="text-center p-5 text-success"><span class="fw-bold"><a href="{{ route('uz.index') }}" class="text-success text-decoration-none">ГЛАВНАЯ</a> </span> | <a href="{{ route('uz.courses') }}" class="text-success text-decoration-none">КУРСЫ И ОБРАЗОВАНИЕ</a> | <a href="{{ route('uz.courses_in') }}" class="text-success text-decoration-none">FULL STACK DEVELOPER</a></p>
            <div class="row">
                <div class="col-md-6">
                    <h1 class="fw-bold">Full Stack Developer</h1>
                    <p>12 месяцев / 450 часов</p>
                    <hr class="w-25" style="border: 2px solid #62BC9E;">

                    <p class="border border-2 rounded-2 border-dark w-50 ps-4 p-1">Html, Css, Javascript, <br> ExpressJs Ruby, RubyonRails, SQL</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus ut quibusdam voluptatem consequuntur repellendus quisquam quia cumque ratione labore eaque, ducimus earum non ullam enim, laudantium iste, corrupti blanditiis cupiditate.</p>
                    <button type="button" class="btn btn-dark mb-5 bg-dark p-3 text-white">Зарегистрируйтесь сейчас</button>
                </div>
                <div class="col-md-6">
                    <img loading="lazy" class="rounded w-100" src="{{ asset('images/DSC_6384.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <nav id="navbar-bg" class="navbar sticky-top rounded p-4 w-75">
                        <ul class ="nav navbar-nav w-100">
                            <li>
                                Full stack developer
                            </li>
                            <hr>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#about"> Обзор </a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#lessons"> Учебная программа </a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#mentors"> Ментор </a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#developers"> Инструменты разработки </a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#kurs_room"> Класы для курсов </a>
                            </li>
                            {{-- <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#"> Выпускники </a>
                            </li> --}}
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#kurs_total"> Расписание курсов </a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#quetions"> Вопросы </a>
                            </li>
                            <br>
                            <a href="#" type="button" class="btn btn-danger bg-dark p-3 text-white">Зарегистрируйтесь сейчас</a>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-8">
                    <div>
                        <p id="about" class="fw-bold text-success">ОБЗОР</p>
                        <h1>ОВЛАДАЙТЕ НАВЫКАМИ ПРОГРАММИРОВАНИЯ</h1>
                        <p>Наш неполный рабочий день, живой учебный курс по Full stack разработке  — это захватывающий 12-недельный учебный процесс. Вы будете учиться на практике во время живых занятий с 20 дружественними студентами. Что позволит Вам лучше принять информацию от ментора и получить его помощь.
                            Во время занятий вы освоите программные навыки, необходимые для создания красивых и функциональных сайтов и програм. Этот учебный курс — один из полулярнных и востребованых знаний на рынке труда.</p>

                        <video class="w-100 rounded" playsinline="playsinline" controls="controls" preload="auto" onclick="this.play()"  muted="muted" loop="loop"> <!-- autoplay="autoplay" -->
                            <source src="{{ asset('images/video/video_1.MP4') }}" type="video/mp4">
                        </video>
                    </div>
                    <div class="mt-5 pt-5">
                        <p style="color: rgba(40, 156, 40, 0.521);" class="fw-bold">КУРСЫ И ОБРАЗОВАНИЕ</p>
                        <h1 class="fw-bold mb-5">Почему многие выберают <br> обучение с Astrum ?</h1>
                    </div>

                    <div class="row mb-5">
                        <div class="col-sm-6 col-md-6 col-xl-4 col-xxl-4">
                            <p class="border-start border-dark border-4 ps-3">100%</p>
                            <p class="text-muted fw-bolder">ПОКАЗАТЕЛЬ ЗАВЕРШЕННОСТИ</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, exercitationem voluptas, nemo tenetur consectetur, eum esse est laborum expedita repellendus modi! Exercitationem rem officia adipisci repudiandae ullam provident? Voluptas, amet.</p>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4 col-xxl-4">
                            <p class="border-start border-dark border-4 ps-3">100%</p>
                            <p class="text-muted fw-bolder">ПОКАЗАТЕЛЬ ЗАВЕРШЕННОСТИ</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, exercitationem voluptas, nemo tenetur consectetur, eum esse est laborum expedita repellendus modi! Exercitationem rem officia adipisci repudiandae ullam provident? Voluptas, amet.</p>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4 col-xxl-4">
                            <p class="border-start border-dark border-4 ps-3">100%</p>
                            <p class="text-muted fw-bolder">ПОКАЗАТЕЛЬ ЗАВЕРШЕННОСТИ</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, exercitationem voluptas, nemo tenetur consectetur, eum esse est laborum expedita repellendus modi! Exercitationem rem officia adipisci repudiandae ullam provident? Voluptas, amet.</p>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4 col-xxl-4">
                            <p class="border-start border-dark border-4 ps-3">100%</p>
                            <p class="text-muted fw-bolder">ПОКАЗАТЕЛЬ ЗАВЕРШЕННОСТИ</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, exercitationem voluptas, nemo tenetur consectetur, eum esse est laborum expedita repellendus modi! Exercitationem rem officia adipisci repudiandae ullam provident? Voluptas, amet.</p>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4 col-xxl-4">
                            <p class="border-start border-dark border-4 ps-3">100%</p>
                            <p class="text-muted fw-bolder">ПОКАЗАТЕЛЬ ЗАВЕРШЕННОСТИ</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, exercitationem voluptas, nemo tenetur consectetur, eum esse est laborum expedita repellendus modi! Exercitationem rem officia adipisci repudiandae ullam provident? Voluptas, amet.</p>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4 col-xxl-4">
                            <p class="border-start border-dark border-4 ps-3">100%</p>
                            <p class="text-muted fw-bolder">ПОКАЗАТЕЛЬ ЗАВЕРШЕННОСТИ</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, exercitationem voluptas, nemo tenetur consectetur, eum esse est laborum expedita repellendus modi! Exercitationem rem officia adipisci repudiandae ullam provident? Voluptas, amet.</p>
                        </div>
                    </div>
                    <hr class="fw-bold">
                    <div class="row mt-5">
                        <p id="lessons" class="fw-bold text-success">Учебная программа</p>
                        <h1 class="fw-bold mb-5">Чему вы научитесь во время нашего учебного курса Full stack разработчик</h1>

                        <div class="d-flex">
                            <i class="bi bi-check-lg me-1 mb-1 mt-1" style="font-size: 40px;"></i>
                            <p class="ms-3"><span class="fw-bold">Знание и умение</span> <br> Знать популярные языки программирования и уметь с ними работать.</p>
                        </div>
                        <hr class="fw-bold border-1">

                        <div class="d-flex">
                            <i class="bi bi-check-lg me-1 mb-1 mt-1" style="font-size: 40px;"></i>
                            <p class="ms-3"><span class="fw-bold">Современные языки и гибкость</span><br> Знать Frontend и Backend, фреймворки Spring IoC, Spring Security, Hibernate, Spring Data, jQuery, Node.js, Express.js, React.js, Redux и другие</p>
                        </div>
                        <hr class="fw-bold border-1">

                        <div class="d-flex">
                            <i class="bi bi-check-lg me-1 mb-1 mt-1" style="font-size: 40px;"></i>
                            <p class="ms-3"><span class="fw-bold">Аналитика</span><br> Знать алгоритмы и уметь анализировать быстродействие программы</p>
                        </div>
                        <hr class="fw-bold border-1">

                        <div class="d-flex">
                            <i class="bi bi-check-lg me-1 mb-1 mt-1" style="font-size: 40px;"></i>
                            <p class="ms-3"><span class="fw-bold">Разработка</span><br> Разрабатывать веб-интерфейсы и приложения, управлять наборами и базами данных, тестировать и масштабировать программы</p>
                        </div>
                        <hr class="fw-bold border-1">

                        <div class="d-flex">
                            <i class="bi bi-check-lg me-1 mb-1 mt-1" style="font-size: 40px;"></i>
                            <p class="ms-3"><span class="fw-bold">Организация</span><br> Организовать систему безопасности сайта или приложения</p>
                        </div>
                        <hr class="fw-bold border-1">

                        <div class="d-flex">
                            <i class="bi bi-check-lg me-1 mb-1 mt-1" style="font-size: 40px;"></i>
                            <p class="ms-3"><span class="fw-bold">Презентационные навыки</span><br> Владеть навыками soft-skills и быть подготовленным к собеседованию на английском языке, уметь презентовать себя и свой продукт.</p>
                        </div>
                        <hr class="fw-bold border-1">
                    </div>
                    <div class="row">
                        <p style="color: #62BC9E;" class="fw-bold mt-5">FULL STACK DEVELOPER</p>
                        <h1 class="fw-bold">Учитесь программировать на практике</h1>
                        <p class="mb-5">Наш учебный лагерь создан для того, чтобы вы шаг за шагом изучали программирование с помощью практической учебной программы, которая на 100% ориентирована на обучение на практике.</p>
                        <h1 class="fw-bold">Неделю за неделей осваивайте навык программирования</h1>
                        <p class="mb-5">Каждую неделю во время нашего учебного курса Full stack developer Вам будет предложено освоить новые навыки работы с различными языками программирования, создавая сайты, мобильные приложения и программы.</p>
                        <span class="fw-bold mb-3">Неполный учебный день · 12 недель</span>  <br>
                        <p> Наш учебный курс с частичной занятостью — это захватывающий 12-недельный курс. Вы обучаетесь в группе с 20 программистами, что позволяет Вам лучше понять и выучить языки программирования.</p>
                    </div>
                    <div class="row ms-5 mt-5">
                        <ul class="list-unstyled ps-0">
                            <li class="mb-4 border shadow-sm rounded-1">
                              <button class="btn btn-toggle w-100 d-flex justify-content-start fw-bold p-3" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                                    Подготовка к началу курса
                              </button>
                                <div class="collapse" id="home-collapse">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal small p-5">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus labore, neque eius eaque perferendis nemo ex
                                    </ul>
                                </div>
                            </li>
                            <li class="mb-4 border shadow-sm rounded-1">
                              <button class="btn btn-toggle w-100 d-flex justify-content-start fw-bold p-3" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                                Клиентские технологии JavaScript / FrontEnd
                              </button>
                                <div class="collapse" id="dashboard-collapse">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal small p-5">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus labore, neque eius eaque perferendis nemo ex
                                    </ul>
                                </div>
                            </li>
                            <li class="mb-4 border shadow-sm rounded-1">
                              <button class="btn btn-toggle w-100 d-flex justify-content-start fw-bold p-3" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                                Серверные технологии Java EE / BackEnd
                              </button>
                                <div class="collapse" id="orders-collapse">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal p-5 small">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus labore, neque eius eaque perferendis nemo ex
                                    </ul>
                                </div>
                            </li>
                            <li class="mb-4 border shadow-sm rounded-1">
                                <button class="btn btn-toggle w-100 d-flex justify-content-start fw-bold p-3" data-bs-toggle="collapse" data-bs-target="#orders-collapses" aria-expanded="false">
                                    Алгоритмы и структура данных
                                </button>
                                <div class="collapse" id="orders-collapses">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal p-5 small">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus labore, neque eius eaque perferendis nemo ex
                                    </ul>
                                </div>
                            </li>
                            <li class="mb-4 border shadow-sm rounded-1">
                                <button class="btn btn-toggle w-100 d-flex justify-content-start fw-bold p-3" data-bs-toggle="collapse" data-bs-target="#orders-collapses1" aria-expanded="false">
                                    Мастер-классы
                                </button>
                                <div class="collapse" id="orders-collapses1">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal p-5 small">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus labore, neque eius eaque perferendis nemo ex
                                    </ul>
                                </div>
                            </li>
                            <li class="mb-4 border shadow-sm rounded-1">
                                <button class="btn btn-toggle w-100 d-flex justify-content-start fw-bold p-3" data-bs-toggle="collapse" data-bs-target="#orders-collapses12" aria-expanded="false">
                                    Soft skills, тех. английский, подготовка к собеседованию
                                </button>
                                <div class="collapse" id="orders-collapses12">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal p-5 small">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus labore, neque eius eaque perferendis nemo ex
                                    </ul>
                                </div>
                            </li>
                            <li class="mb-4 border shadow-sm rounded-1">
                                <button class="btn btn-toggle w-100 d-flex justify-content-start fw-bold p-3" data-bs-toggle="collapse" data-bs-target="#orders-collapses123" aria-expanded="false">
                                    Финальный проект
                                </button>
                                <div class="collapse" id="orders-collapses123">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal p-5 small">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus labore, neque eius eaque perferendis nemo ex
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <hr class="mt-5 mb-5">
                    <div class="row">
                        <p id="mentors" style="color: #62BC9E;" class="fw-bold mt-5">КОМАНДА РАЗРАБОТЧИКОВ</p>
                        <h1 class="fw-bold">Учитесь у экспертов программировать</h1>
                        <p>Наши преподаватели программирования одержимы своей работой! Они научат вас передовым методам и навыкам создания хорошего кода на современных языках программирования. О, и они очень дружелюбны и приносят кучу хорошей энергии на занятиях!</p>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <img loading="lazy" src="i{{ asset('mages/DSC_6349.jpg') }}" class="rounded w-100" alt="image">
                        </div>
                        <div class="col-md-7">
                            <div class="">
                                <h1>Джасур Шукуров</h1>
                                <p>Full Stack Developer</p>
                                <hr class="w-25" style="border: 2px solid #62BC9E;">
                                <p class="">“ Привет! Меня зовут Джасур, я ментор в направлении Full stack developer. Я  был одним из первых преподавателей компании NAPA. Я являюсь членом Консультативного совета по направлении компании. Я очень увлеченный учитель и не люблю плохай код) ”</p>
                            </div>
                        </div>
                        <p style="color: #62BC9E;" class="fw-bold mt-5">КОМАНДА программистов</p>
                        <div class="row">
                            <div class="col-md-4 mt-4">
                                <div class="position-relative">
                                    <img loading="lazy" src="{{ asset('images/DSC_6349.jpg') }}" class="rounded w-100" alt="image">
                                    <span class="position-absolute top-0 start-0 border border-dark rounded text-white bg-dark p-2 ps-3 pe-3 m-2">Mentor</span>
                                    <span class="position-absolute bottom-0 start-0 p-3 text-white"><span class="fw-bold">Name Names</span> <br><span>Software Engineer</span> <hr class="w-25 m-0" style="border: 2px solid #62BC9E;"></span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <div class="position-relative">
                                    <img loading="lazy" src="{{ asset('images/DSC_6349.jpg') }}" class="rounded w-100" alt="image">
                                    <span class="position-absolute top-0 start-0 border border-dark rounded text-white bg-dark p-2 ps-3 pe-3 m-2">Mentor</span>
                                    <span class="position-absolute bottom-0 start-0 p-3 text-white"><span class="fw-bold">Name Names</span> <br><span>Software Engineer</span> <hr class="w-25 m-0" style="border: 2px solid #62BC9E;"></span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <div class="position-relative">
                                    <img loading="lazy" src="{{ asset('images/DSC_6349.jpg') }}" class="rounded w-100" alt="image">
                                    <span class="position-absolute top-0 start-0 border border-dark rounded text-white bg-dark p-2 ps-3 pe-3 m-2">Mentor</span>
                                    <span class="position-absolute bottom-0 start-0 p-3 text-white"><span class="fw-bold">Name Names</span> <br><span>Software Engineer</span> <hr class="w-25 m-0" style="border: 2px solid #62BC9E;"></span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <div class="position-relative">
                                    <img loading="lazy" src="{{ asset('images/DSC_6349.jpg') }}" class="rounded w-100" alt="image">
                                    <span class="position-absolute top-0 start-0 border border-dark rounded text-white bg-dark p-2 ps-3 pe-3 m-2">Mentor</span>
                                    <span class="position-absolute bottom-0 start-0 p-3 text-white"><span class="fw-bold">Name Names</span> <br><span>Software Engineer</span> <hr class="w-25 m-0" style="border: 2px solid #62BC9E;"></span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <div class="position-relative">
                                    <img loading="lazy" src="{{ asset('images/DSC_6349.jpg') }}" class="rounded w-100" alt="image">
                                    <span class="position-absolute top-0 start-0 border border-dark rounded text-white bg-dark p-2 ps-3 pe-3 m-2">Mentor</span>
                                    <span class="position-absolute bottom-0 start-0 p-3 text-white"><span class="fw-bold">Name Names</span> <br><span>Software Engineer</span> <hr class="w-25 m-0" style="border: 2px solid #62BC9E;"></span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <div class="position-relative">
                                    <img loading="lazy" src="{{ asset('images/DSC_6349.jpg') }}" class="rounded w-100" alt="image">
                                    <span class="position-absolute top-0 start-0 border border-dark rounded text-white bg-dark p-2 ps-3 pe-3 m-2">Mentor</span>
                                    <span class="position-absolute bottom-0 start-0 p-3 text-white"><span class="fw-bold">Name Names</span> <br><span>Software Engineer</span> <hr class="w-25 m-0" style="border: 2px solid #62BC9E;"></span>
                                </div>
                            </div>
                        </div>

                        <hr class="mt-5 mb-5">

                        <p id="developers" style="color: #62BC9E;" class="fw-bold mt-5">инструменты РАЗРАБОТЧИКа</p>
                        <h1 class="fw-bold">С нуля к профи</h1>
                        <p>Наши учебные курсы разработаны на основе новейших инструментов программирования. В отличие от корпоративных курсов, которые имеют фиксированный набор инструментов прошлых десятилетий, мы считаем важным вооружить программистов новейшим набором инструментов, чтобы преуспеть в своей карьере.</p>
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <img loading="lazy" src="{{ asset('images/ruby.png') }}" class="w-75 h-100 m-auto" alt="image">
                            </div>
                            <div class="col-md-4 text-center">
                                <img loading="lazy" src="{{ asset('images/SQLite.jpg') }}" class="w-75 h-100 m-auto" alt="image">
                            </div>
                            <div class="col-md-4 text-center">
                                <img loading="lazy" src="{{ asset('images/python.png') }}" class="w-75 h-100 m-auto" alt="image">
                            </div>
                        </div>

                        <hr class="mt-5 mb-5">

                        <p id="kurs_room" style="color: #62BC9E;" class="fw-bold mt-5">современные классы</p>
                        <h1 class="fw-bold">Классы которые удивляют и помагаютв обучении</h1>
                        <p>Мы считаем, что индивидуальный подход к обучению крайне важен, и мы намеренно ограничиваем размер класса примерно 20 дизайнерами. Небольшой размер классов гарантирует, что мы сможем охватить больше за то время, которое у нас есть, и вы будете учиться непосредственно у других программистов. Кроме того, это удобное место для обучения, когда весь класс участвует в обсуждениях и делится отзывами.</p>

                    </div>
                    <div class="container-fluid" style="width: 110%">
                        <div class="carousel">
                            <div class="carusel-top">
                                <div class="carousel-inner">
                                    <div class="most-inner">
                                        <img loading="lazy" src="{{ asset('images/DSC_6349.jpg') }}">
                                        <img loading="lazy" src="{{ asset('images/DSC_6383.jpg') }}">
                                        <img loading="lazy" src="{{ asset('images/DSC_6349.jpg') }}">
                                        <img loading="lazy" src="{{ asset('images/DSC_6383.jpg') }}">
                                        <img loading="lazy" src="{{ asset('images/DSC_6349.jpg') }}">
                                        <img loading="lazy" src="{{ asset('images/DSC_6383.jpg') }}">
                                        <img loading="lazy" src="{{ asset('images/DSC_6349.jpg') }}">
                                        <img loading="lazy" src="{{ asset('images/DSC_6383.jpg') }}">
                                        <img loading="lazy" src="{{ asset('images/DSC_6349.jpg') }}">
                                        <img loading="lazy" src="{{ asset('images/DSC_6383.jpg') }}">
                                        <img loading="lazy" src="{{ asset('images/DSC_6349.jpg') }}">
                                        <img loading="lazy" src="{{ asset('images/DSC_6383.jpg') }}">
                                        <img loading="lazy" src="{{ asset('images/DSC_6349.jpg') }}">
                                        <img loading="lazy" src="{{ asset('images/DSC_6383.jpg') }}">
                                        <img loading="lazy" src="{{ asset('images/DSC_6349.jpg') }}">
                                        <img loading="lazy" src="{{ asset('images/DSC_6383.jpg') }}">
                                        <img loading="lazy" src="{{ asset('images/DSC_6349.jpg') }}">
                                        <img loading="lazy" src="{{ asset('images/DSC_6383.jpg') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="mt-5 mb-5">

                    <p style="color: #62BC9E;" class="fw-bold mt-5">современные классы</p>
                    <h1 class="fw-bold">Классы которые удивляют и помагаютв обучении</h1>
                    <p>Мы считаем, что индивидуальный подход к обучению крайне важен, и мы намеренно ограничиваем размер класса примерно 20 дизайнерами. Небольшой размер классов гарантирует, что мы сможем охватить больше за то время, которое у нас есть, и вы будете учиться непосредственно у других программистов. Кроме того, это удобное место для обучения, когда весь класс участвует в обсуждениях и делится отзывами.</p>

                    <div class="row mt-5">
                        <div class="col-md-3">
                            <img loading="lazy" class="w-100" src="{{ asset('images/DSC_6383.jpg') }}" alt="img">
                            <p class="fw-bold m-0">Азиза</p>
                            <p>Full Stack Developer</p>
                            <hr class="w-25 m-0" style="border: 2px solid #62BC9E;">
                        </div>
                        <div class="col-md-3">
                            <img loading="lazy" class="w-100" src="{{ asset('images/DSC_6383.jpg') }}" alt="img">
                            <p class="fw-bold m-0">Азиза</p>
                            <p>Full Stack Developer</p>
                            <hr class="w-25 m-0" style="border: 2px solid #62BC9E;">
                        </div>
                        <div class="col-md-3">
                            <img loading="lazy" class="w-100" src="{{ asset('images/DSC_6383.jpg') }}" alt="img">
                            <p class="fw-bold m-0">Азиза</p>
                            <p>Full Stack Developer</p>
                            <hr class="w-25 m-0" style="border: 2px solid #62BC9E;">
                        </div>
                        <div class="col-md-3">
                            <img loading="lazy" class="w-100" src="{{ asset('images/DSC_6383.jpg') }}" alt="img">
                            <p class="fw-bold m-0">Азиза</p>
                            <p>Full Stack Developer</p>
                            <hr class="w-25 m-0" style="border: 2px solid #62BC9E;">
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-6">
                            <div class="d-flex">
                                <img loading="lazy" class="rounded-circle h-25 border border-warning" src="images/python.png" style="width: 15%;" alt="image">
                                <p class="ms-3 m-auto"><span class="fw-bold">Азиза</span> <br> Full Stack Developer</p>
                            </div>
                            <p>“Asirum укрепил то, что я знал как програмист, и позволил мне бросить вызов моим собственным предположениям, чтобы стать хорошим программистом, обучая новейшим современным инструментам с практическим подходом к решению проблем, творческому мышлению и программированию."</p>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <img loading="lazy" class="rounded-circle h-25 border border-warning" src="images/python.png" style="width: 15%;" alt="image">
                                <p class="ms-3 m-auto"><span class="fw-bold">Азиза</span> <br> Full Stack Developer</p>
                            </div>
                            <p>“Мой опыт учебы в Asirum был только положительным - продолжительность курсов очень подходит и соответствует моему графику, а также не слишком длинная или короткая. В то же время мне нужно было освежить знания по Java EE, чтобы обновить свои навыки и был заинтригован содержанием курса, так что я могу быть более уверенным в себе как Full stack developer.”</p>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <img loading="lazy" class="rounded-circle h-25 border border-warning" src="images/python.png" style="width: 15%;" alt="image">
                                <p class="ms-3 m-auto"><span class="fw-bold">Азиза</span> <br> Full Stack Developer</p>
                            </div>
                            <p>“Asirum укрепил то, что я знал как програмист, и позволил мне бросить вызов моим собственным предположениям, чтобы стать хорошим программистом, обучая новейшим современным инструментам с практическим подходом к решению проблем, творческому мышлению и программированию."</p>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <img loading="lazy" class="rounded-circle h-25 border border-warning" src="images/python.png" style="width: 15%;" alt="image">
                                <p class="ms-3 m-auto"><span class="fw-bold">Азиза</span> <br> Full Stack Developer</p>
                            </div>
                            <p>“Мой опыт учебы в Asirum был только положительным - продолжительность курсов очень подходит и соответствует моему графику, а также не слишком длинная или короткая. В то же время мне нужно было освежить знания по Java EE, чтобы обновить свои навыки и был заинтригован содержанием курса, так что я могу быть более уверенным в себе как Full stack developer.”</p>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <img loading="lazy" class="rounded-circle h-25 border border-warning" src="images/python.png" style="width: 15%;" alt="image">
                                <p class="ms-3 m-auto"><span class="fw-bold">Азиза</span> <br> Full Stack Developer</p>
                            </div>
                            <p>“Asirum укрепил то, что я знал как програмист, и позволил мне бросить вызов моим собственным предположениям, чтобы стать хорошим программистом, обучая новейшим современным инструментам с практическим подходом к решению проблем, творческому мышлению и программированию."</p>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <img loading="lazy" class="rounded-circle h-25 border border-warning" src="images/python.png" style="width: 15%;" alt="image">
                                <p class="ms-3 m-auto"><span class="fw-bold">Азиза</span> <br> Full Stack Developer</p>
                            </div>
                            <p>“Мой опыт учебы в Asirum был только положительным - продолжительность курсов очень подходит и соответствует моему графику, а также не слишком длинная или короткая. В то же время мне нужно было освежить знания по Java EE, чтобы обновить свои навыки и был заинтригован содержанием курса, так что я могу быть более уверенным в себе как Full stack developer.”</p>
                        </div>
                    </div>


                    <p style="color: #62BC9E;" class="fw-bold mt-5">Цена</p>
                    <h1 class="fw-bold">Простые, прозрачные и гибкие планы платежей</h1> --}}
                    

                    <hr class="mt-5 mb-5">

                        <p id="kurs_total" style="color: #62BC9E;" class="fw-bold mt-5">Расписание курсов</p>
                        <h1 class="fw-bold">Быстрый набор!</h1>
                        <p>Наши учебные курсы, как правило, набираются довольно быстро, поэтому мы открываем их за несколько месяцев. И мы намеренно ограничиваем размер классов примерно до 20 дизайнеров, чтобы каждый учебный курс предлагал индивидуальный опыт обучения.</p>

                        <div class="tab">
                            <button class="tablinks btn btn-info text-dark active" onclick="openCity(event, 'moon_1')" id="active"><span class="fw-bold">Февраль</span></button>
                            <button class="tablinks btn btn-info text-dark" onclick="openCity(event, 'moon_2')"><span class="fw-bold">Май</span> </button>
                            <button class="tablinks btn btn-info text-dark" onclick="openCity(event, 'moon_3')"><span class="fw-bold">Август</span> </button>
                        </div>

                        <p class="fw-bold mt-5">30 августа 2022 - 03 ноября 2023 </p>

                        <div id="moon_1" class="tabcontent p-5 ps-3 pe-3 rounded">
                            <p class="fw-bold">Full stack developer</p>
                            <p>Аудитория 102, <span class="fw-bold">Вторнник 18:00 - 20:00</span></p>
                            <hr class="w-25" style="border: 2px solid #62BC9E;">
                            <p class="bg-warning rounded-1 w-25 text-center p-2">14 свободных мест</p>
                            <hr>
                            <div class="d-flex">
                                <img loading="lazy" class="rounded-circle h-25 border border-warning me-3" src="{{ asset('images/python.png') }}" style="width: 6%;" alt="image">
                                <div class="d-block w-100">
                                <p class="w-100"><span class="fw-bold">Джасур Шукуров</span><br> Full Stack Developer - Mentor</p>
                                <hr class="w-25" style="border: 2px solid #62BC9E;">
                                </div>
                                <button class="btn btn-dark bg-dark w-100 ms-4 text-white">Зарегистрируйтесь сейчас</button>
                            </div>
                        </div>

                        <div id="moon_2" class="tabcontent mt-5 p-5 ps-3 pe-3 rounded">
                            <p class="fw-bold">Data science</p>
                            <p>Аудитория 102, <span class="fw-bold">Вторнник 18:00 - 20:00</span></p>
                            <hr class="w-25" style="border: 2px solid #62BC9E;">
                            <p class="bg-warning rounded-1 w-25 text-center p-2">14 свободных мест</p>
                            <hr>
                            <div class="d-flex">
                                <img loading="lazy" class="rounded-circle h-25 border border-warning me-3" src="{{ asset("images/python.png") }}" style="width: 6%;" alt="image">
                                <div class="d-block w-100">
                                <p class="w-100"><span class="fw-bold">Хамиджанов Комилжон</span><br> Data science - Mentor</p>
                                <hr class="w-25" style="border: 2px solid #62BC9E;">
                                </div>
                                <button class="btn btn-dark bg-dark w-100 ms-4 text-white">Зарегистрируйтесь сейчас</button>
                        </div>
                    </div>

                    <div id="moon_3" class="tabcontent mt-5 p-5 ps-3 pe-3 rounded">
                        <p class="fw-bold">Software engineering</p>
                        <p>Аудитория 102, <span class="fw-bold">Вторнник 18:00 - 20:00</span></p>
                        <hr class="w-25" style="border: 2px solid #62BC9E;">
                        <p class="bg-warning rounded-1 w-25 text-center p-2">14 свободных мест</p>
                        <hr>
                        <div class="d-flex">
                            <img loading="lazy" class="rounded-circle h-25 border border-warning me-3" src="{{ asset('images/python.png') }}" style="width: 6%;" alt="image">
                            <div class="d-block w-100">
                            <p class="w-100"><span class="fw-bold">Озодов Сарвар</span><br> Software engineering - Mentor</p>
                            <hr class="w-25" style="border: 2px solid #62BC9E;">
                            </div>
                            <button class="btn btn-dark bg-dark w-100 ms-4 text-white">Зарегистрируйтесь сейчас</button>
                        </div>
                    </div>


                    <hr class="mt-5 mb-5">

                    <p id="quetions" style="color: #62BC9E;" class="fw-bold mt-5">Вопросы</p>

                    <h1>У вас есть вопрос о нашем учебном курсе по Full stack developer?</h1>
                    <p>Скорее всего, на этом этапе у вас есть пара вопросов. Мы призываем наших студентов задавать вопросы напрямую, и вы можете организовать быстрый звонок с нами в любое время.</p>

                    <ul class="list-unstyled ps-0">
                        <li class="mb-4 border shadow-sm rounded-1">
                            <button class="btn btn-toggle w-100 d-flex justify-content-start fw-bold p-3" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                                Сколько учеников в группе?
                            </button>
                            <div class="collapse" id="home-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal small p-5">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus labore, neque eius eaque perferendis nemo ex
                                </ul>
                            </div>
                        </li>
                        <li class="mb-4 border shadow-sm rounded-1">
                            <button class="btn btn-toggle w-100 d-flex justify-content-start fw-bold p-3" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                                Нужен ли мне опыт работы в программировании?
                            </button>
                            <div class="collapse" id="dashboard-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal small p-5">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus labore, neque eius eaque perferendis nemo ex
                                </ul>
                            </div>
                        </li>
                        <li class="mb-4 border shadow-sm rounded-1">
                            <button class="btn btn-toggle w-100 d-flex justify-content-start fw-bold p-3" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                                Почему Asirum лучше других?
                            </button>
                            <div class="collapse" id="orders-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal p-5 small">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus labore, neque eius eaque perferendis nemo ex
                                </ul>
                            </div>
                        </li>
                    </ul>

                    <p class="fw-bold">Почему Asirum лучше других?</p>
                    <p style="font-size: 30px;">+99 (878) 150-40-02</p>
                    <p class="fw-bold">Можете написать нам </p>
                    <div class="d-flex w-25"><a href="#" class="text-dark"><i class="bi bi-telegram me-3" style="font-size: 45px;"></i></a> <a href="#" class="text-dark"><i class="bi bi-facebook me-3" style="font-size: 45px;"></i></a> <a href="#" class="text-dark"><i class="bi bi-instagram " style="font-size: 45px;"></i> </a></div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-xxl-3 col-xl-4 col-sm-6 col-md-4">
                        <div class="card hvr-float m-auto mt-3" style="width: 18rem;">
                            <img loading="lazy" class="card-img-top shadow" src="{{ asset('images/DSC_6366.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <p>Начала курсв - 03/03/2022</p>
                                <h4 class="card-title fw-bold">Full stack Developer</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <p class="fs-5">12 месяцув / 450 часов</p>
                                <hr class="w-25 border border-success border-2">
                                <a id="btn" href="#" class="btn btn-outline-success p-3 rounded">Узнать больше</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-sm-6 col-md-4">
                        <div class="card hvr-float m-auto mt-3" style="width: 18rem;">
                            <img loading="lazy" class="card-img-top shadow" src="{{ asset('images/DSC_6366.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <p>Начала курсв - 03/03/2022</p>
                                <h4 class="card-title fw-bold">Full stack Developer</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <p class="fs-5">12 месяцув / 450 часов</p>
                                <hr class="w-25 border border-success border-2">
                                <a id="btn" href="#" class="btn btn-outline-success p-3 rounded">Узнать больше</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-sm-6 col-md-4">
                        <div class="card hvr-float m-auto mt-3" style="width: 18rem;">
                            <img loading="lazy" class="card-img-top shadow" src="{{ asset('images/DSC_6366.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <p>Начала курсв - 03/03/2022</p>
                                <h4 class="card-title fw-bold">Full stack Developer</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <p class="fs-5">12 месяцув / 450 часов</p>
                                <hr class="w-25 border border-success border-2">
                                <a id="btn" href="#" class="btn btn-outline-success p-3 rounded">Узнать больше</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-sm-6 col-md-4">
                        <div class="card hvr-float m-auto mt-3" style="width: 18rem;">
                            <img loading="lazy" class="card-img-top shadow" src="{{ asset('images/DSC_6366.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <p>Начала курсв - 03/03/2022</p>
                                <h4 class="card-title fw-bold">Full stack Developer</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <p class="fs-5">12 месяцув / 450 часов</p>
                                <hr class="w-25 border border-success border-2">
                                <a id="btn" href="#" class="btn btn-outline-success p-3 rounded">Узнать больше</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-sm-6 col-md-4">
                        <div class="card hvr-float m-auto mt-3" style="width: 18rem;">
                            <img loading="lazy" class="card-img-top shadow" src="{{ asset('images/DSC_6366.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <p>Начала курсв - 03/03/2022</p>
                                <h4 class="card-title fw-bold">Full stack Developer</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <p class="fs-5">12 месяцув / 450 часов</p>
                                <hr class="w-25 border border-success border-2">
                                <a id="btn" href="#" class="btn btn-outline-success p-3 rounded">Узнать больше</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-sm-6 col-md-4">
                        <div class="card hvr-float m-auto mt-3" style="width: 18rem;">
                            <img loading="lazy" class="card-img-top shadow" src="{{ asset('images/DSC_6366.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <p>Начала курсв - 03/03/2022</p>
                                <h4 class="card-title fw-bold">Full stack Developer</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <p class="fs-5">12 месяцув / 450 часов</p>
                                <hr class="w-25 border border-success border-2">
                                <a id="btn" href="#" class="btn btn-outline-success p-3 rounded">Узнать больше</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-sm-6 col-md-4 mt-3">
                        <div class="card hvr-float m-auto" style="width: 18rem;">
                            <img loading="lazy" class="card-img-top shadow" src="{{ asset('images/DSC_6366.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <p>Начала курсв - 03/03/2022</p>
                                <h4 class="card-title fw-bold">Full stack Developer</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <p class="fs-5">12 месяцув / 450 часов</p>
                                <hr class="w-25 border border-success border-2">
                                <a id="btn" href="#" class="btn btn-outline-success p-3 rounded">Узнать больше</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-md-4">
                        <div class="card hvr-float m-auto mt-3" style="width: 18rem;">
                            <img loading="lazy" class="card-img-top shadow" src="{{ asset('images/DSC_6366.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <p>Начала курсв - 03/03/2022</p>
                                <h4 class="card-title fw-bold">Full stack Developer</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <p class="fs-5">12 месяцув / 450 часов</p>
                                <hr class="w-25 border border-success border-2">
                                <a id="btn" href="#" class="btn btn-outline-success p-3 rounded">Узнать больше</a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>

@endsection
