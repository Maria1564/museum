<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Журнал «Калужское наследие»</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="../css/style.css?v=3.0.17">

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

    ?>

    <main>
        <section class="journal">
            <div class="container">
                <?php renderPageHeader('Журнал «Калужское наследие»', ['Главная', 'Библиотека', 'Журнал «Калужское наследие»'], "journal__header"); ?>

                <div class="journal-year">
                    <h3 class="journal-year__title">2019 год</h3>

                    <div class="journal-year__list">
                        <div class="journal-year__card">
                            <div class="journal-year__card-img">
                                <img src="../images/library/book-1.png" alt="журнал">
                                <a href="#" class="journal-year__pdf">
                                    <img src="../images/file.svg" alt="файл">
                                    <span class="journal-year__pdf-text">Открыть PDF</span>
                                </a>
                            </div>
                            <div class="journal-year__card-shelf"></div>
                        </div>
                        <div class="journal-year__card">
                            <div class="journal-year__card-img">
                                <img src="../images/library/book-1.png" alt="журнал">
                                <a href="#" class="journal-year__pdf">
                                    <img src="../images/file.svg" alt="файл">
                                    <span class="journal-year__pdf-text">Открыть PDF</span>
                                </a>
                            </div>
                            <div class="journal-year__card-shelf"></div>
                        </div>
                        <div class="journal-year__card">
                            <div class="journal-year__card-img">
                                <img src="../images/library/book-1.png" alt="журнал">
                                <a href="#" class="journal-year__pdf">
                                    <img src="../images/file.svg" alt="файл">
                                    <span class="journal-year__pdf-text">Открыть PDF</span>
                                </a>
                            </div>
                            <div class="journal-year__card-shelf"></div>
                        </div>
                        <div class="journal-year__card">
                            <div class="journal-year__card-img">
                                <img src="../images/library/book-1.png" alt="журнал">
                                <a href="#" class="journal-year__pdf">
                                    <img src="../images/file.svg" alt="файл">
                                    <span class="journal-year__pdf-text">Открыть PDF</span>
                                </a>
                            </div>
                            <div class="journal-year__card-shelf"></div>
                        </div>
                    </div>
                </div>

                <div class="journal-year">
                    <h3 class="journal-year__title">2018 год</h3>

                    <div class="journal-year__list">
                        <div class="journal-year__card">
                            <div class="journal-year__card-img">
                                <img src="../images/library/book-1.png" alt="журнал">
                                <a href="#" class="journal-year__pdf">
                                    <img src="../images/file.svg" alt="файл">
                                    <span class="journal-year__pdf-text">Открыть PDF</span>
                                </a>
                            </div>
                            <div class="journal-year__card-shelf"></div>
                        </div>
                        <div class="journal-year__card">
                            <div class="journal-year__card-img">
                                <img src="../images/library/book-1.png" alt="журнал">
                                <a href="#" class="journal-year__pdf">
                                    <img src="../images/file.svg" alt="файл">
                                    <span class="journal-year__pdf-text">Открыть PDF</span>
                                </a>
                            </div>
                            <div class="journal-year__card-shelf"></div>
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