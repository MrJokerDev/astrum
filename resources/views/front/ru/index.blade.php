@extends('front.ru.main')

@section('style')
<style>
  .navbar{
     position: absolute;
    z-index: 9999;
  }
</style>
@endsection

@section('content')
    <header>
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay"  muted="muted" loop="loop"> <!-- autoplay="autoplay" -->
            <source src="images/video/video_1.MP4" type="video/mp4">
        </video>

        <div class="container">
            <div class="row h-100">
                <div class="col-md-7 align-self-end mb-5">
                    <div class="text-white">
                        <h1 class="font_size"><span></span>Лутшиее место для <br> обучения, развлечения <br> и Вашего будующего</h1>
                    </div>
                </div>
                <div class="col-md-5"></div>
            </div>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <p style="color: rgba(40, 156, 40, 0.521);" class="fw-bold">КТО МЫ</p>
                    <h1 class="fw-bold">Знания и <br> профессиональная <br> команда - залог Вашей <br> карьеры и обеспеченного <br> будущего</h1> <br>
                    <p class="fw-semibold fs-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. <br> Nesciunt accusamus alias quo, mollitia hic aperiam corporis eum fugit tenetur aut modi fugiat molestias error molestiae voluptatum asperiores? Iure, provident ratione?</p>
                    <p class="fw-semibold fs-5"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, est! Aperiam aliquam nostrum dicta eveniet! Ipsam aliquam quaerat soluta nihil in. Soluta explicabo amet sed illum, quos quidem nam eum!</p>
                    <button id="btn" class="btn btn-outline-success p-3 rounded">Узнать больше</button>
                </div>
                <div class="col-md-7">
                    <h1 class="about_us">About us</h1>
                    <div class="img">
                        <div class="img_1">
                            <img class="w-100 h-100 shadow bg-white rounded" src="images/DSC_6349.jpg" alt="images">
                        </div>
                        <div class="img_2">
                            <img class="w-100 h-100 shadow bg-white rounded" src="images/DSC_6383.jpg" alt="images">
                        </div>
                    </div>
                    <div class="w-100 text-end">
                        <a href="{{ route('ru.gallery') }}" class="href_arrow">Фото <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="location">
        <div class="container pt-4">
            <div class="row">
                <div class="text-center">
                    <p style="color: rgba(40, 156, 40, 0.521);" class="fw-bold">ЛОКАЦИИ КОМПЛЕКСА</p>
                    <h1 class="fw-bold">Лутшие локации <br> для обучения и творчества</h1>
                    <p class="fw-semibold">Идеа рождаются толка в удобном для человека место. <br> У нас место много!</p>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-12 col-md-6 col-xl-5">
                    <div class="border shadow bg-white rounded p-4 fw-semibold fs-5">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad assumenda repudiandae pariatur amet aperiam libero officia, dignissimos atque magnam placeat sapiente earum exercitationem mollitia eveniet ipsa accusantium laboriosam blanditiis deserunt?
                    </div>
                </div>
            </div>
        </div>
        <h1 class="location_h1">Locations</h1>
    </section>

    <section class="container-fluid">
        <div class="astrum_img">
            <img src="images/astrum_foto.png" alt="">
        </div>
    </section>

    <section class="carousel">
        <div class="carusel-top">
            <div class="carousel-inner">
                    <div class="most-inner">
                        <img src="images/DSC_6349.jpg">
                        <img src="images/DSC_6383.jpg">
                        <img src="images/DSC_6349.jpg">
                        <img src="images/DSC_6383.jpg">
                        <img src="images/DSC_6349.jpg">
                        <img src="images/DSC_6383.jpg">
                        <img src="images/DSC_6349.jpg">
                        <img src="images/DSC_6383.jpg">
                        <img src="images/DSC_6349.jpg">
                        <img src="images/DSC_6383.jpg">
                        <img src="images/DSC_6349.jpg">
                        <img src="images/DSC_6383.jpg">
                        <img src="images/DSC_6349.jpg">
                        <img src="images/DSC_6383.jpg">
                        <img src="images/DSC_6349.jpg">
                        <img src="images/DSC_6383.jpg">
                        <img src="images/DSC_6349.jpg">
                        <img src="images/DSC_6383.jpg">
                    </div>
            </div>
        </div>
    </section>

    <section class="section-fon">
        <div class="container p-5 align-items-center">
            <p style="color: rgba(40, 156, 40, 0.521);" class="fw-bold">КУРСЫ И ОБРАЗОВАНИЕ</p>
            <h1 class="text-white">Измените свой жизнь, <br> изучит UX/UI и программирование</h1>
            <p class="text-white pt-4 fs-5">Наши учебные курсы по программированию разработаты, <br> чтобы помочь Вам учитсия на практике в современных классах на <br> современном оборудовании.</p>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-xxl-3 col-md-6">
                    <div class="card hvr-float" style="width: 18rem;">
                        <img class="card-img-top shadow" src="images/DSC_6366.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p>Начала курсв - 03/03/2022</p>
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="fs-5">12 месяцув / 450 часов</p>
                            <hr class="w-25 border border-success border-2">
                            <a href="#" class="btn btn-outline-success p-3 rounded">Узнать больше</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-3 col-md-6">
                    <div class="card hvr-float" style="width: 18rem;">
                        <img class="card-img-top shadow" src="images/DSC_6366.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p>Начала курсв - 03/03/2022</p>
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="fs-5">12 месяцув / 450 часов</p>
                            <hr class="w-25 border border-success border-2">
                            <a href="#" class="btn btn-outline-success p-3 rounded">Узнать больше</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-3 col-md-6">
                    <div class="card hvr-float" style="width: 18rem;">
                        <img class="card-img-top shadow" src="images/DSC_6366.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p>Начала курсв - 03/03/2022</p>
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="fs-5">12 месяцув / 450 часов</p>
                            <hr class="w-25 border border-success border-2">
                            <a href="#" class="btn btn-outline-success p-3 rounded">Узнать больше</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-3 col-md-6">
                    <div class="card hvr-float" style="width: 18rem;">
                        <img class="card-img-top shadow" src="images/DSC_6366.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p>Начала курсв - 03/03/2022</p>
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="fs-5">12 месяцув / 450 часов</p>
                            <hr class="w-25 border border-success border-2">
                            <a href="#" class="btn btn-outline-success p-3 rounded">Узнать больше</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div>
                <p style="color: rgba(40, 156, 40, 0.521);" class="fw-bold">КУРСЫ И ОБРАЗОВАНИЕ</p>
                <h1 class="fw-bold mb-5">Почему многие выберают <br> обучение с Astrum ?</h1>
            </div>
            <div class="row mb-5">
                <div class="col-md-6 col-xl-4 col-xxl-3">
                    <p class="border-start border-dark border-4 ps-3">100%</p>
                    <p class="text-muted fw-bolder">ПОКАЗАТЕЛЬ ЗАВЕРШЕННОСТИ</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, exercitationem voluptas, nemo tenetur consectetur, eum esse est laborum expedita repellendus modi! Exercitationem rem officia adipisci repudiandae ullam provident? Voluptas, amet.</p>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-3">
                    <p class="border-start border-dark border-4 ps-3">100%</p>
                    <p class="text-muted fw-bolder">ПОКАЗАТЕЛЬ ЗАВЕРШЕННОСТИ</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, exercitationem voluptas, nemo tenetur consectetur, eum esse est laborum expedita repellendus modi! Exercitationem rem officia adipisci repudiandae ullam provident? Voluptas, amet.</p>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-3">
                    <p class="border-start border-dark border-4 ps-3">100%</p>
                    <p class="text-muted fw-bolder">ПОКАЗАТЕЛЬ ЗАВЕРШЕННОСТИ</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, exercitationem voluptas, nemo tenetur consectetur, eum esse est laborum expedita repellendus modi! Exercitationem rem officia adipisci repudiandae ullam provident? Voluptas, amet.</p>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-3">
                    <p class="border-start border-dark border-4 ps-3">100%</p>
                    <p class="text-muted fw-bolder">ПОКАЗАТЕЛЬ ЗАВЕРШЕННОСТИ</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, exercitationem voluptas, nemo tenetur consectetur, eum esse est laborum expedita repellendus modi! Exercitationem rem officia adipisci repudiandae ullam provident? Voluptas, amet.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-4 col-xxl-3">
                    <p class="border-start border-dark border-4 ps-3">100%</p>
                    <p class="text-muted fw-bolder">ПОКАЗАТЕЛЬ ЗАВЕРШЕННОСТИ</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, exercitationem voluptas, nemo tenetur consectetur, eum esse est laborum expedita repellendus modi! Exercitationem rem officia adipisci repudiandae ullam provident? Voluptas, amet.</p>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-3">
                    <p class="border-start border-dark border-4 ps-3">100%</p>
                    <p class="text-muted fw-bolder">ПОКАЗАТЕЛЬ ЗАВЕРШЕННОСТИ</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, exercitationem voluptas, nemo tenetur consectetur, eum esse est laborum expedita repellendus modi! Exercitationem rem officia adipisci repudiandae ullam provident? Voluptas, amet.</p>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-3">
                    <p class="border-start border-dark border-4 ps-3">100%</p>
                    <p class="text-muted fw-bolder">ПОКАЗАТЕЛЬ ЗАВЕРШЕННОСТИ</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, exercitationem voluptas, nemo tenetur consectetur, eum esse est laborum expedita repellendus modi! Exercitationem rem officia adipisci repudiandae ullam provident? Voluptas, amet.</p>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-3">
                    <p class="border-start border-dark border-4 ps-3">100%</p>
                    <p class="text-muted fw-bolder">ПОКАЗАТЕЛЬ ЗАВЕРШЕННОСТИ</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, exercitationem voluptas, nemo tenetur consectetur, eum esse est laborum expedita repellendus modi! Exercitationem rem officia adipisci repudiandae ullam provident? Voluptas, amet.</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <img src="images/AST04894.jpg" class="w-100 rounded" alt="image">
        </div>
    </section>

    <section id="mentors" class="pt-5">
        <div class="container">
            <p style="color: rgba(40, 156, 40, 0.521);" class="fw-bold text-center">НАШИ МЕНТОРЫ</p>
            <h1 class="text-center fw-bold">Мы здесь для того, что бы передат Вам <br> свои знания и стать Вам другом, а не <br> проста преподавателам</h1>
            <p class="text-center mb-5">Ментор - источник информации и ответов на <br> возникающие у вас вопросы</p>
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="profile-card">
                        <div class="profile-img">
                            <img src="https://i.postimg.cc/VNs6dtw4/profile2.jpg" alt="Team Image"/>
                        </div>
                        <div class="profile-content">
                            <h2 class="title">Brayden
                                <span>Designer & Developer</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="profile-card">
                        <div class="profile-img">
                            <img src="https://i.postimg.cc/XYkqj8Rp/profile3.jpg" alt="Team Image"/>
                        </div>
                        <div class="profile-content">
                            <h2 class="title">Jasephine
                                <span>Designer & Developer</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="profile-card">
                        <div class="profile-img">
                            <img src="https://i.postimg.cc/g0M0R0kp/profile1.jpg" alt="Team Image"/>
                        </div>
                        <div class="profile-content">
                            <h2 class="title">Marco
                                <span>Designer & Developer</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="profile-card">
                        <div class="profile-img">
                            <img src="https://i.postimg.cc/SsJxGpJM/profile4.jpg" alt="Team Image"/>
                        </div>
                        <div class="profile-content">
                            <h2 class="title">Amaira
                                <span>Designer & Developer</span>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('ru.about_us') }}" id="btn" class="btn btn-outline-success p-3 mt-5 rounded">Всеь коллектив</a>
        </div>
    </section>

    <section>
        <div class="container">
            <p style="color: rgba(40, 156, 40, 0.521);" class="fw-bold">НОВОСТИ</p>
            <h1 class="fw-bold">Статьи которые помогут <br> Вам узнать больше</h1>
            <div class="row pt-5">
                <div class="col-xl-4 col-xxl-3 col-md-6">
                    <div class="card hvr-float" style="width: 18rem;">
                        <img class="card-img-top shadow" src="images/DSC_6366.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="href_arrow">Читатть <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-3 col-md-6">
                    <div class="card hvr-float" style="width: 18rem;">
                        <img class="card-img-top shadow" src="images/DSC_6366.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="href_arrow">Читатть <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-3 col-md-6">
                    <div class="card hvr-float" style="width: 18rem;">
                        <img class="card-img-top shadow" src="images/DSC_6366.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="href_arrow">Читатть <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-3 col-md-6">
                    <div class="card hvr-float" style="width: 18rem;">
                        <img class="card-img-top shadow" src="images/DSC_6366.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">Full stack Developer</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="href_arrow">Читатть <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('ru.news') }}" id="btn" class="btn btn-outline-success p-3 mt-5 mb-5 rounded">Больше новости</a>
        </div>
    </section>

    <section>
        <div class="container">
            <p style="color: rgba(40, 156, 40, 0.521);" class="fw-bold">НАШИ ЦЕННОСТИ</p>
            <h1 class="fw-bold">Что отличает Astrum от других</h1>
            <p class="w-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur quo quisquam adipisci ea laboriosam dolores dolorum aliquid, iure accusantium doloremque, nihil dolore obcaecati expedita mollitia repellendus amet eos architecto eligendi!</p>
            <div class="row pt-5">
                <div class="col-md-4">
                    <p class="border-start border-dark border-4 ps-3 fs-2 fw-bold">Всегда честны</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, exercitationem voluptas, nemo tenetur consectetur, eum esse est laborum expedita repellendus modi! Exercitationem rem officia adipisci repudiandae ullam provident? Voluptas, amet.</p>
                </div>
                <div class="col-md-4">
                    <p class="border-start border-dark border-4 ps-3 fs-2 fw-bold">Всегда честны</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, exercitationem voluptas, nemo tenetur consectetur, eum esse est laborum expedita repellendus modi! Exercitationem rem officia adipisci repudiandae ullam provident? Voluptas, amet.</p>
                </div>
                <div class="col-md-4">
                    <p class="border-start border-dark border-4 ps-3 fs-2 fw-bold">Всегда честны</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, exercitationem voluptas, nemo tenetur consectetur, eum esse est laborum expedita repellendus modi! Exercitationem rem officia adipisci repudiandae ullam provident? Voluptas, amet.</p>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-md-4">
                    <p class="border-start border-dark border-4 ps-3 fs-2 fw-bold">Всегда честны</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, exercitationem voluptas, nemo tenetur consectetur, eum esse est laborum expedita repellendus modi! Exercitationem rem officia adipisci repudiandae ullam provident? Voluptas, amet.</p>
                </div>
                <div class="col-md-4">
                    <p class="border-start border-dark border-4 ps-3 fs-2 fw-bold">Всегда честны</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, exercitationem voluptas, nemo tenetur consectetur, eum esse est laborum expedita repellendus modi! Exercitationem rem officia adipisci repudiandae ullam provident? Voluptas, amet.</p>
                </div>
                <div class="col-md-4">
                    <p class="border-start border-dark border-4 ps-3 fs-2 fw-bold">Всегда честны</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, exercitationem voluptas, nemo tenetur consectetur, eum esse est laborum expedita repellendus modi! Exercitationem rem officia adipisci repudiandae ullam provident? Voluptas, amet.</p>
                </div>
            </div>
        </div>
    </section>

@endsection

