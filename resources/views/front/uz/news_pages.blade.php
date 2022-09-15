@extends('front.uz.main')

@section('style')
<style>
    .nav-item a{
        color: #333;
    }
    #btn{
        border: 2px solid #333;
        color: #333;
    }
    #lang_btn{
        border: 2px solid #333;
        color: #333;
    }
    [type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled), button:not(:disabled){
        background-color: #F5F4FF;
        color: #333;
    }
</style>
@endsection

@section('content')

    <section class="text-center mt-5 pt-5">
        <p><span class="fw-bold"><a href="{{ route('uz.index') }}" class="text-success text-decoration-none">Главная</a></span> | <a href="{{ route('uz.news') }}" class="text-success text-decoration-none">новости</a> | <a href="{{ route('uz.news_pages') }}" class="text-success text-decoration-none">Обучение и перспективы</a></p>
        <h1 class="fw-bold" style="font-size: 60px;">Обучение и перспективы</h1>
        <div class="d-flex w-25 justify-content-center m-auto mt-4">
            <a href="#" class="text-dark"><i class="bi bi-telegram me-4 m-auto" style="font-size: 45px;"></i></a>
            <a href="#" class="text-dark"><i class="bi bi-facebook me-4 m-auto" style="font-size: 45px;"></i></a>
            <a href="#" class="text-dark"><i class="bi bi-instagram me-4 m-auto" style="font-size: 45px;"></i> </a>
        </div>
    </section>

    <section>
        <img src="{{ asset('images/DSC03614.JPG') }}" class="w-100" alt="image">
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h1>С места в карьеру: 4 перспективных профессий, которые легко освоить новичкам</h1>
                    <hr style="border: 2px solid #9747FF;" class="mt-4 mb-4">
                    <h2>В данной статье мы хотим показать Вам детальные данные о проффесиях и курсах, которые могут Вам помочь сделать собственный выбор</h2>
                    <p><span class="fw-bold">1. Оператор</span><br> <span class="fw-bold">Длительность:</span>  10 месяцев</p>
                    <p>Операторы — это не те, чьих имён все дожидаются в титрах. Но при этом успех фильма во многом зависит именно от движений камеры, характера кадров и выбора ракурсов. «Оператор не только ближайший помощник постановщика — он всегда является одним из соавторов киноленты», — сказалНовая экспозиция на «Мосфильме» / Мосфильм ещё Эльдар Рязанов, но актуальны эти слова и сегодня, когда техника съёмки сильно шагнула вперёд. С курсом Asirum «Профессия Оператор» вы научитесь подбирать оборудование, снимать и монтировать видео, а к концу программы в портфолио будут 3 готовых проекта. Пробиться в киноиндустрию кажется задачей из зоны фантастики. Но не сейчас. На отечественном рынке появляется всё больше сериалов, а кинотеатрам не хватает контента — кажется, специалисты вполне актуальны. А если на большие экраны не очень‑то и хочется, стоит вспомнить, что свадебные видеооператоры и помощники блогеров тоже неплохо зарабатывают. Карьерные перспективы внутри этой профессии могут быть разными — найти свою нишу получится под любые творческие амбиции.</p>
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <div>
                        <img src="{{ asset('images/DSC_6366.jpg') }}" class="w-100 rounded" alt="image">
                    </div>

                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <p><span class="fw-bold">2. Java‑разработчик </span><br> <span class="fw-bold">Длительность:</span> 9 месяцев</p>
                            <p>Если хотите работать в IT, но не знаете, какую профессию выбрать, присмотритесь к Java‑разработке — это неплохой вариант курсов для начинающих IT‑специалистов. Мобильные приложения, ПО, игры, нейросети — тем, кто познал Java, открыты десятки дорог. Ничего не знаете о коде? Не страшно: программа адаптирована для новичков. Зарплаты Java‑разработчиков тоже радуют приятными цифрами: уже на старте, без опыта, можно получить оферВакансии Java‑разработчиков без опыта / HeadHunter на 60 тысяч рублей. Уже в первые месяцы обучения студенты детально разберутся в среде разработки и напишут своё первое консольное приложение. Итоговый проект курса — создание поискового движка для конкретного сайта. А ещё учеников ждёт стажировка в команде под руководством опытного тимлида и по заданию от реального заказчика — вы сможете поучаствовать в разработке уникальной социальной сети. На этом этапе студенты полноценно погружаются в профессию, знакомятся с методологией Scrum и получают софт‑скилы, без которых в индустрии не обойтись. Кстати, в Asirum есть и полугодовой курс по Python — этот язык считается одним из самых простых для старта в IT и знакомства с кодом.</p>
                        </div>
                    </div>
                    <div>
                        <img src="{{ asset('images/DSC_6366.jpg') }}" class="w-100 rounded" alt="image">
                    </div>

                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <p><span class="fw-bold">2. Java‑разработчик </span><br> <span class="fw-bold">Длительность:</span> 9 месяцев</p>
                            <p>Отличный вариант для тех, кто хочет работать в геймдеве или кино и совместить творческие задания с технической специальностью. Всего за 5 месяцев студенты освоят Autodesk Мауа, Marmoset Toolbag и Substance Painter, научатся подбирать фактуру и цвет, находить референсы и слышать истинные запросы заказчика. А ещё — разберутся, что такое мокап и риггинг, и узнают, как настраивать свет и сцену. Среди спикеров курса «3D‑моделирование для начинающих» — художники, которые работали над World of Tanks, War Thunder, Fortnite, League of Legends Story и другими известными играми. А ещё — аниматор, принимавшая участие в создании проектов «Союзмультфильма» и студии «Паровоз». Определиться с направлением карьеры поможет участие в Game Box. Это практическая лаборатория по разработке игр, с которой влиться в геймдев‑комьюнити будет легко. Вы пообщаетесь с профессионалами отрасли, получите шанс поработать над заданиями от реальных игровых студий и, возможно, найдёте команду для будущих проектов.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <nav id="navbar-bg" class="navbar sticky-top rounded ps-4 pe-4 w-100">
                        <ul class ="nav navbar-nav w-100">
                            <li class="text-center bg-light p-3 rounded">
                                Рекомендованные курсы
                            </li>
                            <li class ="nav-item mt-3">
                                <a class ="d-flex text-dark fw-bold text-decoration-none" href="#">
                                    <img src="{{ asset('images/DSC_6375.jpg') }}" class="w-50 h-50 rounded me-2" alt="image">
                                    Full stack developer
                                </a>
                            </li>
                            <li class ="nav-item mt-3">
                                <a class ="d-flex text-dark fw-bold text-decoration-none" href="#">
                                    <img src="{{ asset('images/DSC_6375.jpg') }}" class="w-50 h-50 rounded me-2" alt="image">
                                    Software engineerv
                                </a>
                            </li>
                            <li class ="nav-item mt-3 mb-3">
                                <a class ="d-flex text-dark fw-bold text-decoration-none" href="#">
                                    <img src="{{ asset('images/DSC_6375.jpg') }}" class="w-50 h-50 rounded me-2" alt="image">
                                    Data science
                                </a>
                            </li>

                            <a href="#" type="button" class="btn btn-danger bg-dark p-3">Зарегистрируйтесь сейчас</a>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
