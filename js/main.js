const heroSlider = document.querySelector('.hero-slider__swiper');
const otherSlider = document.querySelector('.other__swiper');

if (heroSlider) {
  new Swiper(heroSlider, {
    loop: true,
    speed: 900,
    pagination: {
      el: '.hero-slider__pagination',
      clickable: true,
      renderBullet: function (index, className) {
        return `<span class="${className}">${index + 1}</span>`;
      },
    },
    navigation: {
      nextEl: '.hero-slider__button-next',
      prevEl: '.hero-slider__button-prev',
    },
  });
}

if (otherSlider) {
  new Swiper(otherSlider, {
    loop: true,
    speed: 700,
    slidesPerView: 1,
    navigation: {
      nextEl: '.other__button-next',
      prevEl: '.other__button-prev',
    },
  });
}
