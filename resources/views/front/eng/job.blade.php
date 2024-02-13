@extends('front.eng.main')

@section('style')
<style>
    .nav-item a{
        color: #333;
    }
    .card-img-top{
        border-radius: 20px 20px 100px 15px;
    }
    [type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled), button:not(:disabled) {
        cursor: pointer;
        color: #333;
        font-weight: 600;
    }
</style>
@endsection

@section('content')
    <section>
        <div class="container text-center pt-5">
            <p style="color: rgba(40, 156, 40, 0.521);" class="fw-bold " >КАРЬЕРА С ASTRUM</p>
            <h1 class="fw-bold">Лутшие работают у нас. <br> Присоединится!</h1>
            <p class="fw-bolder">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, eaque. <br> Quasi earum error quidem fuga accusamus nostrum quod voluptates tempore?.</p>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <img loading="lazy"  class="w-100 h-100 rounded shadow mt-5" src="{{ asset('images/DSC_6383.jpg') }}" alt="image">
                </div>
                <div class="col">
                    <img loading="lazy"  class="w-100 h-100 rounded shadow" src="{{ asset('images/DSC_6383.jpg') }}" alt="image">
                </div>
                <div class="col">
                    <img loading="lazy"  class="w-100 h-100 rounded shadow mt-5" src="{{ asset('images/DSC_6383.jpg') }}" alt="image">
                </div>
                <div class="col">
                    <img loading="lazy"  class="w-100 h-100 rounded shadow" src="{{ asset('images/DSC_6383.jpg') }}" alt="image">
                </div>
                <div class="col">
                    <img loading="lazy"  class="w-100 h-100 rounded shadow mt-5" src="{{ asset('images/DSC_6383.jpg') }}" alt="image">
                </div>
              </div>
        </div>
    </section>

    <section class="pt-5">
        <div class="container  rounded p-5" style="background-color: #cacbc0;">
            <h4 class="p-5">ВАКАНСИИ</h4>
            <div class="row">
                <div class="col-xl-4 col-xxl-4 col-lg-4 col-md-6 col-sm-6 mt-5">
                    <div class="card mx-auto hvr-float" style="width: 20rem; border-radius: 20px">
                        <img loading="lazy"  class="card-img-top" src="{{ asset('images/DSC_6366.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <p>Начала курсв - 03/03/2022</p>
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="fs-5">6.000.000 сум</p>
                            <hr class="w-25 border border-success border-2">
                            <a href="#" class="btn btn-outline-success p-3 rounded">Узнать больше</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-4 col-lg-4 col-md-6 col-sm-6 mt-5">
                    <div class="card mx-auto hvr-float" style="width: 20rem; border-radius: 20px">
                        <img loading="lazy"  class="card-img-top" src="{{ asset('images/DSC_6366.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <p>Начала курсв - 03/03/2022</p>
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="fs-5">6.000.000 сум</p>
                            <hr class="w-25 border border-success border-2">
                            <a href="#" class="btn btn-outline-success p-3 rounded">Узнать больше</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-4 col-lg-4 col-md-6 col-sm-6 mt-5">
                    <div class="card mx-auto hvr-float" style="width: 20rem; border-radius: 20px">
                        <img loading="lazy"  class="card-img-top" src="{{ asset('images/DSC_6366.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <p>Начала курсв - 03/03/2022</p>
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="fs-5">6.000.000 сум</p>
                            <hr class="w-25 border border-success border-2">
                            <a href="#" class="btn btn-outline-success p-3 rounded">Узнать больше</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-4 col-lg-4 col-md-6 col-sm-6 mt-5">
                    <div class="card mx-auto hvr-float" style="width: 20rem; border-radius: 20px">
                        <img loading="lazy"  class="card-img-top" src="{{ asset('images/DSC_6366.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <p>Начала курсв - 03/03/2022</p>
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="fs-5">6.000.000 сум</p>
                            <hr class="w-25 border border-success border-2">
                            <a href="#" class="btn btn-outline-success p-3 rounded">Узнать больше</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-4 col-lg-4 col-md-6 col-sm-6 mt-5">
                    <div class="card mx-auto hvr-float" style="width: 20rem; border-radius: 20px">
                        <img loading="lazy"  class="card-img-top" src="{{ asset('images/DSC_6366.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <p>Начала курсв - 03/03/2022</p>
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="fs-5">6.000.000 сум</p>
                            <hr class="w-25 border border-success border-2">
                            <a href="#" class="btn btn-outline-success p-3 rounded">Узнать больше</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-4 col-lg-4 col-md-6 col-sm-6 mt-5">
                    <div class="card mx-auto hvr-float" style="width: 20rem; border-radius: 20px">
                        <img loading="lazy"  class="card-img-top" src="{{ asset('images/DSC_6366.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <p>Начала курсв - 03/03/2022</p>
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="fs-5">6.000.000 сум</p>
                            <hr class="w-25 border border-success border-2">
                            <a href="#" class="btn btn-outline-success p-3 rounded">Узнать больше</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
