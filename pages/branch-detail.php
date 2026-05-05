<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Музейно-краеведческий центр «Дом Г.С. Батенькова</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="../css/style.css?v=3.0.16">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&display=swap" rel="stylesheet">
</head>

<body>
    <?php include dirname(__DIR__) . '/template-parts/mobile-menu.php'; ?>

    <?php
    require_once dirname(__DIR__) . '/template-parts/header.php';
    renderHeader('light', 'branches');

    require_once dirname(__DIR__) . '/template-parts/page-header.php';
    require_once dirname(__DIR__) . '/template-parts/other.php';
    require_once dirname(__DIR__) . '/template-parts/more-link.php';
    require_once dirname(__DIR__) . '/template-parts/contact-person.php';

    ?>

    <main>
        <section class="branch-hero">
            <div class="branch-hero__media">
                <img src="../images/branch-detail/bg.png" alt="" class="branch-hero__bg">
                <div class="branch-hero__overlay"></div>
                <div class="container">
                    <div class="branch-hero__media-container">
                        <?php renderPageHeader('Музейно-краеведческий центр «Дом Г.С. Батенькова»', ['Главная', 'Филиалы'], "branch-hero__breadcrumbs"); ?>

                        <div class="branch-hero__address">
                            <img class="branch-hero__address-icon" src="../images/event-detail/map-pin-light.svg"
                                alt="">
                            <div class="branch-hero__address-content">
                                <span class="branch-hero__address-label">Адрес филиала</span>
                                <p class="branch-hero__address-text">
                                    249844, Калужская область, Дзержинский район, пос. Полотняный Завод,
                                    ул. Трудовая, д. 2а, музей-заповедник «Полотняный Завод».
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="branch-hero__actions">
                <div class="container">
                    <div class="branch-hero__actions-inner">
                        <div class="branch-hero__actions-main">
                            <a class="branch-hero__action branch-hero__action_primary" href="#">
                                Купить билет
                            </a>

                            <a class="branch-hero__action" href="#">
                                Заказать экскурсию
                            </a>
                        </div>

                        <a class="branch-hero__action branch-hero__action_price" href="#">
                            <img class="branch-hero__action-icon" src="../images/branch-detail/file-light.svg" alt="">
                            <span>Стоимость билетов</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="branch-about">
            <div class="container">
                <div class="branch-about__layout">
                    <div class="branch-about__content editor-content">
                        <p>Городская усадьба Ивана Максимовича Золотарева, купца первой гильдии, стала украшением
                            провинциальной Калуги в начале XIX века (1805-1808 гг.).</p>
                        <p>Талантливый зодчий поставил его по красной линии улицы и украсил горельефами на темы
                            древнегреческого эпоса: "Спор богинь", "Суд Париса", "Жертвоприношение".</p>
                        <p>Городская усадьба Ивана Максимовича Золотарева, купца первой гильдии, стала украшением
                            провинциальной Калуги в начале XIX века (1805-1808 гг.).</p>
                        <p>Талантливый зодчий поставил его по красной линии улицы и украсил горельефами на темы
                            древнегреческого эпоса: "Спор богинь", "Суд Париса", "Жертвоприношение".</p>
                        <p>Городская усадьба Ивана Максимовича Золотарева, купца первой гильдии, стала украшением
                            провинциальной Калуги в начале XIX века (1805-1808 гг.).</p>
                        <p>Талантливый зодчий поставил его по красной линии улицы и украсил горельефами на темы
                            древнегреческого эпоса: "Спор богинь", "Суд Париса", "Жертвоприношение".</p>

                    </div>
                    <aside class="branch-about__aside">
                        <div class="branch-info-card">
                            <div class="branch-info-card__section">
                                <div class="branch-info-card__header">
                                    <img class="branch-info-card__icon" src="../images/event-detail/clock-light.svg"
                                        alt="">
                                    <h2 class="branch-info-card__title">Режим работы</h2>
                                </div>

                                <div class="branch-info-card__text">
                                    <p>Вторник – Пятница, Воскресенье: с 9:30 до 18:00.</p>
                                    <p>Суббота: с 11:00 до 19:00.</p>
                                    <p>Выходной: Понедельник.</p>
                                    <p>Санитарный день: Последняя среда месяца.</p>
                                    <p>Внимание: Касса закрывается за 30 минут до завершения работы музея.</p>
                                </div>
                            </div>

                            <div class="branch-info-card__section">
                                <div class="branch-info-card__header">
                                    <img class="branch-info-card__icon" src="../images/event-detail/ticket-light.svg"
                                        alt="">
                                    <h2 class="branch-info-card__title">Стоимость билетов</h2>
                                </div>

                                <p class="branch-info-card__text">Актуальный прейскурант на посещение и услуги музея
                                    доступен для ознакомления и скачивания в формате PDF</p>


                                <button class="branch-info-card__download">
                                    <div class="branch-info-card__download-left">
                                        <img src="../images/file.svg" alt="">
                                        <span>Стоимость билетов</span>
                                    </div>

                                    <div class="branch-info-card__download-icon">
                                        <img src="../images/branch-detail/download.svg" alt="">
                                    </div>
                                </button>
                            </div>
                        </div>

                        <div class="branch-contact">
                            <h4 class="branch-contact__title title-h4">Контактное лицо</h4>

                            <?php renderContactPerson(
                                '../images/branch-detail/avatar.png',
                                "Иванов\nИван Федорович",
                                'Директор',
                                '+7 (4842) 72-16-18',
                                'ivanov.i@kaluga-museum.ru'
                            ); ?>
                        </div>
                    </aside>
                </div>
            </div>
        </section>

        <section class="branch-gallery">
            <div class="container">
                <div class="branch-gallery__header">
                    <h2 class="section-title branch-gallery__title">Фотогалерея</h2>

                    <div class="branch-gallery__navigation">
                        <button class="branch-gallery__button branch-gallery__button_prev" type="button"
                            aria-label="Предыдущее фото">
                            <img src="../images/arrow-left-m.svg" alt="">
                        </button>

                        <button class="branch-gallery__button branch-gallery__button_next" type="button"
                            aria-label="Следующее фото">
                            <img src="../images/arrow-right-m.svg" alt="">
                        </button>
                    </div>
                </div>

                <div class="swiper branch-gallery__swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide branch-gallery__slide">
                            <img class="branch-gallery__image" src="../images/branch-detail/bg.png" alt="Здание филиала">
                        </div>

                        <div class="swiper-slide branch-gallery__slide">
                            <img class="branch-gallery__image" src="../images/about-museum/exposition.png" alt="Экспозиция филиала">
                        </div>

                        <div class="swiper-slide branch-gallery__slide">
                            <img class="branch-gallery__image" src="../images/about-museum/museum.png" alt="Музейный зал">
                        </div>

                        <div class="swiper-slide branch-gallery__slide">
                            <img class="branch-gallery__image" src="../images/about-museum/museum.png" alt="Музейный зал">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="feedback-banner">
            <div class="container">
                <div class="feedback-banner__wrapper">
                    <div class="feedback-banner__layout">
                            <div class="feedback-banner__content">
                               <h2 class="section-title feedback-banner__title"> Уважаемые посетители! <br> Просим Вас оценить работу нашей организации!</h2>
                               <p class="feedback-banner__text">Пройдите анонимный опрос, отсканировав QR-код или перейдя по <a href="#" class="link">ссылке</a></p>

                               <?php renderMoreLink('#', 'Оценить работу', "feedback-banner__link"); ?>
                            </div>
                        <img class="feedback-banner__qr" src="../images/branch-detail/qr.png" alt="QR-код">
                    </div>
                </div>
            </div>
        </section>


        <?php renderOther(); ?>
    </main>

    <?php include dirname(__DIR__) . '/template-parts/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../js/main.js?v=3.0.5"></script>
</body>

</html>
