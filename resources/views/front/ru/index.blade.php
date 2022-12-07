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
.carousel-caption h1{
    width: 50%;
    margin: auto;
    text-shadow: 4px 2px 6px black;
}
</style>
@endsection

@section('content')

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                {{-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button> --}}
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/layout/Glavniy.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>O'zbekistonda innovatsion ta'lim tizimiga ega birinchi IT Akademiya</h1>
                        {{-- <p>Some representative placeholder content for the first slide.</p> --}}
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/layout/Glavniy_2.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>O'zbekistonda innovatsion ta'lim tizimiga ega birinchi IT Akademiya</h1>
                        {{-- <p>Some representative placeholder content for the second slide.</p> --}}
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
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-5">
                    <p style="color: rgba(40, 156, 40, 0.521);" class="fw-bold">Biz haqimizda</p>
                    <h1 class="fw-bold">Sun'iy intellekt yordamida boshqariladigan ta'lim tizimi va zamonaviy atmosfera sizning muvaffaqiyatingiz garovidir.</h1> <br>
                    <p class="fw-semibold">Astrum IT Akademiyasi nafaqat O'zbekistondagi, balki O'rta Osiyodagi birinchi va eng katta IT Akademiya bo'lib, bu yerda sun'iy intellekt yordamida ta'lim berishning innovatsion usuli yo'lga qo'yilgan.</p>
                    <p class="fw-semibold"> Zamonaviy texnologiyalar, 24/7 ishlaydigan o'quv kampusi, mingga yaqing iMac'lar va qulay sharoitlar sizga haqiqiy dasturchi bo'lib yetishish imkonini beradi. </p>
                    <a id="btn" href="{{ route('ru.about_us') }}" class="btn btn-outline-success p-3 rounded">Batafsil</a>
                </div>
                <div class="col-md-12 col-lg-7">
                    <h1 class="about_us">About us</h1>
                    <div class="img">
                        <div class="img_1">
                            <img class="w-100 h-100 shadow bg-white rounded" src="{{ asset('images/layout/12.jpg') }}" alt="images">
                        </div>
                        <div class="img_2">
                            <img class="w-100 h-100 shadow bg-white rounded" src="{{ asset('images/layout/gallery/2.jpg')}}" alt="images">
                        </div>
                    </div>
                    <div class="w-100 text-end">
                        <a href="{{ route('ru.gallery') }}" class="href_arrow">Фото <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="location" class="pt-5 mt-5">
        <div class="container pt-5 mt-5">
            {{-- <div class="row">
                <div class="text-center">
                    <p style="color: rgba(40, 156, 40, 0.521);" class="fw-bold">Akademiya joylashuvi</p>
                    <h1 class="fw-bold">Buyuk g'oyalar eng yaxshi joylarda tug'iladi</h1>
                    <p class="fw-semibold">Biz esa sizga eng qulay lokatsiyani taqdim etamiz</p>
                </div>
            </div> --}}
            <div class="row justify-content-end">
                <div class="col-sm-12 col-md-9 col-xl-7">
                    <div class="border shadow bg-white rounded p-4 fw-semibold">
                       <p>Академия Astrum IT расположена на природе, а свежий воздух и бесшумная атмосфера помогут вам хорошо изучить IT-сферу без лишних отвлекательств. Территория академии охраняется круглосуточно, а учебный кампус работает в режиме 24/7. Вы можете прийти в удобное для вас время и продолжить курсы когда угодно.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid">
        <div class="astrum_img">
            <img src="{{ asset('images/astrum_foto.png')}}" alt="">
        </div>
    </section>

    <section class="carousel">
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
    </section>

    <section class="section-fon">
        <div class="container align-items-center">
            <p style="color: rgba(40, 156, 40, 0.521);" class="fw-bold">Образование и курсы</p>
            <h1 id="courses_rek" class="text-white">Изучайте IT-сферу в Академии Astrum IT и меняйте свою жизнь к лучшему</h1>
            <p id="courses_rek_p" class="text-white pt-4 fs-5">С помощью искуственного интеллекта курсы программирования в нашей академии систематизированы таким образом, что к моменту окончания учебы у вас будет достаточно знаний и хорошее портфолио</p>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-xxl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="card hvr-float m-auto m-5">
                        <img class="card-img-top" src="{{ asset('images/courses/1.png')}}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Это специалист, который должен понимать весь набор технологий и компонентов используемых в проекте, как со стороны Front-end, так и со стороны Back-end.</p>

                            <hr class="w-25 border border-success border-2">
                            <a href="{{ route('ru.fullstack') }}" class="btn btn-outline-success p-3 rounded">Batafsil</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="card hvr-float m-auto">
                        <img class="card-img-top" src="{{ asset('images/courses/2.png')}}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">Data Science</h4>
                            <p class="card-text">Специалист по информации создает модели основанные на данных, которые помогают принимать повседневные или бизнес решения.</p>

                            <hr class="w-25 border border-success border-2">
                            <a href="{{ route('ru.data_science') }}" class="btn btn-outline-success p-3 rounded">Batafsil</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="card hvr-float m-auto">
                        <img class="card-img-top" src="{{ asset('images/courses/3.png')}}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">Software Engineering</h4>
                            <p class="card-text">Software Engineer работает над созданием программ и приложений и запускает их. Его основной функцией является создание оптимизированных приложений, которых можно обновлять и расширять.</p>

                            <hr class="w-25 border border-success border-2">
                            <a href="{{ route('ru.software_engineering') }}" class="btn btn-outline-success p-3 rounded">Batafsil</a>
                        </div>
                    </div>
                </div>
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
            <img src="{{ asset('images/astrum_staff.jpg')}}" class="w-100 rounded shadow" alt="image">
        </div>
    </section>

    <section id="mentors" class="pt-5">
        <div class="container">
            <p style="color: rgba(40, 156, 40, 0.521);" class="fw-bold text-center">Наши менторы</p>
            <h1 id="courses_rek" class="text-center fw-bold">Astrum IT Akademiyasida siz sifatli ta'lim olishingiz va sohani puxta egallashingiz uchun eng kuchli va katta tajribaga ega mentorlar yordam berishadi. </h1>
            <p id="courses_rek_p" class="text-center mb-5">Mentor — sizda tug'ilgan savollarga javob beruvchi shaxs.</p>
            <div class="row">
                <div class="col-sm-12 col-xl-3 col-xxl-3 col-lg-4 col-md-6 mt-5">
                    <div class="profile-card">
                        <div class="profile-img">
                            <img src="{{ asset('images/mentors/aziza.jpg') }}" alt="Team Image"/>
                        </div>
                        <div class="profile-content">
                            <h2 class="title">Azizova Aziza
                                <span>Full Satack Developer</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-3 col-xxl-3 col-lg-4 col-md-6 mt-5">
                    <div class="profile-card">
                        <div class="profile-img">
                            <img src="{{ asset('images/mentors/sarvar.jpg') }}" alt="Team Image"/>
                        </div>
                        <div class="profile-content">
                            <h2 class="title">Ozodov Saravar
                                <span>Software Engineering</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-3 col-xxl-3 col-lg-4 col-md-6 mt-5">
                    <div class="profile-card">
                        <div class="profile-img">
                            <img src="{{ asset('images/mentors/asal.jpg') }}" alt="Team Image"/>
                        </div>
                        <div class="profile-content">
                            <h2 class="title">Alimbaeva Asal
                                <span>Data Science</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-3 col-xxl-3 col-lg-4 col-md-6 mt-5">
                    <div class="profile-card">
                        <div class="profile-img">
                            <img src="{{ asset('images/mentors/komil.jpg') }}" alt="Team Image"/>
                        </div>
                        <div class="profile-content">
                            <h2 class="title">Xamidjonov Komiljon
                                <span>Data Science</span>
                            </h2>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-sm-12 col-xl-3 col-xxl-3 col-lg-4 col-md-6 mt-5">
                    <div class="profile-card">
                        <div class="profile-img">
                            <img src="{{ asset('images/mentors/sarvar_sh.jpg') }}" alt="Team Image"/>
                        </div>
                        <div class="profile-content">
                            <h2 class="title">Shomurodov Sarvar
                                <span>Full Satack Developer</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-3 col-xxl-3 col-lg-4 col-md-6 mt-5">
                    <div class="profile-card">
                        <div class="profile-img">
                            <img src="{{ asset('images/mentors/nodira.jpg') }}" alt="Team Image"/>
                        </div>
                        <div class="profile-content">
                            <h2 class="title">Arslonova Nodira
                                <span>Data Science</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-3 col-xxl-3 col-lg-4 col-md-6 mt-5">
                    <div class="profile-card">
                        <div class="profile-img">
                            <img src="{{ asset('images/mentors/berdiyor.jpg') }}" alt="Team Image"/>
                        </div>
                        <div class="profile-content">
                            <h2 class="title">Alimbaev Berdiyor
                                <span>Software Engineering</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-3 col-xxl-3 col-lg-4 col-md-6 mt-5">
                    <div class="profile-card">
                        <div class="profile-img">
                            <img src="{{ asset('images/mentors/baxtibek.jpg') }}" alt="Team Image"/>
                        </div>
                        <div class="profile-content">
                            <h2 class="title">Anvarov baxtibek
                                <span>Full Stack</span>
                            </h2>
                        </div>
                    </div>
                </div> --}}
            </div>
            <a href="{{ route('ru.about_us') }}" id="btn" class="btn btn-outline-success p-3 mt-5 rounded">Barcha jamoa</a>
        </div>
    </section>

    <section>
        <div class="container">
            {{-- <p style="color: rgba(40, 156, 40, 0.521);" class="fw-bold">Bizning qadriyatlar</p> --}}
            <h1 class="fw-bold">Astrum IT Akademiyasining o'zining qadriyatlari va o'z oldiga qo'ygan maqsadlari bo'lib, bizga o'quvchining soni emas, balki sifati afzalroq.</h1>
            {{-- <p>Astrum IT Akademiyasining o'zining qadriyatlari va o'z oldiga qo'ygan maqsadlari bo'lib, bizga o'quvchining soni emas, balki sifati afzalroq.</p> --}}
            <div class="row pt-5">
                <div class="col-md-6 col-sm-6 col-lg-6 mb-5">
                    <p class="border-start border-dark border-4 ps-3 fs-2 fw-bold">O'quvchilarni tinglaymiz </p>
                    <p>Biz har doim o'quvchilarning e'tirozlarini va shikoyatlarini tinglaymiz va ularga birgalikda yechim topamiz. </p>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 mb-5">
                    <p class="border-start border-dark border-4 ps-3 fs-2 fw-bold">O'qish va sport uyg'unlikda </p>
                    <p>Akademiyamizda tashkil qilingan sport maydonchalari orqali o'quvchilarimiz o'qish va sportni birgalikda olib boradilar. </p>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 mb-5">
                    <p class="border-start border-dark border-4 ps-3 fs-2 fw-bold">Tezlik va zamonaviylik </p>
                    <p>Bugungi kundagi IT sohasining yuqori sur'atlarda rivojlanib borayotganini hisobga olgan holda, biz eng zamonaviy va tezkor o'qitish tizimidan foydalanish tarafdorimiz. </p>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 mb-5">
                    <p class="border-start border-dark border-4 ps-3 fs-2 fw-bold">Ta'lim va tajriba</p>
                    <p>Zamonaviy o'qitish tizimi va ta'lim olish mobaynida real loyihalarda qatnashish imkoniyati faqatgina Astrumda mavjud. Biz nafaqat bilim, balki tajriba ham ulashamiz.</p>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 mb-5">
                    <p class="border-start border-dark border-4 ps-3 fs-2 fw-bold">Bizning mentorlar</p>
                    <p>Astrum IT Akademiyasida yosh va shu bilan birgalikda kuchli bilimga ega mentorlar faoliyat olib borishadi. O'quvchi darslarni innovatsion ta'lim platformasi orqali o'tganidan so'ng, tushunmagan joylarini yoki qo'shimcha savollarini mentorlardan so'rab olishi mumkin. Bizning mentorlar har bir o'quvchiga yordam berishga doimo tayyor. </p>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 mb-5">
                    <p class="border-start border-dark border-4 ps-3 fs-2 fw-bold">AstroCoin tizimi</p>
                    <p>Astrum IT Akademiyasida o'quvchilarni rag'batlantirish, ularni o'qishga bo'lgan qiziqishini yana-da oshirish maqsadida AstroCoin tizimi yo'lga qo'yilgan. Bunda o'quvchilar Astrum It Akademiyasining ijtimoiy hayotida, ta'lim jarayonlarida va turli xildagi tadbirlarda o'zlarini ko'rsatgan holda maxsus AstroCoinlarga ega bo'lishlari va ushbu Coinlar orqali marketdan turli xildagi qimmatbaho sovg'alarni xarid qilishlari mumkin.</p>
                </div>
            </div>
        </div>
    </section>

@endsection

