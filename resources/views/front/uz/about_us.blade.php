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
        z-index: -1;
    }


</style>
@endsection

@section('content')
    <section class="mt-5 pt-5">
        <div class="container mt-5 pt-5">
            <p class="text-success text-center"><span><a class="text-success text-decoration-none fw-bold" href="{{ route('uz.index') }}">Bosh sahifa</a></span> | <a class="text-success text-decoration-none" href="{{ route('uz.about_us') }}">Kompaniya haqida</a></p>
            <h1 class="about_h1 fw-bold text-center">Bizning asosiy maqsadimiz yoshlarga IT sohasi bo'yicha chuqur bilim berish va shu orqali O'zbekiston rivojlanishiga o'z hissamizni qo'shishdan iborat.</h1>
            <p class="about_p text-center">Astrum IT Akademiyasiga kelgan har bir o'quvchi 24/7 rejimida ishlovchi texnologik kampus, innovatsion ta'lim tizimi va qulayliklarga ega bo'ladi. Kursni muvaffaqiyatli bitirganlarga esa Amerika Silikon vodiysida ishlash imkonini beruvchi QWASAR sertifikati topshiriladi.</p>
        </div>
    </section>

    <div class="glide">
        <div id="scrolling">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <li class="glide__slide"><img src="{{ asset('images/about/1.jpg') }}" alt="image"></li>
                    <li class="glide__slide"><img src="{{ asset('images/about/2.jpg') }}" alt="image"></li>
                    <li class="glide__slide"><img src="{{ asset('images/about/3.jpg') }}" alt="image"></li>
                    <li class="glide__slide"><img src="{{ asset('images/about/4.jpg') }}" alt="image"></li>
                    <li class="glide__slide"><img src="{{ asset('images/about/5.jpg') }}" alt="image"></li>
                    <li class="glide__slide"><img src="{{ asset('images/about/6.jpg') }}" alt="image"></li>
                    <li class="glide__slide"><img src="{{ asset('images/about/7.jpg') }}" alt="image"></li>
                    <li class="glide__slide"><img src="{{ asset('images/about/8.jpg') }}" alt="image"></li>
                    <li class="glide__slide"><img src="{{ asset('images/about/9.jpg') }}" alt="image"></li>
                    <li class="glide__slide"><img src="{{ asset('images/about/10.jpg') }}" alt="image"></li>
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
                            <a href="#" type="button" class="btn btn-danger bg-dark p-2 text-white" style="font-size: 10px;">Hozir roʻyxatdan oʻting</a>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-8">
                    <div id="about_us">
                        <div>
                            <h1 class="fw-bold">Astrum haqida qisqacha</h1> <br>
                            <p>Astrum IT Akademiyasi — nafaqat O'zbekistondagi, balki O'rta Osiyodagi birinchi va yagona bo'lgan IT Akademiyasi bo'lib, kompaniya dasturlash sohasida kadrlar tayyorlash va ularni o'qitish bo'yicha yetakchi hisoblanadi.

                                Astrum IT Akademiyasi Toshkent viloyati O'rta Chirchiq tumanida joylashgan.

                                Hozirda kompaniyada AAA dan ortiq xodim faoliyat olib boradi. BBB ga yaqin o'quvchilar dasturlash kurslaridan tahsil olishmoqda.

                                Astrum IT Akademiyasi o'quv binosi o'quvchilar uchun 24/7 ochiq va Akademiya hududi tun-u kun qo'riqlanadi.</p>
                        </div>
                        <img src="{{ asset('images/DSC_6366.jpg') }}" class="w-100 rounded mt-4 shadow" alt="image">
                    </div>

                    <div id="courses">
                        <h1 class="fw-bold mt-5">Наше решение — сделать обучение доступным</h1>
                        <p class="mt-5">Мы обмениваем классы в дорогих институтах на современные классы, с современной техникой, что позволяет учиться в наиболее комфортных условиях. Мы ограничиваем размер классов до пятнадцати, чтобы каждый ученик получил действительно личный опыт обучения. Мы устанавливаем доступные цены на наши учебные курсы в соответствии с тем, каким должно быть образование. Мы применяем наш многолетний опыт проектирования продуктов для обучения, гарантируя, что студентов обучают активные программисты, увлеченные обучением. Мы постоянно обновляем нашу учебную программу с помощью новейших рабочих процессов и инструментов, помогая учащимся приобретать достойные привычки и изучать то, что актуально в отрасли сегодня.</p>
                    </div>

                    {{-- <div id="">
                        <h1 class="fw-bold mt-5">Курсы Astrum рассчитаны на удобство. В первую очередь на удобство удаленной работы</h1>
                        <p class="mt-3">В последние годы удаленная работа стала “кругом” спасения для многих людей. В особенности в выиграше оказались IT спецыалисты. В данную категорию относят, как продуктовых менеджеров, дизайнеров и разработчиков. Обучась в Astrum Вы, так же сможете работать как удаленно так и в офиссе Вашей будующей компании. Учась на наших курсах Вы сможете частично испытать привелегии удаленной работы выполняя некоторые задания наших менторов из дома. Проходя наш любой курс, мы стараемся вовлеч студента как можно больше в рабочую среду, что бы при окончании Вы смогли слегкостью влится в коллектив Вашей будующей компании.</p>
                        <img src="{{ asset('images/DSC_6393.jpg') }}" class="w-100 rounded shadow" alt="">
                    </div>

                    <div id="">
                        <h1 class="fw-bold mt-5">Учебные курсы по разным направлениям с микроклассов помамагает получить максимум</h1>
                        <p class="mt-3">Поскольку наши курсы не содержат презентаций, мы используем подход «обучение на практике», когда студенты совместно работают в режиме реального времени с использованием новейших инструментов проектирования в реальном времени. На сегодняшний день это было удивительное путешествие в качестве основателя-одиночки. В отличие от других, Astrum работает для наших студентов, на 100% самозагружено и призвано помочь новым и опытным студентам эффективно работать как удаленно в качестве удаленных рабочих, так и непосредственно в офиссе.</p>
                        <img src="{{ asset('images/DSC_6393.jpg') }}" class="w-100 rounded shadow" alt="">
                    </div> --}}

                    <div id="mentors">
                        <h1 class="fw-bold mt-5">Bizning yaxshi energiya jamoamiz bilan tanishing!</h1>
                        <p class="mt-3"> So'nggi yillar ichida biz yaxshi energiya jamoasini o'stirdik. Yaxshi jamoa sifatida biz o'z jamoamizni rivojlantirmoqdamiz va o'qitishning miqdori va sifatini oshirmoqdamiz.</p>

                        <div class="row">
                            <div class="col-md-4 mt-4">
                                <div class="position-relative">
                                    <img src="{{ asset('images/mentors/bogdan.jpg') }}" class="rounded w-100" alt="image">
                                    <span class="position-absolute top-0 start-0 border border-dark rounded text-white bg-dark p-2 ps-3 pe-3 m-2">Qwasar platforma admini</span>
                                    <span class="position-absolute bottom-0 start-0 p-3 text-white"><span class="fw-bold">Azimjanov Bogdan</span> <br><span>O'quv bo'limi bo'shligi</span> <hr class="w-25 m-0" style="border: 2px solid #62BC9E;"></span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <div class="position-relative">
                                    <img src="{{ asset('images/mentors/sarvar.jpg') }}" class="rounded w-100" alt="image">
                                    <span class="position-absolute top-0 start-0 border border-dark rounded text-white bg-dark p-2 ps-3 pe-3 m-2">Mentor</span>
                                    <span class="position-absolute bottom-0 start-0 p-3 text-white"><span class="fw-bold">Ozodov Saravar</span> <br><span>Software Engineer</span> <hr class="w-25 m-0" style="border: 2px solid #62BC9E;"></span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <div class="position-relative">
                                    <img src="{{ asset('images/mentors/sarvar_sh.jpg') }}" class="rounded w-100" alt="image">
                                    <span class="position-absolute top-0 start-0 border border-dark rounded text-white bg-dark p-2 ps-3 pe-3 m-2">Mentor</span>
                                    <span class="position-absolute bottom-0 start-0 p-3 text-white"><span class="fw-bold">Shomurodov Sarvar</span> <br><span>Full Stack Deleloper</span> <hr class="w-25 m-0" style="border: 2px solid #62BC9E;"></span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <div class="position-relative">
                                    <img src="{{ asset('images/mentors/komil.jpg') }}" class="rounded w-100" alt="image">
                                    <span class="position-absolute top-0 start-0 border border-dark rounded text-white bg-dark p-2 ps-3 pe-3 m-2">Mentor</span>
                                    <span class="position-absolute bottom-0 start-0 p-3 text-white"><span class="fw-bold">Xamidjanov Komiljon</span> <br><span>Data Science</span> <hr class="w-25 m-0" style="border: 2px solid #62BC9E;"></span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <div class="position-relative">
                                    <img src="{{ asset('images/mentors/aziza.jpg') }}" class="rounded w-100" alt="image">
                                    <span class="position-absolute top-0 start-0 border border-dark rounded text-white bg-dark p-2 ps-3 pe-3 m-2">Mentor</span>
                                    <span class="position-absolute bottom-0 start-0 p-3 text-white"><span class="fw-bold">Azizova Aziza</span> <br><span>Full Stack Deleloper</span> <hr class="w-25 m-0" style="border: 2px solid #62BC9E;"></span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <div class="position-relative">
                                    <img src="{{ asset('images/mentors/nodira.jpg') }}" class="rounded w-100" alt="image">
                                    <span class="position-absolute top-0 start-0 border border-dark rounded text-white bg-dark p-2 ps-3 pe-3 m-2">Mentor</span>
                                    <span class="position-absolute bottom-0 start-0 p-3 text-white"><span class="fw-bold">Arslonova Nodira</span> <br><span>Data Science</span> <hr class="w-25 m-0" style="border: 2px solid #62BC9E;"></span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <div class="position-relative">
                                    <img src="{{ asset('images/mentors/asal.jpg') }}" class="rounded w-100" alt="image">
                                    <span class="position-absolute top-0 start-0 border border-dark rounded text-white bg-dark p-2 ps-3 pe-3 m-2">Mentor</span>
                                    <span class="position-absolute bottom-0 start-0 p-3 text-white"><span class="fw-bold">Alimbayeva Asal</span> <br><span>Data Science</span> <hr class="w-25 m-0" style="border: 2px solid #62BC9E;"></span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <div class="position-relative">
                                    <img src="{{ asset('images/mentors/berdiyor.jpg') }}" class="rounded w-100" alt="image">
                                    <span class="position-absolute top-0 start-0 border border-dark rounded text-white bg-dark p-2 ps-3 pe-3 m-2">Mentor</span>
                                    <span class="position-absolute bottom-0 start-0 p-3 text-white"><span class="fw-bold">Arslonov Berdiyor</span> <br><span>Software Engineer</span> <hr class="w-25 m-0" style="border: 2px solid #62BC9E;"></span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <div class="position-relative">
                                    <img src="{{ asset('images/mentors/aziz.jpg') }}" class="rounded w-100" alt="image">
                                    <span class="position-absolute top-0 start-0 border border-dark rounded text-white bg-dark p-2 ps-3 pe-3 m-2">Mentor</span>
                                    <span class="position-absolute bottom-0 start-0 p-3 text-white"><span class="fw-bold">Abdulaziz Orifjonov</span> <br><span>Data Science</span> <hr class="w-25 m-0" style="border: 2px solid #62BC9E;"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="courses_room">
                        <h1 class="fw-bold mt-5">Biz to'liq ishonchli kompaniya sifatida barqaror rivojlanmoqdamiz!</h1>
                        <p>Biz har kuni o'z harakatlarimiz va talabalarimizga bergan va'dalarimiz va majburiyatlarimiz bajarilishi bilan ilhomlantirmoqdamiz. Biz kelajakdagi mahsulot dasturlarini ishlab chiqish ustida ishlayotgan talabalarimiz bilan faxrlanamiz va hamkasblarimiz va do'stlarimizni Astrumda o'qishga taklif qilamiz!
                            Shunday qilib, Astrum qanday rivojlangani va rivojlanayotgani haqida hikoya. Agar siz bizning hikoyamizni qabul qilsangiz va qadriyatlarimizga rozi bo'lsangiz, sizni biz bilan o'rganishni yoki jamoamizga qo'shilishni taklif qilamiz!</p>
                        <img src="{{ asset('images/astrum_staff.jpg') }}" class="w-100 rounded shadow mb-5" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('js')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/glide.min.js"></script>
	<script>
        var glide = new Glide('.glide', {
            type: 'carousel',
            perView: 5
        })

        glide.mount()
    </script>
@endsection
