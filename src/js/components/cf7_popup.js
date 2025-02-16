const cf7_popup = () => {

  document.addEventListener("DOMContentLoaded", function () {

    const popupWrapper = document.getElementById('form-popup');

    if (!popupWrapper) return;

    const buttons   = document.querySelectorAll(".webform-dialog");
    const popupClose  = document.getElementById('form-close-button');

    buttons.forEach(button => {
      button.addEventListener("click", function () {
        popupWrapper.style.display = "block";
      });
    });

    popupClose.addEventListener('click', function() {
      popupWrapper.style.display = 'none';
    }, false );
  });

};

export default cf7_popup;




