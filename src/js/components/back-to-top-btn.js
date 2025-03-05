function backToTopBtn() {
  const toTopBtn = document.getElementById('btn-back-to-top');

  if (!toTopBtn) {
    return;
  }

  function checkOffset() {
    if (window.scrollY > window.innerHeight / 2) {
      toTopBtn.style.display = 'block';
    } else {
      toTopBtn.style.display = 'none';
    }
  }

  toTopBtn.addEventListener('click', function() {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });


  document.addEventListener("scroll", function(){
    checkOffset();
  });
}


export default backToTopBtn;
