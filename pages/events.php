<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Афиша мероприятий</title>
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
    renderHeader('dark', 'events');
    require_once dirname(__DIR__) . '/template-parts/breadcrumbs.php';
    ?>

    <main>
        <section class="events-page">
            <div class="container">
                <div class="events-page__header">
                    <?php renderBreadcrumbs(['Главная', 'Афиша мероприятий']); ?>
                    <h1 class="events-page__title">Афиша мероприятий</h1>
                </div>

                <div class="events-page__filters">
                    <div class="events-page__filter-selects">
                        <div class="select">
                            <button class="select__button" type="button">
                                <span class="select__text">Вид мероприятия</span>
                                <span class="select__icon_arrow"><img src="../images/arrow-down.svg" alt=""> </span>
                                <span class="select__icon_cross"><img src="../images/close-black.svg" alt=""> </span>

                            </button>

                            <ul class="select__dropdown">
                                <li class="select__option">Выставка</li>
                                <li class="select__option">Экскурсия</li>
                                <li class="select__option">Мастер-класс</li>
                                <li class="select__option">Лекция</li>
                            </ul>
                        </div>

                        <div class="select">
                            <button class="select__button" type="button">
                                <span class="select__text">Тип музея</span>
                                <span class="select__icon_arrow"><img src="../images/arrow-down.svg" alt="стрелка"> </span>
                                <span class="select__icon_cross"><img src="../images/close-black.svg" alt="крестик"> </span>   
                            </button>

                            <ul class="select__dropdown">
                                <li class="select__option">Краеведческий музей</li>
                                <li class="select__option">Исторический музей</li>
                                <li class="select__option">Художественный музей</li>
                                <li class="select__option">Военно-исторический музей</li>
                            </ul>
                        </div>
                    </div>

                    <div class="events-page__filter-options">
                        <label class="checkbox">
                            <input class="checkbox__input" type="checkbox" name="is_child_event">
                            <span class="checkbox__box"></span>
                            <span class="checkbox__text">Детское мероприятие</span>
                        </label>

                        <label class="checkbox">
                            <input class="checkbox__input" type="checkbox" name="has_pushkin_card">
                            <span class="checkbox__box"></span>
                            <span class="checkbox__text">Пушкинская карта</span>
                        </label>
                    </div>

                     <div class="events-page__filter-actions">
                        <button class="filter-button"><img src="../images/options.svg" alt="настройки">Фильтры</button>   
                        <button class="filter-button filter-button__reset">Сбросить фильтры</button>   
                     </div>   
                </div>

                <?php
                require_once dirname(__DIR__) . '/template-parts/events-grid.php';
                renderEventsGrid();
                ?>

                <div class="events-filters">

                </div>
            </div>
        </section>
        <?php
        require_once dirname(__DIR__) . '/template-parts/other.php';
        renderOther();
        ?>
    </main>
    <?php include dirname(__DIR__) . '/template-parts/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/select.js"></script>
</body>

</html>
