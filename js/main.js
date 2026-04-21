const heroSlider = document.querySelector('.hero-slider__swiper');

if (heroSlider) {
  new Swiper(heroSlider, {
    loop: true,
    speed: 900,
    pagination: {
      el: '.hero-slider__pagination',
      clickable: true,
      renderBullet: function (index, className) {
        console.log(className)
        return `<span class="${className}">${index + 1}</span>`;
      },
    },
    navigation: {
      nextEl: '.hero-slider__button-next',
      prevEl: '.hero-slider__button-prev',
    },
  });
}
