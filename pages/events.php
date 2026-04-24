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
</body>

</html>
