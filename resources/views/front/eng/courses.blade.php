@extends('front.eng.main')
@section('content')


    <div class="img-fon position-relative">
        <img loading="lazy"  id="img-fon" class="img-fluid" src="{{ asset('images/DSC_6349.jpg') }}" alt="image">
        <div class="container position-absolute top-50 start-50 translate-middle">
            <p class="text-white"><span class="fw-bold"><a href="{{ route('eng.index') }}" class="text-decoration-none text-white">HOME</a></span> | <a href="{{ route('eng.courses') }}" class="text-decoration-none text-white">EDUCATION AND COURSES</a></p>
            <h1 class="font_size text-white">Improve your knowledge and change your life</h1>
            <p class="text-white">Our courses will help you master the IT-sphere with practice.</p>
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
