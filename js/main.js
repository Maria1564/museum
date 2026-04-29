const heroSlider = document.querySelector('.hero-slider__swiper');
const otherSlider = document.querySelector('.other__swiper');
const relatedEventsSlider = document.querySelector('.related-events__swiper');
let relatedEventsSwiper = null;

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

const initRelatedEventsSlider = () => {
  if (!relatedEventsSlider) {
    return
  }

  if (window.innerWidth > 576 && !relatedEventsSwiper) {
    relatedEventsSwiper = new Swiper(relatedEventsSlider, {
      loop: true,
      speed: 700,
      slidesPerView: 'auto',
      spaceBetween: 60,
      navigation: {
        nextEl: '.related-events__button_next',
        prevEl: '.related-events__button_prev',
      },
    });
  }

  if (window.innerWidth <= 576 && relatedEventsSwiper) {
    relatedEventsSwiper.destroy(true, true)
    relatedEventsSwiper = null
  }
}

initRelatedEventsSlider()

window.addEventListener('resize', initRelatedEventsSlider)


const btnOpenMenu = document.querySelector(".header-top__menu")
const mobileMenu = document.querySelector(".mobile-menu.drawer")
const mobileMenuWrapper = mobileMenu?.querySelector(".drawer__wrapper")
const btnCloseMobileMenu = mobileMenu?.querySelector(".drawer__close-icon")
const html = document.documentElement

const openDrawer = (drawer) => {
  drawer.classList.add("drawer_open")
  html.style.overflow = "hidden"
}

const closeDrawer = (drawer) => {
  drawer.classList.remove("drawer_open")
  html.style.overflow = ""
}

if (btnOpenMenu && mobileMenu && mobileMenuWrapper) {

  btnOpenMenu.addEventListener("click", () => {
    openDrawer(mobileMenu)
  })

  btnCloseMobileMenu?.addEventListener("click", () => {
    closeDrawer(mobileMenu)
  })

  mobileMenu.addEventListener("click", (event) => {
    if (!mobileMenuWrapper.contains(event.target)) {
      closeDrawer(mobileMenu)
    }
  })
}
