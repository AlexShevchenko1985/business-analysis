import Swiper from 'swiper';
import { Navigation, Autoplay } from 'swiper/modules';


function documentsSlider() {
  const sliderContainer = '.documents-slider'
  const $container = document.querySelector(sliderContainer);
  const body       = document.body;

  if (!$container) return

  const slides = document.querySelectorAll(".js-documents-slider .swiper-slide");

  const selectors = {
    slider: '.js-documents-slider',
    buttonNext: '.swiper-doc-button-next',
    buttonPrev: '.swiper-doc-button-prev',
  }

  const swiper = new Swiper(selectors.slider, {
    modules: [Navigation, Autoplay],
    slidesPerView: 'auto',
    watchOverflow: true,
    direction: 'horizontal',
    centeredSlides: true,
    spaceBetween: 20,
    loop: true,
    autoplay: {
      delay: 8000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: selectors.buttonNext,
      prevEl: selectors.buttonPrev,
    },
    speed: 1000,
    breakpoints: {
      992: {
        spaceBetween: 80,
      },
    },
  });

  const popupSliderContainer = '.slider-popup-holder';
  const $sliderContainer = document.querySelector(popupSliderContainer);
  const sliderPopup = document.getElementById('slider-popup');
  const header = document.querySelector('.wrapper--page-top');

  if (!$sliderContainer) return;

  const sliderSelectors = {
    slider: '.js-slider-popup',
    buttonNext: '.js-popup-button-next',
    buttonPrev: '.js-popup-button-prev',
  };

  const popupSwiper = new Swiper(sliderSelectors.slider, {
    modules: [Navigation],
    slidesPerView: "1",
    spaceBetween: 0,
    speed: 1000,
    loop: true,
    navigation: {
      nextEl: sliderSelectors.buttonNext,
      prevEl: sliderSelectors.buttonPrev,
    },
    autoplay: false,
  });

  slides.forEach((slide, index) => {
    slide.addEventListener('click', () => {
      sliderPopup.style.display = 'flex';
      sliderPopup.classList.add('active');
      body.style.overflow        = 'hidden';
      header.style.zIndex = 1;
      popupSwiper.slideTo(index);
    });
  });
}


export default function sliders() {
  documentsSlider();
}
