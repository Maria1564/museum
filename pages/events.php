<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Афиша мероприятий</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="../css/style.css?v=3.0.6">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&display=swap" rel="stylesheet">
</head>

<body>
    <?php include dirname(__DIR__) . '/template-parts/mobile-menu.php'; ?>

    <?php
    require_once dirname(__DIR__) . '/template-parts/header.php';
    renderHeader('dark', 'events');
    require_once dirname(__DIR__) . '/template-parts/page-header.php';
    require_once dirname(__DIR__) . '/template-parts/select.php';
    require_once dirname(__DIR__) . '/template-parts/checkbox.php';

    $eventTypeOptions = ['Выставка', 'Экскурсия', 'Мастер-класс', 'Лекция'];
    $museumTypeOptions = ['Краеведческий музей', 'Исторический музей', 'Художественный музей', 'Военно-исторический музей', "Информационно-образовательный и выставочный центр"];
    ?>

    <div class="drawer events-filters">
        <div class="drawer__wrapper events-filters__wrapper">
            <div class="events-filters__header">
                <h2 class="events-filters__title">Фильтры</h2>
                <img src="../images/events/close-brown-2.svg" alt="крестик" class="drawer__close-icon">
            </div>

            <div class="events-filters__content">
                <div class="events-filters__filter-selects">
                    <?php renderSelect('Вид мероприятия', $eventTypeOptions, 'events-filters__select'); ?>
                    <?php renderSelect('Тип музея', $museumTypeOptions, 'events-filters__select'); ?>
                </div>
                <div class="events-filters__options">
                    <?php renderCheckbox('is_child_event', 'Детское мероприятие'); ?>
                    <?php renderCheckbox('has_pushkin_card', 'Пушкинская карта'); ?>
                </div>
            </div>
            <div class="events-filters__futter">
                <button class="filter-button filter-button__reset events-filters__btn">Сбросить фильтры</button>
            </div>
        </div>
    </div>

    <main>
        <section class="events-page">
            <div class="container">
                <?php renderPageHeader('Афиша мероприятий', ['Главная', 'Афиша мероприятий'], 'events-page__header'); ?>

                <div class="events-page__filters">
                    <div class="events-page__filter-selects">
                        <?php renderSelect('Вид мероприятия', $eventTypeOptions); ?>
                        <?php renderSelect('Тип музея', $museumTypeOptions); ?>
                    </div>

                    <div class="events-page__filter-options">
                        <?php renderCheckbox('is_child_event', 'Детское мероприятие'); ?>
                        <?php renderCheckbox('has_pushkin_card', 'Пушкинская карта'); ?>
                    </div>

                    <div class="events-page__filter-actions">
                        <button class="filter-button events-page__btn-toggle"><img src="../images/events/options.svg"
                                alt="настройки">Фильтры</button>
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
    <script src="../js/main.js?v=3.0.2"></script>
    <script src="../js/filters.js?v=3.0.2"></script>
</body>

</html>
