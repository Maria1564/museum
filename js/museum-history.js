const museumHistorySlider = document.querySelector('.museum-history__swiper');
const museumHistoryYearsSlider = document.querySelector('.museum-history__years-swiper');
const museumHistoryYears = document.querySelectorAll('.museum-history__year');

if (museumHistorySlider && museumHistoryYearsSlider && museumHistoryYears.length) {
  const museumHistoryYearsSwiper = new Swiper(museumHistoryYearsSlider, {
    slidesPerView: 'auto',
    spaceBetween: 172,
    slidesOffsetBefore: 172,
    slidesOffsetAfter: window.innerWidth,
    speed: 500,
    watchSlidesProgress: true,
    breakpoints: {
      0: {
        spaceBetween: 80,
        slidesOffsetBefore: 0,
      },
      577: {
        spaceBetween: 172,
        slidesOffsetBefore: 172,
      },
    },
  });

  window.addEventListener('resize', () => {
    museumHistoryYearsSwiper.params.slidesOffsetAfter = window.innerWidth;
    museumHistoryYearsSwiper.update();
  });

  const museumHistorySwiper = new Swiper(museumHistorySlider, {
    speed: 700,
    slidesPerView: 1,
    spaceBetween: 20,
    navigation: {
      nextEl: '.museum-history__button_next',
      prevEl: '.museum-history__button_prev',
    },
    on: {
      slideChange(swiper) {
        museumHistoryYears.forEach((year, index) => {
          year.classList.toggle('museum-history__year_active', index === swiper.activeIndex);
        });

        museumHistoryYearsSwiper.slideTo(swiper.activeIndex);
      },
    },
  });

  museumHistoryYears.forEach((year, index) => {
    year.addEventListener('click', () => {
      museumHistoryYearsSwiper.slideTo(index);
      museumHistorySwiper.slideTo(index);
    });
  });
}
