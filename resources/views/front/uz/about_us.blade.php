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


</style>
@endsection

@section('content')
    <section>
        <div class="container">
            <p class="text-success text-center"><span><a class="text-success text-decoration-none fw-bold" href="{{ route('uz.index') }}">Главная</a></span> | <a class="text-success text-decoration-none" href="{{ route('uz.about_us') }}">о компании</a></p>
            <h1 class="about_h1 fw-bold text-center">Наша цель - помочь и передать <br> Вам наши навыки и умения!</h1>
            <p class="about_p text-center">Мы передаем свои навыки нашим студентам и так же повышаем свои навыки на крупных проектах, что помогает постоянно вносить новые елементы современных технологий в наши курсы!</p>
        </div>
    </section>

    <div class="glide">
        <div id="scrolling">
            <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
            <li class="glide__slide"><img src="https://placem.at/places?w=300&h=400&random=1" alt=""></li>
            <li class="glide__slide"><img src="https://placem.at/places?w=300&h=400&random=2" alt=""></li>
            <li class="glide__slide"><img src="https://placem.at/places?w=300&h=400&random=3" alt=""></li>
            <li class="glide__slide"><img src="https://placem.at/places?w=300&h=400&random=4" alt=""></li>
            <li class="glide__slide"><img src="https://placem.at/places?w=300&h=400&random=5" alt=""></li>
            <li class="glide__slide"><img src="https://placem.at/places?w=300&h=400&random=6" alt=""></li>
            <li class="glide__slide"><img src="https://placem.at/places?w=300&h=400&random=7" alt=""></li>
            <li class="glide__slide"><img src="https://placem.at/places?w=300&h=400&random=8" alt=""></li>
            <li class="glide__slide"><img src="https://placem.at/places?w=300&h=400&random=9" alt=""></li>
            <li class="glide__slide"><img src="https://placem.at/places?w=300&h=400&random=10" alt=""></li>
            <li class="glide__slide"><img src="https://placem.at/places?w=300&h=400&random=11" alt=""></li>
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
                                Full stack developer
                            </li>
                            <hr>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#"> Обзор </a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#"> Учебная программа </a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#"> Ментор </a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#"> Инструменты разработки </a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#"> Класы для курсов </a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#"> Выпускники </a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#"> Цены </a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#"> Расписание курсов </a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#"> Вопросы </a>
                            </li>
                            <br>
                            <a href="#" type="button" class="btn btn-danger bg-dark p-2 text-white" style="font-size: 10px;">Зарегистрируйтесь сейчас</a>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-8">
                    <div>
                        <h1 class="fw-bold">Что бы стать хорошим специалистом не нужно платить 150 000 UZS+ за изучение программированию в престижных институтах и тратить на это >5 лет.</h1>
                        <p>В течение последнего десятилетия программным продуктам обучали в  престижных институтах тратив на это более 5 лет своей жизни. Студенты платили и платят огромную сумму (мы говорим о 150 000 UZS +) за изучение навыков программированию с помощью не совсем компетентных програм в классе из 40 студентов. Учебный план и инструменты остаются неизменными в течение многих лет, и курсы, как правило, преподают неопытными программистами, которые оказались доступны.</p>
                    </div>
                    <img src="{{ asset('images/DSC_6366.jpg') }}" class="w-100 rounded mt-4 shadow" alt="image">

                    <h1 class="fw-bold mt-5">Наше решение — сделать обучение доступным</h1>
                    <p class="mt-5">Мы обмениваем классы в дорогих институтах на современные классы, с современной техникой, что позволяет учиться в наиболее комфортных условиях. Мы ограничиваем размер классов до пятнадцати, чтобы каждый ученик получил действительно личный опыт обучения. Мы устанавливаем доступные цены на наши учебные курсы в соответствии с тем, каким должно быть образование. Мы применяем наш многолетний опыт проектирования продуктов для обучения, гарантируя, что студентов обучают активные программисты, увлеченные обучением. Мы постоянно обновляем нашу учебную программу с помощью новейших рабочих процессов и инструментов, помогая учащимся приобретать достойные привычки и изучать то, что актуально в отрасли сегодня.</p>

                    <div class="image-gallery">
                        <div class="column">
                            <div class="image-item">
                                <img src="https://source.unsplash.com/VWcPlbHglYc" alt="" />
                            </div>
                            <div class="image-item">
                                <img src="https://source.unsplash.com/e6FMMambeO4" alt="" />
                            </div>
                        </div>
                        <div class="column">
                            <div class="image-item">
                                <img src="https://source.unsplash.com/O0N9MF--hK4" alt="" />
                            </div>
                            <div class="image-item">
                                <img src="https://source.unsplash.com/FV3GConVSss" alt="" />
                            </div>
                        </div>
                        <div class="column">
                            <div class="image-item">
                                <img src="https://source.unsplash.com/O0N9MF--hK4" alt="" />
                            </div>
                            <div class="image-item">
                                <img src="https://source.unsplash.com/FV3GConVSss" alt="" />
                            </div>
                        </div>
                    </div>

                    <h1 class="fw-bold mt-5">Курсы Astrum рассчитаны на удобство. В первую очередь на удобство удаленной работы</h1>
                    <p class="mt-3">В последние годы удаленная работа стала “кругом” спасения для многих людей. В особенности в выиграше оказались IT спецыалисты. В данную категорию относят, как продуктовых менеджеров, дизайнеров и разработчиков. Обучась в Asirum Вы, так же сможете работать как удаленно так и в офиссе Вашей будующей компании. Учась на наших курсах Вы сможете частично испытать привелегии удаленной работы выполняя некоторые задания наших менторов из дома. Проходя наш любой курс, мы стараемся вовлеч студента как можно больше в рабочую среду, что бы при окончании Вы смогли слегкостью влится в коллектив Вашей будующей компании.</p>
                    <img src="{{ asset('images/DSC_6393.jpg') }}" class="w-100 rounded shadow" alt="">

                    <h1 class="fw-bold mt-5">Учебные курсы по разным направлениям с микроклассов помамагает получить максимум</h1>
                    <p class="mt-3">Поскольку наши курсы не содержат презентаций, мы используем подход «обучение на практике», когда студенты совместно работают в режиме реального времени с использованием новейших инструментов проектирования в реальном времени. На сегодняшний день это было удивительное путешествие в качестве основателя-одиночки. В отличие от других, Asirum работает для наших студентов, на 100% самозагружено и призвано помочь новым и опытным студентам эффективно работать как удаленно в качестве удаленных рабочих, так и непосредственно в офиссе.</p>
                    <img src="{{ asset('images/DSC_6393.jpg') }}" class="w-100 rounded shadow" alt="">

                    <h1 class="fw-bold mt-5">Познакомьтесь с нашей хорошей энергетической командой!</h1>
                    <p class="mt-3">За последние пару лет мы вырастили хорошую энергетическую команду. Как хорошая команда, мы равиваем наш коллектив и умнажаем наше количество  и повышая качество преподавания.</p>

                    <div class="row">
                        <div class="col-md-4 mt-4">
                            <div class="position-relative">
                                <img src="{{ asset('images/DSC_6349.jpg') }}" class="rounded w-100" alt="image">
                                <span class="position-absolute top-0 start-0 border border-dark rounded text-white bg-dark p-2 ps-3 pe-3 m-2">Mentor</span>
                                <span class="position-absolute bottom-0 start-0 p-3 text-white"><span class="fw-bold">Name Names</span> <br><span>Software Engineer</span> <hr class="w-25 m-0" style="border: 2px solid #62BC9E;"></span>
                            </div>
                        </div>
                        <div class="col-md-4 mt-4">
                            <div class="position-relative">
                                <img src="{{ asset('images/DSC_6349.jpg') }}" class="rounded w-100" alt="image">
                                <span class="position-absolute top-0 start-0 border border-dark rounded text-white bg-dark p-2 ps-3 pe-3 m-2">Mentor</span>
                                <span class="position-absolute bottom-0 start-0 p-3 text-white"><span class="fw-bold">Name Names</span> <br><span>Software Engineer</span> <hr class="w-25 m-0" style="border: 2px solid #62BC9E;"></span>
                            </div>
                        </div>
                        <div class="col-md-4 mt-4">
                            <div class="position-relative">
                                <img src="{{ asset('images/DSC_6349.jpg') }}" class="rounded w-100" alt="image">
                                <span class="position-absolute top-0 start-0 border border-dark rounded text-white bg-dark p-2 ps-3 pe-3 m-2">Mentor</span>
                                <span class="position-absolute bottom-0 start-0 p-3 text-white"><span class="fw-bold">Name Names</span> <br><span>Software Engineer</span> <hr class="w-25 m-0" style="border: 2px solid #62BC9E;"></span>
                            </div>
                        </div>
                        <div class="col-md-4 mt-4">
                            <div class="position-relative">
                                <img src="{{ asset('images/DSC_6349.jpg') }}" class="rounded w-100" alt="image">
                                <span class="position-absolute top-0 start-0 border border-dark rounded text-white bg-dark p-2 ps-3 pe-3 m-2">Mentor</span>
                                <span class="position-absolute bottom-0 start-0 p-3 text-white"><span class="fw-bold">Name Names</span> <br><span>Software Engineer</span> <hr class="w-25 m-0" style="border: 2px solid #62BC9E;"></span>
                            </div>
                        </div>
                        <div class="col-md-4 mt-4">
                            <div class="position-relative">
                                <img src="{{ asset('images/DSC_6349.jpg') }}" class="rounded w-100" alt="image">
                                <span class="position-absolute top-0 start-0 border border-dark rounded text-white bg-dark p-2 ps-3 pe-3 m-2">Mentor</span>
                                <span class="position-absolute bottom-0 start-0 p-3 text-white"><span class="fw-bold">Name Names</span> <br><span>Software Engineer</span> <hr class="w-25 m-0" style="border: 2px solid #62BC9E;"></span>
                            </div>
                        </div>
                        <div class="col-md-4 mt-4">
                            <div class="position-relative">
                                <img src="{{ asset('images/DSC_6349.jpg') }}" class="rounded w-100" alt="image">
                                <span class="position-absolute top-0 start-0 border border-dark rounded text-white bg-dark p-2 ps-3 pe-3 m-2">Mentor</span>
                                <span class="position-absolute bottom-0 start-0 p-3 text-white"><span class="fw-bold">Name Names</span> <br><span>Software Engineer</span> <hr class="w-25 m-0" style="border: 2px solid #62BC9E;"></span>
                            </div>
                        </div>
                        <div class="col-md-4 mt-4">
                            <div class="position-relative">
                                <img src="{{ asset('images/DSC_6349.jpg') }}" class="rounded w-100" alt="image">
                                <span class="position-absolute top-0 start-0 border border-dark rounded text-white bg-dark p-2 ps-3 pe-3 m-2">Mentor</span>
                                <span class="position-absolute bottom-0 start-0 p-3 text-white"><span class="fw-bold">Name Names</span> <br><span>Software Engineer</span> <hr class="w-25 m-0" style="border: 2px solid #62BC9E;"></span>
                            </div>
                        </div>
                        <div class="col-md-4 mt-4">
                            <div class="position-relative">
                                <img src="{{ asset('images/DSC_6349.jpg') }}" class="rounded w-100" alt="image">
                                <span class="position-absolute top-0 start-0 border border-dark rounded text-white bg-dark p-2 ps-3 pe-3 m-2">Mentor</span>
                                <span class="position-absolute bottom-0 start-0 p-3 text-white"><span class="fw-bold">Name Names</span> <br><span>Software Engineer</span> <hr class="w-25 m-0" style="border: 2px solid #62BC9E;"></span>
                            </div>
                        </div>
                        <div class="col-md-4 mt-4">
                            <div class="position-relative">
                                <img src="{{ asset('images/DSC_6349.jpg') }}" class="rounded w-100" alt="image">
                                <span class="position-absolute top-0 start-0 border border-dark rounded text-white bg-dark p-2 ps-3 pe-3 m-2">Mentor</span>
                                <span class="position-absolute bottom-0 start-0 p-3 text-white"><span class="fw-bold">Name Names</span> <br><span>Software Engineer</span> <hr class="w-25 m-0" style="border: 2px solid #62BC9E;"></span>
                            </div>
                        </div>
                    </div>

                    <h1 class="fw-bold mt-5">Мы устойчиво растем как полностью уверенная в себе компания!</h1>
                    <p>Мы продолжают вдохновлять каждый день, нашими действиями и выполнениями обещаний и обязательст перед нашими студентами. Гордимся нашими студентами которе работают над разработкой программых продуктов, будущего и приглашаем коллег и друзей учиться в Asirum!
                        Итак, вот она, история о том, как Asirum развивалась и развивается. Если Вы принимаете нашу историю и согласны с нашими ценностями, мы призываем Вас учиться вместе с нами или присоединиться к нашей команде!</p>
                    <img src="{{ asset('images/AST04894.jpg') }}" class="w-100 rounded shadow mb-5" alt="">
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
            perView: 4
        })

        glide.mount()
    </script>
@endsection
