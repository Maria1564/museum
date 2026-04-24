<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="../css/style.css?v=3.0.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&display=swap" rel="stylesheet">
</head>

<body>

    <?php include dirname(__DIR__) . '/template-parts/mobile-menu.php'; ?>

    <?php
    require_once dirname(__DIR__) . '/template-parts/header.php';
    renderHeader('light', 'about');
    ?>

    <main class="main">

        <!-- hero-slider -->
        <section class="hero-slider">
            <div class="swiper hero-slider__swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide hero-slider__slide">
                        <img class="hero-slider__image" src="../images/slide-1.png" alt="слайд">
                        <div class="hero-slider__overlay"></div>
                        <div class="container">
                            <div class="hero-slider__content">
                                <div class="hero-slider__meta">
                                    <span class="hero-slider__meta-item">Выставка</span>
                                    <span class="hero-slider__meta-item">16+</span>
                                </div>
                                <h1 class="hero-slider__title">Из глубины веков. <br>Археология Калужского края</h1>
                                <div class="hero-slider__footer">
                                    <p class="hero-slider__description">
                                        В ВИЦ «Командарм 33 - Михаил Григорьевич Ефремов» состоялся
                                        кинолекторий «Крымская весна» и мастер-класс «Голубь мира». Мероприятия были
                                        посвящены Дню воссоединения Крыма с Россией.
                                    </p>

                                    <a class="hero-slider__button" href="#">
                                        Подробнее
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide hero-slider__slide">
                        <img class="hero-slider__image" src="../images/slide-2.png" alt="слайд">
                        <div class="hero-slider__overlay"></div>
                        <div class="container">
                            <div class="hero-slider__content">
                                <div class="hero-slider__meta">
                                    <span class="hero-slider__meta-item">Выставка</span>
                                    <span class="hero-slider__meta-item">16+</span>
                                </div>
                                <h1 class="hero-slider__title">Из глубины веков. <br>Археология Калужского края</h1>
                                <div class="hero-slider__footer">
                                    <p class="hero-slider__description">
                                        В ВИЦ «Командарм 33 - Михаил Григорьевич Ефремов» состоялся
                                        кинолекторий «Крымская весна» и мастер-класс «Голубь мира». Мероприятия были
                                        посвящены Дню воссоединения Крыма с Россией.
                                    </p>

                                    <a class="hero-slider__button btn-text btn-text_white" href="#">
                                        Подробнее
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide hero-slider__slide">
                        <img class="hero-slider__image" src="../images/slide-1.png" alt="слайд">
                        <div class="hero-slider__overlay"></div>
                        <div class="container">
                            <div class="hero-slider__content">
                                <div class="hero-slider__meta">
                                    <span class="hero-slider__meta-item">Выставка</span>
                                    <span class="hero-slider__meta-item">16+</span>
                                </div>
                                <h1 class="hero-slider__title">Из глубины веков. <br>Археология Калужского края</h1>
                                <div class="hero-slider__footer">
                                    <p class="hero-slider__description">
                                        В ВИЦ «Командарм 33 - Михаил Григорьевич Ефремов» состоялся
                                        кинолекторий «Крымская весна» и мастер-класс «Голубь мира». Мероприятия были
                                        посвящены Дню воссоединения Крыма с Россией.
                                    </p>

                                    <a class="hero-slider__button" href="#">
                                        Подробнее
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="hero-slider__navigation">
                    <button class="hero-slider__button-prev" type="button" aria-label="Предыдущий слайд">
                        <svg width="39" height="15" viewBox="0 0 39 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_11_13586)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M6.94316 15L7.57026 14.2929L2.32956 8.38325L38.5049 8.38325L38.5049 7.38325L2.26076 7.38325L7.57026 1.396L6.94316 0.688901L0.597665 7.84445L6.94316 15Z"
                                    fill="currentColor" />
                            </g>
                            <defs>
                                <clipPath id="clip0_11_13586">
                                    <rect width="39" height="15" fill="white"
                                        transform="translate(39 15) rotate(-180)" />
                                </clipPath>
                            </defs>
                        </svg>

                    </button>
                    <div class="hero-slider__pagination"></div>
                    <button class="hero-slider__button-next" type="button" aria-label="Следующий слайд">
                        <svg width="39" height="15" viewBox="0 0 39 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_11_13594)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M32.0568 0L31.4297 0.707107L36.6704 6.61675H0.495117V7.61675H36.7392L31.4297 13.604L32.0568 14.3111L38.4023 7.15555L32.0568 0Z"
                                    fill="currentColor" />
                            </g>
                            <defs>
                                <clipPath id="clip0_11_13594">
                                    <rect width="39" height="15" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                    </button>
                </div>
            </div>
        </section>


        <!-- events-preview" -->
        <section class="events-preview">
            <div class="container">
                <div class="events-preview__header">
                    <h2 class="events-preview__title">Афиша мероприятий</h2>
                    <a href="#" class="events-preview__btn">
                            <img src="../images/calendar.svg" alt="календарь">
                        <p class="btn-text btn-text_black">полная афиша</p>
                    </a>
                </div>


                <?php
                require_once dirname(__DIR__) . '/template-parts/events-grid.php';
                renderEventsGrid();
                ?>
            </div>
        </section>


        <!-- social-news  -->
        <section class="social-news">
            <div class="social-news__container">
                <div class="social-news__wrapper">
                    <div class="social-news__left">
                        <div class="social-news__content">
                            <h2 class="title social-news__title">Читайте наши новости <br> в социальных сетях</h2>
                            <div class="social-news__line"></div>
                            <p class="social-news__description">Свежие новости, анонсы выставок, редкие экспонаты и
                                фоторепортажи — всё это мы публикуем в наших социальных сетях. Подписывайтесь, чтобы
                                первыми узнавать о событиях музея и не пропустить самое интересное!</p>
                        </div>
                        <div class="social-news__list">

                            <!-- social-card  -->
                            <a href="#" class="social-card">
                                <img src="../images/tg.svg" alt="">
                                <span class="social-card__text">Telegram</span>
                            </a>
                            <a href="#" class="social-card">
                                <img src="../images/max.svg" alt="">
                                <span class="social-card__text">Max</span>
                            </a>
                            <a href="#" class="social-card">
                                <img src="../images/vk.svg" alt="">
                                <span class="social-card__text">Вконтакте</span>
                            </a>
                            <a href="#" class="social-card">
                                <img src="../images/ok.svg" alt="">
                                <span class="social-card__text">Одноклассники</span>
                            </a>
                        </div>
                    </div>
                    <div class="social-news__right">
                            <img src="../images/mobile.png" alt="">
                    </div>
                </div>
            </div>
        </section>


        <!-- about  -->
        <section class="about">
            <div class="container">
                <div class="about__header">
                    <h2 class="title about__title">О Калужском объединённом музее-заповеднике</h2>
                    <p class="about__description">Калужский объединенный музей-заповедник — это крупнейшее музейное
                        объединение региона, которое бережно хранит многовековую историю и культурное наследие
                        Калужского края. Мы объединяем уникальные площадки — от величественных дворянских усадеб XIX
                        века до современных выставочных пространств, предлагая посетителям погрузиться в мир природы,
                        искусства и героического прошлого нашей земли.</p>
                </div>
                <div class="about__stats">
                    <div class="about__stat">
                        <span class="about__stat-value">24</span>
                        <span class="about__stat-text">филиала по всей Калужской области</span>
                    </div>
                    <div class="about__stat">
                        <span class="about__stat-value">≈ 950</span>
                        <span class="about__stat-text">мероприятий <br> проводится музеем ежегодно</span>
                    </div>
                    <div class="about__stat">
                        <span class="about__stat-value">> 215 лет</span>
                        <span class="about__stat-text">истории главного здания музейного комплекса </span>
                    </div>
                    <div class="about__stat">
                        <span class="about__stat-value">11</span>
                        <span class="about__stat-text">залов истории только в одном центральном корпусе</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="other">
            <div class="container">
                <div class="swiper other__swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide other__slide">
                            <a class="other__link" href="#" target="_blank">
                        <img class="other__image" src="../images/banner.png"
                                    alt="Льготный кредит на восстановление">
                            </a>
                        </div>

                        <div class="swiper-slide other__slide">
                            <a class="other__link" href="#" target="_blank">
                        <img class="other__image" src="../images/banner.png"
                                    alt="Льготный кредит на восстановление">
                            </a>
                        </div>
                    </div>

                </div>
                <div class="other__navigation">
                    <button class="other__button-prev" type="button" aria-label="Предыдущий слайд">
                            <img src="../images/arrow-left-2.svg" alt="">
                    </button>
                    <button class="other__button-next" type="button" aria-label="Следующий слайд">
                            <img src="../images/arrow-right-2.svg" alt="">
                    </button>
                </div>
            </div>
        </section>
    </main>

    <?php include dirname(__DIR__) . '/template-parts/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>
