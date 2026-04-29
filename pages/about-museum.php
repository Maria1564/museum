<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О музее</title>
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
    renderHeader('dark', 'about');

    require_once dirname(__DIR__) . '/template-parts/page-header.php';
    require_once dirname(__DIR__) . '/template-parts/other.php';
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

            <section class="museum-history">
                <div class="museum-history__header">
                    <h2 class="section-title">История музея</h2>
                    <div class="museum-history__navigation">
                        <button class="museum-history__button museum-history__button_prev" type="button"
                            aria-label="Предыдущий год"><img src="../images/arrow-left-m.svg" alt=""></button>
                        <button class="museum-history__button museum-history__button_next" type="button"
                            aria-label="Следующий год"><img src="../images/arrow-right-m.svg" alt=""></button>
                    </div>
                </div>

                <div class="swiper museum-history__years-swiper" aria-label="Годы истории музея">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide museum-history__year-slide">
                            <button class="museum-history__year museum-history__year_active" type="button">2012</button>
                        </div>
                        <div class="swiper-slide museum-history__year-slide">
                            <button class="museum-history__year" type="button">2013</button>
                        </div>
                        <div class="swiper-slide museum-history__year-slide">
                            <button class="museum-history__year" type="button">2014</button>
                        </div>
                        <div class="swiper-slide museum-history__year-slide">
                            <button class="museum-history__year" type="button">2015</button>
                        </div>
                        <div class="swiper-slide museum-history__year-slide">
                            <button class="museum-history__year" type="button">2016</button>
                        </div>
                        <div class="swiper-slide museum-history__year-slide">
                            <button class="museum-history__year" type="button">2017</button>
                        </div>
                        <div class="swiper-slide museum-history__year-slide">
                            <button class="museum-history__year" type="button">2018</button>
                        </div>
                        <div class="swiper-slide museum-history__year-slide">
                            <button class="museum-history__year" type="button">2019</button>
                        </div>
                    </div>
                </div>

                <div class="swiper museum-history__swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide museum-history__slide">
                            <div class="museum-history__content">
                                <div class="museum-history__text">
                                    <span class="museum-history__big-year">2012</span>
                                    <p class="museum-history__description">Музей-заповедник предоставляет право
                                        бесплатного посещения всех своих филиалов для участников специальных программ и
                                        членов их семей.</p>
                                </div>
                                <img class="museum-history__image" src="../images/about-museum/exposition.png"
                                    alt="Зал музея">
                            </div>
                        </div>

                        <div class="swiper-slide museum-history__slide">
                            <div class="museum-history__content">
                                <div class="museum-history__text">
                                    <span class="museum-history__big-year">2013</span>
                                    <p class="museum-history__description">Продолжилось развитие просветительских
                                        программ, выставочных проектов и музейных маршрутов по Калужской области.</p>
                                </div>
                                <img class="museum-history__image" src="../images/about-museum/exposition.png"
                                    alt="Здание музея">
                            </div>
                        </div>

                        <div class="swiper-slide museum-history__slide">
                            <div class="museum-history__content">
                                <div class="museum-history__text">
                                    <span class="museum-history__big-year">2014</span>
                                    <p class="museum-history__description">Коллекции музея пополнялись новыми
                                        материалами, а филиалы расширяли работу с посетителями разных возрастов.</p>
                                </div>
                                <img class="museum-history__image" src="../images/about-museum/exposition.png"
                                    alt="Музейная экспозиция">
                            </div>
                        </div>

                        <div class="swiper-slide museum-history__slide">
                            <div class="museum-history__content">
                                <div class="museum-history__text">
                                    <span class="museum-history__big-year">2015</span>
                                    <p class="museum-history__description">Музей усилил работу с образовательными
                                        организациями и запустил новые форматы тематических встреч.</p>
                                </div>
                                <img class="museum-history__image" src="../images/about-museum/exposition.png"
                                    alt="Интерьер музея">
                            </div>
                        </div>

                        <div class="swiper-slide museum-history__slide">
                            <div class="museum-history__content">
                                <div class="museum-history__text">
                                    <span class="museum-history__big-year">2016</span>
                                    <p class="museum-history__description">Выставочные площадки принимали временные
                                        экспозиции, посвященные истории, культуре и природе Калужского края.</p>
                                </div>
                                <img class="museum-history__image" src="../images/about-museum/exposition.png"
                                    alt="Фасад музея">
                            </div>
                        </div>

                        <div class="swiper-slide museum-history__slide">
                            <div class="museum-history__content">
                                <div class="museum-history__text">
                                    <span class="museum-history__big-year">2017</span>
                                    <p class="museum-history__description">Развивались экскурсионные программы,
                                        интерактивные занятия и проекты для семейной аудитории.</p>
                                </div>
                                <img class="museum-history__image" src="../images/about-museum/exposition.png"
                                    alt="Территория музея">
                            </div>
                        </div>

                        <div class="swiper-slide museum-history__slide">
                            <div class="museum-history__content">
                                <div class="museum-history__text">
                                    <span class="museum-history__big-year">2018</span>
                                    <p class="museum-history__description">Музей продолжил объединять исследовательскую,
                                        выставочную и просветительскую работу филиалов.</p>
                                </div>
                                <img class="museum-history__image" src="../images/about-museum/exposition.png"
                                    alt="Музейный двор">
                            </div>
                        </div>

                        <div class="swiper-slide museum-history__slide">
                            <div class="museum-history__content">
                                <div class="museum-history__text">
                                    <span class="museum-history__big-year">2019</span>
                                    <p class="museum-history__description">Появились новые события, направленные на
                                        знакомство гостей с историей региона и музейными коллекциями.</p>
                                </div>
                                <img class="museum-history__image" src="../images/about-museum/exposition.png"
                                    alt="Музейный комплекс">
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="museum-collections">
                <h2 class="section-title museum-collections__title">Фонды и коллекции</h2>
                <div class="editor-content">
                    <p>Собрание музея-заповедника — это богатейшая сокровищница артефактов, распределенная по
                        тематическим отделам и залам:
                        Отдел истории: Занимает 11 залов главного здания, раскрывая летопись края начиная с эпохи
                        первобытнообщинного строя. Особое внимание уделено культурной жизни XIX века: в экспозициях
                        представлены материалы о пребывании на Калужской земле великих классиков — Н.В. Гоголя, Л.Н.
                        Толстого, Ф.М. Достоевского и И.С. Тургенева</p>
                    <p>Отдел природы: Знакомит посетителей с флорой и фауной региона через масштабные красочные диорамы
                        и уникальные биогруппы, включая интерактивные инсталляции, такие как «Смешанный лес» и «Птицы на
                        стилизованном дереве»
                        .</p>
                    <p>Военно-исторические коллекции: Экспозиция «В годы суровых испытаний» подробно освещает события
                        1941–1945 гг., а интерактивный проект «Калужская крепость» погружает в эпоху средневекового
                        оборонительного зодчества
                        .</p>
                    <p>Музей ведет активную научную и издательскую деятельность, публикуя материалы в собственных
                        журналах «Калужское наследие» и «Вопросы истории», которые доступны в нашей электронной
                        библиотеке.</p>
                </div>
            </section>


        </div>

        <?php renderOther(); ?>
    </main>

    <?php include dirname(__DIR__) . '/template-parts/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../js/main.js?v=3.0.2"></script>
    <script src="../js/museum-history.js?v=1.0.1"></script>
</body>

</html>
