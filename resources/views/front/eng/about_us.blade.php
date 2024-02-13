@extends('front.eng.main')

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.core.min.css">
<style>
    .btn-toggle[aria-expanded="true"]::before {
        transform: rotate(90deg);
    }

    .btn-toggle::before {
        margin-right: 15px;
        width: 1.25em;
        line-height: 0;
        content: url(images/chevron-right.svg);
        transition: transform .35s ease;
        transform-origin: 0.5em 50%;
    }
    .btn:hover, .btn:active{
        background-color: #F5F4FF;
        border: 1px solid #F5F4FF;
    }

    .btn-toggle-nav{
        background-color: #F5F4FF;
    }

    [type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled), button:not(:disabled){
        background-color: #F5F4FF;
        color: #333;
    }
    #navbar-bg{
        width: 100%;
        background-color: #F5F4FF;
    }
    #navbar-bg > .nav-link{
        color: #333;
    }
    .nav-item > .nav-link{
        color: #333;
    }
    #lang_btn, #btn{
        border: 2px solid #333!important;
        color: #333;
        font-weight: 700;
        background-color: #fff;
    }
    .carousel-inner{
        max-width: 100%;
    }
    .carousel{
        padding: 0;
        min-height: 55vh;
    }
    .most-inner {
        margin-top: 2vh;
        left: 0;
    }

    .tabcontent{
        background-color: #F5F4FF;
    }
    #scrolling {
        background-color: white;
        position: relative;
        overflow: hidden;
    }
    #scrolling:before, #scrolling:after {
        content: '';
        display: block;
        background-color: #fff;
        width: 100%;
        height: 75px;
        position: absolute;
        z-index: 99;
    }
    #scrolling:before {
        border-radius: 0% 0% 50% 50% / 0% 0% 100% 100%;
        top: 0;
    }
    #scrolling:after {
        border-radius: 50% 50% 0% 0%  / 100% 100% 0% 0% ;
        bottom: 15px;
    }

    .image-gallery {
        display: flex;
        flex-direction: column;
    }

    .image-gallery .column {
        display: flex;
        flex-direction: column;
    }

    .image-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    @media only screen and (max-width: 600px) {
        .image-gallery {
            flex-direction: row;
        }
        h1.about_h1{
        font-size: 22px;
        }
        p.about_p{
            width: 100%;
            margin: 0px;
        }
        .glide{
            display: none;
        }
        div.position-relative{
            margin: 0 50px;
        }
        div.back > div.col-md-7{
            display: none;
        }
    }

    .nav-item a.border-white{
        border-color: #333!important;
        color: #333!important;
    }
    .dropdown button.border-white{
        border-color: #333!important;
    }
    .sticky-top{
        top: 75px;
    }

    span.position-absolute span.fw-bold, span#ob{
        text-shadow: -2px 2px 9px black;
    }

    #header{
        padding-top: 230px;
        text-align: center;
        width: 65%;
        margin: auto;
    }


</style>
@endsection

@section('content')
        <div id="header" class="container">
            <p class="text-success text-center"><span><a class="text-success text-decoration-none fw-bold" href="{{ route('eng.index') }}">Home</a></span> | <a class="text-success text-decoration-none" href="{{ route('eng.about_us') }}">About company</a></p>
            <h1 class="about_h1 fw-bold text-center">Our main goal —  to give young people deep knowledge in IT, and thus to contribute to the development of Uzbekistan.</h1>
            <p class="about_p text-center">Every student coming to Astrum IT Academy will get 24/7 technological campus, innovative learning system and comfort. And those who successfully finish the course get QWASAR certificate, which allows them to work in the Silicon Valley of America.</p>
        </div>

    <div class="glide">
        <div id="scrolling">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <li class="glide__slide"><img loading="lazy"  src="{{ asset('images/about/1.jpg') }}" alt="image"></li>
                    <li class="glide__slide"><img loading="lazy"  src="{{ asset('images/about/2.jpg') }}" alt="image"></li>
                    <li class="glide__slide"><img loading="lazy"  src="{{ asset('images/about/3.jpg') }}" alt="image"></li>
                    <li class="glide__slide"><img loading="lazy"  src="{{ asset('images/about/4.jpg') }}" alt="image"></li>
                    <li class="glide__slide"><img loading="lazy"  src="{{ asset('images/about/5.jpg') }}" alt="image"></li>
                    <li class="glide__slide"><img loading="lazy"  src="{{ asset('images/about/6.jpg') }}" alt="image"></li>
                    <li class="glide__slide"><img loading="lazy"  src="{{ asset('images/about/7.jpg') }}" alt="image"></li>
                    <li class="glide__slide"><img loading="lazy"  src="{{ asset('images/about/8.jpg') }}" alt="image"></li>
                    <li class="glide__slide"><img loading="lazy"  src="{{ asset('images/about/9.jpg') }}" alt="image"></li>
                    <li class="glide__slide"><img loading="lazy"  src="{{ asset('images/about/10.jpg') }}" alt="image"></li>
                </ul>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <nav id="navbar-bg" class="navbar sticky-top rounded p-4 w-75" style="font-size: 10px;">
                        <ul class ="nav navbar-nav w-100">
                            <li>
                                About Company
                            </li>
                            <hr>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#about_us">View</a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#courses">Curriculum</a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#mentors">Mentors</a>
                            </li>
                            <li class ="nav-item">
                                <a class ="nav-link fw-bold" href="#courses_room">Astrum Team</a>
                            </li>
                            <br>
                            @include('front.eng.component.registerLid')
                            {{-- <a href="{{ route('eng.register') }}" type="button" class="btn btn-danger bg-dark p-2 text-white" style="font-size: 10px;">Register Now</a> --}}
                        </ul>
                    </nav>
                </div>
                <div class="col-md-8">
                    <div id="about_us">
                        <div>
                            <h1 class="fw-bold">About company</h1> <br>
                            <p>Astrum IT Academy is the first and only IT Academy not only in Uzbekistan, but also in Central Asia, the company is a leader in training and education in the field of programming.</p>
                            <p>Astrum IT Academy is located in Central Chirchik district of Tashkent region, and the presence of fresh air and wonderful atmosphere further promotes getting high quality education. </p>
                            <p>At the moment the company has about 100 employees. About 1000 students take courses in programming, cyber security and 3DMax.</p>
                            <p>Another advantage of Astrum IT Academy is that Astrum's academic building is open to students 24/7, and the Academy grounds are guarded round-the-clock. You don't have to have a personal computer to study at Astrum, Mac Valley has about a thousand iMac computers that you can use anytime you want.</p>
                        </div>
                        <img loading="lazy"  src="{{ asset('images/DSC03587.JPG') }}" class="w-100 rounded mt-4 shadow" alt="image">
                    </div>

                    <div id="mentors">
                        <h1 class="fw-bold mt-5">Our Mentors</h1>
                        <p class="mt-3">Astrum IT Academy employs young mentors who have good knowledge. After the student has gone through the lessons with the help of the innovative educational platform, he can contact the mentors if there are any additional questions where they do not understand something. Our mentors are always ready to help every student. </p>

                        <div class="row">
                            <div class="col-md-4 mt-4">
                                <div class="position-relative">
                                    <img loading="lazy"  src="{{ asset('images/mentors/bogdan.jpg') }}" class="rounded w-100" alt="image">
                                    <span class="position-absolute top-0 start-0 border border-dark rounded text-white bg-dark p-2 ps-3 pe-3 m-2">Head of Learning Department</span>
                                    <span class="position-absolute bottom-0 start-0 p-3 text-white"><span class="fw-bold">Azimjanov Bogdan</span> <br><span id="ob">Head of Learning Department</span> <hr class="w-25 m-0" style="border: 2px solid #62BC9E;"></span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <div class="position-relative">
                                    <img loading="lazy"  src="{{ asset('images/mentors/sarvar.jpg') }}" class="rounded w-100" alt="image">
                                    <span class="position-absolute top-0 start-0 border border-dark rounded text-white bg-dark p-2 ps-3 pe-3 m-2">Lead Mentor</span>
                                    <span class="position-absolute bottom-0 start-0 p-3 text-white"><span class="fw-bold">Ozodov Saravar</span> <br><span id="ob">Software Engineer</span> <hr class="w-25 m-0" style="border: 2px solid #62BC9E;"></span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <div class="position-relative">
                                    <img loading="lazy"  src="{{ asset('images/mentors/komil.jpg') }}" class="rounded w-100" alt="image">
                                    <span class="position-absolute top-0 start-0 border border-dark rounded text-white bg-dark p-2 ps-3 pe-3 m-2">Main mentor</span>
                                    <span class="position-absolute bottom-0 start-0 p-3 text-white"><span class="fw-bold">Xamidjanov Komiljon</span> <br><span id="ob">Data Science</span> <hr class="w-25 m-0" style="border: 2px solid #62BC9E;"></span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <div class="position-relative">
                                    <img loading="lazy"  src="{{ asset('images/mentors/sarvar_sh.jpg') }}" class="rounded w-100" alt="image">
                                    <span class="position-absolute top-0 start-0 border border-dark rounded text-white bg-dark p-2 ps-3 pe-3 m-2">Mentor</span>
                                    <span class="position-absolute bottom-0 start-0 p-3 text-white"><span class="fw-bold">Shomurodov Sarvar</span> <br><span id="ob">Full Stack Developer</span> <hr class="w-25 m-0" style="border: 2px solid #62BC9E;"></span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <div class="position-relative">
                                    <img loading="lazy"  src="{{ asset('images/mentors/aziza.jpg') }}" class="rounded w-100" alt="image">
                                    <span class="position-absolute top-0 start-0 border border-dark rounded text-white bg-dark p-2 ps-3 pe-3 m-2">Mentor</span>
                                    <span class="position-absolute bottom-0 start-0 p-3 text-white"><span class="fw-bold">Azizova Aziza</span> <br><span id="ob">Full Stack Developer</span> <hr class="w-25 m-0" style="border: 2px solid #62BC9E;"></span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <div class="position-relative">
                                    <img loading="lazy"  src="{{ asset('images/mentors/nodira.jpg') }}" class="rounded w-100" alt="image">
                                    <span class="position-absolute top-0 start-0 border border-dark rounded text-white bg-dark p-2 ps-3 pe-3 m-2">Mentor</span>
                                    <span class="position-absolute bottom-0 start-0 p-3 text-white"><span class="fw-bold">Arslonova Nodira</span> <br><span id="ob">Data Science</span> <hr class="w-25 m-0" style="border: 2px solid #62BC9E;"></span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <div class="position-relative">
                                    <img loading="lazy"  src="{{ asset('images/mentors/asal.jpg') }}" class="rounded w-100" alt="image">
                                    <span class="position-absolute top-0 start-0 border border-dark rounded text-white bg-dark p-2 ps-3 pe-3 m-2">Mentor</span>
                                    <span class="position-absolute bottom-0 start-0 p-3 text-white"><span class="fw-bold">Alimbayeva Asal</span> <br><span id="ob">Data Science</span> <hr class="w-25 m-0" style="border: 2px solid #62BC9E;"></span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <div class="position-relative">
                                    <img loading="lazy"  src="{{ asset('images/mentors/berdiyor.jpg') }}" class="rounded w-100" alt="image">
                                    <span class="position-absolute top-0 start-0 border border-dark rounded text-white bg-dark p-2 ps-3 pe-3 m-2">Mentor</span>
                                    <span class="position-absolute bottom-0 start-0 p-3 text-white"><span class="fw-bold">Holmatov Berdiyor</span> <br><span id="ob">Software Engineer</span> <hr class="w-25 m-0" style="border: 2px solid #62BC9E;"></span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <div class="position-relative">
                                    <img loading="lazy"  src="{{ asset('images/mentors/aziz.jpg') }}" class="rounded w-100" alt="image">
                                    <span class="position-absolute top-0 start-0 border border-dark rounded text-white bg-dark p-2 ps-3 pe-3 m-2">Mentor</span>
                                    <span class="position-absolute bottom-0 start-0 p-3 text-white"><span class="fw-bold">Abdulaziz Orifjonov</span> <br><span id="ob">Data Science</span> <hr class="w-25 m-0" style="border: 2px solid #62BC9E;"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="courses_room">
                        <h1 class="fw-bold mt-5">AstroCoin system</h1>
                        <p>Astrum IT Academy has introduced the AstroCoin system to stimulate students and increase their interest in learning. In doing so, students can earn special AstroCoins by participating in social life, educational processes and various events of Astrum IT Academy, as well as by purchasing various valuable gifts on the market using these coins.</p>
                    </div>
                    <hr>
                    <div id="courses_room">
                        <h1 class="fw-bold mt-5">The purpose of Astrum IT Academy</h1>
                        <p>The only objective of Astrum IT Academy is development of IT-sphere in Uzbekistan, satisfaction of demand for IT-specialists and provision of quality education for young people of our country and making them owners of modern professions. In this regard, our President Sh. Mirziyoyev also repeatedly noted this during his visit to Astrum IT Academy.</p>
                        <br>
                        <p>Astrum IT Academy makes it a priority to expand its branches, open modern IT academies in all regions, and provide quality education to young people.</p>
                        <br>
                        <img loading="lazy"  src="{{ asset('images/astrum_staff.jpg') }}" class="w-100 rounded shadow mb-5" alt="">
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

@endsection
@section('js')
	{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/glide.min.js"></script>
	<script>
        var glide = new Glide('.glide', {
            type: 'carousel',
            perView: 5
        })

        glide.mount()
    </script>
@endsection
