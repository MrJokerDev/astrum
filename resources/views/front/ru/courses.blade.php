@extends('front.ru.main')
@section('style')
{{-- <style>
    .navbar{
        position: absolute;
        z-index: 9999;
    }
</style> --}}
@endsection
@section('content')


    <div class="img-fon position-relative">
        <img id="img-fon" class="img-fluid" src="{{ asset('images/AST04894.jpg') }}" alt="image">
        <div class="container position-absolute top-50 start-50 translate-middle">
            <p class="text-white"><span class="fw-bold"><a href="{{ route('ru.index') }}" class="text-decoration-none text-white">ГЛАВНАЯ</a></span> | <a href="{{ route('ru.courses') }}" class="text-decoration-none text-white">ОБРАЗОВАНИЕ И КУРСЫ</a></p>
            <h1 class="font_size text-white">Повышайте свой уровень знаний и меняйте свою жизнь</h1>
            <p class="text-white">Наши курсы помогут вам освоить IT-сферу с помощью практики.</p>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-xxl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="card hvr-float m-auto m-5">
                        <img class="card-img-top" src="{{ asset('images/courses/1.png')}}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Это специалист, который должен понимать весь набор технологий и компонентов используемых в проекте, <br> как со стороны Front-end, <br> так и со стороны Back-end.</p>
                            
                            <hr class="w-25 border border-success border-2">
                            <a href="{{ route('ru.fullstack') }}" class="btn btn-outline-success p-3 rounded">More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="card hvr-float m-auto">
                        <img class="card-img-top" src="{{ asset('images/courses/2.png')}}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">Data Science</h4>
                            <p class="card-text">Специалист по информации создает модели основанные на данных, <br> которые помогают принимать <br> повседневные или <br> бизнес решения.</p>
                            
                            <hr class="w-25 border border-success border-2">
                            <a href="{{ route('ru.data_science') }}" class="btn btn-outline-success p-3 rounded">More</a>
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
                            <a href="{{ route('ru.software_engineering') }}" class="btn btn-outline-success p-3 rounded">More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
