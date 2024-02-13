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
            <p class="text-center p-5 text-success"><span class="fw-bold"><a href="{{ route('eng.index') }}" class="text-success text-decoration-none">HOME</a> </span> | <a href="{{ route('eng.courses') }}" class="text-success text-decoration-none">COURSES AND EDUCATION</a> | <a href="{{ route('eng.fullstack') }}" class="text-success text-decoration-none">Software Engineering</a></p>
            <div class="row">
                <div class="col-md-6">
                    <h1 class="fw-bold">Software Engineering</h1>
                    <hr class="w-25" style="border: 2px solid #62BC9E;">

                    <p class="border border-2 rounded-2 border-dark ps-4 p-1">Data scientist:
                        Python, Web Scraping, SQL, API with Flask,Numpy, Pandas</p>
                    <p>Software Engineer works on creating programs and applications and running them. Its main function is to create optimized applications that can be updated and extended.</p>
                    {{-- <a href="{{ route('eng.register') }}" class="btn btn-dark mb-5 bg-dark p-3 text-white">Register now</a> --}}
                    {{-- @include('front.eng.component.registerLid') --}}
                </div>
                <div class="col-md-6">
                    <img loading="lazy"  class="rounded w-100" src="{{ asset('images/courses/3.png') }}" alt="">
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
                                Software Engineering
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
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#kurs_total">Class Schedule</a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#quetions">Questions</a>
                            </li>
                            <br>
                            @include('front.eng.component.registerLid')
                            {{-- <a href="{{ route('eng.register') }}" class="btn btn-danger bg-dark p-3 text-white">Register now</a> --}}
                        </ul>
                    </nav>
                </div>
                <div class="col-md-8">
                    <div>
                        <p id="about" class="fw-bold text-success">About course</p>
                        <h1>Rediscover your programming skills</h1>
                        <p>Our Software Engineering course takes 8 to 12 months to complete. During this time, you will learn the secrets of programming with students just like you. You will also learn how to build functional websites and programs in these classes. And this knowledge will become the most important factor in the job search process.</p>

                        <video class="w-100 rounded" playsinline="playsinline" controls="controls" preload="auto" onclick="this.play()"  muted="muted" loop="loop"> <!-- autoplay="autoplay" -->
                            <source src="{{ asset('images/video_gif.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    <hr class="fw-bold">
                    <div class="row mt-5">
                        <p id="lessons" class="fw-bold text-success">CURRICULUM</p>
                        <h1 class="fw-bold mb-5">In the Software Engineering course, you will master:</h1>

                        <div class="d-flex">
                            <i class="bi bi-check-lg me-1 mb-1 mt-1" style="font-size: 40px;"></i>
                            <p class="ms-3"><span class="fw-bold">Knowledge and skills</span> <br>You will learn popular programming languages and put them into practice</p>
                        </div>
                        <hr class="fw-bold border-1">

                        <div class="d-flex">
                            <i class="bi bi-check-lg me-1 mb-1 mt-1" style="font-size: 40px;"></i>
                            <p class="ms-3"><span class="fw-bold">Modern programming languages</span><br> Data scientist: Python, Web Scraping, SQL, API with Flask,Numpy, Pandas, Data Cleaning, Data manipulation, EDA, Data Visualization, Presentation skills, Machine Learning skills: Regression, Classification, Reinforcement Learning</p>
                        </div>
                        <hr class="fw-bold border-1">

                        <div class="d-flex">
                            <i class="bi bi-check-lg me-1 mb-1 mt-1" style="font-size: 40px;"></i>
                            <p class="ms-3"><span class="fw-bold">Analytics</span><br> Knowledge of algorithms and ability to analyze the process of programs</p>
                        </div>
                        <hr class="fw-bold border-1">

                        <div class="d-flex">
                            <i class="bi bi-check-lg me-1 mb-1 mt-1" style="font-size: 40px;"></i>
                            <p class="ms-3"><span class="fw-bold">Development</span><br>Web interfaces and applications, managing collections and databases, testing and scaling applications.</p>
                        </div>
                        <hr class="fw-bold border-1">

                        <div class="d-flex">
                            <i class="bi bi-check-lg me-1 mb-1 mt-1" style="font-size: 40px;"></i>
                            <p class="ms-3"><span class="fw-bold">Organizing</span><br>Organizing site or application security system.</p>
                        </div>
                        <hr class="fw-bold border-1">

                        <div class="d-flex">
                            <i class="bi bi-check-lg me-1 mb-1 mt-1" style="font-size: 40px;"></i>
                            <p class="ms-3"><span class="fw-bold">Skills presentation</span><br> Possess with Soft skills and be ready for a conversation in English, as well as the ability to present yourself and your product.</p>
                        </div>
                        <hr class="fw-bold border-1">
                    </div>
                    <div class="row">
                        <p style="color: #62BC9E;" class="fw-bold mt-5">Software Engineering</p>
                        <h1 class="fw-bold">Learn to program through practice</h1>
                        <p class="mb-5">Our IT Academy is designed to teach programming step-by-step with a hands-on training program that will teach you 100%.</p>
                        <h1 class="fw-bold">Develop your programming skills every week </h1>
                        <p class="mb-5">Each week during our Software Engineering training course, you can learn new skills in a variety of programming languages, websites, mobile apps, and programs.</p>
                        <span class="fw-bold mb-3">Course outline for 8-12 months</span>  <br>
                        <p>Our educational course consists of exciting sessions lasting from 8 to 12 months. You can come to Astrum at any time and study as long as you want, as it allows you to better understand and learn programming languages.</p>
                    </div>

                    <hr class="mt-5 mb-5">
                    <div class="row">
                        <p id="mentors" style="color: #62BC9E;" class="fw-bold mt-5">MENTOR TEAM</p>
                        <h1 class="fw-bold">Learn programming from the experts</h1>
                        <p>Our professional programming teachers will teach you the good practices and skills of writing good code in modern programming languages. All teachers have extensive experience and strong knowledge.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <img loading="lazy"  src="{{ asset('images/mentors/sarvar.jpg') }}" class="rounded w-100" alt="image">
                        </div>
                        <div class="col-md-7">
                            <div class="">
                                <h1>Ozodov Sarvar</h1>
                                <p>Software Engineering</p>
                                <hr class="w-25" style="border: 2px solid #62BC9E;">
                                <p class="">"Hi, my name is Sarvar, I am a Mentor of Software Engineering. I'm a very strict teacher and I don't like broken codes."</p>
                            </div>
                        </div>
                        {{-- <p style="color: #62BC9E;" class="fw-bold mt-5">Mentorlar jamoasi</p> --}}
                        <div class="row">
                            <div class="col-md-4 mt-4">
                                <div class="position-relative">
                                    <img loading="lazy"  src="{{ asset('images/mentors/berdiyor.jpg') }}" class="rounded w-100" alt="image">
                                    <span class="position-absolute top-0 start-0 border border-dark rounded text-white bg-dark p-2 ps-3 pe-3 m-2">Mentor</span>
                                    <span class="position-absolute bottom-0 start-0 p-3 text-white"><span class="fw-bold">Holmatov Berdiyor</span> <br><span>Software Engineering</span> <hr class="w-25 m-0" style="border: 2px solid #62BC9E;"></span>
                                </div>
                            </div>
                        </div>

                        <hr class="mt-5 mb-5">

                        <p id="developers" style="color: #62BC9E;" class="fw-bold mt-5">Working tools for programmers</p>
                        <h1 class="fw-bold">From Zero to Pro</h1>
                        <p>Our training courses are based on the latest programming tools, and unlike the way courses have been taught for the past decades, we believe that the latest technology and a strong training system are important for programmers to build their careers and gain in-depth knowledge.</p>
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <img loading="lazy"  src="{{ asset('images/logo_programminig/1.jpg') }}" class="w-100 h-auto m-auto" alt="image">
                            </div>
                            <div class="col-md-4 text-center">
                                <img loading="lazy"  src="{{ asset('images/logo_programminig/3.jpg') }}" class="w-100 h-auto m-auto" alt="image">
                            </div>
                            <div class="col-md-4 text-center">
                                <img loading="lazy"  src="{{ asset('images/logo_programminig/8.jpg') }}" class="w-100 h-auto m-auto" alt="image">
                            </div>
                        </div>

                        <hr class="mt-5 mb-5">

                        <p id="kurs_room" style="color: #62BC9E;" class="fw-bold mt-5">Modern classrooms</p>
                        <h1 class="fw-bold">Modern and amazing classrooms that are comfortable for learning</h1>
                        <p>We believe that an individual approach to each student is important when teaching programming, so each student can ask questions of mentors and get help. And classes of exactly 20 people will help the student understand better and participate in discussions and exchange ideas without shying away from others</p>

                    </div>
                    <div class="container-fluid" style="width: 110%">
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

                    <hr class="mt-5 mb-5">

                        <p id="kurs_total" style="color: #62BC9E;" class="fw-bold mt-5">Course schedule</p>
                        <h1 class="fw-bold">Speed of recruitment process</h1>
                        <p>Our training courses fill seats very quickly, so we announce our recruitment in advance.</p>


                        <p class="fw-bold mt-5">August 30, 2022 - November 03, 2023</p>

                        <div id="moon_1" class="tabcontent p-5 ps-3 pe-3 rounded">
                            <p class="fw-bold">Software Engineering</p>
                            <p>Days of the week: <span class="fw-bold"> Monday, Tuesday and Thursday, 09:00-10:30 and 11:00-12:30, in class 1/9</span></p>
                            <p>Lessons for Pre-season</p>
                            <hr class="w-25" style="border: 2px solid #62BC9E;">
                            <p class="bg-warning rounded-1 text-center p-2">14 spaces available</p>
                            <hr>
                            <div class="card_table">
                                <img loading="lazy"  class="rounded-circle h-25 border border-warning me-3" src="{{ asset('images/python.png') }}" style="width: 6%;" alt="image">
                                <div class="d-block w-100">
                                <p class="w-100"><span class="fw-bold">Ozodov Sarvar</span><br> Software Engineering - Mentori</p>
                                <hr class="w-25" style="border: 2px solid #62BC9E;">
                                </div>
                                {{-- @include('front.eng.component.registerLid') --}}
                                {{-- <a href="{{ route('eng.register') }}" class="btn btn-dark bg-dark w-100 text-white justify-content-center align-self-center">Register now</a> --}}
                            </div>
                        </div>

                        <div id="moon_2" class="tabcontent mt-5 p-5 ps-3 pe-3 rounded">
                            <p class="fw-bold">Software Engineeringr</p>
                            <p>Days of the week: <span class="fw-bold"> Monday, Tuesday and Thursday, 09:00-10:30 and 11:00-12:30, in class 1/9</span></p>
                            <p>Lessons for Pre-season</p>
                            <hr class="w-25" style="border: 2px solid #62BC9E;">
                            <p class="bg-warning rounded-1 text-center p-2">14 spaces available</p>
                            <hr>
                            <div class="card_table">
                                <img loading="lazy"  class="rounded-circle h-25 border border-warning me-3" src="{{ asset('images/python.png') }}" style="width: 6%;" alt="image">
                                <div class="d-block w-100">
                                <p class="w-100"><span class="fw-bold">Arslonov Berdiyor</span><br> Software Engineering - Mentori</p>
                                <hr class="w-25" style="border: 2px solid #62BC9E;">
                                </div>
                                {{-- @include('front.eng.component.registerLid') --}}
                                {{-- <a href="{{ route('eng.register') }}" class="btn btn-dark bg-dark w-100 text-white justify-content-center align-self-center">Register now</a> --}}
                            </div>
                        </div>


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
                    <p style="font-size: 30px;">+99 (71) 202 42 22</p>
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
