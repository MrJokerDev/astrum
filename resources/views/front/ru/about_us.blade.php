@extends('front.ru.main')

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
        <div id="header" class="container">
            <p class="text-success text-center"><span><a class="text-success text-decoration-none fw-bold" href="{{ route('ru.index') }}">Главная</a></span> | <a class="text-success text-decoration-none" href="{{ route('ru.about_us') }}">О компании</a></p>
            <h1 class="about_h1 fw-bold text-center">Наша главная цель — дать молодежи глубокие знания в области IT и тем самым внести свой вклад в развитие Узбекистана.</h1>
            <p class="about_p text-center">Каждый студент, пришедший в Академию Astrum IT, получит технологический кампус работающий 24/7, инновационную систему обучения и удобства. А те, кто успешно закончили курс, получают сертификат QWASAR, который позволяет им работать в Силиконовой долине Америки.</p>
        </div>

    <div class="glide">
        <div id="scrolling">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <li class="glide__slide"><img loading="lazy" loading="lazy" src="{{ asset('images/about/1.jpg') }}" alt="image"></li>
                    <li class="glide__slide"><img loading="lazy" loading="lazy" src="{{ asset('images/about/2.jpg') }}" alt="image"></li>
                    <li class="glide__slide"><img loading="lazy" loading="lazy" src="{{ asset('images/about/3.jpg') }}" alt="image"></li>
                    <li class="glide__slide"><img loading="lazy" loading="lazy" src="{{ asset('images/about/4.jpg') }}" alt="image"></li>
                    <li class="glide__slide"><img loading="lazy" loading="lazy" src="{{ asset('images/about/5.jpg') }}" alt="image"></li>
                    <li class="glide__slide"><img loading="lazy" loading="lazy" src="{{ asset('images/about/6.jpg') }}" alt="image"></li>
                    <li class="glide__slide"><img loading="lazy" loading="lazy" src="{{ asset('images/about/7.jpg') }}" alt="image"></li>
                    <li class="glide__slide"><img loading="lazy" loading="lazy" src="{{ asset('images/about/8.jpg') }}" alt="image"></li>
                    <li class="glide__slide"><img loading="lazy" loading="lazy" src="{{ asset('images/about/9.jpg') }}" alt="image"></li>
                    <li class="glide__slide"><img loading="lazy" loading="lazy" src="{{ asset('images/about/10.jpg') }}" alt="image"></li>
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
                                О компании
                            </li>
                            <hr>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#about_us">Посмотреть</a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#courses">Учебная программа</a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#mentors">Менторы</a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#courses_room">Команда Astrum</a>
                            </li>
                            <br>
                            @include('front.ru.component.registerLid')
                            {{-- <a href="{{ route('ru.register') }}" type="button" class="btn btn-danger bg-dark p-2 text-white" style="font-size: 10px;">Зарегистрируйтесь сейчас</a> --}}
                        </ul>
                    </nav>
                </div>
                <div class="col-md-8">
                    <div id="about_us">
                        <div>
                            <h1 class="fw-bold">О компании</h1> <br>
                            <p>Академия Astrum IT — первая и единственная IT Академия не только в Узбекистане, но и в Средней Азии, компания является лидером в области подготовки и обучения кадров в сфере программирования.</p>
                            <p>Академия Astrum IT расположена в средне-Чирчикском районе Ташкентской области, а наличие свежего воздуха и прекрасной атмосферы ещё больше способствуют получению качественного образования.</p>
                            <p>В настоящее время в компании работают около 100 сотрудников. Около 1000 студентов проходят курсы программирования, кибербезопасности и 3DMax.</p>
                            <p>Еще одним преимуществом Академии Astrum IT является то, что учебный корпус Astrum открыт для студентов 24/7, а территория Академии охраняется круглосуточно. Чтобы учиться в Astrum, вам не обязательно иметь персональный компьютер, в Mac Valley насчитывается около тысячи компьютеров iMac, которыми вы можете пользоваться в любое время когда захотите.</p>
                        </div>
                        <img loading="lazy" loading="lazy" src="{{ asset('images/DSC03587.JPG') }}" class="w-100 rounded mt-4 shadow" alt="image">
                    </div>

                    <div id="mentors">
                        <h1 class="fw-bold mt-5">Наши менторы</h1>
                        <p class="mt-3">В Академии Astrum IT работают молодые менторы, имеющие хорошие знания. После того, как ученик прошел уроки с помощью инновационной образовательной платформы, он может обратиться к менторам при возникновении дополнительных вопросов где они что-то не понимают. Наши менторы всегда готовы помочь каждому ученику.</p>

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
                        <h1 class="fw-bold mt-5">Система AstroCoin</h1>
                        <p>Академия Astrum IT внедрила систему AstroCoin для стимулирования учащихся и повышения их интереса к учебе. При этом, учащиеся могут зарабатывать специальные AstroCoin'ы, участвуя в общественной жизни, образовательных процессах и различных мероприятиях академии Astrum IT, а также покупать различные ценные подарки на маркете с помощью этих монет.</p>
                    </div>
                    <hr>
                    <div id="courses_room">
                        <h1 class="fw-bold mt-5">Цель Академии Astrum IT</h1>
                        <p>Единственной целью академии Astrum IT является развитие IT-сферы в Узбекистане, удовлетворение спроса на IT-специалистов и обеспечение качественного образования молодежи нашей страны, а также превращение их в обладателей современных профессий. В связи с этим, наш Президент Ш.Мирзияев также неоднократно отмечал это во время посещения Академии Astrum IT.</p>
                        <br>
                        <p>Академия Astrum IT ставит своей приоритетной задачей расширение своих филиалов, открытие современных IT-академий во всех областях и обеспечение качественного образования молодежи.</p>
                        <br>
                        <img loading="lazy" loading="lazy" src="{{ asset('images/astrum_staff.jpg') }}" class="w-100 rounded shadow mb-5" alt="">
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

@endsection
@section('js')
	{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/glide.min.js"></script>
	<script>
        var glide = new Glide('.glide', {
            type: 'carousel',
            perView: 5
        })

        glide.mount()
    </script>
@endsection
