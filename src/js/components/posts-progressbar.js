function postsProgressBar() {
  document.addEventListener('DOMContentLoaded', function () {
    const progressBarContainer = document.querySelector('.progress-bar');
    const progressBar = progressBarContainer.querySelector('span');
    const fullContent = document.getElementById('blog-full-content');

    function updateProgressBar() {
      const contentTop = fullContent.getBoundingClientRect().top;
      const contentBottom = fullContent.getBoundingClientRect().bottom;
      const contentHeight = fullContent.offsetHeight;

      if (contentTop <= 0 && contentBottom > 0) {
        const scrollInsideContent = Math.min(Math.abs(contentTop), contentHeight);
        const progress = (scrollInsideContent / contentHeight) * 100;

        progressBarContainer.style.opacity = '1';
        progressBar.style.width = progress + '%';
      } else {
        progressBarContainer.style.opacity = '0';
        progressBar.style.width = '0%';
      }
    }

    window.addEventListener('scroll', updateProgressBar);
    window.addEventListener('resize', updateProgressBar);
    updateProgressBar();
  });
}

export default postsProgressBar;
