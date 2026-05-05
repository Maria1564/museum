<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты</title>

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
    require_once dirname(__DIR__) . '/template-parts/contact-person.php';

    ?>


    <main class="contacts">
        <div class="container"> <?php renderPageHeader('Контакты', ['Главная', 'Контакты'], "contacts__header"); ?>
        </div>
        <div class="container">
            <section class="contacts__info">
                <div class="contacts__info-item">
                    <img class="contacts__info-icon" src="../images/event-detail/map-pin-light.svg" alt="">
                    <div class="contacts__info-content">
                        <h4 class="contacts__info-title">Адрес</h4>
                        <p class="contacts__info-text">248000 г. Калуга ул. Пушкина д. 4.</p>
                    </div>
                </div>

                <div class="contacts__info-item">
                    <img class="contacts__info-icon" src="../images/event-detail/clock-light.svg" alt="">
                    <div class="contacts__info-content">
                        <h4 class="contacts__info-title">Время работы</h4>
                        <p class="contacts__info-text">Пн - Пт: с 9:00 до 20:00 МСК <br>
                            Сб - Вс: с 10:00 до 18:00 МСК</p>

                    </div>
                </div>

                <div class="contacts__info-item">
                    <img class="contacts__info-icon" src="../images/phone.svg" alt="">
                    <div class="contacts__info-content">
                        <h4 class="contacts__info-title">Телефон</h4>
                        <a class="contacts__info-text" href="tel:+74842721618">+7 (4842) 72-16-18</a>
                    </div>
                </div>

                <div class="contacts__info-item">
                    <img class="contacts__info-icon" src="../images/event-detail/clock-light.svg" alt="">
                    <div class="contacts__info-content">
                        <h4 class="contacts__info-title">Email</h4>
                        <a class="contacts__info-text" href="mailto:info@kaluga-museum.ru">info@kaluga-museum.ru</a>
                    </div>
                </div>
            </section>


            <section class="contacts__persons">
                <h3 class="title-h3 contacts__persons-title">Контактные лица</h3>
                <div class="contacts__persons-layout">
                        <?php renderContactPerson(
                            '../images/branch-detail/avatar.png',
                            "Бессонов\n Виталий Анатольевич",
                            'Генеральный директор',
                            '+7 (4842) 72-16-18',
                            'ivanov.i@kaluga-museum.ru',
                            'contacts__persons-item'
                        ); ?>
                        <?php renderContactPerson(
                            '../images/branch-detail/avatar.png',
                            "Шмытова \nИрина Владимировна",
                            'Заместитель генерального директора',
                            '+7 (4842) 72-16-18',
                            'ivanov.i@kaluga-museum.ru',
                            'contacts__persons-item'
                        ); ?>
                        <?php renderContactPerson(
                            '../images/branch-detail/avatar.png',
                            "Новикова\n Татьяна Ивановна",
                            'Заместитель генерального директора по экономической и административно-хозяйственной работе',
                            '+7 (4842) 72-16-18',
                            'ivanov.i@kaluga-museum.ru',
                            'contacts__persons-item'
                        ); ?>
                </div>
            </section>

        
        </div>
    </main>

    <?php include dirname(__DIR__) . '/template-parts/footer.php'; ?>

    <script src="../js/main.js?v=3.0.5"></script>
</body>

</html>