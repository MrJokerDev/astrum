@extends('front.ru.main')

@section('style')
    <style>
        #btn{
            border: 2px solid #fff;
            color: #fff;
        }
        #btn:hover{
            color: #333;
        }
        #container {
            display: block;
            position: relative;
            height: 100%;
        }
        .image {
            display: block;
            width: 100%;
            height: auto;
        }
        .overlay {
            display: flex;
            align-items: end;
            position: relative;
            border-radius: 20px;
            padding: 0 30px;
            top: -100%;
            height: 100%;
            width: 100%;
            opacity: 0;
            transition: .5s ease;
            background: linear-gradient(to top, rgb(10 2 2 / 93%), rgb(255 250 250 / 0%))
        }

        .overlay p {
            display: flex;
            align-items: end;
            font-weight: 700;
            font-size: 20px;
            color: #fff;
            border-left: 3px solid green;
            padding: 0 10px;
        }

        #container:hover .overlay {
            opacity: 1;
        }
      h1.text-center .text-white{
        font-size: 60px;
      }
      .ratio img{
        border-radius: 0rem;
        transform: translateY(0px)!important;
      }
      .ratio{
        background-color: transparent!important;
      }
      .carousel-control-prev {
            left: -120px;
        }
    .carousel-control-next {
        right: -120px;
        }
    </style>
@endsection

@section('content')

    <div class="img-fon position-relative">
        <img loading="lazy"  id="img-fon" class="img-fluid" src="{{ asset('images/DSC03587.JPG') }}" alt="image">
        <div class="container position-absolute top-50 start-50 translate-middle">
            <p class="text-center text-white"><span><a class="text-white text-decoration-none fw-bold" href="{{ route('ru.index') }}"> Главная</a></span> | <a class="text-white text-decoration-none" href="{{ route('ru.index') }}">Фото</a></p>
            <h1 class="text-center text-white">Галерея мест и собитий</h1>
        </div>
    </div>

    <section>
        <div class="container">
            <h5 class="fw-bold pb-4 pt-5">ЛОКАЦИИ КОМПЛЕКСА</h5>
            <!-- Gallery -->
            <div class="row pb-5">
                <div class="col-md-8 mt-4">
                    <a href="{{ asset('images/gallery/1_1.jpg') }}" data-toggle="lightbox" data-gallery="example-gallery"style="text-decoration: none;">
                        <div id="container" class="hvr-float">
                            <img loading="lazy" 
                                src="{{ asset('images/gallery/1_1.jpg') }}"
                                class="w-100 h-100 shadow rounded image"
                                alt="Boat on Calm Water"
                            />
                            <div class="overlay">
                                <p>АРХИТЕКТУРА</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 mt-4">
                    <a href="{{ asset('images/gallery/2_1.jpg') }}" data-toggle="lightbox" data-gallery="example-gallery"style="text-decoration: none;">
                        <div id="container" class="hvr-float">
                            <img loading="lazy" 
                                src="{{ asset('images/gallery/2_1.jpg') }}"
                                class="w-100 h-100 shadow rounded image"
                                alt="Boat on Calm Water"
                            />
                            <div class="overlay">
                                <p>АРХИТЕКТУРА</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row pb-5">
                <div class="col-md-6 mt-4">
                    <a href="images/gallery/3_1.jpg" data-toggle="lightbox" data-gallery="example-gallery"style="text-decoration: none;">
                        <div id="container" class="hvr-float">
                            <img loading="lazy" 
                                src="{{ asset('images/gallery/3_4.jpg') }}"
                                class="w-100 h-100 shadow rounded"
                                alt="Boat on Calm Water"
                            />
                            <div class="overlay">
                                <p>АРХИТЕКТУРА</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 mt-4">
                    <a href="{{ asset('images/gallery/3_1.jpg') }}" data-toggle="lightbox" data-gallery="example-gallery"style="text-decoration: none;">
                        <div id="container" class="hvr-float">
                            <img loading="lazy" 
                                src="{{ asset('images/gallery/3_2.jpg') }}"
                                class="w-100 h-100 shadow rounded"
                                alt="Boat on Calm Water"
                            />
                            <div class="overlay">
                                <p>АРХИТЕКТУРА</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row pb-5">
                <div class="col-md-4 mt-4">
                    <a href="{{ asset('images/gallery/2_2.jpg') }}" data-toggle="lightbox" data-gallery="example-gallery"style="text-decoration: none;">
                        <div id="container" class="hvr-float">
                            <img loading="lazy" 
                                src="{{ asset('images/gallery/2_2.jpg') }}"
                                class="w-100 h-100 shadow rounded"
                                alt="Boat on Calm Water"
                            />
                            <div class="overlay">
                                <p>АРХИТЕКТУРА</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 mt-4">
                    <a href="{{ asset('images/gallery/2_3.jpg') }}" data-toggle="lightbox" data-gallery="example-gallery"style="text-decoration: none;">
                        <div id="container" class="hvr-float">
                            <img loading="lazy" 
                                src="{{ asset('images/gallery/2_3.jpg') }}"
                                class="w-100 h-100 shadow rounded"
                                alt="Boat on Calm Water"
                            />
                            <div class="overlay">
                                <p>АРХИТЕКТУРА</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 mt-4">
                    <a href="{{ asset('images/gallery/2_5.jpg') }}" data-toggle="lightbox" data-gallery="example-gallery"style="text-decoration: none;">
                        <div id="container" class="hvr-float">
                            <img loading="lazy" 
                                src="{{ asset('images/gallery/2_5.jpg') }}"
                                class="w-100 h-100 shadow rounded"
                                alt="Boat on Calm Water"
                            />
                            <div class="overlay">
                                <p>АРХИТЕКТУРА</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Gallery -->
        </div>
    </section>

    <section>
        <div class="container">
            <h5 class="fw-bold pb-4">ЛОКАЦИИ КОМПЛЕКСА</h5>
            <!-- Gallery -->
            <div class="row pb-5">
                <div class="col-md-8 mt-4">
                    <a href="{{ asset('images/gallery/1_4.jpg') }}" data-toggle="lightbox" data-gallery="example-gallery"style="text-decoration: none;">
                        <div id="container" class="hvr-float">
                            <img loading="lazy" 
                                src="{{ asset('images/gallery/1_4.jpg') }}"
                                class="w-100 h-100 shadow rounded"
                                alt="Boat on Calm Water"
                            />
                            <div class="overlay">
                                <p>АРХИТЕКТУРА</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 mt-4">
                    <a href="{{ asset('images/gallery/2_6.jpg') }}" data-toggle="lightbox" data-gallery="example-gallery"style="text-decoration: none;">
                        <div id="container" class="hvr-float">
                            <img loading="lazy" 
                                src="{{ asset('images/gallery/2_6.jpg') }}"
                                class="w-100 h-100 shadow rounded"
                                alt="Boat on Calm Water"
                            />
                            <div class="overlay">
                                <p>АРХИТЕКТУРА</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row pb-5">
                <div class="col-md-4 mt-4">
                    <a href="{{ asset('images/gallery/2_7.jpg') }}" data-toggle="lightbox" data-gallery="example-gallery"style="text-decoration: none;">
                        <div id="container" class="hvr-float">
                            <img loading="lazy" 
                                src="{{ asset('images/gallery/2_7.jpg') }}"
                                class="w-100 h-100 shadow rounded"
                                alt="Boat on Calm Water"
                            />
                            <div class="overlay">
                                <p>АРХИТЕКТУРА</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-8 mt-4">
                    <a href="{{ asset('images/gallery/1_2.jpg') }}" data-toggle="lightbox" data-gallery="example-gallery"style="text-decoration: none;">
                        <div id="container" class="hvr-float">
                            <img loading="lazy" 
                                src="{{ asset('images/gallery/1_2.jpg') }}"
                                class="w-100 h-100 shadow rounded"
                                alt="Boat on Calm Water"
                            />
                            <div class="overlay">
                                <p>АРХИТЕКТУРА</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Gallery -->
        </div>
    </section>

    <section>
        <div class="container">
            <h5 class="fw-bold pb-4">ЛОКАЦИИ КОМПЛЕКСА</h5>
            <!-- Gallery -->
            <div class="row pb-5">
                <div class="col-md-4 mt-4">
                    <a href="{{ asset('images/gallery/2_8.jpg') }}" data-toggle="lightbox" data-gallery="example-gallery"style="text-decoration: none;">
                        <div id="container" class="hvr-float">
                            <img loading="lazy" 
                                src="{{ asset('images/gallery/2_8.jpg') }}"
                                class="w-100 h-100 shadow rounded"
                                alt="Boat on Calm Water"
                            />
                            <div class="overlay">
                                <p>АРХИТЕКТУРА</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 mt-4">
                    <a href="{{ asset('images/gallery/2_9.jpg') }}" data-toggle="lightbox" data-gallery="example-gallery"style="text-decoration: none;">
                        <div id="container" class="hvr-float">
                            <img loading="lazy" 
                                src="{{ asset('images/gallery/2_9.jpg') }}"
                                class="w-100 h-100 shadow rounded"
                                alt="Boat on Calm Water"
                            />
                            <div class="overlay">
                                <p>АРХИТЕКТУРА</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 mt-4">
                    <a href="{{ asset('images/gallery/2_4.jpg') }}" data-toggle="lightbox" data-gallery="example-gallery"style="text-decoration: none;">
                        <div id="container" class="hvr-float">
                            <img loading="lazy" 
                                src="{{ asset('images/gallery/2_4.jpg') }}"
                                class="w-100 h-100 shadow rounded"
                                alt="Boat on Calm Water"
                            />
                            <div class="overlay">
                                <p>АРХИТЕКТУРА</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row pb-5">
                <div class="col-md-4 mt-4">
                    <a href="{{ asset('images/gallery/2_10.jpg') }}" data-toggle="lightbox" data-gallery="example-gallery"style="text-decoration: none;">
                        <div id="container" class="hvr-float">
                            <img loading="lazy" 
                                src="{{ asset('images/gallery/2_10.jpg') }}"
                                class="w-100 h-100 shadow rounded"
                                alt="Boat on Calm Water"
                            />
                            <div class="overlay">
                                <p>АРХИТЕКТУРА</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-8 mt-4">
                    <a href="{{ asset('images/gallery/1_3.jpg') }}" data-toggle="lightbox" data-gallery="example-gallery"style="text-decoration: none;">
                        <div id="container" class="hvr-float">
                            <img loading="lazy" 
                                src="{{ asset('images/gallery/1_3.jpg') }}"
                                class="w-100 h-100 shadow rounded"
                                alt="Boat on Calm Water"
                            />
                            <div class="overlay">
                                <p>АРХИТЕКТУРА</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row pb-5">
                <div class="col-md-4 mt-4">
                    <a href="{{ asset('images/DSC_6391.jpg') }}" data-toggle="lightbox" data-gallery="example-gallery"style="text-decoration: none;">
                        <div id="container" class="hvr-float">
                            <img loading="lazy" 
                                src="{{ asset('images/DSC_6391.jpg') }}"
                                class="w-100 h-100 shadow rounded"
                                alt="Boat on Calm Water"
                            />
                            <div class="overlay">
                                <p>АРХИТЕКТУРА</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 mt-4">
                    <a href="{{ asset('images/DSC03614.JPG') }}" data-toggle="lightbox" data-gallery="example-gallery"style="text-decoration: none;">
                        <div id="container" class="hvr-float">
                            <img loading="lazy" 
                                src="{{ asset('images/DSC03614.JPG') }}"
                                class="w-100 h-100 shadow rounded"
                                alt="Boat on Calm Water"
                            />
                            <div class="overlay">
                                <p>АРХИТЕКТУРА</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 mt-4">
                    <a href="{{ asset('images/DSC_6393.jpg') }}" data-toggle="lightbox" data-gallery="example-gallery"style="text-decoration: none;">
                        <div id="container" class="hvr-float">
                            <img loading="lazy" 
                                src="{{ asset('images/DSC_6393.jpg') }}"
                                class="w-100 h-100 shadow rounded"
                                alt="Boat on Calm Water"
                            />
                            <div class="overlay">
                                <p>АРХИТЕКТУРА</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Gallery -->
        </div>
    </section>

@endsection
