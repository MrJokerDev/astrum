@extends('front.eng.main')

@section('style')
<style>

    #btn {
        font-weight: 700;
    }
    .nav-item a:hover{
        color: rgba(40, 156, 40, 0.521);
        font-weight: 700;
    }
    .carousel-inner .carousel-item img{
        width: 100%;
        max-width: 100%;
        height: 100%;
        max-height: 100%;
        border-radius: 0px;
        transition: transform 0s;

    }

    .carousel-inner .carousel-item img:hover{
        transform: scale(0);
        transform: translateY(0px);
    }
    .slide{
        padding: 0rem 0!important;
        min-height: 0vh;
    }
    .carousel-caption .h1{
        width: 50%;
        margin: auto;
        text-shadow: 4px 2px 6px black;
    }
</style>
@endsection

@section('content')

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img loading="lazy"  src="{{ asset('images/layout/Glavniy_2.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="text-home ms-0 text-start w-50 pb-5">Astrum IT Academy offers you a great opportunity. Welcome we have ongoing admission processes in Pre Season 15.</h1>
                        <h1 class="ms-0 text-start mb-5 pb-5">
                            <a href="{{ route('eng.news_pages') }}" class="btn btn-success p-3">More...</a>
                        </h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img loading="lazy"  src="{{ asset('images/layout/Glavniy.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="h1">The first IT Academy in Uzbekistan with an innovative learning system</h1>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
    </div>

    <section class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-5">
                    <p style="color: rgba(40, 156, 40, 0.521);" class="fw-bold">About Us</p>
                    <h1 class="fw-bold">Learning system controlled by Artificial Intelligence and a modern atmosphere are the keys to your success.</h1> <br>
                    <p class="fw-semibold">Astrum IT Academy — is the first and largest IT Academy not only in Uzbekistan, but also in Central Asia, where the innovative method of training using artificial intelligence is implemented.</p>
                    <p class="fw-semibold">Modern technologies, 24/7 training campus, around one thousand iMacs and comfortable conditions allow you to grow into a real programmer.</p>
                    <a id="btn" href="{{ route('eng.about_us') }}" class="btn btn-outline-success p-3 rounded">More</a>
                </div>
                <div class="col-md-12 col-lg-7">
                    <h1 class="about_us">About us</h1>
                    <div class="img">
                        <div class="img_1">
                            <img loading="lazy"  class="w-100 shadow bg-white rounded" src="{{ asset('images/layout/12.jpg') }}" alt="images">
                        </div>
                        <div class="img_2">
                            <img loading="lazy"  class="w-100 shadow bg-white rounded" src="{{ asset('images/layout/gallery/2.jpg')}}" alt="images">
                        </div>
                    </div>
                    <div class="w-100 text-end">
                        <a href="{{ route('eng.gallery') }}" class="href_arrow">Foto <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5 mt-5">
        <div class="container pt-5 mt-5">
            <div class="row justify-content-end">
                <div class="col-sm-12 col-md-9 col-xl-7">
                    <div class="border shadow bg-white rounded p-4 fw-semibold">
                      <p>Astrum IT Academy is located in nature, and the fresh air and quiet atmosphere will help you learn IT well without unnecessary distractions. The academy territory is guarded 24 hours a day and the training campus is open 24/7. You can come in at your convenience and continue your courses whenever you want.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid">
        <div class="astrum_img">
            <img loading="lazy"  src="{{ asset('images/astrum_foto.png')}}" alt="">
        </div>
    </section>

    <section class="carousel">
        <div class="carusel-top">
            <div class="carousel-inner">
                    <div class="most-inner">
                        <img loading="lazy"  src="{{ asset('images/layout/gallery/1.jpg')}}">
                        <img loading="lazy"  src="{{ asset('images/layout/gallery/2.jpg')}}">
                        <img loading="lazy"  src="{{ asset('images/layout/gallery/5.jpg')}}">
                        <img loading="lazy"  src="{{ asset('images/layout/gallery/4.jpg')}}">
                        <img loading="lazy"  src="{{ asset('images/layout/gallery/3.jpg')}}">
                        <img loading="lazy"  src="{{ asset('images/layout/gallery/6.jpg')}}">
                        <img loading="lazy"  src="{{ asset('images/layout/gallery/7.jpg')}}">
                        <img loading="lazy"  src="{{ asset('images/layout/gallery/8.jpg')}}">
                        <img loading="lazy"  src="{{ asset('images/layout/gallery/9.jpg')}}">
                        <img loading="lazy"  src="{{ asset('images/layout/gallery/10.jpg')}}">
                    </div>
            </div>
        </div>
    </section>

    <section class="section-fon">
        <div class="container align-items-center pt-5 mt-5">
            <p style="color: rgba(40, 156, 40, 0.521);" class="fw-bold">Education and courses</p>
            <h1 id="courses_rek" class="text-white">Study IT-sphere at Astrum IT Academy and change your life for the better</h1>
            <p id="courses_rek_p" class="text-white pt-4 fs-5">With the help of artificial intelligence programming courses in our academy are systematized in such a way that by the time you graduate you will have enough knowledge and a good portfolio.</p>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row mt-5 mb-5">
                @include('components.courses')
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div>
                <p style="color: rgba(40, 156, 40, 0.521);" class="fw-bold">COURSES AND EDUCATION</p>
                <h1 class="fw-bold mb-5">Why do most people choose Astrum IT Academy?</h1>
            </div>
            <div class="row mb-5">
                <div class="col-md-6 col-xl-4 col-xxl-4 mb-5">
                    <p class="border-start border-dark border-4 ps-3 text-muted fw-bolder">High atmosphere</p>
                    <p>Astrum academic building houses Mac Valley, with over a thousand iMacs presented. You can use them whenever you want.</p>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-4 mb-5">
                    <p class="border-start border-dark border-4 ps-3 text-muted fw-bolder">Innovative education system</p>
                    <p>There are no teachers at Astrum. Classes are taught by means of artificial intelligence. You have to attend classes on the platform and upload your homework. And questions are answered by our professional mentors</p>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-4 mb-5">
                    <p class="border-start border-dark border-4 ps-3 text-muted fw-bolder">QWASAR Certificate</p>
                    <p>At the end of your studies, you will receive a QWASAR certificate, which allows you to work in America's Silicon Valley. This certificate allows you to work in prestigious companies in Europe and America.</p>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-4 mb-5">
                    <p class="border-start border-dark border-4 ps-3 text-muted fw-bolder">24/7 security system</p>
                    <p>Astrum IT Academy has full security measures in place and the campus is guarded 24/7. This gives our students the opportunity to attend Astrum and continue their studies at any time.</p>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-4 mb-5">
                    <p class="border-start border-dark border-4 ps-3 text-muted fw-bolder">Comfortable conditions created</p>
                    <p>There are athletic fields, recreation rooms, rooms with all amenities, a chill zone, and a large courtyard where you can relax.</p>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-4 mb-5">
                    <p class="border-start border-dark border-4 ps-3 text-muted fw-bolder">Opportunity to complete classes more quickly</p>
                    <p>Because the lessons will be taught by artificial intelligence, you will be able to review the lessons faster and complete the curriculum faster, joining the ranks of TOP programmers.</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <img loading="lazy"  src="{{ asset('images/astrum_staff.jpg')}}" class="w-100 rounded shadow" alt="image">
        </div>
    </section>

    <section id="mentors" class="pt-5">
        <div class="container">
            <p style="color: rgba(40, 156, 40, 0.521);" class="fw-bold text-center">Our mentors</p>
            <h1 id="courses_rek" class="text-center fw-bold">At Astrum IT Academy, the strongest mentors with extensive experience will help you get a quality education and master the field</h1>
            <p id="courses_rek_p" class="text-center mb-5">Mentor — the person who answers your questions.</p>
            <div class="row">
                <div class="col-sm-12 col-xl-3 col-xxl-3 col-lg-4 col-md-6 mt-5">
                    <div class="profile-card">
                        <div class="profile-img">
                            <img loading="lazy"  src="{{ asset('images/mentors/aziza.jpg') }}" alt="Team Image"/>
                        </div>
                        <div class="profile-content">
                            <h2 class="title">Azizova Aziza
                                <span>React.js Frontend Developer</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-3 col-xxl-3 col-lg-4 col-md-6 mt-5">
                    <div class="profile-card">
                        <div class="profile-img">
                            <img loading="lazy"  src="{{ asset('images/mentors/sarvar.jpg') }}" alt="Team Image"/>
                        </div>
                        <div class="profile-content">
                            <h2 class="title">Ozodov Saravar
                                <span>C# .Net Backend Developer</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-3 col-xxl-3 col-lg-4 col-md-6 mt-5">
                    <div class="profile-card">
                        <div class="profile-img">
                            <img loading="lazy"  src="{{ asset('images/mentors/baxtibek.jpg') }}" alt="Team Image"/>
                        </div>
                        <div class="profile-content">
                            <h2 class="title">Anvarov Baxtibek
                                <span>Node.js Backend Developer</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-3 col-xxl-3 col-lg-4 col-md-6 mt-5">
                    <div class="profile-card">
                        <div class="profile-img">
                            <img loading="lazy"  src="{{ asset('images/mentors/sarvar_sh.jpg') }}" alt="Team Image"/>
                        </div>
                        <div class="profile-content">
                            <h2 class="title">Shomurodov Sarvar
                                <span>PHP Laravel Backend Developer</span>
                            </h2>
                        </div>
                    </div>
                </div>

            </div>
            <a href="{{ route('eng.about_us') }}" id="btn" class="btn btn-outline-success p-3 mt-5 rounded">Our team</a>
        </div>
    </section>

    <section>
        <div class="container">
            <h1 class="fw-bold">Astrum IT Academy's own values and goals give us an advantage in quality, not quantity of students.</h1>
            <div class="row pt-5">
                <div class="col-md-6 col-sm-6 col-lg-6 mb-5">
                    <p class="border-start border-dark border-4 ps-3 fs-2 fw-bold">Listening to students</p>
                    <p>We always listen to objections and complaints from students and find solutions together.</p>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 mb-5">
                    <p class="border-start border-dark border-4 ps-3 fs-2 fw-bold">Learning and sports in harmony</p>
                    <p>With the help of the sports grounds organized in our academy, our students study and play sports at the same time.</p>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 mb-5">
                    <p class="border-start border-dark border-4 ps-3 fs-2 fw-bold">Speed and modernity</p>
                    <p>Taking into consideration the high speed of development of the modern IT sphere, we advocate the use of the most modern and fastest learning system.</p>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 mb-5">
                    <p class="border-start border-dark border-4 ps-3 fs-2 fw-bold">Education and Experience</p>
                    <p>A modern training system and the opportunity to participate in real projects during training are available only at Astrum. We share not only knowledge, but also experience.</p>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 mb-5">
                    <p class="border-start border-dark border-4 ps-3 fs-2 fw-bold">Our mentors</p>
                    <p>Astrum IT Academy employs young mentors who have good knowledge. After the student has completed the courses with the help of the innovative educational platform, he can contact the mentors if there are any additional questions where they do not understand something. Our mentors are always ready to help each student.</p>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 mb-5">
                    <p class="border-start border-dark border-4 ps-3 fs-2 fw-bold">AstroCoin System</p>
                    <p>Astrum IT Academy has introduced the AstroCoin system to stimulate students and increase their interest in learning. In doing so, students can earn special AstroCoins by participating in social life, educational processes and various Astrum IT Academy events, as well as by purchasing various valuable gifts on the market using these coins.</p>
                </div>
            </div>
        </div>
    </section>

@endsection

