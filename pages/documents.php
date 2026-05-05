<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Документы</title>

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
    renderHeader('dark', 'documents');

    require_once dirname(__DIR__) . '/template-parts/page-header.php';
    require_once dirname(__DIR__) . '/template-parts/other.php';
    ?>

    <?php
    $documentGroups = [
        [
            'title' => 'Федеральные законы',
            'items' => [
                [
                    'text' => 'Федеральный закон от 19.12.2016 № 418-ФЗ',
                    'href' => '#',
                ],
                [
                    'text' => 'Федеральный закон от 19.12.2016 № 418-ФЗ',
                    'href' => '#',
                ],
                [
                    'text' => 'Федеральный закон от 19.12.2016 № 418-ФЗ',
                    'href' => '#',
                ],
                [
                    'text' => 'Федеральный закон от 19.12.2016 № 418-ФЗ',
                    'href' => '#',
                ],
            ],
        ],
        [
            'title' => 'Нормативные правовые акты Правительства РФ',
            'items' => [
                [
                    'text' => 'Постановление Правительства Российской Федерации от 08.12.2017 года №1492',
                    'href' => '#',
                ],
                [
                    'text' => 'Постановление Правительства РФ от 21.04.2016 № 332',
                    'href' => '#',
                ],
                [
                    'text' => 'Постановление Правительства РФ от 21.04.2016 № 332',
                    'href' => '#',
                ],
                [
                    'text' => 'Постановление Правительства РФ от 21.04.2016 № 332',
                    'href' => '#',
                ],
            ],
        ],
        [
            'title' => 'Нормативные правовые акты Правительства РФ',
            'items' => [
                [
                    'text' => 'Постановление Правительства Российской Федерации от 08.12.2017 года №1492',
                    'href' => '#',
                ],
                [
                    'text' => 'Постановление Правительства РФ от 21.04.2016 № 332',
                    'href' => '#',
                ],
                [
                    'text' => 'Постановление Правительства РФ от 21.04.2016 № 332',
                    'href' => '#',
                ],
                [
                    'text' => 'Постановление Правительства РФ от 21.04.2016 № 332',
                    'href' => '#',
                ],
            ],
        ]
    ];
    ?>

    <main>
        <section class="documents">
            <div class="container">
                <?php renderPageHeader('Документы', ['Главная', 'Документы'], "documents__header"); ?>
                <?php foreach ($documentGroups as $group): ?>
                    <div class="documents__group">
                        <h3 class="title-h3 documents__group-title"><?= htmlspecialchars($group['title'], ENT_QUOTES, 'UTF-8') ?></h3>

                        <div class="documents__list">
                            <?php foreach ($group['items'] as $document): ?>
                                <a href="<?= htmlspecialchars($document['href'], ENT_QUOTES, 'UTF-8') ?>" class="documents__link" download>
                                    <img src="../images/file.svg" alt="документ" class="documents__icon">
                                    <p class="documents__text"><?= htmlspecialchars($document['text'], ENT_QUOTES, 'UTF-8') ?></p>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
        <?php renderOther(); ?>
    </main>

    <?php include dirname(__DIR__) . '/template-parts/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../js/main.js?v=3.0.5"></script>
</body>

</html>
