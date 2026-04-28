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
    <link rel="stylesheet" href="../css/style.css?v=3.0.1">
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
            <img src="../images/event-hero-bg.jpg" alt="картинка" class="event-hero__bg">
            <div class="event-hero__overlay"></div>

            <div class="event-hero__wrapper">
                <div class="container">
                    <div class="event-hero__header">
                        <?php renderTags(['экскурсия', 'детское мероприятие', '16+']); ?>
                        <div class="event-hero__content">
                            <h1 class="event-hero__title">Гроза двенадцатого года настала...</h1>
                            <p class="event-hero__description">Интерактивная экскурсия «Гроза двенадцатого года настала…
                                Отечественная война 1812 года в творчестве А.С. Пушкина» позволит совершить незабываемое
                                путешествие по произведениям А.С. Пушкина, посвященным Отечественной войне 1812 г.</p>
                        </div>
                    </div>
                    <div class="event-hero__details">
                        <div class="event-hero__info-grid">
                            <div class="event-hero__info-item">
                                <img src="../images/calendar-light.svg" alt="календарь" class="event-hero__info-icon">
                                <p class="event-hero__info-text">31 Марта – 14 Апреля</p>
                            </div>
                            <div class="event-hero__info-item">
                                <img src="../images/ticket-light.svg" alt="билет" class="event-hero__info-icon">
                                <p class="event-hero__info-text">Вход свободный</p>
                            </div>
                            <div class="event-hero__info-item">
                                <img src="../images/clock-light.svg" alt="часы" class="event-hero__info-icon">
                                <p class="event-hero__info-text">10:00 - 18:00</p>
                            </div>
                            <div class="event-hero__info-item">
                                <img src="../images/map-pin-light.svg" alt="карта" class="event-hero__info-icon">
                                <p class="event-hero__info-text">Калуга, ул Пушкина, д 14</p>
                            </div>
                        </div>

                        <div class="event-hero__action">
                            <a href="#" class="event-hero__btn">КУПИТЬ БИЛЕТ</a>
                            <img src="../images/pushkin-card.svg" alt="пушкинская карта">
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
                        <p class="event-about__description">Одно из самых роскошных зданий в Калуге – бывшая усадьба
                            купца Золотарёва, построенная в начале XIX века. Первый этаж бывшего дома Золотарёва отдан
                            под отдел природы Калужского областного краеведческого музея. В залах музея расположены два
                            экспозиционных отдела: истории и природы Калужского края. Новейшая история представлена
                            темой «События Великой Отечественной войны на территории края». Здесь можно познакомиться с
                            геологической историей и типичными обитателями Калужской области. В отделе природы
                            представлены чучела животных, образцы горных пород, типичные ландшафты области. Залы второго
                            этажа делились на две анфилады: жилые и парадные комнаты. Сейчас в них представлена
                            историческая экспозиция, охватывающая период с древности до начала XX века.</p>
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
                    <div class="event-gallery__img-container"><img src="../images/event-gallery/photo-1.png"
                            alt="картинка"></div>
                    <div class="event-gallery__img-container"><img src="../images/event-gallery/photo-2.png"
                            alt="картинка"></div>
                    <div class="event-gallery__img-container"><img src="../images/event-gallery/photo-3.png"
                            alt="картинка"></div>
                    <div class="event-gallery__img-container"><img src="../images/event-gallery/photo-4.png"
                            alt="картинка"></div>
                    <div class="event-gallery__img-container"><img src="../images/event-gallery/photo-5.png"
                            alt="картинка"></div>
                    <div class="event-gallery__img-container"><img src="../images/event-gallery/photo-6.png"
                            alt="картинка"></div>
                    <div class="event-gallery__img-container"><img src="../images/event-gallery/photo-7.png"
                            alt="картинка"></div>
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
    <script src="../js/main.js?v=3.0.1"></script>
</body>

</html>
