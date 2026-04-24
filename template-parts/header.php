<?php
function renderHeader(string $theme = 'light'): void
{
    ?>
    <!-- header -->
    <header class="header <?= $theme === 'dark' ?  'header_dark' : '' ?>">

        <div class="container">
            <div class="header__top header-top">
                <div class="header-top__menu">
                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.5 19.833H24.5" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M3.5 14H24.5" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M3.5 8.16699H24.5" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
                <img src="../images/logo.svg" alt="логотип" class="header-top__logo">
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
                    <li class="nav__item"><a href="#" class="nav__item-link">О музее</a></li>
                    <li class="nav__item nav__item_active"><a href="#" class="nav__item-link">Посетителям</a></li>
                    <li class="nav__item"><a href="#" class="nav__item-link">Музей Завершье</a></li>
                    <li class="nav__item"><a href="#" class="nav__item-link">Мероприятия</a></li>
                    <li class="nav__item"><a href="#" class="nav__item-link">Филиалы</a></li>
                    <li class="nav__item"><a href="#" class="nav__item-link">Документы</a></li>
                    <li class="nav__item"><a href="#" class="nav__item-link">Библиотека</a></li>
                    <li class="nav__item"><a href="#" class="nav__item-link">Контакты</a></li>
                </ul>
            </div>
        </div>

    </header>
    <?php
}
