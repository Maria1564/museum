<?php
function renderOther(): void
{
    ?>
        <!-- other  -->
        <section class="other">
            <div class="container">
                <div class="swiper other__swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide other__slide">
                            <a class="other__link" href="#" target="_blank">
                        <img class="other__image" src="../images/banner.png"
                                    alt="Льготный кредит на восстановление">
                            </a>
                        </div>

                        <div class="swiper-slide other__slide">
                            <a class="other__link" href="#" target="_blank">
                        <img class="other__image" src="../images/banner.png"
                                    alt="Льготный кредит на восстановление">
                            </a>
                        </div>
                    </div>

                </div>
                <div class="other__navigation">
                    <button class="other__button-prev" type="button" aria-label="Предыдущий слайд">
                            <img src="../images/arrow-left-2.svg" alt="">
                    </button>
                    <button class="other__button-next" type="button" aria-label="Следующий слайд">
                            <img src="../images/arrow-right-2.svg" alt="">
                    </button>
                </div>
            </div>
        </section>
    <?php
}
