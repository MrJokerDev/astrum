@extends('front.uz.main')

@section('style')
<style>
  .navbar{
     position: absolute;
    z-index: 9999;
  }
  .font_size{
    font-size: 3.1rem;
  }
</style>
@endsection

@section('content')
    <header>
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay"  muted="muted" loop="loop"> <!-- autoplay="autoplay" -->
            <source src="images/video_gif.mp4" type="video/mp4">
        </video>

        <div class="container">
            <div class="row h-100">
                <div class="col-md-9 align-self-end mb-5">
                    <div class="text-white">
                        <h1 class="font_size"><span></span>O'rta Osiyodagi eng katta va QWASAR sertifikatini beruvchi yagona IT Akademiya. <br> Sening yorqin kelajaging shu yerdan boshlanadi!</h1>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <p style="color: rgba(40, 156, 40, 0.521);" class="fw-bold">Biz haqimizda</p>
                    <h1 class="fw-bold">Professional ustozlar va zamonaviy atmosfera sizning muvaffaqiyatingiz garovidir</h1> <br>
                    <p class="fw-semibold fs-5">Astrum IT Akademiyasi nafaqat O'zbekistondagi, balki O'rta Osiyodagi birinchi va eng katta IT Akademiya bo'lib, bu yerda sun'iy intellekt yordamida ta'lim berishning innovatsion usuli yo'lga qo'yilgan.</p>
                    <p class="fw-semibold fs-5"> Zamonaviy texnologiyalar, 24/7 ishlaydigan o'quv kampusi, mingga yaqing iMac'lar va qulay sharoitlar sizga haqiqiy dasturchi bo'lib yetishish imkonini beradi. </p>
                    <button id="btn" class="btn btn-outline-success p-3 rounded">Batafsil</button>
                </div>
                <div class="col-md-7">
                    <h1 class="about_us">About us</h1>
                    <div class="img">
                        <div class="img_1">
                            <img class="w-100 h-100 shadow bg-white rounded" src="images/DSC_6349.jpg" alt="images">
                        </div>
                        <div class="img_2">
                            <img class="w-100 h-100 shadow bg-white rounded" src="images/DSC_6383.jpg" alt="images">
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
                <div class="col-12 col-md-6 col-xl-5">
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
            <img src="images/astrum_foto.png" alt="">
        </div>
    </section>

    <section class="carousel">
        <div class="carusel-top">
            <div class="carousel-inner">
                    <div class="most-inner">
                        <img src="images/DSC_6349.jpg">
                        <img src="images/DSC_6383.jpg">
                        <img src="images/DSC_6349.jpg">
                        <img src="images/DSC_6383.jpg">
                        <img src="images/DSC_6349.jpg">
                        <img src="images/DSC_6383.jpg">
                        <img src="images/DSC_6349.jpg">
                        <img src="images/DSC_6383.jpg">
                        <img src="images/DSC_6349.jpg">
                        <img src="images/DSC_6383.jpg">
                        <img src="images/DSC_6349.jpg">
                        <img src="images/DSC_6383.jpg">
                        <img src="images/DSC_6349.jpg">
                        <img src="images/DSC_6383.jpg">
                        <img src="images/DSC_6349.jpg">
                        <img src="images/DSC_6383.jpg">
                        <img src="images/DSC_6349.jpg">
                        <img src="images/DSC_6383.jpg">
                    </div>
            </div>
        </div>
    </section>

    <section class="section-fon">
        <div class="container p-5 align-items-center">
            <p style="color: rgba(40, 156, 40, 0.521);" class="fw-bold">Ta'lim va kurslar</p>
            <h1 class="text-white">IT sohasini Astrum IT Akademiyasida o'rganing va o'z hayotingizni yaxshi tomonga o'zgartiring</h1>
            <p class="text-white pt-4 fs-5">Akademiyamizda dasturlash kurslari sun'iy intellekt yordami shunday tizimlashtirilganki, o'qishni tugatishingiz bilan siz yetarlicha bilim va yaxshigina portfolioga ega bo'lasiz. <br> современном оборудовании.</p>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-xxl-3 col-md-6">
                    <div class="card hvr-float m-auto" style="width: 18rem;">
                        <img class="card-img-top shadow" src="images/DSC_6366.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p>Начала курсв - 03/03/2022</p>
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="fs-5">12 месяцув / 450 часов</p>
                            <hr class="w-25 border border-success border-2">
                            <a href="{{ route('uz.courses') }}" class="btn btn-outline-success p-3 rounded">Узнать больше</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-3 col-md-6">
                    <div class="card hvr-float m-auto" style="width: 18rem;">
                        <img class="card-img-top shadow" src="images/DSC_6366.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p>Начала курсв - 03/03/2022</p>
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="fs-5">12 месяцув / 450 часов</p>
                            <hr class="w-25 border border-success border-2">
                            <a href="{{ route('uz.courses') }}" class="btn btn-outline-success p-3 rounded">Узнать больше</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-3 col-md-6">
                    <div class="card hvr-float m-auto" style="width: 18rem;">
                        <img class="card-img-top shadow" src="images/DSC_6366.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p>Начала курсв - 03/03/2022</p>
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="fs-5">12 месяцув / 450 часов</p>
                            <hr class="w-25 border border-success border-2">
                            <a href="{{ route('uz.courses') }}" class="btn btn-outline-success p-3 rounded">Узнать больше</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-3 col-md-6">
                    <div class="card hvr-float m-auto" style="width: 18rem;">
                        <img class="card-img-top shadow" src="images/DSC_6366.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p>Начала курсв - 03/03/2022</p>
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="fs-5">12 месяцув / 450 часов</p>
                            <hr class="w-25 border border-success border-2">
                            <a href="{{ route('uz.courses') }}" class="btn btn-outline-success p-3 rounded">Узнать больше</a>
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
                <div class="col-md-6 col-xl-4 col-xxl-4">
                    <p class="border-start border-dark border-4 ps-3">100%</p>
                    <p class="text-muted fw-bolder">Yuqori atmosfera</p>
                    <p>Astrum o'quv binosida Mac Valley joylashgan bo'lib, bu yerda mingdan ortiq iMac'lar mavjud. Siz xohlagan paytingiz ulardan foydalana olasiz. </p>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-4">
                    <p class="border-start border-dark border-4 ps-3">100%</p>
                    <p class="text-muted fw-bolder"> Innovatsion ta'lim tizimi</p>
                    <p>Astrumda o'qituvchilar yo'q. Darslar sun'iy intellekt yordamida olib boriladi. Siz platformadagi darslarda qatnashishingiz va uyga vazifalarni yuklab borishingiz lozim. Savollarga esa professional mentorlarimiz javob berishadi</p>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-4">
                    <p class="border-start border-dark border-4 ps-3">100%</p>
                    <p class="text-muted fw-bolder">QWASAR sertifikati</p>
                    <p>O'qishni tugatganingizdan so'ng sizga Amerikaning Silikon vodiysida ishlash imkonini beruvchi QWASAR sertifikati topshiriladi. Bu sertifikat orqali Yevropa va Amerikaning nufuzli kompaniyalarida faoliyat olib borishingiz mumkin.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-xl-4 col-xxl-4">
                    <p class="border-start border-dark border-4 ps-3">100%</p>
                    <p class="text-muted fw-bolder">24/7 qo'riqlash tizimi</p>
                    <p>Astrumda IT Akademiyasida to'laqonli xavfsizlik choralari ko'rilgan bo'lib, o'quv kampusi tun-u kun qo'riqlanadi. Bu esa o'quvchilarimizga o'zlari xohlagan payt Astrumga tashrif buyurish va darslarni davom ettirish imkoniyatini beradi.</p>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-4">
                    <p class="border-start border-dark border-4 ps-3">100%</p>
                    <p class="text-muted fw-bolder">Yaratilgan qulay sharoitlar</p>
                    <p>Bu yerda dam olishingiz uchun sport maydonchalari, dam olish xonalari, qulay sharoitlarga ega xonalar, chill zone va katta hovli mavjud.</p>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-4">
                    <p class="border-start border-dark border-4 ps-3">100%</p>
                    <p class="text-muted fw-bolder">Darslarni tezroq yakunlash imkoniyati </p>
                    <p>Darslar sun'iy intellekt yordamida o'tilishi hisobiga, siz darslarni tezroq ko'rishingiz va o'quv dasturini tezroq tugatib TOP dasturchilar safiga qo'shilishingiz mumkin.</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <img src="images/AST04894.jpg" class="w-100 rounded" alt="image">
        </div>
    </section>

    <section id="mentors" class="pt-5">
        <div class="container">
            <p style="color: rgba(40, 156, 40, 0.521);" class="fw-bold text-center">Bizning mentorlar </p>
            <h1 class="text-center fw-bold">Astrumda IT Akademiyasida siz sifatli ta'lim olishingiz va sohani puxta egallashingiz uchun eng kuchli va katta tajribaga ega mentorlar yordam berishadi. </h1>
            <p class="text-center mb-5">Mentor — sizda tug'ilgan savollarga javob beruvchi shaxs.</p>
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="profile-card">
                        <div class="profile-img">
                            <img src="https://i.postimg.cc/VNs6dtw4/profile2.jpg" alt="Team Image"/>
                        </div>
                        <div class="profile-content">
                            <h2 class="title">Shukurov Jasur
                                <span>Full Satack Developer</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="profile-card">
                        <div class="profile-img">
                            <img src="https://i.postimg.cc/XYkqj8Rp/profile3.jpg" alt="Team Image"/>
                        </div>
                        <div class="profile-content">
                            <h2 class="title">Aziza Azizova
                                <span>Full Satack Developer</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="profile-card">
                        <div class="profile-img">
                            <img src="https://i.postimg.cc/g0M0R0kp/profile1.jpg" alt="Team Image"/>
                        </div>
                        <div class="profile-content">
                            <h2 class="title">Komiljon Xamidjonov
                                <span>Data Science</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="profile-card">
                        <div class="profile-img">
                            <img src="https://i.postimg.cc/SsJxGpJM/profile4.jpg" alt="Team Image"/>
                        </div>
                        <div class="profile-content">
                            <h2 class="title">Ozodov Sarvar
                                <span>Software Engineering</span>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('uz.about_us') }}" id="btn" class="btn btn-outline-success p-3 mt-5 rounded">Barcha jamoa</a>
        </div>
    </section>

    {{-- <section>
        <div class="container">
            <p style="color: rgba(40, 156, 40, 0.521);" class="fw-bold">НОВОСТИ</p>
            <h1 class="fw-bold">Статьи которые помогут <br> Вам узнать больше</h1>
            <div class="row pt-5">
                <div class="col-xl-4 col-xxl-3 col-md-6">
                    <div class="card hvr-float m-auto" style="width: 18rem;">
                        <img class="card-img-top shadow" src="images/DSC_6366.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="href_arrow">Читатть <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-3 col-md-6">
                    <div class="card hvr-float m-auto" style="width: 18rem;">
                        <img class="card-img-top shadow" src="images/DSC_6366.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="href_arrow">Читатть <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-3 col-md-6">
                    <div class="card hvr-float m-auto" style="width: 18rem;">
                        <img class="card-img-top shadow" src="images/DSC_6366.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="href_arrow">Читатть <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-3 col-md-6">
                    <div class="card hvr-float m-auto" style="width: 18rem;">
                        <img class="card-img-top shadow" src="images/DSC_6366.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="href_arrow">Читатть <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('uz.news') }}" id="btn" class="btn btn-outline-success p-3 mt-5 mb-5 rounded">Больше новости</a>
        </div>
    </section> --}}

    <section>
        <div class="container">
            <p style="color: rgba(40, 156, 40, 0.521);" class="fw-bold">НАШИ ЦЕННОСТИ</p>
            <h1 class="fw-bold">Что отличает Astrum от других</h1>
            <p class="w-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur quo quisquam adipisci ea laboriosam dolores dolorum aliquid, iure accusantium doloremque, nihil dolore obcaecati expedita mollitia repellendus amet eos architecto eligendi!</p>
            <div class="row pt-5">
                <div class="col-md-4">
                    <p class="border-start border-dark border-4 ps-3 fs-2 fw-bold">Всегда честны</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, exercitationem voluptas, nemo tenetur consectetur, eum esse est laborum expedita repellendus modi! Exercitationem rem officia adipisci repudiandae ullam provident? Voluptas, amet.</p>
                </div>
                <div class="col-md-4">
                    <p class="border-start border-dark border-4 ps-3 fs-2 fw-bold">Всегда честны</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, exercitationem voluptas, nemo tenetur consectetur, eum esse est laborum expedita repellendus modi! Exercitationem rem officia adipisci repudiandae ullam provident? Voluptas, amet.</p>
                </div>
                <div class="col-md-4">
                    <p class="border-start border-dark border-4 ps-3 fs-2 fw-bold">Всегда честны</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, exercitationem voluptas, nemo tenetur consectetur, eum esse est laborum expedita repellendus modi! Exercitationem rem officia adipisci repudiandae ullam provident? Voluptas, amet.</p>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-md-4">
                    <p class="border-start border-dark border-4 ps-3 fs-2 fw-bold">Всегда честны</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, exercitationem voluptas, nemo tenetur consectetur, eum esse est laborum expedita repellendus modi! Exercitationem rem officia adipisci repudiandae ullam provident? Voluptas, amet.</p>
                </div>
                <div class="col-md-4">
                    <p class="border-start border-dark border-4 ps-3 fs-2 fw-bold">Всегда честны</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, exercitationem voluptas, nemo tenetur consectetur, eum esse est laborum expedita repellendus modi! Exercitationem rem officia adipisci repudiandae ullam provident? Voluptas, amet.</p>
                </div>
                <div class="col-md-4">
                    <p class="border-start border-dark border-4 ps-3 fs-2 fw-bold">Всегда честны</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, exercitationem voluptas, nemo tenetur consectetur, eum esse est laborum expedita repellendus modi! Exercitationem rem officia adipisci repudiandae ullam provident? Voluptas, amet.</p>
                </div>
            </div>
        </div>
    </section>

@endsection

