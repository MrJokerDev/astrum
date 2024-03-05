@extends('front.uz.main')

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.core.min.css">
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
    #scrolling {
        background-color: white;
        position: relative;
        overflow: hidden;
    }
    #scrolling:before, #scrolling:after {
        content: '';
        display: block;
        background-color: #fff;
        width: 100%;
        height: 75px;
        position: absolute;
        z-index: 99;
    }
    #scrolling:before {
        border-radius: 0% 0% 50% 50% / 0% 0% 100% 100%;
        top: 0;
    }
    #scrolling:after {
        border-radius: 50% 50% 0% 0%  / 100% 100% 0% 0% ;
        bottom: 15px;
    }

    .image-gallery {
        display: flex;
        flex-direction: column;
    }

    .image-gallery .column {
        display: flex;
        flex-direction: column;
    }

    .image-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    @media only screen and (max-width: 600px) {
        .image-gallery {
            flex-direction: row;
        }
        h1.about_h1{
        font-size: 22px;
        }
        p.about_p{
            width: 100%;
            margin: 0px;
        }
        .glide{
            display: none;
        }
        div.position-relative{
            margin: 0 50px;
        }
        div.back > div.col-md-7{
            display: none;
        }
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

    span.position-absolute span.fw-bold, span#ob{
        text-shadow: -2px 2px 9px black;
    }
    #header{
        padding-top: 230px;
        text-align: center;
        width: 65%;
        margin: auto;
    }


</style>
@endsection

@section('content')
    <div id="header" class="container>
        <p class="text-success text-center"><span><a class="text-success text-decoration-none fw-bold" href="{{ route('uz.index') }}">Bosh sahifa</a></span> | <a class="text-success text-decoration-none" href="{{ route('uz.about_us') }}">Kompaniya haqida</a></p>
        <h1 class="about_h1 fw-bold text-center">Bizning asosiy maqsadimiz yoshlarga IT sohasi bo'yicha chuqur bilim berish va shu orqali O'zbekiston rivojlanishiga o'z hissamizni qo'shishdan iborat.</h1>
        <p class="about_p text-center">Astrum IT Akademiyasiga kelgan har bir o'quvchi 24/7 rejimida ishlovchi texnologik kampus, innovatsion ta'lim tizimi va qulayliklarga ega bo'ladi. Kursni muvaffaqiyatli bitirganlarga esa Amerika Silikon vodiysida ishlash imkonini beruvchi QWASAR sertifikati topshiriladi.</p>
    </div>

    <div class="glide">
        <div id="scrolling">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <li class="glide__slide"><img loading="lazy" src="{{ asset('images/about/1.jpg') }}" alt="image"></li>
                    <li class="glide__slide"><img loading="lazy" src="{{ asset('images/about/2.jpg') }}" alt="image"></li>
                    <li class="glide__slide"><img loading="lazy" src="{{ asset('images/about/3.jpg') }}" alt="image"></li>
                    <li class="glide__slide"><img loading="lazy" src="{{ asset('images/about/4.jpg') }}" alt="image"></li>
                    <li class="glide__slide"><img loading="lazy" src="{{ asset('images/about/5.jpg') }}" alt="image"></li>
                    <li class="glide__slide"><img loading="lazy" src="{{ asset('images/about/6.jpg') }}" alt="image"></li>
                    <li class="glide__slide"><img loading="lazy" src="{{ asset('images/about/7.jpg') }}" alt="image"></li>
                    <li class="glide__slide"><img loading="lazy" src="{{ asset('images/about/8.jpg') }}" alt="image"></li>
                    <li class="glide__slide"><img loading="lazy" src="{{ asset('images/about/9.jpg') }}" alt="image"></li>
                    <li class="glide__slide"><img loading="lazy" src="{{ asset('images/about/10.jpg') }}" alt="image"></li>
                </ul>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <nav id="navbar-bg" class="navbar sticky-top rounded p-4 w-75" style="font-size: 10px;">
                        <ul class ="nav navbar-nav w-100">
                            <li>
                                Kompaniya haqida
                            </li>
                            <hr>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#about_us"> Ko‘rib chiqish </a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#courses"> O'quv dasturi </a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#mentors"> Mentor </a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#courses_room"> Astrum jamoasi </a>
                            </li>
                            <br>
                            @include('front.uz.component.registerLid')
                            {{-- <a href="{{ route('uz.register') }}" type="button" class="btn btn-danger bg-dark p-2 text-white" style="font-size: 10px;">Hozir roʻyxatdan oʻting</a> --}}
                        </ul>
                    </nav>
                </div>
                <div class="col-md-8">
                    <div id="about_us">
                        <div>
                            <h1 class="fw-bold">Kompaniya haqida</h1> <br>
                            <p>Astrum IT Akademiyasi — nafaqat O'zbekistondagi, balki O'rta Osiyodagi birinchi va yagona bo'lgan IT Akademiyasi bo'lib, kompaniya dasturlash sohasida kadrlar tayyorlash va ularni o'qitish bo'yicha yetakchi hisoblanadi.</p>
                            <p>Astrum IT Akademiyasi Toshkent viloyati O'rta Chirchiq tumanida joylashgan bo'lib, bu yerdagi toza ob-havo va ajoyib muhit sizni sifatli ta'lim olishingizga yana-da ko'proq qulaylik yaratadi. </p>
                            <p>Hozirda kompaniyada 100 ga yaqin xodim faoliyat olib boradi. 1000 ga yaqin o'quvchilar dasturlash, Kiberxavfsizlik va 3DMax kurslaridan tahsil olishmoqda.</p>
                            <p>Astrum IT Akademiyasining yana bir afzalligi shundaki, Astrum o'quv binosi o'quvchilar uchun 24/7 ochiq va Akademiya hududi tun-u kun qo'riqlanadi. Astrumda o'qishingiz uchun sizda shaxsiy kompyuter bo'lishi shart emas, bu yerdagi mingga yaqin iMac kompyuterlariga joylashgan Mac Valley'dan siz xohlagan paytingiz foydalanishingiz mumkin. </p>
                        </div>
                        <img loading="lazy" src="{{ asset('images/DSC03587.JPG') }}" class="w-100 rounded mt-4 shadow" alt="image">
                    </div>

                    <div id="mentors">
                        <h1 class="fw-bold mt-5">Bizning mentorlar</h1>
                        <p class="mt-3">Astrum IT Akademiyasida yosh va shu bilan birgalikda kuchli bilimga ega mentorlar faoliyat olib borishadi. O'quvchi darslarni innovatsion ta'lim platformasi orqali o'tganidan so'ng, tushunmagan joylarini yoki qo'shimcha savollarini mentorlardan so'rab olishi mumkin. Bizning mentorlar har bir o'quvchiga yordam berishga doimo tayyor. </p>

                        <div class="row">
                            @foreach($mentors as $mentor)
                            <div class="col-md-4 mt-4">
                                <div class="position-relative">
                                    <img loading="lazy"  src="{{ asset('storage/mentors/' . $mentor->image) }}" class="rounded w-100" alt="image">
                                    <span class="position-absolute bottom-0 start-0 p-3 text-white"><span class="fw-bold">{{$mentor->last_name}} {{$mentor->first_name}}</span>  <hr class="w-25 m-0" style="border: 2px solid #62BC9E;"></span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div id="courses_room">
                        <h1 class="fw-bold mt-5">AstroCoin tizimi</h1>
                        <p>Astrum IT Akademiyasida o'quvchilarni rag'batlantirish, ularni o'qishga bo'lgan qiziqishini yana-da oshirish maqsadida AstroCoin tizimi yo'lga qo'yilgan. Bunda o'quvchilar Astrum It Akademiyasining ijtimoiy hayotida, ta'lim jarayonlarida va turli xildagi tadbirlarda o'zlarini ko'rsatgan holda maxsus AstroCoinlarga ega bo'lishlari va ushbu Coinlar orqali marketdan turli xildagi qimmatbaho sovg'alarni xarid qilishlari mumkin. </p>
                    </div>
                    <hr>
                    <div id="courses_room">
                        <h1 class="fw-bold mt-5">Astrum IT Akademiyasi maqsadi </h1>
                        <p>Astrum IT Akademiyasining yagona maqsadi O'zbekistonda IT sohasini rivojlantirish, IT mutaxassislariga bo'lgan talabni qondirish va yurtimiz yoshlariga sifatli ta'lim berib, ularni zamonaviy kasb egasiga aylantirishdan iboratdir. Bu borada Prezidentimiz Sh.Mirziyoyev ham Astrum IT Akademiyasiga tashrif mobaynida bir necha bor ta'kidlab o'tganlar. </p>
                        <br>
                        <p>Astrum IT Akademiyasi kelgusida o'z filiallarini ko'paytirishni, barcha viloyatlarda zamonaviy IT Akademiyalar ochishni va yoshlarni sifatli ta'lim bilan ta'minlashni o'z oldiga ustuvor vazifa qilib qo'ygan.</p>
                        <br>
                        <img loading="lazy" src="{{ asset('images/astrum_staff.jpg') }}" class="w-100 rounded shadow mb-5" alt="">
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

@endsection
@section('js')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/glide.min.js"></script>
	<script>
        var glide = new Glide('.glide', {
            type: 'carousel',
            perView: 5
        })

        glide.mount()
    </script>
@endsection
