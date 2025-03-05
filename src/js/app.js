import {
  cf7_popup,
  cf7_thanks_popup,
  documentsSlider,
  businessCasesSlider,
  accordion,
  popupSlider,
  backToTopBtn,

} from './components/index';


const Tbc = {
  init() {
    cf7_popup();
    cf7_thanks_popup();
    documentsSlider();
    businessCasesSlider();
    accordion();
    popupSlider();
    backToTopBtn();
  }
};

export default Tbc;

Tbc.init();
