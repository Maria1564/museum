<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Экспозиции</title>

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
    renderHeader('dark', 'zavershye');

    require_once dirname(__DIR__) . '/template-parts/page-header.php';
    require_once dirname(__DIR__) . '/template-parts/other.php';
    require_once dirname(__DIR__) . '/template-parts/more-link.php';

    ?>

    <main>
       
        <section class="expositions">
            <div class="container">
                 <?php renderPageHeader('Экспозиции', ['Главная', 'Экспозиции'], "expositions__header"); ?>

                 <div class="expositions__layout">
                    <div class="expositions__card exposition-card">
                        <div class="exposition-card__img">
                            <img src="../images/expositions/photo-1.png" alt="экспозиция">
                        </div>
                        <div class="exposition-card__content">
                            <p class="exposition-card__title">Великая Отечественная война. Бои за Боровск</p>
                            
                            <div class="exposition-card__details">
                                <div class="exposition-card__detail">
                                    <img src="../images/clock.svg" alt="часы">
                                    <span class="exposition-card__detail-text">Открыто Пн-Пт с 08:00 до 18:00 </span>
                                </div>
                                <div class="exposition-card__detail">
                                    <img src="../images/map-pin.svg" alt="указатель">
                                    <span class="exposition-card__detail-text">Музейно-краеведческий комплекс «Усадьба Золотарёвых»</span>
                                </div>
                            </div>

                            <?php renderMoreLink("#"); ?>
                        </div>
                    </div>
                    <div class="expositions__card exposition-card">
                        <div class="exposition-card__img">
                            <img src="../images/expositions/photo-1.png" alt="экспозиция">
                        </div>
                        <div class="exposition-card__content">
                            <p class="exposition-card__title">Великая Отечественная война. Бои за Боровск</p>
                            
                            <div class="exposition-card__details">
                                <div class="exposition-card__detail">
                                    <img src="../images/clock.svg" alt="часы">
                                    <span class="exposition-card__detail-text">Открыто Пн-Пт с 08:00 до 18:00 </span>
                                </div>
                                <div class="exposition-card__detail">
                                    <img src="../images/map-pin.svg" alt="указатель">
                                    <span class="exposition-card__detail-text">Музейно-краеведческий комплекс «Усадьба Золотарёвых»</span>
                                </div>
                            </div>

                            <?php renderMoreLink("#"); ?>
                        </div>
                    </div>
                    <div class="expositions__card exposition-card">
                        <div class="exposition-card__img">
                            <img src="../images/expositions/photo-1.png" alt="экспозиция">
                        </div>
                        <div class="exposition-card__content">
                            <p class="exposition-card__title">Великая Отечественная война. Бои за Боровск</p>
                            
                            <div class="exposition-card__details">
                                <div class="exposition-card__detail">
                                    <img src="../images/clock.svg" alt="часы">
                                    <span class="exposition-card__detail-text">Открыто Пн-Пт с 08:00 до 18:00 </span>
                                </div>
                                <div class="exposition-card__detail">
                                    <img src="../images/map-pin.svg" alt="указатель">
                                    <span class="exposition-card__detail-text">Музейно-краеведческий комплекс «Усадьба Золотарёвых»</span>
                                </div>
                            </div>

                            <?php renderMoreLink("#"); ?>
                        </div>
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
