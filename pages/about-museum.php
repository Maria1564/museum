<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О музее</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="../css/style.css?v=3.0.3">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&display=swap" rel="stylesheet">
</head>

<body>
    <?php include dirname(__DIR__) . '/template-parts/mobile-menu.php'; ?>

    <?php
    require_once dirname(__DIR__) . '/template-parts/header.php';
    renderHeader('dark', 'about');

    require_once dirname(__DIR__) . '/template-parts/page-header.php';
    ?>

    <main>
        <div class="container">
            <?php renderPageHeader('О музее', ['Главная', 'О музее'], 'about-museum__header'); ?>

            <section class="about-museum-intro">
                 <img src="../images/about-museum/museum.png" alt="Музей" class="about-museum-intro__img">
                <div class="about-museum-intro__content editor-content">
                   

                    <p>Калужский объединенный музей-заповедник — это ведущее научное и просветительское учреждение
                        региона, объединяющее под своим началом 24 филиала по всей Калужской области. Мы являемся
                        хранителями многовековой памяти, представляя гостям путь развития края от глубокой древности до
                        современности.</p>

                    <h2>Льготное посещение и программа #СВОяКУЛЬТУРА</h2>

                    <p>Музей-заповедник предоставляет право бесплатного посещения всех своих филиалов для участников
                        специальной военной операции и членов их семей.</p>

                    <p>Также в рамках поддержки военнослужащих и их близких музей участвует в программе «#СВОяКУЛЬТУРА».
                        Для получения льготы необходимо предъявить соответствующие документы в кассе музея. Подробную
                        информацию о правилах бесплатного входа для других категорий граждан (пенсионеры, многодетные
                        семьи и др.) можно уточнить непосредственно в филиалах или по телефону</p>
                </div>
            </section>


        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../js/main.js?v=3.0.1"></script>
</body>

</html>