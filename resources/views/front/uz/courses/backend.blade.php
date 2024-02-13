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
        /* text-align: center; */
        /* width: 65%; */
        /* margin: auto; */
    }
</style>
@endsection
@section('content')

        <div id="header" class="container-lg">
            <p class="text-center p-5 text-success"><span class="fw-bold"><a href="{{ route('uz.index') }}" class="text-success text-decoration-none">BOSH SAHIFA</a> </span> | <a href="{{ route('uz.courses') }}" class="text-success text-decoration-none">KURSLAR VA TA'LIM</a> | <a href="{{ route('uz.'. $course->url) }}" class="text-success text-decoration-none">{{$course->title}}</a></p>
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
                    <p>{{ $course->langs[0]->text_table }}</p>
                </div>
                <div class="col-md-6">
                    <img loading="lazy" class="rounded w-100" src="{{ asset('images/courses/1.png') }}" alt="">
                </div>
            </div>
        </div>

    <section>
        <div class="container-lg">
            <div class="row">
                <div class="col-md-4">
                    <nav id="navbar-bg" class="navbar sticky-top rounded p-4">
                        <ul class ="nav navbar-nav w-100">
                            <li>
                                {{$course->title}}
                            </li>
                            <hr>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#about"> Kurs haqida </a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#lessons"> O'quv dasturlari </a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#mentors"> Mentorlar </a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#developers"> Dasturlash tillari </a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#kurs_room"> Sinf xonalari </a>
                            </li>
                            {{-- <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#"> Выпускники </a>
                            </li> --}}
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#kurs_total"> Dars jadvali </a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#quetions"> Savollar </a>
                            </li>
                            <br>
                            @include('front.uz.component.registerLid')
                        </ul>
                    </nav>
                </div>
                <div class="col-md-8 pt-5">
                    <div>
                        <p id="about" class="fw-bold text-success">Kurs haqida</p>
                        <h1>Dasturlash ko'nikmalaringizni qaytadan kashf qiling</h1>
                        <p>Bizning {{$course->title}} kursimiz o'zida 8 oydan 12 oygacha bo'lgan vaqtni qamrab oladi. Siz bu vaqt mobaynida o'zingizga o'xshagan talabalar bilan dasturlash sirlarini o'rganasiz. Undan tashqari mashg'ulotlar vaqtida funksiomal web saytlar va dasturlash yaratishni o'zlashtirasiz. Ushbu bilimlar esa ish topish jarayonida kerak bo'ladigan eng muhim narsalardir.</p>

                        <video class="w-100 rounded" playsinline="playsinline" autoplay="autoplay" controls="controls" preload="auto" onclick="this.play()"  muted="muted" loop="loop"> <!-- autoplay="autoplay" -->
                            <source src="{{ asset('images/video_gif.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    <hr class="fw-bold">
                    <div class="row mt-5">
                        <p id="lessons" class="fw-bold text-success">O'QUV PROGRAMMASI</p>
                        <h1 class="fw-bold mb-5">{{$course->title}} dasturchi kursida siz quyidagilarni o'rganasiz:</h1>

                        <div class="d-flex">
                            <i class="bi bi-check-lg me-1 mb-1 mt-1" style="font-size: 40px;"></i>
                            <p class="ms-3"><span class="fw-bold">Bilim va ko'nikma </span> <br> Mashhur dasturlash tillarini o'rganasiz va ularni amalda qo'llab ko'rasiz </p>
                        </div>
                        <hr class="fw-bold border-1">

                        <div class="d-flex">
                            <i class="bi bi-check-lg me-1 mb-1 mt-1" style="font-size: 40px;"></i>
                            <p class="ms-3"><span class="fw-bold">Zamonaviy dasturlash tillari</span><br>
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
                            <p class="ms-3"><span class="fw-bold">Analitika</span><br> Algoritmlarni bilish va dasturlarni qanday ishlashini analiz qila olish qobiliyati</p>
                        </div>
                        <hr class="fw-bold border-1">

                        <div class="d-flex">
                            <i class="bi bi-check-lg me-1 mb-1 mt-1" style="font-size: 40px;"></i>
                            <p class="ms-3"><span class="fw-bold"> Ishlab chiqish</span><br> Web-interfeyslar va ilovalarni ishlab chiqish, to'plamlar va ma'lumotlar bazalarini boshqarish, dasturlarni sinovdan o'tkazish va masshtablash.</p>
                        </div>
                        <hr class="fw-bold border-1">

                        <div class="d-flex">
                            <i class="bi bi-check-lg me-1 mb-1 mt-1" style="font-size: 40px;"></i>
                            <p class="ms-3"><span class="fw-bold">Tashkil qilish </span><br> Sayt yoki dastur xavfsizligi tizimini tashkil qilish </p>
                        </div>
                        <hr class="fw-bold border-1">

                        <div class="d-flex">
                            <i class="bi bi-check-lg me-1 mb-1 mt-1" style="font-size: 40px;"></i>
                            <p class="ms-3"><span class="fw-bold">Taqdimot ko'nikmalar</span><br> Soft skills'ga ega bo'lish va ingliz tilidagi suhbatga tayyor bo'lish o'zingizni va mahsulotingizni taqdim eta olish qobiliyati.</p>
                        </div>
                        <hr class="fw-bold border-1">
                    </div>
                    <div class="row">
                        <p style="color: #62BC9E;" class="fw-bold mt-5">{{$course->title}}</p>
                        <h1 class="fw-bold">Amaliyot orqali dasturlashni o'rganing</h1>
                        <p class="mb-5">Bizning IT Akademiyamiz sizni 100% bajarib o'rganadigan amaliy o'quv dasturi orqali dasturlashni bosqichma-bosqich o'tkazish uchun mo'ljallangan.</p>
                        <h1 class="fw-bold">Har hafta dasturlash mahoratingizni oshirib boring </h1>
                        <p class="mb-5">Har hafta Backend dasturchi bo'yicha o'quv kursimiz davomida sizdan turli dasturlash tillari bilan ishlash, veb-saytlar, mobil ilovalar va dasturlar yaratish bo'yicha yangi ko'nikmalarni o'rganishingiz mumkin.</p>
                        <span class="fw-bold mb-3">8-12 oylik kurs rejasi </span>  <br>
                        <p>Bizning  ta'lim kursimiz 8 oydan 12 oygacha davom etuvchi qiziqarli darslardan iborat. Siz o'zingiz xohlagan paytingiz Astrumga kelasiz va xohlagancha dars qila olasiz bu sizga dasturlash tillarini yaxshiroq tushunish va o'rganish imkonini beradi.</p>
                    </div>

                    <hr class="mt-5 mb-5">
                    <div class="row">
                        <p id="mentors" style="color: #62BC9E;" class="fw-bold mt-5">MENTORLAR JAMOASI</p>
                        <h1 class="fw-bold">Dasturlashni ekspertlardan o'rganing </h1>
                        <p>Bizning dasturlash bo'yicha professional o'qituvchilarimiz sizga zamonaviy dasturlash tillarida yaxshi kod yozish uchun eng yaxshi amaliyot va ko'nikmalarni o'rgatadi. O'qituvchilarning hammasi katta tajriba va kuchli bilimga ega.
                        </p>
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


                        <p id="developers" style="color: #62BC9E;" class="fw-bold mt-5">Dasturchilarning ish qurollari</p>
                        <h1 class="fw-bold">Noldan professionalgacha</h1>
                        <p>Bizning o'quv kurslarimiz eng so'nggi dasturlash vositalariga asoslangan bo'lib, o'tgan o'n yilliklar davomida o'quvchilarga o'rgatilgan kurs o'tish usullaridan farqli o'laroq, biz dasturchi o'z karyerasini qurishi va chuqur bilim olishi uchun eng so'nggi texnologiyalar va kuchli o'qitish tizimi muhim deb hisoblaymiz.</p>
                        <div class="row">
                            @foreach($logos as $logo)
                                <div class="col-md-4 text-center d-flex align-middle">
                                    <img loading="lazy" src="{{asset('storage/courses/logo/' . $logo->course_logo)}}" class="w-100 h-auto m-auto" alt="image">
                                </div>
                            @endforeach
                        </div>

                        <hr class="mt-5 mb-5">

                        <p id="kurs_room" style="color: #62BC9E;" class="fw-bold mt-5">Zamonaviy sinfxonalari</p>
                        <h1 class="fw-bold">Bilim olish uchun qulay va kishini hayratga soluvchi zamonaviy sinfxonalar</h1>
                        <p>Biz dasturlashni o'rgatishda har bir o'quvchiga individual yondashuv muhim deb hisoblaymiz va shuning uchun ham har bir o'quvchi mentorlardan savol so'rashi va yordam olishi mumkin. Aynan 20 kishiga mo'ljallangan sinfxonalari esa o'quvchini ko'proq narsalarni tushunishga va boshqalardan tortinmagan holda muhokamalarda qatnashishiga va fikr almashishiga yordam beradi</p>

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

{{--                        <p id="kurs_total" style="color: #62BC9E;" class="fw-bold mt-5">Kurs jadvali</p>--}}
{{--                        <h1 class="fw-bold">Qabul jarayonining tezligi</h1>--}}
{{--                        <p>Bizning o'quv kurslarimizda joylar  juda tez to'ldib qoladi, shuning uchun biz qabulni oldinroq e'lon qilamiz.</p>--}}

{{--                        --}}{{-- <p class="fw-bold mt-5">30 августа 2022 - 03 ноября 2023 </p> --}}

{{--                        <div id="moon_1" class="tabcontent p-5 ps-3 pe-3 rounded">--}}
{{--                            <p class="fw-bold">{{$course->title}}</p>--}}
{{--                            <p>1/9 sinfxonasida <span class="fw-bold"> Haftaning dushanba seshanba va payshanba kunlari, soat 09:00-10:30 va 11:00-12:30 da,</span></p>--}}
{{--                            <p>Pre-season uchun darslar</p>--}}
{{--                            <hr class="w-25" style="border: 2px solid #62BC9E;">--}}
{{--                            <p class="bg-warning rounded-1 text-center p-2">14 bosh joylar</p>--}}
{{--                            <hr>--}}
{{--                            <div class="card_table">--}}
{{--                                <img loading="lazy" class="rounded-circle h-25 border border-warning me-3" src="{{ asset('images/python.png') }}" style="width: 6%;" alt="image">--}}
{{--                                <div class="d-block w-100">--}}
{{--                                <p class="w-100"><span class="fw-bold">Shukurov Jasur</span><br> {{$course->title}} - Mentori</p>--}}
{{--                                <hr class="w-25" style="border: 2px solid #62BC9E;">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        --}}{{-- <div id="moon_2" class="tabcontent mt-5 p-5 ps-3 pe-3 rounded">--}}
{{--                            <p class="fw-bold">Backend developer</p>--}}
{{--                            <p>2/10 sinfxonasida <span class="fw-bold"> Haftaning dushanba seshanba va payshanba kunlari, soat 09:00-10:30 va 11:00-12:30 da,</span></p>--}}
{{--                            <p>Pre-season uchun darslar</p>--}}
{{--                            <hr class="w-25" style="border: 2px solid #62BC9E;">--}}
{{--                            <p class="bg-warning rounded-1 text-center p-2">14 bosh joylar</p>--}}
{{--                            <hr>--}}
{{--                            <div class="card_table">--}}
{{--                                <img loading="lazy" class="rounded-circle h-25 border border-warning me-3" src="{{ asset('images/python.png') }}" style="width: 6%;" alt="image">--}}
{{--                                <div class="d-block w-100">--}}
{{--                                <p class="w-100"><span class="fw-bold">Azizova Aziza</span><br> Full Stack Developer - Mentori</p>--}}
{{--                                <hr class="w-25" style="border: 2px solid #62BC9E;">--}}
{{--                                </div>--}}
{{--                                @include('front.uz.component.registerLid')--}}
{{--                                <a href="{{ route('uz.register') }}" class="btn btn-dark bg-dark w-100 text-white justify-content-center align-self-center">Hoziroq roʻyxatdan oʻting</a>--}}
{{--                            </div>--}}
{{--                        </div> --}}

{{--                        <div id="moon_3" class="tabcontent mt-5 p-5 ps-3 pe-3 rounded">--}}
{{--                            <p class="fw-bold">{{$course->title}}</p>--}}
{{--                            <p>2/8 sinfxonasida <span class="fw-bold"> Haftaning dushanba seshanba va payshanba kunlari, soat 09:00-10:30 va 11:00-12:30 da,</span></p>--}}
{{--                            <p>Pre-season uchun darslar</p>--}}
{{--                            <hr class="w-25" style="border: 2px solid #62BC9E;">--}}
{{--                            <p class="bg-warning rounded-1 text-center p-2">14 bosh joylar</p>--}}
{{--                            <hr>--}}
{{--                            <div class="card_table">--}}
{{--                                <img loading="lazy" class="rounded-circle h-25 border border-warning me-3" src="{{ asset('images/python.png') }}" style="width: 6%;" alt="image">--}}
{{--                                <div class="d-block w-100">--}}
{{--                                <p class="w-100"><span class="fw-bold">Shomurodov Sarvar</span><br> Backend Developer - Mentori</p>--}}
{{--                                <hr class="w-25" style="border: 2px solid #62BC9E;">--}}
{{--                                </div>--}}
{{--                                --}}{{-- @include('front.uz.component.registerLid') --}}
{{--                                --}}{{-- <a href="{{ route('uz.register') }}" class="btn btn-dark bg-dark w-100 text-white justify-content-center align-self-center">Hoziroq roʻyxatdan oʻting</a> --}}
{{--                            </div>--}}
{{--                        </div>--}}


                    <hr class="mt-5 mb-5">

                    <p id="quetions" style="color: #62BC9E;" class="fw-bold mt-5">Savollar</p>

                    <h1>{{$course->title}} developer kursi bo'yicha savollaringiz bormi? </h1>
                    <p>Katta ehtimol bilan, sizda bir nechta savollar tug'ilgan bo'lishi mumkin. Bizni kuzatayotganlarga savollarni to'g'ridan-to'g'ri berishlarini so'raymiz va siz istalgan vaqtda biz bilan tezkor qo'ng'iroq orqali bog'lanishingiz mumkin.</p>

                    <ul class="list-unstyled ps-0">
                        <li class="mb-4 border shadow-sm rounded-1">
                            <button class="btn btn-toggle w-100 d-flex justify-content-start fw-bold p-3" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                                Guruhda nechta o'quvchi bo'ladi?
                            </button>
                            <div class="collapse" id="home-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal small p-5">
                                    Astrum IT Akademiyasi yuqori texnologiyali sun'iy intellekt algoritmlari yordamida ishlovchi ta'lim tizimi bilan jihozlangan bo'lib bu yerda ma'lum bir guruhlar yo'q. Siz xohlagan paytingiz Astrumga kelishingiz, xohlagancha o'z ustingizda ishlashingiz va xohlagan paytingiz ketishingiz mumkin.
                                </ul>
                            </div>
                        </li>
                        <li class="mb-4 border shadow-sm rounded-1">
                            <button class="btn btn-toggle w-100 d-flex justify-content-start fw-bold p-3" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                                Dasturlashni o'rganish uchun menda boshlang'ich bilim bo'lishi kerakmi?
                            </button>
                            <div class="collapse" id="dashboard-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal small p-5">
                                    Astrum IT Akademiyasida ta'lim tizimi shunday yo'lgan qo'yilganki, siz bu yerdagi kurslardan birida qatnashishingiz uchun hech qanday boshlang'ich bilim talab qilinmaydi. Akademiyamizda tashkil qilingan Pre-season kurslari orqali siz dastlabki bilimlarni olasiz va imtihon topshirgan holda Main Season kurslariga o'tasiz.
                                </ul>
                            </div>
                        </li>
                        <li class="mb-4 border shadow-sm rounded-1">
                            <button class="btn btn-toggle w-100 d-flex justify-content-start fw-bold p-3" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                                Nimaga Astrum boshqalardan yaxshiroq?
                            </button>
                            <div class="collapse" id="orders-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal p-5 small">
                                    Chunki bizda Sun'iy intellekt asosida ishlovchi zamonaviy o'qitish tizimi yo'lga qo'yilgan va kurslarni bitirganingizdan so'ng sizga Amerikaning Silikon vodiysida ishlash imkonini beruvchi Xalqaro QWASAR sertifikati topshiriladi. Undan tashqari bizda zamonaviy sinfxonalari, Mac Valley, 24/7 ishlovchi kampus sport maydonchalari, Astrocoin ichki valyutasi va tun-u kun qo'riqlash tizimi bor.
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
