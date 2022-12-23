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


    <div class="img-fon position-relative">
        <img id="img-fon" class="img-fluid" src="{{ asset('images/AST04894.jpg') }}" alt="image">
        <div class="container position-absolute top-50 start-50 translate-middle">
            <p class="text-white"><span class="fw-bold"><a href="{{ route('uz.index') }}" class="text-decoration-none text-white">BOSH SAHIFA</a></span> | <a href="{{ route('uz.courses') }}" class="text-decoration-none text-white">KURSLAR VA TA'LIM</a></p>
            <h1 class="font_size text-white">O'zingizni bilim darajangizni oshiring va hayotingizni o'zgartiring</h1>
            <p class="text-white">Bizning kurslarimiz sizga IT sohasini tajriba orqali o'rganishingizda yordam beradi.</p>
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
                            <p class="card-text">Bu loyihada ishlatiladigan texnologiyalar va komponentlarning butun to'plamini Front-end tomonidan ham Bac-kend tomonidan ham tushunishi kerak bo'lgan mutaxassis.</p>
                            
                            <hr class="w-25 border border-success border-2">
                            <a href="{{ route('uz.fullstack') }}" class="btn btn-outline-success p-3 rounded">Batafsil bilish</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="card hvr-float m-auto">
                        <img class="card-img-top" src="{{ asset('images/courses/2.png')}}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">Data Science</h4>
                            <p class="card-text">Ma'lumotlar bo'yicha mutaxassis, <br> biznes yoki kundalik qaror qabul qilishga yordam beradigan ma'lumotlarga asoslangan modellarni yaratadi.</p>
                            
                            <hr class="w-25 border border-success border-2">
                            <a href="{{ route('uz.data_science') }}" class="btn btn-outline-success p-3 rounded">Batafsil bilish</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="card hvr-float m-auto">
                        <img class="card-img-top" src="{{ asset('images/courses/3.png')}}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">Software Engineering</h4>
                            <p class="card-text">Software Engineer dasturlar va prilojeniyalar yaratish ustida ishlaydi va ularni ishga tushuradi. Uning asosiy vazifasi yangilanishi va kengaytirilishi mumkin bo'lgan optimallashtirilgan dasturlarni yaratishdir.</p>
                            <hr class="w-25 border border-success border-2">
                            <a href="{{ route('uz.software_engineering') }}" class="btn btn-outline-success p-3 rounded">Batafsil bilish</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="call_back pt-5 mt-5">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <h1 class="text-center">Sorovnoma yuborish</h1>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <script data-b24-form="inline/107/cvf8d7" data-skip-moving="true">
                            (function(w,d,u){
                            var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/180000|0);
                            var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
                            })(window,document,'https://office.astrum.uz/upload/crm/form/loader_107_cvf8d7.js');
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
