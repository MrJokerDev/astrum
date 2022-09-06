@extends('front.eng.main')
@section('style')
<style>
     #btn{
            border: 2px solid #fff;
            color: #fff;
        }
    #btn:hover{
            color: #333;
        }
    #btn_1{
        border: 2px solid black;
        color: #000;
    }
</style>
@endsection
@section('content')

    <header>
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay"  muted="muted" loop="loop"> <!-- autoplay="autoplay" -->
            <source src="{{ asset('images/video/video_1.MP4')}}" type="video/mp4">
        </video>

        <div class="container">
            <div class="row h-100">
                <div class="col-md-7 align-self-end mb-5">
                    <div class="text-white">
                        <p><span class="fw-bold">ГЛАВНАЯ</span> | КУРСЫ И ОБРАЗОВАНИЕ</p>
                        <h1 class="font_size">Измените свою жизнь, повысь свой уровень знаний</h1>
                        <p>Наши курсы разработаты, чтобы помочь Вам учитсия на практике в <br> современных классах и на современном оборудовании. </p>
                    </div>
                </div>
                <div class="col-md-5"></div>
            </div>
        </div>
    </header>

    <section>
        <div class="container">
            <button type="button" class="btn btn-outline-success p-3 border-danger rounded" style="color: #333;">Все направления</button>
            <br><br>
            <button type="button" class="btn btn-outline-success p-3 me-2 border-danger rounded" style="color: #333;">Full Stack</button>
            <button type="button" class="btn btn-outline-success p-3 me-2 border-danger rounded" style="color: #333;">Data Science</button>
            <button type="button" class="btn btn-outline-success p-3 me-2 border-danger rounded" style="color: #333;">Software Engineering</button>
            <div class="row pt-5">
                <div class="col-xl-4 col-xxl-3 col-md-6">
                    <div class="card hvr-float" style="width: 18rem;">
                        <img class="card-img-top shadow" src="{{ asset('{{ asset('images/DSC_6366.jpg')}}')}}" alt="Card image cap">
                        <div class="card-body">
                            <p>Начала курсв - 03/03/2022</p>
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="fs-5">12 месяцув / 450 часов</p>
                            <hr class="w-25 border border-success border-2">
                            <a id="btn_1" href="#" class="btn btn-outline-success p-3 rounded">Узнать больше</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-3 col-md-6">
                    <div class="card hvr-float" style="width: 18rem;">
                        <img class="card-img-top shadow" src="{{ asset('images/DSC_6366.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <p>Начала курсв - 03/03/2022</p>
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="fs-5">12 месяцув / 450 часов</p>
                            <hr class="w-25 border border-success border-2">
                            <a id="btn_1" href="#" class="btn btn-outline-success p-3 rounded">Узнать больше</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-3 col-md-6">
                    <div class="card hvr-float" style="width: 18rem;">
                        <img class="card-img-top shadow" src="{{ asset('images/DSC_6366.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <p>Начала курсв - 03/03/2022</p>
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="fs-5">12 месяцув / 450 часов</p>
                            <hr class="w-25 border border-success border-2">
                            <a id="btn_1" href="#" class="btn btn-outline-success p-3 rounded">Узнать больше</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-3 col-md-6">
                    <div class="card hvr-float" style="width: 18rem;">
                        <img class="card-img-top shadow" src="{{ asset('images/DSC_6366.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <p>Начала курсв - 03/03/2022</p>
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="fs-5">12 месяцув / 450 часов</p>
                            <hr class="w-25 border border-success border-2">
                            <a id="btn_1" href="#" class="btn btn-outline-success p-3 rounded">Узнать больше</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pt-5 pb-5">
                <div class="col-xl-4 col-xxl-3 col-md-6">
                    <div class="card hvr-float" style="width: 18rem;">
                        <img class="card-img-top shadow" src="{{ asset('images/DSC_6366.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <p>Начала курсв - 03/03/2022</p>
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="fs-5">12 месяцув / 450 часов</p>
                            <hr class="w-25 border border-success border-2">
                            <a id="btn_1" href="#" class="btn btn-outline-success p-3 rounded">Узнать больше</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-3 col-md-6">
                    <div class="card hvr-float" style="width: 18rem;">
                        <img class="card-img-top shadow" src="{{ asset('images/DSC_6366.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <p>Начала курсв - 03/03/2022</p>
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="fs-5">12 месяцув / 450 часов</p>
                            <hr class="w-25 border border-success border-2">
                            <a id="btn_1" href="#" class="btn btn-outline-success p-3 rounded">Узнать больше</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-3 col-md-6">
                    <div class="card hvr-float" style="width: 18rem;">
                        <img class="card-img-top shadow" src="{{ asset('images/DSC_6366.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <p>Начала курсв - 03/03/2022</p>
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="fs-5">12 месяцув / 450 часов</p>
                            <hr class="w-25 border border-success border-2">
                            <a id="btn_1" href="#" class="btn btn-outline-success p-3 rounded">Узнать больше</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-3 col-md-6">
                    <div class="card hvr-float" style="width: 18rem;">
                        <img class="card-img-top shadow" src="{{ asset('images/DSC_6366.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <p>Начала курсв - 03/03/2022</p>
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="fs-5">12 месяцув / 450 часов</p>
                            <hr class="w-25 border border-success border-2">
                            <a id="btn_1" href="#" class="btn btn-outline-success p-3 rounded">Узнать больше</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
