@extends('front.uz.main')

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
                    <img loading="lazy" src="{{ asset('images/layout/Glavniy_2.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="text-home ms-0 text-start w-50 pb-5">Astrum IT Academy sizlar uchun ajoyib imkoniyatni taqdim etadi. Kutib oling bizda Preseason 15 uchun qabul jarayonlari davom etmoqda.</h1>
                        <h1 class="ms-0 text-start mb-5 pb-5">
                            <a href="{{ route('uz.news_pages') }}" class="btn btn-success p-3">Batafsil...</a>
                        </h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img loading="lazy" src="{{ asset('images/layout/Glavniy.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="h1">O'zbekistonda innovatsion ta'lim tizimiga ega birinchi IT Akademiya</h1>
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
                    <p style="color: rgba(40, 156, 40, 0.521);" class="fw-bold">Biz haqimizda</p>
                    <h1 class="fw-bold">Sun'iy intellekt yordamida boshqariladigan ta'lim tizimi va zamonaviy atmosfera sizning muvaffaqiyatingiz garovidir.</h1> <br>
                    <p class="fw-semibold">Astrum IT Akademiyasi nafaqat O'zbekistondagi, balki O'rta Osiyodagi birinchi va eng katta IT Akademiya bo'lib, bu yerda sun'iy intellekt yordamida ta'lim berishning innovatsion usuli yo'lga qo'yilgan.</p>
                    <p class="fw-semibold"> Zamonaviy texnologiyalar, 24/7 ishlaydigan o'quv kampusi, mingga yaqing iMac'lar va qulay sharoitlar sizga haqiqiy dasturchi bo'lib yetishish imkonini beradi. </p>
                    <a id="btn" href="{{ url('{$lang}/about_us') }}" class="btn btn-outline-success p-3 rounded">Batafsil</a>
                </div>
                <div class="col-md-12 col-lg-7">
                    <h1 class="about_us">About us</h1>
                    <div class="img">
                        <div class="img_1">
                            <img loading="lazy" class="w-100 shadow bg-white rounded" src="{{ asset('images/layout/12.jpg') }}" alt="images">
                        </div>
                        <div class="img_2">
                            <img loading="lazy" class="w-100 shadow bg-white rounded" src="{{ asset('images/layout/gallery/2.jpg')}}" alt="images">
                        </div>
                    </div>
                    <div class="w-100 text-end">
                        <a href="{{ url('{$lang}/gallery') }}" class="href_arrow">Rasmlar<i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5 mt-5">
        <div class="container pt-5 mt-5">
            <div class="row justify-content-end">
                <div class="col-sm-12 col-md-9 col-xl-7">
                    <div class="border shadow bg-white rounded p-4 fw-semibold">
                       <p>Astrum IT Akademiyasi tabiat qo'ynida joylashgan bo'lib, bu yerdagi toza ob-havo va shovqinsiz muhit, ortiqcha chalg'ishlarsiz IT sohasini mukammal o'rganishingizga yordam beradi. Akademiya hududi tun-u kun qo'riqlanadi va o'quv kampusi 24/7 rejimida faoliyat yuritadi. Siz o'zingizga qulay vaqtda kelishingiz va kurslarni davom ettirishingiz mumkin.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid">
        <div class="astrum_img">
            <img loading="lazy" src="{{ asset('images/astrum_foto.png')}}" alt="">
        </div>
    </section>

    <section class="carousel">
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
    </section>

    <section class="section-fon">
        <div class="container d-flex h-100">
            <div class="row justify-content-center align-self-center">
                <p style="color: rgba(40, 156, 40, 0.521);" class="fw-bold">Ta'lim va kurslar</p>
                <h1 id="courses_rek" class="text-white">IT sohasini Astrum IT Akademiyasida o'rganing va o'z hayotingizni yaxshi tomonga o'zgartiring</h1>
                <p id="courses_rek_p" class="text-white pt-4 fs-5">Akademiyamizda dasturlash kurslari sun'iy intellekt yordami shunday tizimlashtirilganki, o'qishni tugatishingiz bilan siz yetarlicha bilim va yaxshigina portfolioga ega bo'lasiz.</p>
            </div>
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
                <p style="color: rgba(40, 156, 40, 0.521);" class="fw-bold">KURSLAR VA TA'LIM</p>
                <h1 class="fw-bold mb-5">Nimaga ko'pchilik Astrum IT Akademiyasini tanlaydi? </h1>
            </div>
            <div class="row mb-5">
                <div class="col-md-6 col-xl-4 col-xxl-4 mb-5">
                    <p class="border-start border-dark border-4 ps-3 text-muted fw-bolder">Yuqori atmosfera</p>
                    <p>Astrum o'quv binosida Mac Valley joylashgan bo'lib, bu yerda mingdan ortiq iMac'lar mavjud. Siz xohlagan paytingiz ulardan foydalana olasiz. </p>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-4 mb-5">
                    <p class="border-start border-dark border-4 ps-3 text-muted fw-bolder">Innovatsion ta'lim tizimi</p>
                    <p>Astrumda o'qituvchilar yo'q. Darslar sun'iy intellekt yordamida olib boriladi. Siz platformadagi darslarda qatnashishingiz va uyga vazifalarni yuklab borishingiz lozim. Savollarga esa professional mentorlarimiz javob berishadi</p>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-4 mb-5">
                    <p class="border-start border-dark border-4 ps-3 text-muted fw-bolder">QWASAR sertifikati</p>
                    <p>O'qishni tugatganingizdan so'ng sizga Amerikaning Silikon vodiysida ishlash imkonini beruvchi QWASAR sertifikati topshiriladi. Bu sertifikat orqali Yevropa va Amerikaning nufuzli kompaniyalarida faoliyat olib borishingiz mumkin.</p>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-4 mb-5">
                    <p class="border-start border-dark border-4 ps-3 text-muted fw-bolder">24/7 qo'riqlash tizimi</p>
                    <p>Astrum IT Akademiyasida to'laqonli xavfsizlik choralari ko'rilgan bo'lib, o'quv kampusi tun-u kun qo'riqlanadi. Bu esa o'quvchilarimizga o'zlari xohlagan payt Astrumga tashrif buyurish va darslarni davom ettirish imkoniyatini beradi.</p>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-4 mb-5">
                    <p class="border-start border-dark border-4 ps-3 text-muted fw-bolder">Yaratilgan qulay sharoitlar</p>
                    <p>Bu yerda dam olishingiz uchun sport maydonchalari, dam olish xonalari, qulay sharoitlarga ega xonalar, chill zone va katta hovli mavjud.</p>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-4 mb-5">
                    <p class="border-start border-dark border-4 ps-3 text-muted fw-bolder">Darslarni tezroq yakunlash imkoniyati</p>
                    <p>Darslar sun'iy intellekt yordamida o'tilishi hisobiga, siz darslarni tezroq ko'rishingiz va o'quv dasturini tezroq tugatib TOP dasturchilar safiga qo'shilishingiz mumkin.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="staff">
        <div class="container">
            <img loading="lazy" src="{{ asset('images/astrum_staff.jpg')}}" class="w-100 rounded shadow" alt="image">
        </div>
    </section>

    <section id="mentors" class="pt-5">
        <div class="container">
            <p style="color: rgba(40, 156, 40, 0.521);" class="fw-bold text-center">Bizning mentorlar</p>
            <h1 id="courses_rek" class="text-center fw-bold">Astrum IT Akademiyasida siz sifatli ta'lim olishingiz va sohani puxta egallashingiz uchun eng kuchli va katta tajribaga ega mentorlar yordam berishadi. </h1>
            <p id="courses_rek_p" class="text-center mb-5">Mentor — sizda tug'ilgan savollarga javob beruvchi shaxs.</p>
            <div class="row">
                <div class="col-sm-12 col-xl-3 col-xxl-3 col-lg-4 col-md-6 mt-5">
                    <div class="profile-card">
                        <div class="profile-img">
                            <img loading="lazy" src="{{ asset('images/mentors/aziza.jpg') }}" alt="Team Image"/>
                        </div>
                        <div class="profile-content">
                            <h2 class="title">Azizova Aziza
                                <span>Reactjs Frontend Developer</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-3 col-xxl-3 col-lg-4 col-md-6 mt-5">
                    <div class="profile-card">
                        <div class="profile-img">
                            <img loading="lazy" src="{{ asset('images/mentors/sarvar.jpg') }}" alt="Team Image"/>
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
                            <img loading="lazy" src="{{ asset('images/mentors/baxtibek.jpg') }}" alt="Team Image"/>
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
                            <img loading="lazy" src="{{ asset('images/mentors/sarvar_sh.jpg') }}" alt="Team Image"/>
                        </div>
                        <div class="profile-content">
                            <h2 class="title">Shomurodov Sarvar
                                <span>PHP (Laravel) Backend Developer</span>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('uz.about_us') }}" id="btn" class="btn btn-outline-success p-3 mt-5 rounded">Barcha jamoa</a>
        </div>
    </section>

    <section>
        <div class="container">
            <h1 class="fw-bold">Astrum IT Akademiyasining o'zining qadriyatlari va o'z oldiga qo'ygan maqsadlari bo'lib, bizga o'quvchining soni emas, balki sifati afzalroq.</h1>
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

