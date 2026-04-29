<?php
function renderHeader(string $theme = 'light', string $activePage = ''): void
{
    ?>
    <!-- header -->
    <header class="header <?= $theme === 'dark' ?  'header_dark' : '' ?>">

        <div class="container">
            <div class="header__top header-top">
                <div class="header-top__menu">
                     <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M3.5 19.833H24.5" stroke="<?= $theme === 'light' ? 'white' : '#000000' ?>" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" />
        <path d="M3.5 14H24.5" stroke="<?= $theme === 'light' ? 'white' : '#000000' ?>" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" />
        <path d="M3.5 8.16699H24.5" stroke="<?= $theme === 'light' ? 'white' : '#000000' ?>" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" />
    </svg>
                </div>
                <a href="../pages/index.php"><img src="<?= $theme === 'dark' ? '../images/logo-dark.svg' : '../images/logo.svg' ?>" alt="логотип" class="header-top__logo"></a>
                <div class="header-top__info">

                    <a class="header-top__accessibility" href="#">
                        <img src="../images/eye.svg" alt="глаз">
                        <p class="header-top__accessibility-link">Версия для <br> слабовидящих</p>
                    </a>

                    <div class="header-top__meta">

                        <a href="tel:+7 (4842) 72-16-18" class="header-top__phone">
                            <img src="../images/phone.svg" alt="телефон">
                            <p class="header-top__phone-link">+7 (4842) 72-16-18</p>

                        </a>


                        <a href="#" class="header-top__tickets-info">Справка о наличии <br> и стоимости билетов</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="header__bottom header-bottom">
            <div class="container header__container-inner">
                <ul class="nav__list">
                    <li class="nav__item <?= $activePage === 'about' ? 'nav__item_active' : '' ?>"><a href="../pages/about-museum.php" class="nav__item-link">О музее</a></li>
                    <li class="nav__item <?= $activePage === 'visitors' ? 'nav__item_active' : '' ?>"><a href="../pages/visitors.php" class="nav__item-link">Посетителям</a></li>
                    <li class="nav__item <?= $activePage === 'zavershye' ? 'nav__item_active' : '' ?>"><a href="#" class="nav__item-link">Музей Завершье</a></li>
                    <li class="nav__item <?= $activePage === 'events' ? 'nav__item_active' : '' ?>"><a href="../pages/events.php" class="nav__item-link">Мероприятия</a></li>
                    <li class="nav__item <?= $activePage === 'branches' ? 'nav__item_active' : '' ?>"><a href="../pages/branches.php" class="nav__item-link">Филиалы</a></li>
                    <li class="nav__item <?= $activePage === 'documents' ? 'nav__item_active' : '' ?>"><a href="#" class="nav__item-link">Документы</a></li>
                    <li class="nav__item <?= $activePage === 'library' ? 'nav__item_active' : '' ?>"><a href="#" class="nav__item-link">Библиотека</a></li>
                    <li class="nav__item <?= $activePage === 'contacts' ? 'nav__item_active' : '' ?>"><a href="#" class="nav__item-link">Контакты</a></li>
                </ul>
            </div>
        </div>

    </header>
    <?php
}
