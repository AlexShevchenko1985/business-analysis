const cf7_thanks_popup = () => {

  document.addEventListener("DOMContentLoaded", () => {


    const popupWrapper   = document.getElementById('form-popup');
    const messageWrapper = document.getElementById('form-block-message');
    const popupClose     = document.getElementById('form-message-button');
    const body         = document.body;

    if(!messageWrapper){
      return;
    }

    document.addEventListener( 'wpcf7mailsent', function( event ) {
      popupWrapper.style.display = 'none';
      messageWrapper.style.display = 'flex';
      body.style.overflow        = 'hidden';
      messageWrapper.classList.add('active');
    }, false );

    popupClose.addEventListener('click', function() {
      messageWrapper.style.display = 'none';
      body.style.overflow = 'auto';
      messageWrapper.classList.remove('active');
    }, false );

  });

};

export default cf7_thanks_popup;




