<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Филиалы</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="../css/style.css?v=3.0.12">

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
    require_once dirname(__DIR__) . '/template-parts/checkbox.php';
    require_once dirname(__DIR__) . '/template-parts/other.php';

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
                            <img class="branch-hero__address-icon" src="../images/event-detail/map-pin-light.svg" alt="">
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
        <?php renderOther(); ?>
    </main>

    <?php include dirname(__DIR__) . '/template-parts/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../js/main.js?v=3.0.2"></script>
</body>

</html>