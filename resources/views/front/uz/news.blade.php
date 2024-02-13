@extends('front.uz.main')

@section('style')
<style>
    .translate-middle {
        transform: translate(0%,-50%)!important;
    }
  .navbar{
  	position: absolute;
    z-index: 999;
  }

</style>
@endsection

@section('content')

    <div class="img-fon position-relative">
        <img loading="lazy" id="img-fon" class="img-fluid" src="{{ asset('images/DSC_6541.JPG') }}" alt="image">
        <div class="container">
        <div class="position-absolute bottom-0 start-25 translate-middle">
            <p class="text-white"><span><a class="text-white text-decoration-none fw-bold" href="{{ route('uz.index') }}">Главная</a></span> | <a class="text-white text-decoration-none" href="{{ route('uz.courses') }}">курсы и образование</a></p>
            <h1 class="text-white" style="font-size: 60px;"><span></span> Статьи которые помогут <br> Вам узнать больше</h1>
        </div>
    </div>
    </div>

    <section>
        <div class="container-xl">
            <p class="fw-bold">АКТУАЛЬНЫЕ НОВОСТИ</p>
            <div class="row pt-5">
                <div class="col-xxl-3 col-lg-4 col-md-6 col-12">
                    <div class="card hvr-float m-auto" style="width: 18rem;">
                        <img loading="lazy" class="card-img-top shadow" src="{{ asset('images/DSC_6366.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="{{ route('uz.news_pages') }}" class="href_arrow">Читатть <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-md-6 col-12">
                    <div class="card hvr-float m-auto" style="width: 18rem;">
                        <img loading="lazy" class="card-img-top shadow" src="{{ asset('images/DSC_6366.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="{{ route('uz.news_pages') }}" class="href_arrow">Читатть <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-md-6 col-12">
                    <div class="card hvr-float m-auto" style="width: 18rem;">
                        <img loading="lazy" class="card-img-top shadow" src="{{ asset('images/DSC_6366.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="{{ route('uz.news_pages') }}" class="href_arrow">Читатть <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-md-6 col-12">
                    <div class="card hvr-float m-auto" style="width: 18rem;">
                        <img loading="lazy" class="card-img-top shadow" src="{{ asset('images/DSC_6366.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="{{ route('uz.news_pages') }}" class="href_arrow">Читатть <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-md-6 col-12">
                    <div class="card hvr-float m-auto" style="width: 18rem;">
                        <img loading="lazy" class="card-img-top shadow" src="{{ asset('images/DSC_6366.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="{{ route('uz.news_pages') }}" class="href_arrow">Читатть <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-md-6 col-12">
                    <div class="card hvr-float m-auto" style="width: 18rem;">
                        <img loading="lazy" class="card-img-top shadow" src="{{ asset('images/DSC_6366.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="{{ route('uz.news_pages') }}" class="href_arrow">Читатть <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-md-6 col-12">
                    <div class="card hvr-float m-auto" style="width: 18rem;">
                        <img loading="lazy" class="card-img-top shadow" src="{{ asset('images/DSC_6366.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="{{ route('uz.news_pages') }}" class="href_arrow">Читатть <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-md-6 col-12">
                    <div class="card hvr-float m-auto" style="width: 18rem;">
                        <img loading="lazy" class="card-img-top shadow" src="{{ asset('images/DSC_6366.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="{{ route('uz.news_pages') }}" class="href_arrow">Читатть <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-md-6 col-12">
                    <div class="card hvr-float m-auto" style="width: 18rem;">
                        <img loading="lazy" class="card-img-top shadow" src="{{ asset('images/DSC_6366.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="{{ route('uz.news_pages') }}" class="href_arrow">Читатть <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-md-6 col-12">
                    <div class="card hvr-float m-auto" style="width: 18rem;">
                        <img loading="lazy" class="card-img-top shadow" src="{{ asset('images/DSC_6366.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="{{ route('uz.news_pages') }}" class="href_arrow">Читатть <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-md-6 col-12">
                    <div class="card hvr-float m-auto" style="width: 18rem;">
                        <img loading="lazy" class="card-img-top shadow" src="{{ asset('images/DSC_6366.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="{{ route('uz.news_pages') }}" class="href_arrow">Читатть <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-md-6 col-12">
                    <div class="card hvr-float m-auto" style="width: 18rem;">
                        <img loading="lazy" class="card-img-top shadow" src="{{ asset('images/DSC_6366.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="{{ route('uz.news_pages') }}" class="href_arrow">Читатть <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
