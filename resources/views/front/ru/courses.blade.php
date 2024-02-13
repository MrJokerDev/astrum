@extends('front.ru.main')
@section('content')


    <div class="img-fon position-relative">
        <img loading="lazy" id="img-fon" class="img-fluid" src="{{ asset('images/DSC_6349.jpg') }}" alt="image">
        <div class="container position-absolute top-50 start-50 translate-middle">
            <p class="text-white"><span class="fw-bold"><a href="{{ route('ru.index') }}" class="text-decoration-none text-white">ГЛАВНАЯ</a></span> | <a href="{{ route('ru.courses') }}" class="text-decoration-none text-white">ОБРАЗОВАНИЕ И КУРСЫ</a></p>
            <h1 class="font_size text-white">Повышайте свой уровень знаний и меняйте свою жизнь</h1>
            <p class="text-white">Наши курсы помогут вам освоить IT-сферу с помощью практики.</p>
        </div>
    </div>

    <section>
        <div class="container mb-5 mt-5">
            <div class="row">
                @include('components.courses')
            </div>
        </div>
    </section>

@endsection
