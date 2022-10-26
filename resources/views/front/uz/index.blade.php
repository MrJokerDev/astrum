@extends('front.uz.main')

@section('style')
<style>
  
  #btn {
    font-weight: 700;
    }
.nav-item a:hover{
    color: #333;
    font-weight: 700;
}
</style>
@endsection

@section('content')
    <header>
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay"  muted="muted" loop="loop"> <!-- autoplay="autoplay" -->
            <source src="{{ asset('images/video/video_1.MP4') }}" type="video/mp4">
        </video>

        <div class="container">
            <div class="row h-100">
                <div class="col-md-12 col-lg-9  offset align-self-end mb-5">
                    <div class="text-white">
                        <h1 class="font_size"><span></span>O'rta Osiyodagi eng katta va QWASAR sertifikatini beruvchi yagona IT Akademiya.</h1>
                        <p>Sening yorqin kelajaging shu yerdan boshlanadi!</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-5">
                    <p style="color: rgba(40, 156, 40, 0.521);" class="fw-bold">Biz haqimizda</p>
                    <h1 class="fw-bold">Professional ustozlar va zamonaviy atmosfera sizning muvaffaqiyatingiz garovidir</h1> <br>
                    <p class="fw-semibold fs-5">Astrum IT Akademiyasi nafaqat O'zbekistondagi, balki O'rta Osiyodagi birinchi va eng katta IT Akademiya bo'lib, bu yerda sun'iy intellekt yordamida ta'lim berishning innovatsion usuli yo'lga qo'yilgan.</p>
                    <p class="fw-semibold fs-5"> Zamonaviy texnologiyalar, 24/7 ishlaydigan o'quv kampusi, mingga yaqing iMac'lar va qulay sharoitlar sizga haqiqiy dasturchi bo'lib yetishish imkonini beradi. </p>
                    <a id="btn" href="{{ route('uz.about_us') }}" class="btn btn-outline-success p-3 rounded">Batafsil</a>
                </div>
                <div class="col-md-12 col-lg-7">
                    <h1 class="about_us">About us</h1>
                    <div class="img">
                        <div class="img_1">
                            <img class="w-100 h-100 shadow bg-white rounded" src="{{ asset('images/layout/9.jpg') }}" alt="images">
                        </div>
                        <div class="img_2">
                            <img class="w-100 h-100 shadow bg-white rounded" src="{{ asset('images/DSC_6383.jpg')}}" alt="images">
                        </div>
                    </div>
                    <div class="w-100 text-end">
                        <a href="{{ route('uz.gallery') }}" class="href_arrow">Фото <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="location">
        <div class="container pt-4">
            <div class="row">
                <div class="text-center">
                    <p style="color: rgba(40, 156, 40, 0.521);" class="fw-bold">Akademiya joylashuvi</p>
                    <h1 class="fw-bold">Buyuk g'oyalar eng yaxshi joylarda tug'iladi</h1>
                    <p class="fw-semibold">Biz esa sizga eng qulay lokatsiyani taqdim etamiz</p>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-sm-12 col-md-9 col-xl-5">
                    <div class="border shadow bg-white rounded p-4 fw-semibold fs-5">
                        Astrum IT Akademiyasi shahardan 25 daqiqalik yo'l uzoqlikda, tabiat qo'ynida joylashgan. Bu yerdagi toza ob-havo va shovqinsiz muhit orqali siz ortiqcha chalg'ishlarsiz IT sohasini mukammal o'rgana olasiz.
                    </div>
                </div>
            </div>
        </div>
        <h1 class="location_h1">Locations</h1>
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
                        <img src="{{ asset('images/DSC_6349.jpg')}}">
                        <img src="{{ asset('images/DSC_6383.jpg')}}">
                        <img src="{{ asset('images/auditoriya.jpg')}}">
                        <img src="{{ asset('images/active.jpg')}}">
                        <img src="{{ asset('images/lanshaft.jpg')}}">
                        <img src="{{ asset('images/DSC_6349.jpg')}}">
                        <img src="{{ asset('images/DSC_6383.jpg')}}">
                        <img src="{{ asset('images/auditoriya.jpg')}}">
                        <img src="{{ asset('images/active.jpg')}}">
                        <img src="{{ asset('images/lanshaft.jpg')}}">
                    </div>
            </div>
        </div>
    </section>

    <section class="section-fon">
        <div class="container p-5 align-items-center">
            <p style="color: rgba(40, 156, 40, 0.521);" class="fw-bold">Ta'lim va kurslar</p>
            <h1 id="courses_rek" class="text-white">IT sohasini Astrum IT Akademiyasida o'rganing va o'z hayotingizni yaxshi tomonga o'zgartiring</h1>
            <p id="courses_rek_p" class="text-white pt-4 fs-5">Akademiyamizda dasturlash kurslari sun'iy intellekt yordami shunday tizimlashtirilganki, o'qishni tugatishingiz bilan siz yetarlicha bilim va yaxshigina portfolioga ega bo'lasiz.</p>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-xxl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="card hvr-float m-auto m-5">
                        <img class="card-img-top shadow" src="{{ asset('images/web-developer.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <p>Kursning boshlanishi - 03/03/2022</p>
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Bu loyihada ishlatiladigan texnologiyalar va komponentlarning butun to'plamini Front-end tomonidan ham Bac-kend tomonidan ham tushunishi kerak bo'lgan mutaxassis.</p>
                            <p class="fs-5">12 oy</p>
                            <hr class="w-25 border border-success border-2">
                            <a href="{{ route('uz.fullstack') }}" class="btn btn-outline-success p-3 rounded">Batafsil bilish</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="card hvr-float m-auto">
                        <img class="card-img-top shadow" src="{{ asset('images/soft.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <p>Kursning boshlanishi - 03/03/2022</p>
                            <h4 class="card-title fw-bold">Data Science</h4>
                            <p class="card-text">Ma'lumotlar bo'yicha mutaxassis, biznes yoki kundalik qaror qabul qilishga yordam beradigan ma'lumotlarga asoslangan modellarni yaratadi.</p>
                            <p class="fs-5">12 oy</p>
                            <hr class="w-25 border border-success border-2">
                            <a href="{{ route('uz.data_science') }}" class="btn btn-outline-success p-3 rounded">Batafsil bilish</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="card hvr-float m-auto">
                        <img class="card-img-top shadow" src="{{ asset('images/data.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <p>Kursning boshlanishi - 03/03/2022</p>
                            <h4 class="card-title fw-bold">Software Engineering</h4>
                            <p class="card-text">Software Engineer dasturlar va prilojeniyalar yaratish ustida ishlaydi va ularni ishga tushuradi. Uning asosiy vazifasi yangilanishi va kengaytirilishi mumkin bo'lgan optimallashtirilgan dasturlarni yaratishdir.</p>
                            <p class="fs-5">12 oy</p>
                            <hr class="w-25 border border-success border-2">
                            <a href="{{ route('uz.software_engineering') }}" class="btn btn-outline-success p-3 rounded">Batafsil</a>
                        </div>
                    </div>
                </div>
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
                    <p class="border-start border-dark border-4 ps-3">100%</p>
                    <p class="text-muted fw-bolder">Yuqori atmosfera</p>
                    <p>Astrum o'quv binosida Mac Valley joylashgan bo'lib, bu yerda mingdan ortiq iMac'lar mavjud. Siz xohlagan paytingiz ulardan foydalana olasiz. </p>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-4 mb-5">
                    <p class="border-start border-dark border-4 ps-3">100%</p>
                    <p class="text-muted fw-bolder"> Innovatsion ta'lim tizimi</p>
                    <p>Astrumda o'qituvchilar yo'q. Darslar sun'iy intellekt yordamida olib boriladi. Siz platformadagi darslarda qatnashishingiz va uyga vazifalarni yuklab borishingiz lozim. Savollarga esa professional mentorlarimiz javob berishadi</p>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-4 mb-5">
                    <p class="border-start border-dark border-4 ps-3">100%</p>
                    <p class="text-muted fw-bolder">QWASAR sertifikati</p>
                    <p>O'qishni tugatganingizdan so'ng sizga Amerikaning Silikon vodiysida ishlash imkonini beruvchi QWASAR sertifikati topshiriladi. Bu sertifikat orqali Yevropa va Amerikaning nufuzli kompaniyalarida faoliyat olib borishingiz mumkin.</p>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-4 mb-5">
                    <p class="border-start border-dark border-4 ps-3">100%</p>
                    <p class="text-muted fw-bolder">24/7 qo'riqlash tizimi</p>
                    <p>Astrumda IT Akademiyasida to'laqonli xavfsizlik choralari ko'rilgan bo'lib, o'quv kampusi tun-u kun qo'riqlanadi. Bu esa o'quvchilarimizga o'zlari xohlagan payt Astrumga tashrif buyurish va darslarni davom ettirish imkoniyatini beradi.</p>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-4 mb-5">
                    <p class="border-start border-dark border-4 ps-3">100%</p>
                    <p class="text-muted fw-bolder">Yaratilgan qulay sharoitlar</p>
                    <p>Bu yerda dam olishingiz uchun sport maydonchalari, dam olish xonalari, qulay sharoitlarga ega xonalar, chill zone va katta hovli mavjud.</p>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-4 mb-5">
                    <p class="border-start border-dark border-4 ps-3">100%</p>
                    <p class="text-muted fw-bolder">Darslarni tezroq yakunlash imkoniyati </p>
                    <p>Darslar sun'iy intellekt yordamida o'tilishi hisobiga, siz darslarni tezroq ko'rishingiz va o'quv dasturini tezroq tugatib TOP dasturchilar safiga qo'shilishingiz mumkin.</p>
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
            <p style="color: rgba(40, 156, 40, 0.521);" class="fw-bold text-center">Bizning mentorlar </p>
            <h1 id="courses_rek" class="text-center fw-bold">Astrumda IT Akademiyasida siz sifatli ta'lim olishingiz va sohani puxta egallashingiz uchun eng kuchli va katta tajribaga ega mentorlar yordam berishadi. </h1>
            <p id="courses_rek_p" class="text-center mb-5">Mentor — sizda tug'ilgan savollarga javob beruvchi shaxs.</p>
            <div class="row">
                <div class="col-sm-12 col-xl-4 col-xxl-3 col-lg-4 col-md-6 mt-5">
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
                <div class="col-sm-12 col-xl-4 col-xxl-3 col-lg-4 col-md-6 mt-5">
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
                <div class="col-sm-12 col-xl-4 col-xxl-3 col-lg-4 col-md-6 mt-5">
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
                <div class="col-sm-12 col-xl-4 col-xxl-3 col-lg-4 col-md-6 mt-5">
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
                <div class="col-sm-12 col-xl-4 col-xxl-3 col-lg-4 col-md-6 mt-5">
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
                <div class="col-sm-12 col-xl-4 col-xxl-3 col-lg-4 col-md-6 mt-5">
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
                <div class="col-sm-12 col-xl-4 col-xxl-3 col-lg-4 col-md-6 mt-5">
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
                <div class="col-sm-12 col-xl-4 col-xxl-3 col-lg-4 col-md-6 mt-5">
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
                </div>
            </div>
            <a href="{{ route('uz.about_us') }}" id="btn" class="btn btn-outline-success p-3 mt-5 rounded">Barcha jamoa</a>
        </div>
    </section>

    <section>
        <div class="container">
            <p style="color: rgba(40, 156, 40, 0.521);" class="fw-bold">Bizning qadriyatlar</p>
            <h1 class="fw-bold">Astrum IT Akademiyasi boshqa o'quv markazlardan nimasi bilan farq qiladi?</h1>
            <p>Astrum IT Akademiyasining o'zining qadriyatlari va o'z oldiga qo'ygan maqsadlari bo'lib, bizga o'quvchining soni emas, balki sifati afzalroq.</p>
            <div class="row pt-5">
                <div class="col-md-6 col-sm-6 col-lg-6 mb-5">
                    <p class="border-start border-dark border-4 ps-3 fs-2 fw-bold">O'quvchilarni tinglaymiz </p>
                    <p>Biz har doim o'quvchilarnimg e'tirozlarini va shikoyatlarini tinglaymiz va ularga birgalikda yechim topamiz. </p>
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
            </div>
        </div>
    </section>

@endsection

