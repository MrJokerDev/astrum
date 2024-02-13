@extends('front.eng.main')

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
            <p class="text-center p-5 text-success"><span class="fw-bold"><a href="{{ route('eng.index') }}" class="text-success text-decoration-none">Home</a> </span> | <a href="{{ route('eng.courses') }}" class="text-success text-decoration-none">Courses and Education</a> | <a href="{{ route('eng.' . $course->url) }}" class="text-success text-decoration-none">{{$course->title}}</a></p>
            <div class="row">
                <div class="col-md-6">
                    <h1 class="fw-bold">{{$course->title}}</h1>
                    <hr class="w-25" style="border: 2px solid #62BC9E;">

                    <p id="skill" class="border border-2 rounded-2 border-dark ps-4 p-1">
                        @foreach($course->skills as $skill)
                            @foreach(json_decode($skill->skills) as $text)
                                {{ $text }},
                            @endforeach
                        @endforeach
                    </p>
                    <p>{{ $course->langs[2]->text_table }}</p>
                 </div>
                <div class="col-md-6">
                    <img loading="lazy"  class="rounded w-100" src="{{ asset('images/courses/1.png') }}" alt="">
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
                                {{$course->title}}
                            </li>
                            <hr>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#about">About course</a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#lessons">Curriculum</a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#mentors">Mentors</a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#developers">Programming languages</a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#kurs_room">Classrooms</a>
                            </li>
                            {{-- <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#"> Выпускники </a>
                            </li> --}}
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#kurs_total">Class Schedule</a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#quetions">Questions</a>
                            </li>
                            <br>
                            @include('front.eng.component.registerLid')
                            {{-- <a href="{{ route('eng.register') }}" class="btn btn-danger bg-dark p-3 text-white">Register Now</a> --}}
                        </ul>
                    </nav>
                </div>
                <div class="col-md-8 pt-5">
                    <div>
                        <p id="about" class="fw-bold text-success">About course</p>
                        <h1>Rediscover your programming skills</h1>
                        <p>Our {{$course->title}} course takes 8 to 12 months to complete. During this time, you will learn the secrets of programming with students just like you. You will also learn how to build functional websites and programs in these classes. And this knowledge will become the most important factor in the job search process.</p>

                        <video class="w-100 rounded" playsinline="playsinline" controls="controls" preload="auto" onclick="this.play()"  muted="muted" loop="loop"> <!-- autoplay="autoplay" -->
                            <source src="{{ asset('images/video_gif.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    <hr class="fw-bold">
                    <div class="row mt-5">
                        <p id="lessons" class="fw-bold text-success">CURRICULUM</p>
                        <h1 class="fw-bold mb-5">In the {{$course->title}} course, you will master:</h1>

                        <div class="d-flex">
                            <i class="bi bi-check-lg me-1 mb-1 mt-1" style="font-size: 40px;"></i>
                            <p class="ms-3"><span class="fw-bold">Knowledge and skills</span> <br> You will learn popular programming languages and put them into practice</p>
                        </div>
                        <hr class="fw-bold border-1">

                        <div class="d-flex">
                            <i class="bi bi-check-lg me-1 mb-1 mt-1" style="font-size: 40px;"></i>
                            <p class="ms-3"><span class="fw-bold">Modern programming languages</span><br>
                                @foreach($course->skills as $skill)
                                    @foreach(json_decode($skill->skills) as $text)
                                        {{ $text }},
                                    @endforeach
                                @endforeach
                            </p>
                        </div>
                        <hr class="fw-bold border-1">

                        <div class="d-flex">
                            <i class="bi bi-check-lg me-1 mb-1 mt-1" style="font-size: 40px;"></i>
                            <p class="ms-3"><span class="fw-bold">Analytics</span><br>Knowledge of algorithms and ability to analyze the process of programs</p>
                        </div>
                        <hr class="fw-bold border-1">

                        <div class="d-flex">
                            <i class="bi bi-check-lg me-1 mb-1 mt-1" style="font-size: 40px;"></i>
                            <p class="ms-3"><span class="fw-bold">Development</span><br> Web interfaces and applications, managing collections and databases, testing and scaling applications.</p>
                        </div>
                        <hr class="fw-bold border-1">

                        <div class="d-flex">
                            <i class="bi bi-check-lg me-1 mb-1 mt-1" style="font-size: 40px;"></i>
                            <p class="ms-3"><span class="fw-bold">Organizing</span><br> Organizing site or application security system</p>
                        </div>
                        <hr class="fw-bold border-1">

                        <div class="d-flex">
                            <i class="bi bi-check-lg me-1 mb-1 mt-1" style="font-size: 40px;"></i>
                            <p class="ms-3"><span class="fw-bold">Skills presentation</span><br> Possess with Soft skills and be ready for a conversation in English, as well as the ability to present yourself and your product.</p>
                        </div>
                        <hr class="fw-bold border-1">
                    </div>
                    <div class="row">
                        <p style="color: #62BC9E;" class="fw-bold mt-5">FULL STACK DEVELOPER</p>
                        <h1 class="fw-bold">Learn to program through practice</h1>
                        <p class="mb-5">Our IT Academy is designed to teach programming step-by-step with a hands-on training program that will teach you 100%.</p>
                        <h1 class="fw-bold">Develop your programming skills every week</h1>
                        <p class="mb-5">Each week during our Full stack Developer training course, you can learn new skills in a variety of programming languages, websites, mobile apps, and programs.</p>
                        <span class="fw-bold mb-3">Course outline for 8-12 months </span>  <br>
                        <p>Our educational course consists of exciting sessions lasting from 8 to 12 months. You can come to Astrum at any time and study as long as you want, as it allows you to better understand and learn programming languages.</p>
                    </div>

                    {{-- <div class="row ms-5 mt-5">
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
                    </div> --}}

                    <hr class="mt-5 mb-5">
                    <div class="row">
                        <p id="mentors" style="color: #62BC9E;" class="fw-bold mt-5">MENTOR TEAM</p>
                        <h1 class="fw-bold">Learn programming from the experts</h1>
                        <p>Our professional programming teachers will teach you the good practices and skills of writing good code in modern programming languages. All teachers have extensive experience and strong knowledge.</p>
                    </div>
                    <div class="row">
                        @foreach($course->mentors as $mentor)
                            <div class="col-md-5">
                                <img loading="lazy" src="{{ asset('storage/mentors/' . $mentor->image) }}" class="rounded w-100" alt="image">
                            </div>
                            <div class="col-md-7">
                                <div class="">
                                    <h1>{{$mentor->last_name}} {{$mentor->first_name}}</h1>
                                    <p>{{$course->title}}</p>
                                    <hr class="w-25" style="border: 2px solid #62BC9E;">
                                    @foreach($mentor_texts as $mentor_text)
                                        <p class="text-base">
                                            @if($mentor->id == $mentor_text->table_info_id)
                                                {{$mentor_text->text_table}}
                                            @endif
                                        </p>
                                    @endforeach
                                </div>
                            </div>
                            <hr class="mt-5 mb-5">
                        @endforeach

                        <p id="developers" style="color: #62BC9E;" class="fw-bold mt-5">Working tools for programmers</p>
                        <h1 class="fw-bold">From Zero to Pro</h1>
                        <p>Our training courses are based on the latest programming tools, and unlike the way courses have been taught for the past decades, we believe that the latest technology and a strong training system are important for programmers to build their careers and gain in-depth knowledge.</p>
                        <div class="row">
                            @foreach($logos as $logo)
                                <div class="col-md-4 text-center d-flex align-middle">
                                    <img loading="lazy" src="{{asset('storage/courses/logo/' . $logo->course_logo)}}" class="w-100 h-auto m-auto" alt="image">
                                </div>
                            @endforeach
                        </div>

                        <hr class="mt-5 mb-5">

                        <p id="kurs_room" style="color: #62BC9E;" class="fw-bold mt-5">Modern classrooms</p>
                        <h1 class="fw-bold">Modern and amazing classrooms that are comfortable for learning</h1>
                        <p>We believe that an individual approach to each student is important when teaching programming, so each student can ask questions of mentors and get help. And classes of exactly 20 people will help the student understand better and participate in discussions and exchange ideas without shying away from others</p>

                    </div>
                    <div class="container-fluid" style="width: 100%">
                        <div class="carousel">
                            <div class="carusel-top">
                                <div class="carousel-inner">
                                    <div class="most-inner">
                                        <img loading="lazy"  src="{{ asset('images/layout/gallery/1.jpg')}}">
                                        <img loading="lazy"  src="{{ asset('images/layout/gallery/2.jpg')}}">
                                        <img loading="lazy"  src="{{ asset('images/layout/gallery/5.jpg')}}">
                                        <img loading="lazy"  src="{{ asset('images/layout/gallery/4.jpg')}}">
                                        <img loading="lazy"  src="{{ asset('images/layout/gallery/3.jpg')}}">
                                        <img loading="lazy"  src="{{ asset('images/layout/gallery/6.jpg')}}">
                                        <img loading="lazy"  src="{{ asset('images/layout/gallery/7.jpg')}}">
                                        <img loading="lazy"  src="{{ asset('images/layout/gallery/8.jpg')}}">
                                        <img loading="lazy"  src="{{ asset('images/layout/gallery/9.jpg')}}">
                                        <img loading="lazy"  src="{{ asset('images/layout/gallery/10.jpg')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <hr class="mt-5 mb-5"> --}}

                    {{-- <p style="color: #62BC9E;" class="fw-bold mt-5">современные классы</p>
                    <h1 class="fw-bold">Классы которые удивляют и помагаютв обучении</h1>
                    <p>Мы считаем, что индивидуальный подход к обучению крайне важен, и мы намеренно ограничиваем размер класса примерно 20 дизайнерами. Небольшой размер классов гарантирует, что мы сможем охватить больше за то время, которое у нас есть, и вы будете учиться непосредственно у других программистов. Кроме того, это удобное место для обучения, когда весь класс участвует в обсуждениях и делится отзывами.</p>

                    <div class="row mt-5">
                        <div class="col-md-3">
                            <img loading="lazy"  class="w-100" src="{{ asset('images/DSC_6383.jpg') }}" alt="img">
                            <p class="fw-bold m-0">Азиза</p>
                            <p>Full Stack Developer</p>
                            <hr class="w-25 m-0" style="border: 2px solid #62BC9E;">
                        </div>
                        <div class="col-md-3">
                            <img loading="lazy"  class="w-100" src="{{ asset('images/DSC_6383.jpg') }}" alt="img">
                            <p class="fw-bold m-0">Азиза</p>
                            <p>Full Stack Developer</p>
                            <hr class="w-25 m-0" style="border: 2px solid #62BC9E;">
                        </div>
                        <div class="col-md-3">
                            <img loading="lazy"  class="w-100" src="{{ asset('images/DSC_6383.jpg') }}" alt="img">
                            <p class="fw-bold m-0">Азиза</p>
                            <p>Full Stack Developer</p>
                            <hr class="w-25 m-0" style="border: 2px solid #62BC9E;">
                        </div>
                        <div class="col-md-3">
                            <img loading="lazy"  class="w-100" src="{{ asset('images/DSC_6383.jpg') }}" alt="img">
                            <p class="fw-bold m-0">Азиза</p>
                            <p>Full Stack Developer</p>
                            <hr class="w-25 m-0" style="border: 2px solid #62BC9E;">
                        </div>
                    </div> --}}

                    {{-- <div class="row mt-5">
                        <div class="col-md-6">
                            <div class="d-flex">
                                <img loading="lazy"  class="rounded-circle h-25 border border-warning" src="images/python.png" style="width: 15%;" alt="image">
                                <p class="ms-3 m-auto"><span class="fw-bold">Азиза</span> <br> Full Stack Developer</p>
                            </div>
                            <p>“Asirum укрепил то, что я знал как програмист, и позволил мне бросить вызов моим собственным предположениям, чтобы стать хорошим программистом, обучая новейшим современным инструментам с практическим подходом к решению проблем, творческому мышлению и программированию."</p>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <img loading="lazy"  class="rounded-circle h-25 border border-warning" src="images/python.png" style="width: 15%;" alt="image">
                                <p class="ms-3 m-auto"><span class="fw-bold">Азиза</span> <br> Full Stack Developer</p>
                            </div>
                            <p>“Мой опыт учебы в Asirum был только положительным - продолжительность курсов очень подходит и соответствует моему графику, а также не слишком длинная или короткая. В то же время мне нужно было освежить знания по Java EE, чтобы обновить свои навыки и был заинтригован содержанием курса, так что я могу быть более уверенным в себе как Full stack developer.”</p>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <img loading="lazy"  class="rounded-circle h-25 border border-warning" src="images/python.png" style="width: 15%;" alt="image">
                                <p class="ms-3 m-auto"><span class="fw-bold">Азиза</span> <br> Full Stack Developer</p>
                            </div>
                            <p>“Asirum укрепил то, что я знал как програмист, и позволил мне бросить вызов моим собственным предположениям, чтобы стать хорошим программистом, обучая новейшим современным инструментам с практическим подходом к решению проблем, творческому мышлению и программированию."</p>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <img loading="lazy"  class="rounded-circle h-25 border border-warning" src="images/python.png" style="width: 15%;" alt="image">
                                <p class="ms-3 m-auto"><span class="fw-bold">Азиза</span> <br> Full Stack Developer</p>
                            </div>
                            <p>“Мой опыт учебы в Asirum был только положительным - продолжительность курсов очень подходит и соответствует моему графику, а также не слишком длинная или короткая. В то же время мне нужно было освежить знания по Java EE, чтобы обновить свои навыки и был заинтригован содержанием курса, так что я могу быть более уверенным в себе как Full stack developer.”</p>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <img loading="lazy"  class="rounded-circle h-25 border border-warning" src="images/python.png" style="width: 15%;" alt="image">
                                <p class="ms-3 m-auto"><span class="fw-bold">Азиза</span> <br> Full Stack Developer</p>
                            </div>
                            <p>“Asirum укрепил то, что я знал как програмист, и позволил мне бросить вызов моим собственным предположениям, чтобы стать хорошим программистом, обучая новейшим современным инструментам с практическим подходом к решению проблем, творческому мышлению и программированию."</p>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <img loading="lazy"  class="rounded-circle h-25 border border-warning" src="images/python.png" style="width: 15%;" alt="image">
                                <p class="ms-3 m-auto"><span class="fw-bold">Азиза</span> <br> Full Stack Developer</p>
                            </div>
                            <p>“Мой опыт учебы в Asirum был только положительным - продолжительность курсов очень подходит и соответствует моему графику, а также не слишком длинная или короткая. В то же время мне нужно было освежить знания по Java EE, чтобы обновить свои навыки и был заинтригован содержанием курса, так что я могу быть более уверенным в себе как Full stack developer.”</p>
                        </div>
                    </div> --}}

                    {{-- <hr class="mt-5 mb-5">

                    <p style="color: #62BC9E;" class="fw-bold mt-5">Цена</p>
                    <h1 class="fw-bold">Простые, прозрачные и гибкие планы платежей</h1> --}}
                    {{-- <p>В отличие от других курсов, которые скрывают свои цены, мы полностью прозрачны в отношении цен на курсы и гордимся тем, что они доступны и доступны.</p> --}}
                    {{-- <div class="row">
                        <div class="col-md-8">
                            <div class="tab">
                                <button class="tablinks btn btn-info text-dark" onclick="openCity(event, 'London')" id="defaultOpen"><span class="fw-bold">Оплата сегодня</span></button>
                                <button class="tablinks btn btn-info text-dark" onclick="openCity(event, 'Paris')"><span class="fw-bold">Оплата по месячно</span> </button>
                            </div>

                            <div id="London" class="tabcontent mt-5 p-5 ps-3 pe-3 rounded">
                                <p class="text-muted">Оплата сегодня</p>
                                <p><span class="fw-bold">Оплата сегодня</span> - Скидка 6 000 UZS</p>
                                <p><span class="fw-bold"><span class="text-decoration-line-through">5 000 UZS</span> - 4 500 UZS</span> / в месяц</p>
                                <p>Курс Full stack developer </p>
                                <hr>
                                <p class="bg-warning p-2 w-25 text-center rounded-1" style="font-size: 10px;"><span>&#129395;</span> Сохрани сегодня</p>
                                <hr>
                                <p>Всего</p>
                                <button class="btn btn-dark bg-dark w-100 mb-5 p-4">Зарегистрируйтесь сейчас</button>
                                <p class="w-75 d-flex"><i class="bi bi-check-lg me-2 mt-1"></i> Присоединяйтесь к компактному классу в 20 учеников программистов</p>
                                <p class="w-75 d-flex"><i class="bi bi-check-lg me-2 mt-1"></i> Интересные и интерактивные занятия по программированию </p>
                                <p class="w-75 d-flex"><i class="bi bi-check-lg me-2 mt-1"></i> Присоединяйтесь к группе профи в Telegram</p>
                                <p class="w-75 d-flex"><i class="bi bi-check-lg me-2 mt-1"></i> Полный список литературы по программированию</p>
                                <p class="w-75 d-flex"><i class="bi bi-check-lg me-2 mt-1"></i> Освойте рабочий процесс Java EE</p>
                                <p class="w-75 d-flex"><i class="bi bi-check-lg me-2 mt-1"></i> Осваивайте дополнительные компоненты</p>
                                <p class="w-75 d-flex"><i class="bi bi-check-lg me-2 mt-1"></i> Выполняйте еженедельные задания</p>
                                <p class="w-75 d-flex"><i class="bi bi-check-lg me-2 mt-1"></i> Получите сертификат от Asirum</p>
                            </div>

                            <div id="Paris" class="tabcontent mt-5 p-5 ps-3 pe-3 rounded">
                                <p class="text-muted">План оплата</p>
                                <p class="fw-bold">5 ежемесячных платежей</p>
                                <p><span class="fw-bold">5 000 UZS</span> / в месяц</p>
                                <p>5х ежемесячных платежей</p>
                                <hr>
                                <p>Всего</p>
                                <button class="btn btn-dark bg-dark w-100 mb-5 p-4">Зарегистрируйтесь сейчас</button>
                                <p class="w-75 d-flex"><i class="bi bi-check-lg me-2 mt-1"></i> Присоединяйтесь к компактному классу в 20 учеников программистов</p>
                                <p class="w-75 d-flex"><i class="bi bi-check-lg me-2 mt-1"></i> Интересные и интерактивные занятия по программированию </p>
                                <p class="w-75 d-flex"><i class="bi bi-check-lg me-2 mt-1"></i> Присоединяйтесь к группе профи в Telegram</p>
                                <p class="w-75 d-flex"><i class="bi bi-check-lg me-2 mt-1"></i> Полный список литературы по программированию</p>
                                <p class="w-75 d-flex"><i class="bi bi-check-lg me-2 mt-1"></i> Освойте рабочий процесс Java EE</p>
                                <p class="w-75 d-flex"><i class="bi bi-check-lg me-2 mt-1"></i> Осваивайте дополнительные компоненты</p>
                                <p class="w-75 d-flex"><i class="bi bi-check-lg me-2 mt-1"></i> Выполняйте еженедельные задания</p>
                                <p class="w-75 d-flex"><i class="bi bi-check-lg me-2 mt-1"></i> Получите сертификат от Asirum</p>
                            </div>
                        </div>
                    </div> --}}

                    <hr class="mt-5 mb-5">

                        <p id="kurs_total" style="color: #62BC9E;" class="fw-bold mt-5">Course Schedule</p>
                        <h1 class="fw-bold">Speed of recruitment process</h1>
                        <p>Our training courses fill seats very quickly, so we announce our recruitment in advance.</p>

                        {{-- <div class="tab">
                            <button class="tablinks btn btn-info text-dark active" onclick="openCity(event, 'moon_1')" id="active"><span class="fw-bold">Fevral</span></button>
                            <button class="tablinks btn btn-info text-dark" onclick="openCity(event, 'moon_2')"><span class="fw-bold">May</span> </button>
                            <button class="tablinks btn btn-info text-dark" onclick="openCity(event, 'moon_3')"><span class="fw-bold">Avgust</span> </button>
                        </div> --}}

{{--                        <p class="fw-bold mt-5">August 30, 2022 - November 03, 2023</p>--}}

{{--                        <div id="moon_1" class="tabcontent p-5 ps-3 pe-3 rounded">--}}
{{--                            <p class="fw-bold">Full stack developer</p>--}}
{{--                            <p>Days of the week: <span class="fw-bold">  Monday, Tuesday and Thursday, 09:00-10:30 and 11:00-12:30, in class 1/9.</span></p>--}}
{{--                            <p>Lessons for Pre-season</p>--}}
{{--                            <hr class="w-25" style="border: 2px solid #62BC9E;">--}}
{{--                            <p class="bg-warning rounded-1 text-center p-2">14 spaces available</p>--}}
{{--                            <hr>--}}
{{--                            <div class="card_table">--}}
{{--                                <img loading="lazy"  class="rounded-circle h-25 border border-warning me-3" src="{{ asset('images/python.png') }}" style="width: 6%;" alt="image">--}}
{{--                                <div class="d-block w-100">--}}
{{--                                <p class="w-100"><span class="fw-bold">Shukurov Jasur</span><br> Full Stack Developer - Mentori</p>--}}
{{--                                <hr class="w-25" style="border: 2px solid #62BC9E;">--}}
{{--                                </div>--}}
{{--                                --}}{{-- @include('front.eng.component.registerLid') --}}
{{--                                --}}{{-- <a href="{{ route('eng.register') }}" class="btn btn-dark bg-dark w-100 text-white justify-content-center align-self-center">Register now</a> --}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div id="moon_2" class="tabcontent mt-5 p-5 ps-3 pe-3 rounded">--}}
{{--                            <p class="fw-bold">Full stack developer</p>--}}
{{--                            <p>Days of the week: <span class="fw-bold"> Monday, Tuesday and Thursday, 09:00-10:30 and 11:00-12:30, in class 2/10.</span></p>--}}
{{--                            <p>Lessons for Pre-season</p>--}}
{{--                            <hr class="w-25" style="border: 2px solid #62BC9E;">--}}
{{--                            <p class="bg-warning rounded-1 text-center p-2">14 spaces available</p>--}}
{{--                            <hr>--}}
{{--                            <div class="card_table">--}}
{{--                                <img loading="lazy"  class="rounded-circle h-25 border border-warning me-3" src="{{ asset('images/python.png') }}" style="width: 6%;" alt="image">--}}
{{--                                <div class="d-block w-100">--}}
{{--                                <p class="w-100"><span class="fw-bold">Azizova Aziza</span><br> Full Stack Developer - Mentori</p>--}}
{{--                                <hr class="w-25" style="border: 2px solid #62BC9E;">--}}
{{--                                </div>--}}
{{--                                --}}{{-- @include('front.eng.component.registerLid') --}}
{{--                                --}}{{-- <a href="{{ route('eng.register') }}" class="btn btn-dark bg-dark w-100 text-white justify-content-center align-self-center">Register now</a> --}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div id="moon_3" class="tabcontent mt-5 p-5 ps-3 pe-3 rounded">--}}
{{--                            <p class="fw-bold">Full stack developer</p>--}}
{{--                            <p>2/8 sinfxonasida <span class="fw-bold"> Haftaning dushanba seshanba va payshanba kunlari, soat 09:00-10:30 va 11:00-12:30 da,</span></p>--}}
{{--                            <p>Lessons for Pre-season</p>--}}
{{--                            <hr class="w-25" style="border: 2px solid #62BC9E;">--}}
{{--                            <p class="bg-warning rounded-1 text-center p-2">14 spaces available</p>--}}
{{--                            <hr>--}}
{{--                            <div class="card_table">--}}
{{--                                <img loading="lazy"  class="rounded-circle h-25 border border-warning me-3" src="{{ asset('images/python.png') }}" style="width: 6%;" alt="image">--}}
{{--                                <div class="d-block w-100">--}}
{{--                                <p class="w-100"><span class="fw-bold">Shomurodov Sarvar</span><br> Full Stack Developer - Mentori</p>--}}
{{--                                <hr class="w-25" style="border: 2px solid #62BC9E;">--}}
{{--                                </div>--}}
{{--                                --}}{{-- @include('front.eng.component.registerLid') --}}
{{--                                --}}{{-- <a href="{{ route('eng.register') }}" class="btn btn-dark bg-dark w-100 text-white justify-content-center align-self-center">Register now</a> --}}
{{--                            </div>--}}
{{--                        </div>--}}


                    <hr class="mt-5 mb-5">

                    <p id="quetions" style="color: #62BC9E;" class="fw-bold mt-5">Questions</p>

                    <h1>Any questions about Full Stack Developer course?</h1>
                    <p>Likely you may have had a couple of questions. We ask those who follow us to ask questions directly, and you can also contact us on the hotline at any time</p>

                    <ul class="list-unstyled ps-0">
                        <li class="mb-4 border shadow-sm rounded-1">
                            <button class="btn btn-toggle w-100 d-flex justify-content-start fw-bold p-3" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                                How many students will be in the group?
                            </button>
                            <div class="collapse" id="home-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal small p-5">
                                    Astrum IT Academy is equipped with an educational system that works with high-tech artificial intelligence algorithms. You can come to Astrum anytime you want to work on yourself and leave whenever you want.
                                </ul>
                            </div>
                        </li>
                        <li class="mb-4 border shadow-sm rounded-1">
                            <button class="btn btn-toggle w-100 d-flex justify-content-start fw-bold p-3" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                                Do I need to have the basic knowledge to learn programming?
                            </button>
                            <div class="collapse" id="dashboard-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal small p-5">
                                    The training system at Astrum IT Academy is arranged in such a way that you don't need any initial knowledge to take one of the courses. Through our academy's Pre-season courses, you'll get the basics, and by passing the exam, you'll move on to the Main Season courses.
                                </ul>
                            </div>
                        </li>
                        <li class="mb-4 border shadow-sm rounded-1">
                            <button class="btn btn-toggle w-100 d-flex justify-content-start fw-bold p-3" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                                Why is Astrum better than others?
                            </button>
                            <div class="collapse" id="orders-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal p-5 small">
                                    Because we have modern training system based on Artificial Intelligence and at the end of the course you will receive international certificate QWASAR, which will allow you to work in the Silicon Valley of America. We also have modern classrooms, Mac Valley, 24/7 campus athletic fields, internal Astrocoin currency, and day and night security system.
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <p style="font-size: 30px;">+998 (71) 202 42 22</p>
                    <p class="fw-bold">You can write to us</p>
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
