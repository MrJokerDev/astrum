@extends('front.ru.main')
@section('content')

    <section>
        <img loading="lazy" src="{{ asset('images/layout/3.jpg') }}" class="w-100" alt="image">
    </section>

    <section class="mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto">
                    <h1>Из чего состоит курс Pre-Season?</h1>
                    <hr style="border: 2px solid #9747FF;" class="mt-4 mb-4">
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <div>
                        <img loading="lazy" src="{{ asset('images/DSC_6349.jpg') }}" class="w-100 rounded" alt="image">
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-8 ms-auto">
                            <p>В 1-й месяц вы изучите основы программирования и получите знания по каждому направлению. На этом этапе будет определено, сможете ли вы продолжить работу с более сложной нагрузкой.</p>
                            <p>Если вы успешно сдадите тест, вы будете зачислены на основной курс в выбранной вами области. Вы также можете улучшить свои знания английского языка и математики.</p>
                            <p>Свяжитесь с нами, чтобы зарегистрироваться на курсы Pre-season 7 прямо сейчас</p>
                            <p>📞 (71) 202-42-22</p>
                            <p>
                                <span class="fw-bold">Pre-Season 7</span> <br>
                                ✔️ Продолжительность: 1 месяцев <br>
                                ✔️ Основы программирования <br>
                                ✔️ Программа, проверяет знания студента <br>
                                ✔️ Искусственный интеллект выбирает правильную программу обучения <br>
                            </p>
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
                                <a class ="d-flex text-dark fw-bold text-decoration-none" href="{{ route('uz.fullstack') }}">
                                    <img loading="lazy" src="{{ asset('images/courses/1.png') }}" class="w-50 h-50 rounded me-2" alt="image">
                                    Full stack developer
                                </a>
                            </li>
                            <li class ="nav-item mt-3">
                                <a class ="d-flex text-dark fw-bold text-decoration-none" href="{{ route('uz.software_engineering') }}">
                                    <img loading="lazy" src="{{ asset('images/courses/2.png') }}" class="w-50 h-50 rounded me-2" alt="image">
                                    Software engineerv
                                </a>
                            </li>
                            <li class ="nav-item mt-3 mb-3">
                                <a class ="d-flex text-dark fw-bold text-decoration-none" href="{{ route('uz.data_science') }}">
                                    <img loading="lazy" src="{{ asset('images/courses/3.png') }}" class="w-50 h-50 rounded me-2" alt="image">
                                    Data science
                                </a>
                            </li>

                            {{-- <a href="#" type="button" class="btn btn-danger bg-dark p-3 text-white">Зарегистрируйтесь сейчас</a> --}}
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </section>
@endsection
