@extends('front.uz.main')
@section('content')

    <section>
        <img loading="lazy" src="{{ asset('images/layout/3.jpg') }}" class="w-100" alt="image">
    </section>

    <section class="mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto">
                    <h1>Pre-season kursi nimalardan iborat?</h1>
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
                            <p>1 - oyda siz dasturlash asoslarini o'rganasiz va har bir yo’nalish tog’risida ma’lumotga ega bo'lasiz. Bu vaqtda siz yanada qiyinroq yuklama bo‘yicha davom ettira olishingiz yoki yo‘qligi aniqlanadi.</p>
                            <p>Agar siz test sinovidan muvaffaqiyatli o‘tsangiz, tanlagan yo‘nalishingiz bo‘yicha asosiy kursga yozilasiz. Shuningdek, siz ingliz tili va matematikadan ham o'z bilimlaringizni oshirib borishingiz mumkin.</p>
                            <p>Pre-season 7 kurslariga hoziroq ro'yxatdan o'tish uchun biz bilan bog'laning.</p>
                            <p>📞 (71) 202-42-22</p>
                            <p>
                                <span class="fw-bold">Pre-Season 7</span> <br>
                                ✔️ Davomiyligi: 1oy <br>
                                ✔️ Dasturlash asoslari <br>
                                ✔️ Dastrur, talabaning bilimini tekshiradi <br>
                                ✔️ Sun'iy intellekt to'gri o'quv dasturini tanlaydi <br>
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-3">
                    <nav id="navbar-bg" class="navbar sticky-top rounded ps-4 pe-4 w-100">
                        <ul class ="nav navbar-nav w-100">
                            <li class="text-center bg-light p-3 rounded">
                                Kurslar
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
