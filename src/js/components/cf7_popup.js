const cf7_popup = () => {

  document.addEventListener("DOMContentLoaded", function () {

    const popupWrapper = document.getElementById('form-popup');

    if (!popupWrapper) return;

    const buttons   = document.querySelectorAll(".webform-dialog");
    const popupClose  = document.getElementById('form-close-button');
    const body         = document.body;

    buttons.forEach(button => {
      button.addEventListener("click", function () {
        popupWrapper.style.display = "flex";
        body.style.overflow        = 'hidden';
        popupWrapper.classList.add('active');
      });
    });

    popupClose.addEventListener('click', function() {
      popupWrapper.style.display = 'none';
      body.style.overflow = 'auto';
      popupWrapper.classList.remove('active');
    }, false );
  });

};

export default cf7_popup;




