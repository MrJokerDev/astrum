@extends('front.uz.main')

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
      .navbar{
      	position: absolute;
        z-index: 9999;
      }

    </style>
@endsection

@section('content')

    <div class="img-fon position-relative">
        <img id="img-fon" class="img-fluid" src="{{ asset('images/DSC03587.JPG') }}" alt="image">
        <div class="container position-absolute top-50 start-50 translate-middle">
            <p class="text-center text-white"><span><a class="text-white text-decoration-none fw-bold" href="{{ route('uz.index') }}"> Главная</a></span> | <a class="text-white text-decoration-none" href="{{ route('uz.index') }}">Фото</a></p>
            <h1 class="text-center text-white" style="font-size: 60px;">Галерея мест и собитий</h1>
        </div>
    </div>

    <section>
        <div class="container">
            <h5 class="fw-bold pb-4">ЛОКАЦИИ КОМПЛЕКСА</h5>
            <!-- Gallery -->
            <div class="row pb-5">
                <div class="col-md-8">
                    <a href="{{ asset('images/DSC03614.JPG') }}" style="text-decoration: none;">
                        <div id="container" class="hvr-float">
                            <img
                                src="{{ asset('images/DSC03614.JPG') }}"
                                class="w-100 h-100 shadow rounded image"
                                alt="Boat on Calm Water"
                            />
                            <div class="overlay">
                                <p>АРХИТЕКТУРА</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="{{ asset('images/DSC_6393.JPG') }}" style="text-decoration: none;">
                        <div id="container" class="hvr-float">
                            <img
                                src="{{ asset('images/DSC_6393.jpg') }}"
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
                <div class="col-md-6">
                    <a href="images/DSC03268.JPG" style="text-decoration: none;">
                        <div id="container" class="hvr-float">
                            <img
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

                <div class="col-md-6">
                    <a href="{{ asset('images/DSC03614.JPG') }}" style="text-decoration: none;">
                        <div id="container" class="hvr-float">
                            <img
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
            </div>

            <div class="row pb-5">
                <div class="col-md-4">
                    <a href="{{ asset('images/DSC03614.JPG') }}" style="text-decoration: none;">
                        <div id="container" class="hvr-float">
                            <img
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

                <div class="col-md-4">
                    <a href="{{ asset('images/DSC03614.JPG') }}" style="text-decoration: none;">
                        <div id="container" class="hvr-float">
                            <img
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

                <div class="col-md-4">
                    <a href="{{ asset('images/DSC03614.JPG') }}" style="text-decoration: none;">
                        <div id="container" class="hvr-float">
                            <img
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
            </div>
            <!-- Gallery -->
        </div>
    </section>

    <section>
        <div class="container">
            <h5 class="fw-bold pb-4">ЛОКАЦИИ КОМПЛЕКСА</h5>
            <!-- Gallery -->
            <div class="row pb-5">
                <div class="col-md-8">
                    <a href="{{ asset('images/DSC03614.JPG') }}" style="text-decoration: none;">
                        <div id="container" class="hvr-float">
                            <img
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

                <div class="col-md-4">
                    <a href="{{ asset('images/DSC03614.JPG') }}" style="text-decoration: none;">
                        <div id="container" class="hvr-float">
                            <img
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
            </div>

            <div class="row pb-5">
                <div class="col-md-4">
                    <a href="{{ asset('images/DSC03614.JPG') }}" style="text-decoration: none;">
                        <div id="container" class="hvr-float">
                            <img
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

                <div class="col-md-8">
                    <a href="{{ asset('images/DSC03614.JPG') }}" style="text-decoration: none;">
                        <div id="container" class="hvr-float">
                            <img
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
            </div>
            <!-- Gallery -->
        </div>
    </section>

    <section>
        <div class="container">
            <h5 class="fw-bold pb-4">ЛОКАЦИИ КОМПЛЕКСА</h5>
            <!-- Gallery -->
            <div class="row pb-5">
                <div class="col-md-4">
                    <a href="{{ asset('images/DSC03614.JPG') }}" style="text-decoration: none;">
                        <div id="container" class="hvr-float">
                            <img
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

                <div class="col-md-4">
                    <a href="{{ asset('images/DSC03614.JPG') }}" style="text-decoration: none;">
                        <div id="container" class="hvr-float">
                            <img
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

                <div class="col-md-4">
                    <a href="{{ asset('images/DSC03614.JPG') }}" style="text-decoration: none;">
                        <div id="container" class="hvr-float">
                            <img
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
            </div>

            <div class="row pb-5">
                <div class="col-md-4">
                    <a href="{{ asset('images/DSC03614.JPG') }}" style="text-decoration: none;">
                        <div id="container" class="hvr-float">
                            <img
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

                <div class="col-md-8">
                    <a href="{{ asset('images/DSC03614.JPG') }}" style="text-decoration: none;">
                        <div id="container" class="hvr-float">
                            <img
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
            </div>

            <div class="row pb-5">
                <div class="col-md-4">
                    <a href="{{ asset('images/DSC03614.JPG') }}" style="text-decoration: none;">
                        <div id="container" class="hvr-float">
                            <img
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

                <div class="col-md-4">
                    <a href="{{ asset('images/DSC03614.JPG') }}" style="text-decoration: none;">
                        <div id="container" class="hvr-float">
                            <img
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

                <div class="col-md-4">
                    <a href="{{ asset('images/DSC03614.JPG') }}" style="text-decoration: none;">
                        <div id="container" class="hvr-float">
                            <img
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
            </div>
            <!-- Gallery -->
        </div>
    </section>

@endsection
