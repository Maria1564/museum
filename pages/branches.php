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
    renderHeader('dark', 'branches');

    require_once dirname(__DIR__) . '/template-parts/page-header.php';
    require_once dirname(__DIR__) . '/template-parts/checkbox.php';
    require_once dirname(__DIR__) . '/template-parts/other.php';
    require_once dirname(__DIR__) . '/template-parts/more-link.php';

    ?>

    <main>
        <section class="branches">
            <div class="container">
                <div class="branches__header">
                    <?php renderPageHeader('Филиалы', ['Главная', 'Филиалы']); ?>
                    <?php renderCheckbox('branches_filter', 'Работают сейчас', true, 'branches__checkbox'); ?>
                </div>
                <div class="branches__list">
                    <article class="branches__card">
                        <div class="branches__card-img">
                            <img src="../images/branches/location-card.png" alt="филиал 1">
                        </div>
                        <div class="branches__card-content">
                            <p class="branches__card-title">Музейно-краеведческий комплекс «Усадьба Золотарёвых»</p>

                            <ul class="branches__list-meta">
                                <li class="branches__item-meta">
                                    <img src="../images/map-pin.svg" alt="поинт">
                                    <span class="branches__item-meta-text">248000, г. Калуга, ул. Пушкина, д. 14.</span>
                                </li>
                                <li class="branches__item-meta">
                                    <img src="../images/clock.svg" alt="часы">
                                    <span class="branches__item-meta-text">Вторник-пятница, воскресенье с 9:30 до
                                        18:00</span>
                                </li>
                                <li class="branches__item-meta">
                                    <img src="../images/phone-dark.svg" alt="телефон">
                                    <span class="branches__item-meta-text">8 (4842) 72-16-18</span>
                                </li>
                            </ul>

                            <?php renderMoreLink("#"); ?>
                        </div>
                    </article>

                    <article class="branches__card">
                        <div class="branches__card-img">
                            <img src="../images/branches/location-card-2.png" alt="филиал 2">
                            <span class="branches-card__status branches-card__status_closed">
                                <img src="../images/branches/flag.svg" alt="флаг">
                                Санитарный день 
                            </span>
                        </div>
                        <div class="branches__card-content">
                            <p class="branches__card-title">Музей-заповедник «Полотняный Завод»</p>

                            <ul class="branches__list-meta">
                                <li class="branches__item-meta">
                                    <img src="../images/map-pin.svg" alt="поинт">
                                    <span class="branches__item-meta-text"> 249844, Калужская область, Дзержинский район, пос. Полотняный Завод, ул. Трудовая, д. 2а, музей-заповедник «Полотняный Завод»..</span>
                                </li>
                                <li class="branches__item-meta">
                                    <img src="../images/clock.svg" alt="часы">
                                    <span class="branches__item-meta-text">Рабочие дни: вторник — воскресенье, с 9:30 до 18:00, без обеда. <br>Касса работает до 17.30.<br> Выходной день — понедельник; санитарный день — последняя среда месяца.</span>
                                </li>
                                <li class="branches__item-meta">
                                    <img src="../images/phone-dark.svg" alt="телефон">
                                    <span class="branches__item-meta-text">8 (48434) 7-43-79</span>
                                </li>
                            </ul>

                            <?php renderMoreLink("#"); ?>
                        </div>
                    </article>

                    <article class="branches__card">
                        <div class="branches__card-img">
                            <img src="../images/branches/location-card-3.png" alt="филиал 3">
                            <span class="branches-card__status branches-card__status_repair">
                                <img src="../images/branches/remont.svg" alt="флаг">
                                На ремонте 
                            </span>
                        </div>
                        <div class="branches__card-content">
                            <p class="branches__card-title">Музейно-выставочный центр «Дом Щепочкина»</p>

                            <ul class="branches__list-meta">
                                <li class="branches__item-meta">
                                    <img src="../images/map-pin.svg" alt="поинт">
                                    <span class="branches__item-meta-text">249844, Калужская область, пос. Полотняный Завод, ул. Спортсмена, д. 8.</span>
                                </li>
                                <li class="branches__item-meta">
                                    <img src="../images/clock.svg" alt="часы">
                                    <span class="branches__item-meta-text">Начало экскурсионных сеансов - 10.00, 10.40, 11.20, 12.00, 12.40, 13.20, 14.00, 14.40, 15.20, 16.00, 16.40, 17.00 <br> Понедельник, вторник – выходные дни.</span>
                                </li>
                                <li class="branches__item-meta">
                                    <img src="../images/phone-dark.svg" alt="телефон">
                                    <span class="branches__item-meta-text">+7 (48434) 7–43-79</span>
                                </li>
                            </ul>

                            <?php renderMoreLink("#"); ?>
                        </div>
                    </article>
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
