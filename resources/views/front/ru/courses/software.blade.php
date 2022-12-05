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
        margin-top: 2vh;
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
        z-index: -1;
    }
</style>
@endsection
@section('content')
    <section>
        <div class="container">
            <p class="text-center p-5 text-success"><span class="fw-bold"><a href="{{ route('ru.index') }}" class="text-success text-decoration-none">ГЛАВНАЯ</a> </span> | <a href="{{ route('ru.courses') }}" class="text-success text-decoration-none">КУРСЫ И ОБРАЗОВАНИЕ</a> | <a href="{{ route('ru.fullstack') }}" class="text-success text-decoration-none">Software Engineering</a></p>
            <div class="row">
                <div class="col-md-6">
                    <h1 class="fw-bold">Software Engineering</h1>
                    <hr class="w-25" style="border: 2px solid #62BC9E;">

                    <p class="border border-2 rounded-2 border-dark w-50 ps-4 p-1">Data scientist:
                        Python, Web Scraping, SQL, API with Flask,Numpy, Pandas</p>
                    <p>Software Engineer работает над созданием программ и приложений и запускает их. Его основной функцией является создание оптимизированных приложений, которых можно обновлять и расширять.</p>
                    <button type="button" class="btn btn-dark mb-5 bg-dark p-3 text-white">Зарегистрируйтесь сейчас</button>
                </div>
                <div class="col-md-6">
                    <img class="rounded w-100" src="{{ asset('images/courses/3.png') }}" alt="">
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
                                Software Engineering
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
                                <a class ="nav-link fw-bold" href="#developers">Языки программирования</a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#kurs_room">Классные комнаты</a>
                            </li>
                            {{-- <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#"> Выпускники </a>
                            </li> --}}
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#kurs_total">Расписание занятий</a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#quetions">Вопросы</a>
                            </li>
                            <br>
                            <a href="#" type="button" class="btn btn-danger bg-dark p-3 text-white">Зарегистрируйтесь сейчас</a>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-8">
                    <div>
                        <p id="about" class="fw-bold text-success">О курсе</p>
                        <h1>Заново раскройте свои навыки программирования</h1>
                        <p>Наш курс Software Engineering проходит от 8 до 12 месяцев. За это время, со студентами похожими на вас вы узнаете секреты программирования. Кроме того, во время занятий вы освоите создание функциональных веб-сайтов и программ . И эти знания станут самыми важными факторами в процессе поиска работы.</p>

                        <video class="w-100 rounded" playsinline="playsinline" controls="controls" preload="auto" onclick="this.play()"  muted="muted" loop="loop"> <!-- autoplay="autoplay" -->
                            <source src="{{ asset('images/video_gif.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    {{-- <div class="mt-5 pt-5">
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
                    </div> --}}
                    <hr class="fw-bold">
                    <div class="row mt-5">
                        <p id="lessons" class="fw-bold text-success">УЧЕБНАЯ ПРОГРАММА</p>
                        <h1 class="fw-bold mb-5">В курсе Software Engineering вы освоите:</h1>

                        <div class="d-flex">
                            <i class="bi bi-check-lg me-1 mb-1 mt-1" style="font-size: 40px;"></i>
                            <p class="ms-3"><span class="fw-bold">Знания и навыки </span> <br> Вы изучите популярные языки программирования и примените их на практике </p>
                        </div>
                        <hr class="fw-bold border-1">

                        <div class="d-flex">
                            <i class="bi bi-check-lg me-1 mb-1 mt-1" style="font-size: 40px;"></i>
                            <p class="ms-3"><span class="fw-bold">Современные языки программирования</span><br> Data scientist: Python, Web Scraping, SQL, API with Flask,Numpy, Pandas, Data Cleaning, Data manipulation, EDA, Data Visualization, Presentation skills, Machine Learning skills: Regression, Classification, Reinforcement Learning</p>
                        </div>
                        <hr class="fw-bold border-1">

                        <div class="d-flex">
                            <i class="bi bi-check-lg me-1 mb-1 mt-1" style="font-size: 40px;"></i>
                            <p class="ms-3"><span class="fw-bold">Аналитика</span><br> Знание алгоритмов и способность анализировать процесс работ программ</p>
                        </div>
                        <hr class="fw-bold border-1">

                        <div class="d-flex">
                            <i class="bi bi-check-lg me-1 mb-1 mt-1" style="font-size: 40px;"></i>
                            <p class="ms-3"><span class="fw-bold">Разработка</span><br> Веб-интерфейсов и приложений, управление сборниками и базами данных, тестирование и масштабирование приложений.</p>
                        </div>
                        <hr class="fw-bold border-1">

                        <div class="d-flex">
                            <i class="bi bi-check-lg me-1 mb-1 mt-1" style="font-size: 40px;"></i>
                            <p class="ms-3"><span class="fw-bold">Организование</span><br> Организование системы безопасности сайта или приложения</p>
                        </div>
                        <hr class="fw-bold border-1">

                        <div class="d-flex">
                            <i class="bi bi-check-lg me-1 mb-1 mt-1" style="font-size: 40px;"></i>
                            <p class="ms-3"><span class="fw-bold">Презентация навыков</span><br> Обладеть с Soft skills и быть готовым к беседе на английском языке, а также способность представить себя и свой продукт.</p>
                        </div>
                        <hr class="fw-bold border-1">
                    </div>
                    <div class="row">
                        <p style="color: #62BC9E;" class="fw-bold mt-5">Software Engineering</p>
                        <h1 class="fw-bold">Учитесь программировать с помощью практики</h1>
                        <p class="mb-5">Наша IT-Академия предназначена для поэтапного обучения программированию с помощью практической программы обучения, которая научит вас на 100%.</p>
                        <h1 class="fw-bold">Развивайте свои навыки программирования каждую неделю</h1>
                        <p class="mb-5">Каждую неделю во время нашего учебного курса для разработчиков Software Engineering вы можете освоить новые навыки работы с различными языками программирования, создания веб-сайтов, мобильных приложений и программ.</p>
                        <span class="fw-bold mb-3">План курса на 8-12 месяцев</span>  <br>
                        <p>Наш образовательный курс состоит из увлекательных занятий продолжительностью от 8 до 12 месяцев. Вы можете в любое время прийти в Astrum и учиться столько, сколько захотите, так как это позволит вам лучше понимать и изучать языки программирования.</p>
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
                        <p id="mentors" style="color: #62BC9E;" class="fw-bold mt-5">КОМАНДА МЕНТОРОВ</p>
                        <h1 class="fw-bold">Изучайте программирование у экспертов</h1>
                        <p>Наши профессиональные учителя по программированию научат вас хорошим практикам и навыкам написания хорошего кода на современных языках программирования. Все учителя имеют большой опыт и сильные знания.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <img src="{{ asset('images/mentors/sarvar.jpg') }}" class="rounded w-100" alt="image">
                        </div>
                        <div class="col-md-7">
                            <div class="">
                                <h1>Ozodov Sarvar</h1>
                                <p>Software Engineering</p>
                                <hr class="w-25" style="border: 2px solid #62BC9E;">
                                <p class="">"Привет, меня зовут Сарвар, я ментор по направлению Software Engineering. Я очень строгий учитель и не люблю неработающие коды."</p>
                            </div>
                        </div>
                        {{-- <p style="color: #62BC9E;" class="fw-bold mt-5">Mentorlar jamoasi</p> --}}
                        <div class="row">
                            <div class="col-md-4 mt-4">
                                <div class="position-relative">
                                    <img src="{{ asset('images/mentors/berdiyor.jpg') }}" class="rounded w-100" alt="image">
                                    <span class="position-absolute top-0 start-0 border border-dark rounded text-white bg-dark p-2 ps-3 pe-3 m-2">Mentor</span>
                                    <span class="position-absolute bottom-0 start-0 p-3 text-white"><span class="fw-bold">Holmatov Berdiyor</span> <br><span>Software Engineering</span> <hr class="w-25 m-0" style="border: 2px solid #62BC9E;"></span>
                                </div>
                            </div>
                        </div>

                        <hr class="mt-5 mb-5">

                        <p id="developers" style="color: #62BC9E;" class="fw-bold mt-5">Рабочие инструменты программистов</p>
                        <h1 class="fw-bold">От нуля до профессионала</h1>
                        <p>Наши учебные курсы основаны на новейших средствах программирования, и в отличие от методов прохождения курсов которым обучали студентов на протяжении последних десятилетий, мы считаем, что новейшие технологии и сильная система обучения важны для программиста, чтобы построить свою карьеру и получить глубокие знания.</p>
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <img src="{{ asset('images/ruby.png') }}" class="w-75 h-100 m-auto" alt="image">
                            </div>
                            <div class="col-md-4 text-center">
                                <img src="{{ asset('images/SQLite.jpg') }}" class="w-75 h-100 m-auto" alt="image">
                            </div>
                            <div class="col-md-4 text-center">
                                <img src="{{ asset('images/python.png') }}" class="w-75 h-100 m-auto" alt="image">
                            </div>
                        </div>

                        <hr class="mt-5 mb-5">

                        <p id="kurs_room" style="color: #62BC9E;" class="fw-bold mt-5">Zamonaviy sinfxonalari</p>
                        <h1 class="fw-bold">Bilim olish uchun qulay va kishini hayratga soluvchi zamonaviy sinfxonalar</h1>
                        <p>Biz dasturlashni o'rgatishda har bir o'quvchiga individual yondashuv muhim deb hisoblaymiz va shuning uchun ham har bir o'quvchi mentorlardan savol so'rashi va yordam olishi mumkin. Aynan 20 kishiga mo'ljallangan sinfxonalari esa o'quvchini ko'proq narsalarni tushunishga va boshqalardan tortinmagan holda muhokamalarda qatnashishiga va fikr almashishiga yordam beradi</p>

                    </div>
                    <div class="container-fluid" style="width: 110%">
                        <div class="carousel">
                            <div class="carusel-top">
                                <div class="carousel-inner">
                                    <div class="most-inner">
                                        <img src="{{ asset('images/layout/gallery/1.jpg')}}">
                                        <img src="{{ asset('images/layout/gallery/2.jpg')}}">
                                        <img src="{{ asset('images/layout/gallery/5.jpg')}}">
                                        <img src="{{ asset('images/layout/gallery/4.jpg')}}">
                                        <img src="{{ asset('images/layout/gallery/3.jpg')}}">
                                        <img src="{{ asset('images/layout/gallery/6.jpg')}}">
                                        <img src="{{ asset('images/layout/gallery/7.jpg')}}">
                                        <img src="{{ asset('images/layout/gallery/8.jpg')}}">
                                        <img src="{{ asset('images/layout/gallery/9.jpg')}}">
                                        <img src="{{ asset('images/layout/gallery/10.jpg')}}">
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
                            <img class="w-100" src="{{ asset('images/DSC_6383.jpg') }}" alt="img">
                            <p class="fw-bold m-0">Азиза</p>
                            <p>Full Stack Developer</p>
                            <hr class="w-25 m-0" style="border: 2px solid #62BC9E;">
                        </div>
                        <div class="col-md-3">
                            <img class="w-100" src="{{ asset('images/DSC_6383.jpg') }}" alt="img">
                            <p class="fw-bold m-0">Азиза</p>
                            <p>Full Stack Developer</p>
                            <hr class="w-25 m-0" style="border: 2px solid #62BC9E;">
                        </div>
                        <div class="col-md-3">
                            <img class="w-100" src="{{ asset('images/DSC_6383.jpg') }}" alt="img">
                            <p class="fw-bold m-0">Азиза</p>
                            <p>Full Stack Developer</p>
                            <hr class="w-25 m-0" style="border: 2px solid #62BC9E;">
                        </div>
                        <div class="col-md-3">
                            <img class="w-100" src="{{ asset('images/DSC_6383.jpg') }}" alt="img">
                            <p class="fw-bold m-0">Азиза</p>
                            <p>Full Stack Developer</p>
                            <hr class="w-25 m-0" style="border: 2px solid #62BC9E;">
                        </div>
                    </div> --}}

                    {{-- <div class="row mt-5">
                        <div class="col-md-6">
                            <div class="d-flex">
                                <img class="rounded-circle h-25 border border-warning" src="images/python.png" style="width: 15%;" alt="image">
                                <p class="ms-3 m-auto"><span class="fw-bold">Азиза</span> <br> Full Stack Developer</p>
                            </div>
                            <p>“Asirum укрепил то, что я знал как програмист, и позволил мне бросить вызов моим собственным предположениям, чтобы стать хорошим программистом, обучая новейшим современным инструментам с практическим подходом к решению проблем, творческому мышлению и программированию."</p>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <img class="rounded-circle h-25 border border-warning" src="images/python.png" style="width: 15%;" alt="image">
                                <p class="ms-3 m-auto"><span class="fw-bold">Азиза</span> <br> Full Stack Developer</p>
                            </div>
                            <p>“Мой опыт учебы в Asirum был только положительным - продолжительность курсов очень подходит и соответствует моему графику, а также не слишком длинная или короткая. В то же время мне нужно было освежить знания по Java EE, чтобы обновить свои навыки и был заинтригован содержанием курса, так что я могу быть более уверенным в себе как Full stack developer.”</p>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <img class="rounded-circle h-25 border border-warning" src="images/python.png" style="width: 15%;" alt="image">
                                <p class="ms-3 m-auto"><span class="fw-bold">Азиза</span> <br> Full Stack Developer</p>
                            </div>
                            <p>“Asirum укрепил то, что я знал как програмист, и позволил мне бросить вызов моим собственным предположениям, чтобы стать хорошим программистом, обучая новейшим современным инструментам с практическим подходом к решению проблем, творческому мышлению и программированию."</p>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <img class="rounded-circle h-25 border border-warning" src="images/python.png" style="width: 15%;" alt="image">
                                <p class="ms-3 m-auto"><span class="fw-bold">Азиза</span> <br> Full Stack Developer</p>
                            </div>
                            <p>“Мой опыт учебы в Asirum был только положительным - продолжительность курсов очень подходит и соответствует моему графику, а также не слишком длинная или короткая. В то же время мне нужно было освежить знания по Java EE, чтобы обновить свои навыки и был заинтригован содержанием курса, так что я могу быть более уверенным в себе как Full stack developer.”</p>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <img class="rounded-circle h-25 border border-warning" src="images/python.png" style="width: 15%;" alt="image">
                                <p class="ms-3 m-auto"><span class="fw-bold">Азиза</span> <br> Full Stack Developer</p>
                            </div>
                            <p>“Asirum укрепил то, что я знал как програмист, и позволил мне бросить вызов моим собственным предположениям, чтобы стать хорошим программистом, обучая новейшим современным инструментам с практическим подходом к решению проблем, творческому мышлению и программированию."</p>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <img class="rounded-circle h-25 border border-warning" src="images/python.png" style="width: 15%;" alt="image">
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

                        <p id="kurs_total" style="color: #62BC9E;" class="fw-bold mt-5">Kurs jadvali</p>
                        <h1 class="fw-bold">Qabul jarayonining tezligi</h1>
                        <p>Bizning o'quv kurslarimizda joylar  juda tez to'ldib qoladi, shuning uchun biz qabulni oldinroq e'lon qilamiz.</p>

                        {{-- <div class="tab">
                            <button class="tablinks btn btn-info text-dark active" onclick="openCity(event, 'moon_1')" id="active"><span class="fw-bold">Fevral</span></button>
                            <button class="tablinks btn btn-info text-dark" onclick="openCity(event, 'moon_2')"><span class="fw-bold">May</span> </button>
                            <button class="tablinks btn btn-info text-dark" onclick="openCity(event, 'moon_3')"><span class="fw-bold">Avgust</span> </button>
                        </div> --}}

                        <p class="fw-bold mt-5">30 августа 2022 - 03 ноября 2023 </p>

                        <div id="moon_1" class="tabcontent p-5 ps-3 pe-3 rounded">
                            <p class="fw-bold">Software Engineering</p>
                            <p>1/9 sinfxonasida <span class="fw-bold"> Haftaning dushanba seshanba va payshanba kunlari, soat 09:00-10:30 va 11:00-12:30 da,</span></p>
                            <p>Pre-season uchun darslar</p>
                            <hr class="w-25" style="border: 2px solid #62BC9E;">
                            <p class="bg-warning rounded-1 w-25 text-center p-2">14 bosh joylar</p>
                            <hr>
                            <div class="d-flex">
                                <img class="rounded-circle h-25 border border-warning me-3" src="{{ asset('images/python.png') }}" style="width: 6%;" alt="image">
                                <div class="d-block w-100">
                                <p class="w-100"><span class="fw-bold">Ozodov Sarvar</span><br> Software Engineering - Mentori</p>
                                <hr class="w-25" style="border: 2px solid #62BC9E;">
                                </div>
                                <button class="btn btn-dark bg-dark w-100 ms-4 text-white">Hoziroq roʻyxatdan oʻting</button>
                            </div>
                        </div>

                        <div id="moon_2" class="tabcontent mt-5 p-5 ps-3 pe-3 rounded">
                            <p class="fw-bold">Software Engineeringr</p>
                            <p>2/10 sinfxonasida <span class="fw-bold"> Haftaning dushanba seshanba va payshanba kunlari, soat 09:00-10:30 va 11:00-12:30 da,</span></p>
                            <p>Pre-season uchun darslar</p>
                            <hr class="w-25" style="border: 2px solid #62BC9E;">
                            <p class="bg-warning rounded-1 w-25 text-center p-2">14 bosh joylar</p>
                            <hr>
                            <div class="d-flex">
                                <img class="rounded-circle h-25 border border-warning me-3" src="{{ asset('images/python.png') }}" style="width: 6%;" alt="image">
                                <div class="d-block w-100">
                                <p class="w-100"><span class="fw-bold">Arslonov Berdiyor</span><br> Software Engineering - Mentori</p>
                                <hr class="w-25" style="border: 2px solid #62BC9E;">
                                </div>
                                <button class="btn btn-dark bg-dark w-100 ms-4 text-white">Hoziroq roʻyxatdan oʻting</button>
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
                    <p style="font-size: 30px;">+99 (71) 202 42 22</p>
                    <p class="fw-bold">Вы можете написать нам</p>
                    <div class="d-flex w-25">
                        <a href="https://t.me/astrumuz" target="_blank" class="text-dark"><i class="bi bi-telegram me-3" style="font-size: 45px;"></i></a> 
                        <a href="https://www.facebook.com/Astrumuzb" class="text-dark" target="_blank"><i class="bi bi-facebook me-3" style="font-size: 45px;"></i></a>
                        <a href="http://instagram.com/astrumuz" class="text-dark" target="_blank"><i class="bi bi-instagram me-3" style="font-size: 45px;"></i> </a> 
                        <a href="https://tiktok.com/@astrumuz" class="text-dark" target="_blank"><i class="bi bi-tiktok me-3" style="font-size: 45px;"></i> </a>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-xxl-6 col-xl-6 col-sm-6 col-md-6">
                    <div class="card hvr-float m-auto mt-3" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('images/courses/1.png') }}" alt="Card image cap">
                        <div class="card-body">
                            {{-- <p>Kurs boshlanish voxti - 03/03/2022</p> --}}
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            {{-- <p class="fs-5">12 oy</p> --}}
                            <hr class="w-25 border border-success border-2">
                            <a id="btn" href="{{ route('ru.fullstack') }}" class="btn btn-outline-success p-3 rounded">Более</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-xxl-6 col-xl-6 col-sm-6 col-md-6">
                    <div class="card hvr-float m-auto mt-3" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('images/courses/3.png') }}" alt="Card image cap">
                        <div class="card-body">
                            {{-- <p>Kurs boshlanish voxti - 03/03/2022</p> --}}
                            <h4 class="card-title fw-bold">Data Science</h4>
                            {{-- <p class="fs-5">12 oy</p> --}}
                            <hr class="w-25 border border-success border-2">
                            <a id="btn" href="{{ route('ru.data_science') }}" class="btn btn-outline-success p-3 rounded">Более</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
