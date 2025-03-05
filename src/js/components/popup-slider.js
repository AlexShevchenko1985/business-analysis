const popupSlider = () => {
  const sliderPopup = document.getElementById('slider-popup');
  const body       = document.body;
  const header = document.querySelector('.wrapper--page-top');

  if (!sliderPopup) {
    return;
  }

  const closePopup = () => {
    sliderPopup.classList.remove('active');
    sliderPopup.style.display = 'none';
    body.style.overflow = 'auto';
    header.style.zIndex = 10;
  };

  sliderPopup.addEventListener('click', (event) => {
    if (event.target === sliderPopup) {
      closePopup();
    }
  });

  const closeButton = document.getElementById('slider-popup-close');
  if (closeButton) {
    closeButton.addEventListener('click', closePopup);
  }
};

export default popupSlider;
