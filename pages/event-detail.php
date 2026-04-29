<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Гроза двенадцатого года настала...</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css">
    <link rel="stylesheet" href="../css/style.css?v=3.0.6">
</head>

<body>
    <?php include dirname(__DIR__) . '/template-parts/mobile-menu.php'; ?>

    <?php
    require_once dirname(__DIR__) . '/template-parts/header.php';
    renderHeader('light', 'events');
    require_once dirname(__DIR__) . '/template-parts/tags.php';
    require_once dirname(__DIR__) . '/template-parts/events-grid.php';
    require_once dirname(__DIR__) . '/template-parts/other.php';

    ?>


    <main>
        <section class="event-hero">
            <img src="../images/event-detail/event-hero-bg.jpg" alt="картинка" class="event-hero__bg">
            <div class="event-hero__overlay"></div>

            <div class="event-hero__wrapper">
                <div class="container">
                    <div class="event-hero__header">
                        <?php renderTags(['экскурсия', 'детское мероприятие', '16+']); ?>
                        <div class="event-hero__content">
                            <h1 class="event-hero__title">Гроза двенадцатого года настала внезапно и без приглашения
                            </h1>
                            <p class="event-hero__description">Интерактивная экскурсия «Гроза двенадцатого года настала…
                                Отечественная война 1812 года в творчестве А.С. Пушкина» позволит совершить незабываемое
                                путешествие по произведениям А.С. Пушкина, посвященным Отечественной войне 1812 г.</p>
                        </div>
                    </div>
                    <div class="event-hero__details">
                        <div class="event-hero__info-grid">
                            <div class="event-hero__info-item">
                                <img src="../images/event-detail/calendar-light.svg" alt="календарь" class="event-hero__info-icon">
                                <p class="event-hero__info-text">31 Марта – 14 Апреля</p>
                            </div>
                            <div class="event-hero__info-item">
                                <img src="../images/event-detail/ticket-light.svg" alt="билет" class="event-hero__info-icon">
                                <p class="event-hero__info-text">Вход свободный</p>
                            </div>
                            <div class="event-hero__info-item">
                                <img src="../images/event-detail/clock-light.svg" alt="часы" class="event-hero__info-icon">
                                <p class="event-hero__info-text">10:00 - 18:00</p>
                            </div>
                            <div class="event-hero__info-item">
                                <img src="../images/event-detail/map-pin-light.svg" alt="карта" class="event-hero__info-icon">
                                <p class="event-hero__info-text">Калуга, ул Пушкина, д 14</p>
                            </div>
                        </div>

                        <div class="event-hero__action">
                            <a href="#" class="event-hero__btn">КУПИТЬ БИЛЕТ</a>
                            <img src="../images/event-detail/pushkin-card.svg" alt="пушкинская карта">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="event-about event-section">
            <div class="container">
                <div class="event-about__layout">
                    <div class="event-about__content">
                        <h2 class="section-title event-about__title">О мероприятии</h2>
                        <div class="event-about__description editor-content">
                            <p>
                                Интерактивная экскурсия познакомит посетителей с историей усадьбы, музейными коллекциями
                                и редкими экспонатами, связанными с культурной жизнью Калужского края.
                            </p>

                            <p>
                                В программе предусмотрены <strong>тематические рассказы экскурсовода</strong>,
                                самостоятельный осмотр залов и небольшие задания для участников. Отдельные фрагменты
                                маршрута посвящены <em>архитектуре здания</em> и быту его владельцев.
                            </p>

                            <h2>Что входит в программу</h2>

                            <p>
                                Участники узнают, как формировалась экспозиция музея, почему отдельные предметы
                                считаются особенно ценными и какие события повлияли на развитие усадебной культуры
                                региона.
                            </p>

                            <ul>
                                <li>Знакомство с постоянной экспозицией музея.</li>
                                <li>Рассказ о владельцах усадьбы и истории здания.</li>
                                <li>Осмотр предметов быта, архивных материалов и произведений искусства.</li>
                            </ul>

                            <img src="../images/event-detail/gallery/photo-1.png" alt="Интерьер музейного зала">

                            <p>
                                После просмотра основной части экспозиции гости смогут задать вопросы экскурсоводу и
                                подробнее рассмотреть отдельные экспонаты. Дополнительная информация доступна на <a
                                    href="#">странице музея</a>.
                            </p>

                            <h3>Порядок посещения</h3>

                            <p>
                                Для участия рекомендуется прийти за 10–15 минут до начала мероприятия. Группы
                                формируются у входа в экспозиционный зал.
                            </p>

                            <ol>
                                <li>Зарегистрироваться на стойке администратора.</li>
                                <li>Получить входной билет или подтвердить электронную запись.</li>
                                <li>Дождаться начала экскурсии в зоне сбора группы.</li>
                            </ol>

                            <img src="../images/event-detail/gallery/photo-5.png" alt="Фрагмент музейной экспозиции">

                            <p>
                                Текст после изображения должен отображаться с обычным интервалом и не прилипать к
                                картинке. Этот абзац нужен для проверки отступов после медиа-контента.
                            </p>

                            <p>
                                В завершение посетители смогут самостоятельно пройти по залам и вернуться к тем
                                экспонатам, которые вызвали наибольший интерес.
                            </p>
                        </div>
                    </div>
                    <div class="event-about__tickets">
                        <h2 class="section-title event-about__title">Категория билетов</h2>
                        <ul class="event-about__tickets-list">
                            <li class="event-about__tickets-item">
                                <span class="event-about__tickets-name">Взрослые (граждане РФ)
                                </span>
                                <span class="event-about__tickets-price">300 ₽</span>
                            </li>
                            <li class="event-about__tickets-item">
                                <span class="event-about__tickets-name">Взрослые (Foreigner-иностранные граждане)
                                </span>
                                <span class="event-about__tickets-price">300 ₽</span>
                            </li>
                            <li class="event-about__tickets-item">
                                <span class="event-about__tickets-name">Льготный билет</span>
                                <span class="event-about__tickets-price">200 ₽</span>
                            </li>
                            <li class="event-about__tickets-item">
                                <span class="event-about__tickets-name">Студенческий билет
                                </span>
                                <span class="event-about__tickets-price">100 ₽</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="event-section event-gallery">
            <div class="container">
                <h2 class="section-title event-gallery__title">Фотогалерея</h2>
                <div class="event-gallery__grid">
                    <a class="event-gallery__img-container" href="../images/event-detail/gallery/photo-1.png"
                        data-fancybox="event-gallery" data-caption="Интерьер музейного зала">
                        <img src="../images/event-detail/gallery/photo-1.png" alt="Интерьер музейного зала">
                    </a>
                    <a class="event-gallery__img-container" href="../images/event-detail/gallery/photo-2.png"
                        data-fancybox="event-gallery" data-caption="Фрагмент музейной экспозиции">
                        <img src="../images/event-detail/gallery/photo-2.png" alt="Фрагмент музейной экспозиции">
                    </a>
                    <a class="event-gallery__img-container" href="../images/event-detail/gallery/photo-3.png"
                        data-fancybox="event-gallery" data-caption="Экспонаты музея">
                        <img src="../images/event-detail/gallery/photo-3.png" alt="Экспонаты музея">
                    </a>
                    <a class="event-gallery__img-container" href="../images/event-detail/gallery/photo-4.png"
                        data-fancybox="event-gallery" data-caption="Зал музея">
                        <img src="../images/event-detail/gallery/photo-4.png" alt="Зал музея">
                    </a>
                    <a class="event-gallery__img-container" href="../images/event-detail/gallery/photo-5.png"
                        data-fancybox="event-gallery" data-caption="Историческая экспозиция">
                        <img src="../images/event-detail/gallery/photo-5.png" alt="Историческая экспозиция">
                    </a>
                    <a class="event-gallery__img-container" href="../images/event-detail/gallery/photo-6.png"
                        data-fancybox="event-gallery" data-caption="Музейная коллекция">
                        <img src="../images/event-detail/gallery/photo-6.png" alt="Музейная коллекция">
                    </a>
                    <a class="event-gallery__img-container" href="../images/event-detail/gallery/photo-7.png"
                        data-fancybox="event-gallery" data-caption="Деталь экспозиции">
                        <img src="../images/event-detail/gallery/photo-7.png" alt="Деталь экспозиции">
                    </a>
                </div>
            </div>
        </section>

        <section class="event-section related-events">
            <div class="container">
                <div class="related-events__header">
                    <h2 class="section-title related-events__title">Похожие мероприятия</h2>
                    <div class="related-events__navigation">
                        <button class="related-events__button related-events__button_prev" type="button"
                            aria-label="Предыдущее мероприятие">
                            <img src="../images/arrow-left-m.svg" alt="стрелка">
                        </button>

                        <button class="related-events__button related-events__button_next" type="button"
                            aria-label="Следующее мероприятие">
                            <img src="../images/arrow-right-m.svg" alt="стрелка">
                        </button>
                    </div>
                </div>
                <div class="swiper related-events__swiper">
                    <div class="swiper-wrapper">
                        <?php foreach (getEventsCards() as $event): ?>
                            <div class="swiper-slide related-events__slide">
                                <?php renderEventCard($event); ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

        <?php renderOther(); ?>
    </main>

    <?php include dirname(__DIR__) . '/template-parts/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script>
        Fancybox.bind('[data-fancybox="event-gallery"]', {});
    </script>
    <script src="../js/main.js?v=3.0.2"></script>
</body>

</html>
