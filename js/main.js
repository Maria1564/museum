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


const btnOpenMenu = document.querySelector(".header-top__menu")
const mobileMenu = document.querySelector(".mobile-menu")
const mobileMenuWrapper = document.querySelector(".mobile-menu__wrapper")
const html = document.querySelector("html")
const btnCloseMobileMenu = document.querySelector(".mobile-menu__close-icon")

btnOpenMenu.addEventListener("click", () => {
  mobileMenu.classList.add("mobile-menu_open")
  html.style.overflow = "hidden"
})

const closeMobileMenu = () => {
  mobileMenu.classList.remove("mobile-menu_open")
  html.style.overflow = ""
}

btnCloseMobileMenu.addEventListener("click", closeMobileMenu)

mobileMenu.addEventListener("click", (event) => {
  if (!mobileMenuWrapper.contains(event.target)) {
    closeMobileMenu()
  }
})
