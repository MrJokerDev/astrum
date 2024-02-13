@extends('front.uz.main')
@section('content')
<style>
    .card-body {
        padding: 15px 0;
    }
</style>

    <div class="img-fon position-relative">
        <img loading="lazy" id="img-fon" class="img-fluid" src="{{ asset('images/DSC_6349.jpg') }}" alt="image">
        <div class="container position-absolute top-50 start-50 translate-middle">
            <p class="text-white"><span class="fw-bold"><a href="{{ route('uz.index') }}" class="text-decoration-none text-white">BOSH SAHIFA</a></span> | <a href="{{ route('uz.courses') }}" class="text-decoration-none text-white">KURSLAR VA TA'LIM</a></p>
            <h1 class="font_size text-white">O'zingizni bilim darajangizni oshiring va hayotingizni o'zgartiring</h1>
            <p class="text-white">Bizning kurslarimiz sizga IT sohasini tajriba orqali o'rganishingizda yordam beradi.</p>
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
