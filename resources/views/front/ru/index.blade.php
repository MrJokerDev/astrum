@extends('front.ru.main')

@section('style')
<style>

    #btn {
        font-weight: 700;
    }
    .nav-item a:hover{
        color: rgba(40, 156, 40, 0.521);
        font-weight: 700;
    }
    .carousel-inner .carousel-item img{
        width: 100%;
        max-width: 100%;
        height: 100%;
        max-height: 100%;
        border-radius: 0px;
        transition: transform 0s;

    }

    .carousel-inner .carousel-item img:hover{
        transform: scale(0);
        transform: translateY(0px);
    }
    .slide{
        padding: 0rem 0!important;
        min-height: 0vh;
    }
    .carousel-caption .h1{
        width: 50%;
        margin: auto;
        text-shadow: 4px 2px 6px black;
    }
</style>
@endsection

@section('content')

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img loading="lazy"  src="{{ asset('images/layout/Glavniy_2.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="text-home ms-0 text-start w-50 pb-5">Astrum IT Academy предлагает вам отличную возможность. Приветствуем у нас продолжаются процессы приема в Pre Season 15.</h1>
                        <h1 class="ms-0 text-start mb-5 pb-5">
                            <a href="{{ route('ru.news_pages') }}" class="btn btn-success p-3">Подробнее</a>
                        </h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img loading="lazy"  src="{{ asset('images/layout/Glavniy.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="h1">Первая IT Академия в Узбекистане с инновационной системой обучения</h1>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
    </div>
    <section class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-5">
                    <p style="color: rgba(40, 156, 40, 0.521);" class="fw-bold">О нас</p>
                    <h1 class="fw-bold">Система обучения, управляемая искусственным интеллектом, и современная атмосфера-залог вашего успеха.</h1> <br>
                    <p class="fw-semibold">Академия Astrum IT — первая и крупнейшая IT Академия не только в Узбекистане, но и в Средней Азии, где внедрен инновационный метод обучения с использованием искусственного интеллекта.</p>
                    <p class="fw-semibold">Современные технологии, учебный кампус работающий 24/7, около тысячи iMac'ов и комфортные условия позволяют вырасти в настоящего программиста.</p>
                    <a id="btn" href="{{ route('ru.about_us') }}" class="btn btn-outline-success p-3 rounded">Подробнее</a>
                </div>
                <div class="col-md-12 col-lg-7">
                    <h1 class="about_us">About us</h1>
                    <div class="img">
                        <div class="img_1">
                            <img loading="lazy"  class="w-100 shadow bg-white rounded" src="{{ asset('images/layout/12.jpg') }}" alt="images">
                        </div>
                        <div class="img_2">
                            <img loading="lazy"  class="w-100 shadow bg-white rounded" src="{{ asset('images/layout/gallery/2.jpg')}}" alt="images">
                        </div>
                    </div>
                    <div class="w-100 text-end">
                        <a href="{{ route('ru.gallery') }}" class="href_arrow">Фото <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5 mt-5">
        <div class="container pt-5 mt-5">
            <div class="row justify-content-end">
                <div class="col-sm-12 col-md-9 col-xl-7">
                    <div class="border shadow bg-white rounded p-3 fw-semibold">
                       <p>Академия Astrum IT расположена на природе, а свежий воздух и бесшумная атмосфера помогут вам хорошо изучить IT-сферу без лишних отвлекательств. Территория академии охраняется круглосуточно, а учебный кампус работает в режиме 24/7. Вы можете прийти в удобное для вас время и продолжить курсы когда угодно.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid">
        <div class="astrum_img">
            <img loading="lazy"  src="{{ asset('images/astrum_foto.png')}}" alt="">
        </div>
    </section>

    <section class="carousel">
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
    </section>

    <section class="section-fon">
        <div class="container align-items-center pt-5 mt-5">
            <p style="color: rgba(40, 156, 40, 0.521);" class="fw-bold">Образование и курсы</p>
            <h1 id="courses_rek" class="text-white">Изучайте IT-сферу в Академии Astrum IT и меняйте свою жизнь к лучшему</h1>
            <p id="courses_rek_p" class="text-white pt-4 fs-5">С помощью искуственного интеллекта курсы программирования в нашей академии систематизированы таким образом, что к моменту окончания учебы у вас будет достаточно знаний и хорошее портфолио</p>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row mt-5 mb-5">
                @include('components.courses')
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div>
                <p style="color: rgba(40, 156, 40, 0.521);" class="fw-bold">КУРСЫ И ОБУЧЕНИЕ</p>
                <h1 class="fw-bold mb-5">Почему большинство людей выбирают Академию Astrum IT?</h1>
            </div>
            <div class="row mb-5">
                <div class="col-md-6 col-xl-4 col-xxl-4 mb-5">
                    <p class="border-start border-dark border-4 ps-3 text-muted fw-bolder">Высокая атмосфера</p>
                    <p>В учебном корпусе Astrum находится Mac Valley, где представлено более тысячи iMac'ов. Вы можете пользоваться ими когда угодно.</p>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-4 mb-5">
                    <p class="border-start border-dark border-4 ps-3 text-muted fw-bolder">Инновационная система образования</p>
                    <p>В Astrum'е нет преподователей. Занятия проводятся с помощью искусственного интеллекта. Вы должны посещать занятия на платформе и загружать домашние задания. А на вопросы ответят наши профессиональные менторы</p>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-4 mb-5">
                    <p class="border-start border-dark border-4 ps-3 text-muted fw-bolder">Сертификат QWASAR</p>
                    <p>По окончании учебы вы получите сертификат QWASAR, который позволит вам работать в Силиконовой долине Америки. Благодаря этому сертификату вы можете работать в престижных компаниях Европы и Америки.</p>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-4 mb-5">
                    <p class="border-start border-dark border-4 ps-3 text-muted fw-bolder">Система охраны 24/7</p>
                    <p>В Академии Astrum IT приняты полные меры безопасности, а учебный кампус охраняется круглосуточно. Это дает нашим ученикам возможность посещать Astrum и продолжать занятия в любое время.</p>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-4 mb-5">
                    <p class="border-start border-dark border-4 ps-3 text-muted fw-bolder">Созданные комфортные условия</p>
                    <p>Здесь имеются спортивные площадки, комнаты для отдыха, комнаты со всеми удобствами, chill zone и большой двор, где можно расслабиться.</p>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-4 mb-5">
                    <p class="border-start border-dark border-4 ps-3 text-muted fw-bolder">Возможность быстрее завершать занятия</p>
                    <p>За счет того, что уроки будут проходить с помощью искусственного интеллекта, вы сможете быстрее просматривать уроки и быстрее завершать учебную программу, пополняя ряды ТОПОВЫХ программистов.</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <img loading="lazy"  src="{{ asset('images/astrum_staff.jpg')}}" class="w-100 rounded shadow" alt="image">
        </div>
    </section>

    <section id="mentors" class="pt-5">
        <div class="container">
            <p style="color: rgba(40, 156, 40, 0.521);" class="fw-bold text-center">Наши менторы</p>
            <h1 id="courses_rek" class="text-center fw-bold">В Академии Astrum IT вам помогут самые сильные менторы с большим опытом, чтобы вы могли получить качественное образование и освоить эту сферу.</h1>
            <p id="courses_rek_p" class="text-center mb-5">Ментор — это лицо, отвечающее на ваши вопросы.</p>
            <div class="row">
                <div class="col-sm-12 col-xl-3 col-xxl-3 col-lg-4 col-md-6 mt-5">
                    <div class="profile-card">
                        <div class="profile-img">
                            <img loading="lazy"  src="{{ asset('images/mentors/aziza.jpg') }}" alt="Team Image"/>
                        </div>
                        <div class="profile-content">
                            <h2 class="title">Azizova Aziza
                                <span>React.js Frontend Developer</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-3 col-xxl-3 col-lg-4 col-md-6 mt-5">
                    <div class="profile-card">
                        <div class="profile-img">
                            <img loading="lazy"  src="{{ asset('images/mentors/sarvar.jpg') }}" alt="Team Image"/>
                        </div>
                        <div class="profile-content">
                            <h2 class="title">Ozodov Saravar
                                <span>C# .Net Backend Developer</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-3 col-xxl-3 col-lg-4 col-md-6 mt-5">
                    <div class="profile-card">
                        <div class="profile-img">
                            <img loading="lazy"  src="{{ asset('images/mentors/baxtibek.jpg') }}" alt="Team Image"/>
                        </div>
                        <div class="profile-content">
                            <h2 class="title">Anvarov Baxtibek
                                <span>Node.js Backend Developer</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-3 col-xxl-3 col-lg-4 col-md-6 mt-5">
                    <div class="profile-card">
                        <div class="profile-img">
                            <img loading="lazy"  src="{{ asset('images/mentors/sarvar_sh.jpg') }}" alt="Team Image"/>
                        </div>
                        <div class="profile-content">
                            <h2 class="title">Shomurodov Saravar
                                <span>PHP Laravel Backend Developer</span>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('ru.about_us') }}" id="btn" class="btn btn-outline-success p-3 mt-5 rounded">Вся команда</a>
        </div>
    </section>

    <section>
        <div class="container">
            <h1 class="fw-bold">Собственные ценности и цели Академии Astrum IT дают нам преимущество в качестве, а не в количестве учащихся.</h1>
            <div class="row pt-5">
                <div class="col-md-6 col-sm-6 col-lg-6 mb-5">
                    <p class="border-start border-dark border-4 ps-3 fs-2 fw-bold">Слушаем учеников</p>
                    <p>Мы всегда прислушиваемся к возражениям и жалобам учащихся и вместе находим решения.</p>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 mb-5">
                    <p class="border-start border-dark border-4 ps-3 fs-2 fw-bold">Учеба и спорт в гармонии</p>
                    <p>С помощью спортивных площадок организованных в нашей академии, наши студенты учатся и занимаются спортом одновременно.</p>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 mb-5">
                    <p class="border-start border-dark border-4 ps-3 fs-2 fw-bold">Скорость и современность</p>
                    <p>Учитывая высокие темпы развития современной IT сферы, мы выступаем за использование самой современной и быстрой системы обучения.</p>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 mb-5">
                    <p class="border-start border-dark border-4 ps-3 fs-2 fw-bold">Образование и опыт</p>
                    <p>Современная система обучения и возможность участвовать в реальных проектах во время обучения доступны только в Astrum. Мы делимся не только знаниями, но и опытом.</p>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 mb-5">
                    <p class="border-start border-dark border-4 ps-3 fs-2 fw-bold">Наши менторы</p>
                    <p>В Академии Astrum IT работают молодые менторы, имеющие хорошие знания. После того, как ученик прошел уроки с помощью инновационной образовательной платформы, он может обратиться к менторам при возникновении дополнительных вопросов где они что-то не понимают. Наши менторы всегда готовы помочь каждому ученику.</p>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 mb-5">
                    <p class="border-start border-dark border-4 ps-3 fs-2 fw-bold">Система AstroCoin</p>
                    <p>Академия Astrum IT внедрила систему AstroCoin для стимулирования учащихся и повышения их интереса к учебе. При этом, учащиеся могут зарабатывать специальные AstroCoin'ы, участвуя в общественной жизни, образовательных процессах и различных мероприятиях академии Astrum IT, а также покупать различные ценные подарки на маркете с помощью этих монет.</p>
                </div>
            </div>
        </div>
    </section>

@endsection

