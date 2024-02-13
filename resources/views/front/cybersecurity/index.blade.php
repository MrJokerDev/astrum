<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('cybersecurity/style.css') }}"/>
    <title>Astrum | Cyber Security</title>
</head>
<body>
<div class="wrapper">
    <div class="hero__part">
        <div class="hero-img"></div>
        <div class="hero-dots"></div>
        <header class="header">
            <div class="container">
                <div class="header__logo">
                    <a href="/">
                        <img src="{{ asset('cybersecurity/assets/img/header-logo.svg') }}" alt="header logo"/>
                    </a>
                </div>
            </div>
        </header>
        <div class="hero">
            <div class="container">
                <div class="hero__inner">
                    <div class="hero__content">
                        <h4 class="hero__title-spec">Специалист по</h4>
                        <h2 class="hero__title-cyber">КИБЕРБЕЗОПАСНОСТИ</h2>
                        <p class="hero__title-text">
                            Начните свою карьеру в одной из самых актуальных и интересных профессий в сфере IT
                        </p>
                        <a
                            class="hero__btn"
                            href="https://forms.gle/ZUdwddpihxgFz3EZA"
                            target="_blank"
                        >Подать заявку на грант</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="questions">
        <div class="questions__dots-left"></div>
        <div class="questions__dots-right"></div>
        <div class="container">
            <div class="hero__stat">
                <div class="hero__stat-rect-top-left"></div>
                <div class="hero__stat-rect-left"></div>
                <div class="hero__stat-rect-bottom-left"></div>
                <div class="hero__stat-rect-top-center"></div>
                <div class="hero__stat-rect-bottom-center"></div>
                <div class="hero__stat-inner">
                    <div class="hero__stat-item">
                        <p class="hero__stat-item-text">Ожидаемая заработная плата</p>
                        <span class="hero__stat-item-price">$113,270<span>/в год</span></span>
                    </div>
                    <div class="hero__stat-item">
                        <p class="hero__stat-item-text">Общая удовлетворенность</p>
                        <span class="hero__stat-item-price">Высокая</span>
                    </div>
                    <div class="hero__stat-item">
                        <p class="hero__stat-item-text">Компании по кибербезопасности</p>
                        <span class="hero__stat-item-price">8,400</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="questions-bg"></div>
        <div class="questions__content">
            <div class="container">
                <div class="questions__inner">
                    <section class="splide">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <p class="question__slide-text">
                                        Вы системный администратор, который смотрит в сторону кибербеза?
                                    </p>
                                </li>
                                <li class="splide__slide">
                                    <p class="question__slide-text">
                                        Может Вы рядовой специалист или студент ВУЗа, который понимает IT архитектуру,
                                        как взаимодействуют сетевые устройства и хотите продвинуться в этом направлении?
                                    </p>
                                </li>
                                <li class="splide__slide">
                                    <p class="question__slide-text">
                                        А может Вы просто хотите сменить наскучившую Вам профессию?
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </section>

                    <p class="questions__text">
                        Тогда мы приглашаем Вас участвовать в грандиозном социально-образовательном проекте
                        подготовке специалистов по кибербезопасности, инициированном компанией <span>Beeline Uzbekistan (VEON Group)</span> совместно
                        с крупнейшей IT Академией в СНГ - ASTRUM IT ACADEMY
                    </p>

                    <a
                        class="questions__btn"
                        href="https://forms.gle/ZUdwddpihxgFz3EZA"
                        target="_blank"
                    >Зарегистрироваться</a>
                </div>
            </div>
        </div>
    </div>

    <div class="questions__btm-img">
        <div class="questions__btm-dots"></div>
        <img src="{{ asset('cybersecurity/assets/img/questions-bottom-img.png') }}" />
    </div>

    <div class="results">
        <div class="results__dots-left"></div>
        <div class="results__dots-right"></div>
        <div class="container">
            <div class="results__content">
                <h2 class="results__title">Что конкретно получит слушатель по окончании курса?</h2>
                <ul class="results__list">
                    <li class="results__item">
                        <img src="{{ asset('cybersecurity/assets/img/completed-dot.svg') }}" alt="completed"/>
                        <p class="results__item-text">Новый взгляд на построение компьютерных сетей с точки зрения информационной безопасности; </p>
                    </li>
                    <li class="results__item">
                        <img src="{{ asset('cybersecurity/assets/img/completed-dot.svg') }}" alt="completed"/>
                        <p class="results__item-text">Глубокое понимание возможных рисков и угроз в киберпространстве, последовательность действий хакерских группировок и индивидуальных хакеров по кибер разведке, шифрованию данных и взлому; </p>
                    </li>
                    <li class="results__item">
                        <img src="{{ asset('cybersecurity/assets/img/completed-dot.svg') }}" alt="completed"/>
                        <p class="results__item-text">Умение организовывать поиск, отбор и анализ полученных данных из открытых источников по выявлению уязвимостей различных систем, веб-приложений и сети организаций;  </p>
                    </li>
                    <li class="results__item">
                        <img src="{{ asset('cybersecurity/assets/img/completed-dot.svg') }}" alt="completed"/>
                        <p class="results__item-text">Практический навык взлома компьютерных систем, различных приложений и сетевой инфраструктуры; </p>
                    </li>
                    <li class="results__item">
                        <img src="{{ asset('cybersecurity/assets/img/completed-dot.svg') }}" alt="completed"/>
                        <p class="results__item-text">Опыт по настройке и обеспечению эффективной защиты в организациях; </p>
                    </li>
                    <li class="results__item">
                        <img src="{{ asset('cybersecurity/assets/img/completed-dot.svg') }}" alt="completed"/>
                        <p class="results__item-text">Получение знаний по этичному хакингу и о культуре ведения законной деятельности в киберпространстве. </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="course">
        <div class="course__dots-right"></div>
        <div class="container">
            <div class="course__content">
                <div class="course__title">
                    КАКИЕ МОДУЛИ
                    <span>ЗАТРАГИВАЕТ КУРС</span>
                </div>

                <ul class="course__module-list">
                    <li class="course__module-item">
                        <div class="course__module-item1-back">
                            <span class="course__module-item1-back-top"></span>
                            <span class="course__module-item1-back-bottom"></span>
                        </div>
                        <div class="course__module-item1-self">
                            <h4 class="course__module-title">Модули</h4>
                            <ol class="course__module-value-list">
                                <li class="course__module-value-item">
                                    Практическая безопасность + OSINT - разведка по открытым источникам
                                </li>
                                <li class="course__module-value-item">
                                    Компьютерные сети и безопасность
                                </li>
                                <li class="course__module-value-item">Программирование на PYTHON</li>
                                <li class="course__module-value-item">Этичный хакинг 1 часть</li>
                                <li class="course__module-value-item">Этичный хакинг 2 часть</li>
                            </ol>
                        </div>
                    </li>
                    <li class="course__module-item">
                        <h4 class="course__module-title">ФОРМАТ ОБУЧЕНИЯ И ЯЗЫК</h4>
                        <p class="course__module-text">Удаленный (онлайн - live)
                            Для удобства курс ведется на русском языке
                        </p>
                    </li>
                    <li class="course__module-item course__module-item3">
                        <h4 class="course__module-title">КОЛИЧЕСТВО ОБУЧАЮЩИХСЯ В ГРУППЕ</h4>
                        <p class="course__module-text">До 25 человек в каждой группе</p>
                    </li>
                    <li class="course__module-item">
                        <h4 class="course__module-title">ДЛИТЕЛЬНОСТЬ КУРСА</h4>
                        <p class="course__module-text">
                            Продолжительность курса -  7 недель (36 дней). Каждый модуль содержит 20 академических часов лекций и практики* – 3 часа в день, Всего – 103 академических часа. 
                            <span>*Соотношение лекций и практики: 10 / 90</span>
                        </p>
                    </li>
                    <li class="course__module-item course__module-item5">
                        <h4 class="course__module-title">МИНИМАЛЬНЫЕ ТРЕБОВАНИЯ К ПК/НОУТБУКУ</h4>
                        <p class="course__module-text">Операционная система: Windows/MacOS
                            Оперативная память: 12 GB
                            Основная память на диске C: минимально 50 GB свободного пространства  для установки виртуальных машин с Kali Linux и др.
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="teachers">
        <div class="teachers__dots-top-left"></div>
        <div class="teachers__dots-top-right"></div>
        <div class="teachers__dots-center-left"></div>
        <div class="teachers__dots-center-right"></div>
        <div class="teachers__dots-bottom-left"></div>
        <div class="container">
            <div class="teachers__content">
                <h4 class="teachers__title">ПРЕПОДАВАТЕЛИ</h4>
                <ul class="teachers__list">
                    <li class="teachers__item">
                        <div></div>
                        <div class="teachers__item-img">
                            <img src="{{ asset('cybersecurity/assets/img/sergey-img.png') }}" alt="sergey image"/>
                        </div>
                        <div class="teachers__item-description">
                            <h5 class="teachers__item-name">Сергей Симонов</h5>
                            <p class="teachers__item-text">
                                Пентестер и лектор научной ассоциации кибербезопасности, DevOps-инженер в Omedia
                            </p>
                        </div>
                    </li>

                    <li class="teachers__item">
                        <div class="teachers__item-description">
                            <h5 class="teachers__item-name">Шенгелия Арчил</h5>
                            <p class="teachers__item-text">
                                Сертифицированный инструктор компаний Cisco и CompTIA.
                                Менеджер официальных сетевых академии компаний VMware, Microsoft и Fortinet, созданных на базе Кавказского Университета.
                            </p>
                        </div>
                        <div class="teachers__item-img">
                            <img src="{{ asset('cybersecurity/assets/img/archil-img.png') }}" alt="archil image"/>
                        </div>
                        <div></div>
                    </li>

                    <li class="teachers__item">
                        <div></div>
                        <div class="teachers__item-img">
                            <img src="{{ asset('cybersecurity/assets/img/maxim-img.png') }}" alt="maxim image"/>
                        </div>
                        <div class="teachers__item-description">
                            <h5 class="teachers__item-name">Максим Явич</h5>
                            <p class="teachers__item-text">
                                Профессор Кавказского университета; руководитель направления
                                кибербезопасности, президент Научной Ассоциации Кибербезопасности (SCSA)
                            </p>
                        </div>
                    </li>

                    <li class="teachers__item">
                        <div class="teachers__item-description">
                            <h5 class="teachers__item-name">Венера Аюбджанова</h5>
                            <p class="teachers__item-text">
                                Сертифицированные специалист в области пентестирования и
                                машинного обучения Центра Кибербезопасности Республики Узбекистан
                            </p>
                        </div>
                        <div class="teachers__item-img">
                            <img src="{{ asset('cybersecurity/assets/img/venera-img.png') }}" alt="venera image"/>
                        </div>
                        <div></div>
                    </li>

                    <li class="teachers__item-svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="380" height="1656" viewBox="0 0 380 1656" fill="none">
                            <path d="M364.462 10H10V429.5H370V812.5H10V1225.5H370V1646H10" stroke="#00EEAC" stroke-width="20" stroke-linecap="round"/>
                        </svg>
                    </li>

                </ul>

            </div>
        </div>
    </div>

    <div class="steps">
        <div class="steps__dots-left"></div>
        <div class="steps__dots-right"></div>
        <div class="steps__dots-right-bottom"></div>
        <div class="container">
            <div class="steps__content">
                <div class="_steps__title">
                    <h4 class="steps__title">
                        ЭТАПЫ ОТБОРА
                        <span>НА ПОЛУЧЕНИЕ ГРАНТА</span>
                    </h4>
                </div>

                <div class="steps__get-rules">
                    <div class="steps__get-rules-left">

                        <div class="steps__get-rules-left-item">
                            <img src="{{ asset('cybersecurity/assets/img/step-point.svg') }}" alt="point"/>
                            <span class="steps__get-rules-left-item-title">
                                    Приём заявок
                                </span>
                            <p class="steps__get-rules-left-item-text">
                                до 22 сентября
                            </p>
                        </div>

                        <div class="steps__get-rules-left-item">
                            <span class="steps__get-rules-left-item-stick"></span>
                        </div>

                        <div class="steps__get-rules-left-item">
                            <img src="{{ asset('cybersecurity/assets/img/step-point.svg') }}" alt="point"/>
                            <span class="steps__get-rules-left-item-title">
                                    Онлайн-собеседования
                                </span>
                            <p class="steps__get-rules-left-item-text">
                                с 25-29 сентября
                            </p>
                        </div>

                        <div class="steps__get-rules-left-item">
                            <span class="steps__get-rules-left-item-stick"></span>
                        </div>

                        <div class="steps__get-rules-left-item">
                            <img src="{{ asset('cybersecurity/assets/img/step-point.svg') }}" alt="point"/>
                            <span class="steps__get-rules-left-item-title">
                                    Вручение грантов
                                </span>
                            <p class="steps__get-rules-left-item-text">
                                предварительно - 4 октября
                            </p>
                        </div>

                        <div class="steps__get-rules-left-item">
                            <span class="steps__get-rules-left-item-stick"></span>
                        </div>

                        <div class="steps__get-rules-left-item">
                            <img src="{{ asset('cybersecurity/assets/img/step-point.svg') }}" alt="point"/>
                            <span class="steps__get-rules-left-item-title">
                                    Обучение
                                </span>
                            <p class="steps__get-rules-left-item-text">
                                с 9 октября по 24 ноября
                            </p>
                        </div>

                        <div class="steps__get-rules-left-item">
                            <span class="steps__get-rules-left-item-stick"></span>
                        </div>

                        <div class="steps__get-rules-left-item">
                            <img src="{{ asset('cybersecurity/assets/img/step-point.svg') }}" alt="point"/>
                            <span class="steps__get-rules-left-item-title">
                                    Вручение сертификатов
                                </span>
                            <p class="steps__get-rules-left-item-text">
                                предварительно - 29 ноября
                            </p>
                        </div>

                    </div>


                    <div class="steps__get-rules-right">

                        <div class="steps__get-rules-right-item">
                            <h5 class="steps__get-rules-right-item-title">
                                Регистрация и заполнение Google Формы
                            </h5>
                            <p class="steps__get-rules-right-item-text">
                                где кандидат заполняет информацию о себе, о трудовом опыте, полученных ранее знаниях и интересах. Также отвечает на вопросы, касательно целей в будущем, почему он хочет двигаться в направлении КБ
                            </p>
                        </div>

                        <div class="steps__get-rules-right-item">
                            <h5 class="steps__get-rules-right-item-title">
                                По результатам отбора
                            </h5>
                            <p class="steps__get-rules-right-item-text">
                                проводится собеседование с кандидатом в Академии
                                на соответствие заявленной информации для получение образовательного гранта от компании
                                <span>Beeline Uzbekistan (VEON Group)</span>
                            </p>
                        </div>

                        <div class="steps__get-rules-right-item">
                            <h5 class="steps__get-rules-right-item-title">
                                Вручение образовательных грантов
                            </h5>
                            <p class="steps__get-rules-right-item-text">
                                50 самым выдающимся кандидатам
                            </p>
                        </div>

                        <div class="steps__get-rules-right-item">
                            <h5 class="steps__get-rules-right-item-title">
                                Проведение онлайн-курса
                            </h5>
                            <p class="steps__get-rules-right-item-text">
                                Обучение по 5 модулям
                            </p>
                        </div>

                        <div class="steps__get-rules-right-item">
                            <h5 class="steps__get-rules-right-item-title">
                                Официальная церемония вручения сертификатов выпускникам
                            </h5>
                            <p class="steps__get-rules-right-item-text">
                                Церемония вручения будет проходить в Astrum IT Академии.
                                Сертификаты будут вручать представители компании
                                <span>Beeline Uzbekistan (Veon Group)</span>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bonus__reviews">
        <div class="bonus__bg"></div>
        <div class="bonus">
            <div class="container">
                <div class="bonus__content">
                    <h4 class="bonus__title">Бонусы</h4>
                    <ul class="bonus__list">

                        <li class="bonus__item">
                            <span class="bonus__item-border bonus__item1-left-top-border"></span>
                            <span class="bonus__item-border bonus__item1-right-top-border"></span>
                            <span class="bonus__item-border bonus__item1-bottom-border"></span>

                            <div class="_bonus__item">
                                <div class="bonus__item-plus-svg">
                                    <img src="{{ asset('cybersecurity/assets/img/plus.svg') }}" alt="plus icon"/>
                                </div>
                                <p class="bonus__item-text">
                                    Билет в клуб этичных хакеров Узбекистана
                                </p>
                            </div>

                        </li>

                        <li class="bonus__item">

                            <span class="bonus__item-border bonus__item2-right-border"></span>

                            <div class="_bonus__item">
                                <p class="bonus__item-text">
                                    Членство в командах BLUE и RED team, приглашаемых на ежегодные
                                    соревнования киберполигона ASTRUM HUB и на международных площадках.
                                </p>
                            </div>

                        </li>

                        <li class="bonus__item">

                            <span class="bonus__item-border bonus__item3-top-border"></span>

                            <div class="_bonus__item">
                                <p class="bonus__item-text">
                                    Постоянное членство в клубе и участие в тренингах.
                                </p>
                            </div>

                        </li>

                        <li class="bonus__item">

                            <span class="bonus__item-border bonus__item4-top-border"></span>

                            <div class="_bonus__item">
                                <p class="bonus__item-text">
                                    Участие в ежегодных конференциях, организуемых в Академии.
                                </p>
                            </div>

                        </li>

                        <li class="bonus__item">

                            <span class="bonus__item-border bonus__item5-bottom-border"></span>

                            <div class="_bonus__item">
                                <p class="bonus__item-text">
                                    Возможность трудоустроится в одной из лучших компаний Узбекистана.
                                </p>
                            </div>

                        </li>

                    </ul>
                </div>
            </div>
        </div>

        <div class="reviews">
            <div class="reviews__dots-left"></div>
            <div class="container">
                <h4 class="reviews__title">Отзывы</h4>
            </div>
            <div class="reviews__content">
                <section class="splide reviews-slider">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <h5 class="reviews__slide-title">Михаил</h5>
                                <p class="reviews__slide-text">
                                    «Как по мне самое сложное было у Георгия.
                                    Так как минимум объяснений и больше самостоятельного поиска решений.
                                    Но если что-то не получалось обратная связь и помощь работала. В целом линукс для меня тайна) но теперь он стал более понятен.
                                    <br/><br/>
                                    Думаю, надо проводить обучение в Грузии ближе к морю, а то на работе отвлекают 😂
                                    Но курс действительно оказался полезнее чем все те в которых я участвовал очно!».
                                </p>
                            </li>
                            <li class="splide__slide">
                                <h5 class="reviews__slide-title">Алишер</h5>
                                <p class="reviews__slide-text">
                                    «Курс очень понравился, хотя вначале был скептицизм. Очень много практики и примеров.
                                    Для меня тоже самый сложный этап это 2-й этап (OSINT), но пройдя EH1 и EH2, многие непонятные моменты стали очевидными.
                                    С питоном был ранее знаком, поэтому проблем не было, для меня местами он был очень простым.
                                    4-й и 5-е этапы очень понравились, подача материала хорошая, направление получил. Была возможность закрепить на практике знания по Linux, Python и PHP.
                                    Всем организаторам и преподавателям огромное спасибо!
                                    Удачи.
                                </p>
                            </li>
                            <li class="splide__slide">
                                <h5 class="reviews__slide-title">Бобур</h5>
                                <p class="reviews__slide-text">
                                    Огромное спасибо за организованные курсы.
                                    Занятия организованы на высоком уровне.
                                    Отдельная благодарность Сергею.
                                    Только было немножко сложновато прохождение курса в рабочее время.
                                    К сожалению, отвлекают по работе и это влияет на освоение материала.
                                    Думаю, многие согласятся со мной.
                                    Если в будущем курсы будут оффлайн режиме будет круто.
                                    Потому практика очень важная составляющая.
                                    В целом после этих занятий перестал считать себя Эникейщиком 😆😆 Был интерес, стало еще интереснее.
                                    Благодарен всем Вам искренне. Дай бог встретимся еще.
                                </p>
                            </li>
                        </ul>
                    </div>
                </section>


                <div class="reviews__btm">
                    <a
                        class="reviews__btn"
                        href="https://forms.gle/ZUdwddpihxgFz3EZA"
                        target="_blank"
                    >
                        Тоже хочу учиться!
                    </a>
                </div>
            </div>

            <div class="container">
                <div class="reviews__bottom">
                    <div class="reviews__bottom-border"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="partner">
        <div class="partner__dots-top-right"></div>
        <div class="partner__dots-center-left"></div>
        <h4 class="partner__title">Партнер программы</h4>
        <div class="partners__beeline">
            <div class="container">
                <div class="partners__beeline-content">
                    <div class="partners__beeline-img">
                        <img src="{{ asset('cybersecurity/assets/img/beeline-logo.svg') }}" alt="beeline logo"/>
                    </div>
                    <div class="partners__beeline-img2">
                        <img src="{{ asset('cybersecurity/assets/img/beeline-img2.svg') }}" alt="beeline img 2"/>
                    </div>
                </div>
            </div>

        </div>
        <div class="container">
            <div class="partner__content">
                <div class="partner__content-item">
                    <p class="partner__content-item-text">
                        Beeline Uzbekistan (входит в состав VEON Group, зарегистрированной на бирже NASDAQ) поддержит молодых талантливых IT-специалистов Узбекистана.
                        Гранты, предоставленные digital-оператором, помогут участникам программы пройти обучение в Astrum IT Academy и повысить квалификацию в сфере информационной и кибербезопасности.
                    </p>
                </div>
                <div class="partner__content-item">
                    <p class="partner__content-item-text">
                        Beeline Uzbekistan (входит в состав VEON Group, зарегистрированной на бирже NASDAQ) поддержит молодых талантливых IT-специалистов Узбекистана.
                        Гранты, предоставленные digital-оператором, помогут участникам программы пройти обучение в Astrum IT Academy и повысить квалификацию в сфере информационной и кибербезопасности.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="faq">
        <div class="container">
            <div class="faq__content">
                <h4 class="faq__title">
                    <span>FAQ</span>
                    Часто задаваемые вопросы
                </h4>

                <ul class="faq__list">

                    <li class="faq__item">
                        <div class="faq__item-head">
                            <div class="faq__item-icon">
                                <img src="{{ asset('cybersecurity/assets/img/question-icon.svg') }}" alt="question icon"/>
                            </div>
                            <h6 class="faq__item-title">
                                Cколько стоит курс? 
                            </h6>
                            <div class="faq__item-icon-plus">
                                <div class="faq__item-plus"></div>
                            </div>
                        </div>
                        <p class="faq__item-text">
                            Это социальный проект, который полностью спонсируется компанией Beeline Uzbekistan (часть VEON Group)
                            совместно с Astrum IT Academy
                        </p>
                    </li>

                    <li class="faq__item">
                        <div class="faq__item-head">
                            <div class="faq__item-icon">
                                <img src="{{ asset('cybersecurity/assets/img/question-icon.svg') }}" alt="question icon"/>
                            </div>
                            <h6 class="faq__item-title">
                                Мне 16 лет, могу ли я подать заявление на прохождение курса?
                            </h6>
                            <div class="faq__item-icon-plus">
                                <div class="faq__item-plus"></div>
                            </div>
                        </div>
                        <p class="faq__item-text">
                            В проект допускаются участвовать физические лица от 18 до 30 лет
                        </p>
                    </li>

                    <li class="faq__item">
                        <div class="faq__item-head">
                            <div class="faq__item-icon">
                                <img src="{{ asset('cybersecurity/assets/img/question-icon.svg') }}" alt="question icon"/>
                            </div>
                            <h6 class="faq__item-title">
                                Я не говорю на русском языке, могу ли участвовать?
                            </h6>
                            <div class="faq__item-icon-plus">
                                <div class="faq__item-plus"></div>
                            </div>
                        </div>
                        <p class="faq__item-text">
                            Курс полностью проходит на русском языке, если не знать язык будет невозможно
                            понимать тренеров и выполнять задания вовремя.
                        </p>
                    </li>

                    <li class="faq__item">
                        <div class="faq__item-head">
                            <div class="faq__item-icon">
                                <img src="{{ asset('cybersecurity/assets/img/question-icon.svg') }}" alt="question icon"/>
                            </div>
                            <h6 class="faq__item-title">
                                Могу ли я смотреть в удобное для себя время курс?
                            </h6>
                            <div class="faq__item-icon-plus">
                                <div class="faq__item-plus"></div>
                            </div>
                        </div>
                        <p class="faq__item-text">
                            Нет, обучение будет проходить в режиме live
                        </p>
                    </li>

                    <li class="faq__item">
                        <div class="faq__item-head">
                            <div class="faq__item-icon">
                                <img src="{{ asset('cybersecurity/assets/img/question-icon.svg') }}" alt="question icon"/>
                            </div>
                            <h6 class="faq__item-title">
                                Будет ли мне доступна запись обучения после окончания курса?
                            </h6>
                            <div class="faq__item-icon-plus">
                                <div class="faq__item-plus"></div>
                            </div>
                        </div>
                        <p class="faq__item-text">
                            Да, и в тоже время, только тем участникам, которые отпросились по уважительным причинам.
                        </p>
                    </li>

                    <li class="faq__item">
                        <div class="faq__item-head">
                            <div class="faq__item-icon">
                                <img src="{{ asset('cybersecurity/assets/img/question-icon.svg') }}" alt="question icon"/>
                            </div>
                            <h6 class="faq__item-title">
                                Будет ли экзамен в конце курса? 
                            </h6>
                            <div class="faq__item-icon-plus">
                                <div class="faq__item-plus"></div>
                            </div>
                        </div>
                        <p class="faq__item-text">
                            По завершению каждого модуля участникам необходимо сделать и сдать практическое задание.
                        </p>
                    </li>

                    <li class="faq__item">
                        <div class="faq__item-head">
                            <div class="faq__item-icon">
                                <img src="{{ asset('cybersecurity/assets/img/question-icon.svg') }}" alt="question icon"/>
                            </div>
                            <h6 class="faq__item-title">
                                Смогу ли я устроиться на работу с этим сертификатом?
                            </h6>
                            <div class="faq__item-icon-plus">
                                <div class="faq__item-plus"></div>
                            </div>
                        </div>
                        <p class="faq__item-text">
                            Успешно окончившим курсы будет предложена стажировка в Beeline Uzbekistan, с
                            возможным трудоустройством.
                        </p>
                    </li>

                </ul>


            </div>
        </div>
    </div>

    <div class="cta">
        <div class="container">
            <div class="__cta__inner">
                <div class="cta__inner">
                    <div class="cta__top-left-border"></div>
                    <div class="cta__top-right-border"></div>
                    <div class="cta__right-border"></div>
                    <div class="cta__bottom-border"></div>
                    <div class="cta__bottom-left"></div>

                    <div class="cta__content">
                        <div class="_cta__inner"></div>
                        <div class="cta__left">
                            <div class="_cta__left">
                                <h5 class="cta__left-title">Остались еще вопросы?</h5>
                                <p class="cta__left-text">
                                    Заполните форму для обратной связи. И мы вам перезвоним
                                </p>
                            </div>
                        </div>
                        <form class="cta__right">
                            <div class="cta__right-field">
                                <input
                                    class="cta__right-input cta__right-input-name"
                                    type="text"
                                    name="name"
                                    placeholder="Ваше имя"
                                    required
                                />
                            </div>
                            <div class="cta__right-field">
                                <input
                                    class="cta__right-input cta__right-input-phone"
                                    type="number"
                                    name="phone"
                                    placeholder="Номер телефона"
                                    required
                                />
                            </div>
                            <button class="cta__right-btn" type="submit">
                                Отправить
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="footer__line"></div>
        <div class="container">
            <div class="footer__content">
                <a class="footer__phone" href="tel:+998712024222">+998 (71) 202-42-22</a>
                <div class="footer__social">
                    <a class="footer__social-email" href="mailto:info@astrum.uz">info@astrum.uz</a>
                    <ul class="footer__social-list">
                        <li class="footer__social-item">
                            <a class="" href="https://www.instagram.com/astrumuz/" target="_blank" >
                                Instagram
                            </a>
                        </li>
                        <li class="footer__social-item" >
                            <a class="" href="https://t.me/astrumuz" target="_blank">
                                Telegram
                            </a>
                        </li>
                        <li class="footer__social-item">
                            <a class="" href="https://www.facebook.com/astrumuz/" target="_blank">
                                Facebook
                            </a>
                        </li>
                        <li class="footer__social-item">
                            <a class="" href="https://www.youtube.com/@astrumacademy6468" target="_blank">
                                You tube
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</div>

<script src="{{ asset('cybersecurity/js/app.js') }}"></script>
</body>
</html>
