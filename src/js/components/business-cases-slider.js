import Swiper from 'swiper';
import { Autoplay } from 'swiper/modules';


function businessCasesSlider() {
  const sliderContainer = '.business-cases-slider'
  const $container = document.querySelector(sliderContainer);
  if (!$container) return

  const selectors = {
    slider: '.js-business-cases-slider',
  }

  const swiper = new Swiper(selectors.slider, {
    modules: [Autoplay],
    slidesPerView: 1,
    loop: true,
    autoplay: {
      delay: 8000,
      disableOnInteraction: false,
    },
    navigation: false,
    pagination: false,
    speed: 1000,
  });
}


export default function sliders() {
  businessCasesSlider();
}
