function accordion() {
  const faqSection = document.querySelector('.faq-section');
  if (!faqSection) return;

  const faqTitles = faqSection.querySelectorAll('.faq-title');

  faqTitles.forEach(title => {
    title.addEventListener('click', function() {
      const faqItem = this.closest('.faq-item');
      const faqBody = faqItem.querySelector('.faq-body');

      if (faqItem.classList.contains('active')) {
        faqItem.classList.remove('active');
        faqBody.style.height = '0';
      } else {
        faqSection.querySelectorAll('.faq-item').forEach(item => {
          const body = item.querySelector('.faq-body');
          item.classList.remove('active');
          body.style.height = '0';
        });

        faqItem.classList.add('active');
        faqBody.style.height = `${faqBody.scrollHeight}px`;
      }
    });
  });
}


export default accordion;
