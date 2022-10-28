@extends('front.uz.main')
@section('style')
{{-- <style>
    .navbar{
        position: absolute;
        z-index: 9999;
    }
</style> --}}
@endsection
@section('content')

    <header>
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay"  muted="muted" loop="loop"> <!-- autoplay="autoplay" -->
            <source src="{{ asset('images/video_gif.mp4') }}" type="video/mp4">
        </video>

        <div class="container">
            <div class="row h-100">
                <div class="col-md-7 align-self-end mb-5">
                    <div class="text-white">
                        <p class="text-success"><span class="fw-bold"><a href="{{ route('uz.index') }}" class="text-decoration-none text-success">BOSH SAHIFA</a></span> | <a href="{{ route('uz.courses') }}" class="text-decoration-none text-success">KURSLAR VA TA'LIM</a></p>
                        <h1 class="font_size">O'zingizni bilim darajangizni oshiring va hayotingizni o'zgartiring</h1>
                        <p>Bizning kurslarimiz sizga IT sohasini tajriba orqali o'rganishingizda yordam beradi.</p>
                    </div>
                </div>
                <div class="col-md-5"></div>
            </div>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="row pt-5">
                <div class="col-xl-4 col-xxl-4 col-md-6">
                    <div class="card hvr-float m-auto" style="width: 18rem;">
                        <img class="card-img-top shadow" src="{{ asset('images/web-developer.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <p>Kursning boshlanishi - 03/03/2022</p>
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="fs-5">12 oy</p>
                            <hr class="w-25 border border-success border-2">
                            <a id="btn_1" href="{{ route('uz.fullstack') }}" class="btn btn-outline-success p-3 rounded">Batafsil</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-4 col-md-6">
                    <div class="card hvr-float m-auto" style="width: 18rem;">
                        <img class="card-img-top shadow" src="{{ asset('images/data.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <p>Kursning boshlanishi - 03/03/2022</p>
                            <h4 class="card-title fw-bold">data science</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="fs-5">12 oy</p>
                            <hr class="w-25 border border-success border-2">
                            <a id="btn_1" href="{{ route('uz.data_science') }}" class="btn btn-outline-success p-3 rounded">Batafsil</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-4 col-md-6">
                    <div class="card hvr-float m-auto" style="width: 18rem;">
                        <img class="card-img-top shadow" src="{{ asset('images/soft.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <p>Kursning boshlanishi - 03/03/2022</p>
                            <h4 class="card-title fw-bold">Software Engineering</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="fs-5">12 oy</p>
                            <hr class="w-25 border border-success border-2">
                            <a id="btn_1" href="{{ route('uz.software_engineering') }}" class="btn btn-outline-success p-3 rounded">Batafsil</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
