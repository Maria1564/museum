<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Посетителям</title>

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
    renderHeader('dark', 'library');

    require_once dirname(__DIR__) . '/template-parts/page-header.php';
    require_once dirname(__DIR__) . '/template-parts/other.php';
    require_once dirname(__DIR__) . '/template-parts/more-link.php';

    ?>

    <main>
        <section class="library">
            <div class="container">
                <?php renderPageHeader('Библиотека', ['Главная', 'Библиотека'], "library__header"); ?>

                <div class="library__layout">
                    <div class="library__card">
                        <div class="library__book library-book">
                            <div class="library-book__img">
                                <img src="../images/library/book-1.png" alt="книга">
                            </div>
                            <div class="library-book__shelf"></div>
                        </div>
                        <p class="library__card-title">Журнал «Калужское наследие»</p>
                        <?php renderMoreLink("../pages/journal.php", "Подробнее", 'library__card-btn'); ?>

                    </div>
                    <div class="library__card">
                        <div class="library__book library-book">
                            <div class="library-book__img">
                                <img src="../images/library/book-2.png" alt="книга">
                            </div>
                            <div class="library-book__shelf"></div>
                        </div>
                        <p class="library__card-title">Журнал «Вопросы истории»</p>
                        <?php renderMoreLink("../pages/journal.php", "Подробнее", 'library__card-btn'); ?>
                    </div>
                    <div class="library__card">
                        <div class="library__book library-book">
                            <div class="library-book__img">
                                <img src="../images/library/book-3.png" alt="книга">
                            </div>
                            <div class="library-book__shelf"></div>
                        </div>
                        <p class="library__card-title">Журнал «Связь времен и поколений»</p>
                        <?php renderMoreLink("../pages/journal.php", "Подробнее", 'library__card-btn'); ?>
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