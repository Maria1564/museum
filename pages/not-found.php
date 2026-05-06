<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Посетителям</title>

    <link rel="stylesheet" href="../css/style.css?v=3.0.18">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&display=swap" rel="stylesheet">
</head>

<body>
    <?php include dirname(__DIR__) . '/template-parts/mobile-menu.php'; ?>

    <?php
    require_once dirname(__DIR__) . '/template-parts/header.php';
    renderHeader('dark');

    require_once dirname(__DIR__) . '/template-parts/other.php';
    ?>

    <main class="not-found">
        <div class="container">
<div class="not-found__wrapper">
            <div class="not-found__info">
                <h1 class="title not-found__title">К сожалению, такой страницы не существует</h1>
                <p class="not-found__text">Вероятно, эта страница была удалена или никогда не существовала.</p>
            </div>

            <img class="not-found__img" src="../images/not-found.png" alt="404">

            <a href="../pages/index.php" class="not-found__btn">Вернуться на главную</a>
        </div>
        </div>
    </main>

    <?php include dirname(__DIR__) . '/template-parts/footer.php'; ?>

    <script src="../js/main.js?v=3.0.5"></script>
</body>

</html>
