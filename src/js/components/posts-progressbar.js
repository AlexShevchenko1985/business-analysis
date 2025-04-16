function postsProgressBar() {
  document.addEventListener('DOMContentLoaded', function () {
    const progressBarContainer = document.querySelector('.progress-bar');
    const progressBarVar = document.querySelector('.progress-bar span');
    const fullContent = document.getElementById('blog-full-content');

    if (!progressBarContainer) {
      return;
    }

    function updateProgressBar() {
      const contentTop = fullContent.getBoundingClientRect().top;
      const contentBottom = fullContent.getBoundingClientRect().bottom;
      const contentHeight = fullContent.offsetHeight;

      if (contentTop <= 0 && contentBottom > 0) {
        const scrollInsideContent = Math.min(Math.abs(contentTop), contentHeight);
        const progress = (scrollInsideContent / contentHeight) * 100;

        progressBarContainer.style.opacity = '1';
        progressBarVar.style.width = progress + '%';
      } else {
        progressBarContainer.style.opacity = '0';
        progressBarVar.style.width = '0%';
      }
    }

    window.addEventListener('scroll', updateProgressBar);
    window.addEventListener('resize', updateProgressBar);
    updateProgressBar();
  });
}

export default postsProgressBar;
