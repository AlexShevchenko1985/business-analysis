import {
  cf7_popup,
  cf7_thanks_popup,
  documentsSlider,
  businessCasesSlider,
  accordion,
  popupSlider,
  backToTopBtn,
  postsSidebar,
  postsProgressBar,

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
    postsSidebar();
    postsProgressBar();
  }
};

export default Tbc;

Tbc.init();
