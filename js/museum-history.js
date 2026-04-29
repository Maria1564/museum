const museumHistorySlider = document.querySelector('.museum-history__swiper');
const museumHistoryYearsSlider = document.querySelector('.museum-history__years-swiper');
const museumHistoryYears = document.querySelectorAll('.museum-history__year');

if (museumHistorySlider && museumHistoryYearsSlider && museumHistoryYears.length) {
  const setScrollbarWidth = () => {
    document.documentElement.style.setProperty('--scrollbar-width', `${window.innerWidth - document.documentElement.clientWidth}px`);
  };

  let isYearClick = false;
  let previousActiveIndex = 0;

  setScrollbarWidth();

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
    setScrollbarWidth();
    museumHistoryYearsSwiper.params.slidesOffsetAfter = window.innerWidth;
    museumHistoryYearsSwiper.update();
  });

  const getVisibleYearIndexes = () => {
    const sliderRect = museumHistoryYearsSlider.getBoundingClientRect();

    return Array.from(museumHistoryYearsSwiper.slides)
      .map((slide, index) => {
        const slideRect = slide.getBoundingClientRect();
        const isVisible = slideRect.left >= sliderRect.left && slideRect.right <= sliderRect.right;

        return isVisible ? index : null;
      })
      .filter(index => index !== null);
  };

  const scrollYearsOnEdge = (activeIndex, previousIndex) => {
    const visibleYearIndexes = getVisibleYearIndexes();

    if (visibleYearIndexes.length === 0) {
      return;
    }

    const firstVisibleIndex = visibleYearIndexes[0];
    const lastVisibleIndex = visibleYearIndexes[visibleYearIndexes.length - 1];

    if (activeIndex > previousIndex && activeIndex >= lastVisibleIndex) {
      museumHistoryYearsSwiper.slideNext();
    }

    if (activeIndex < previousIndex && activeIndex <= firstVisibleIndex) {
      museumHistoryYearsSwiper.slidePrev();
    }
  };

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

        if (!isYearClick) {
          scrollYearsOnEdge(swiper.activeIndex, previousActiveIndex);
        }

        previousActiveIndex = swiper.activeIndex;
        isYearClick = false;
      },
    },
  });

  museumHistoryYears.forEach((year, index) => {
    year.addEventListener('click', () => {
      if (museumHistorySwiper.activeIndex === index) {
        return;
      }

      isYearClick = true;
      museumHistorySwiper.slideTo(index);
    });
  });
}
