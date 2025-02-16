const cf7_thanks_popup = () => {

  document.addEventListener("DOMContentLoaded", () => {


    const popupWrapper   = document.getElementById('form-popup');
    const messageWrapper = document.getElementById('form-block-message');
    const popupClose     = document.getElementById('form-message-button');

    if(!messageWrapper){
      return;
    }
    console.log(popupClose)

    document.addEventListener( 'wpcf7mailsent', function( event ) {
      popupWrapper.style.display = 'none';
      messageWrapper.style.display = 'block';
    }, false );

    popupClose.addEventListener('click', function() {
      messageWrapper.style.display = 'none';
    }, false );

  });

};

export default cf7_thanks_popup;




