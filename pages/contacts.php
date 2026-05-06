<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты</title>

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
    renderHeader('dark', 'contacts');

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

            <section class="contacts__map">
                <h3 class="title-h3 contacts__map-title">Мы на карте</h3>
                <div class="contacts__map-frame">
                    <iframe
                        src="https://yandex.ru/map-widget/v1/?text=%D0%9C%D1%83%D0%B7%D0%B5%D0%B9%D0%BD%D0%BE-%D0%BA%D1%80%D0%B0%D0%B5%D0%B2%D0%B5%D0%B4%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9%20%D0%BA%D0%BE%D0%BC%D0%BF%D0%BB%D0%B5%D0%BA%D1%81%20%C2%AB%D0%A3%D1%81%D0%B0%D0%B4%D1%8C%D0%B1%D0%B0%20%D0%97%D0%BE%D0%BB%D0%BE%D1%82%D0%B0%D1%80%D1%91%D0%B2%D1%8B%D1%85%C2%BB%2C%20%D0%9A%D0%B0%D0%BB%D1%83%D0%B3%D0%B0%2C%20%D1%83%D0%BB%D0%B8%D1%86%D0%B0%20%D0%9F%D1%83%D1%88%D0%BA%D0%B8%D0%BD%D0%B0%2C%2014&z=16&scroll=false"
                        width="100%" height="100%" frameborder="0" allowfullscreen="true" loading="lazy">
                    </iframe>
                </div>
            </section>


        </div>

        <section class="contacts__form contacts-form">
            <div class="container">
                <div class="contacts-form__layout">
                    <div class="contacts-form__content">
                        <h2 class="section-title contacts-form__title">Остались вопросы или хотите сваязаться с нами напрямую?</h2>
                        <div class="contacts-form__phones">
                            <div class="contacts-form__phone">
                                <p class="contacts-form__phone-text">телефон для связи:
                                </p>
                                <p class="contacts-form__phone-link">+7 (4842) 72-16-18</p>
                            </div>
                        </div>
                    </div>

                    <form class="contacts-form__main">
                        <div class="contacts-form__fields">
                            <div class="contacts-form__field contacts-form__field-50">
                                <input type="text" name="" id="" class="contacts-form__inp" placeholder=" ">
                                <label class="contacts-form__label">Ваше имя</label>
                            </div>
                            <div class="contacts-form__field contacts-form__field-50">
                                <input type="text" name="" id="" class="contacts-form__inp" placeholder=" ">
                                <label class="contacts-form__label">Телефон</label>
                            </div>
                            <div class="contacts-form__field contacts-form__field-full">
                                <input type="text" name="" id="" class="contacts-form__inp" placeholder=" ">
                                <label class="contacts-form__label">Email</label>
                            </div>
                            <div class="contacts-form__field contacts-form__field-full">
                                <textarea  rows="7" name="" id="" class="contacts-form__inp"
                                    placeholder=" "></textarea>
                                <label class="contacts-form__label contacts-form__label-textarea">Ваше
                                    сообщение</label>
                            </div>

                        </div>

                        <div class="contact-form__actions">
                            <button class="contact-form__btn-submit" disabled>Отправить</button>
                            <label class="contacts-form__agreement">
                                <input type="checkbox" class="contacts-form__agreement-input">
                                <span class="contacts-form__agreement-box"></span>
                                <span class="contacts-form__agreement-text">
                                    Нажимая кнопку «Отправить», Вы принимаете условия Политики конфиденциальности,
                                    а также даете согласие на обработку Ваших персональных данных и их передачу.
                                </span>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <?php include dirname(__DIR__) . '/template-parts/footer.php'; ?>

    <script src="../js/main.js?v=3.0.5"></script>
    <script src="../js/form.js?v=1.0.0"></script>
</body>

</html>
