@extends('front.eng.main')
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
            <p class="text-white"><span class="fw-bold"><a href="{{ route('eng.index') }}" class="text-decoration-none text-white">HOME</a></span> | <a href="{{ route('eng.courses') }}" class="text-decoration-none text-white">EDUCATION AND COURSES</a></p>
            <h1 class="font_size text-white">Improve your knowledge and change your life</h1>
            <p class="text-white">Our courses will help you master the IT-sphere with practice.</p>
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
                            <p class="card-text">This is a specialist who must <br> understand the entire <br> set of technologies and <br> components used in the project, <br> both Front-end and Back-end.</p>
                            
                            <hr class="w-25 border border-success border-2">
                            <a href="{{ route('eng.fullstack') }}" class="btn btn-outline-success p-3 rounded">More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="card hvr-float m-auto">
                        <img class="card-img-top" src="{{ asset('images/courses/2.png')}}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">Data Science</h4>
                            <p class="card-text">Our Data Science course takes 8 to 12 months to complete. During this time, you will learn the secrets of programming with students just like you. You will also learn how to build functional websites and programs in these classes.</p>
                            
                            <hr class="w-25 border border-success border-2">
                            <a href="{{ route('eng.data_science') }}" class="btn btn-outline-success p-3 rounded">More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="card hvr-float m-auto">
                        <img class="card-img-top" src="{{ asset('images/courses/3.png')}}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">Software Engineering</h4>
                            <p class="card-text">Software Engineer works on creating programs and applications and running them. Its main function is to create optimized <br> applications that can be updated <br> and extended.</p>
                            
                            <hr class="w-25 border border-success border-2">
                            <a href="{{ route('eng.software_engineering') }}" class="btn btn-outline-success p-3 rounded">More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
