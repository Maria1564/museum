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
    <link rel="stylesheet" href="../css/style.css?v=3.0.0">
</head>
<body>
    <?php include dirname(__DIR__) . '/template-parts/mobile-menu.php'; ?>

    <?php
    require_once dirname(__DIR__) . '/template-parts/header.php';
    renderHeader('light', 'events');
    require_once dirname(__DIR__) . '/template-parts/tags.php';

    ?>
    

    <main>
        <section class="event-hero">
            <img src="../images/event-hero-bg.jpg" alt="картинка" class="event-hero__bg">
            <div class="event-hero__overlay"></div>

            <div class="event-hero__wrapper">
                <div class="container">
                    <div class="event-hero__header">
                        <?php renderTags(['экскурсия','детское мероприятие', '16+']); ?>
                        <div class="event-hero__content">
                            <h1 class="event-hero__title">Гроза двенадцатого года настала...</h1>
                            <p class="event-hero__description">Интерактивная экскурсия «Гроза двенадцатого года настала… Отечественная война 1812 года в творчестве А.С. Пушкина» позволит совершить незабываемое путешествие по произведениям А.С. Пушкина, посвященным Отечественной войне 1812 г.</p>
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
    </main>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>