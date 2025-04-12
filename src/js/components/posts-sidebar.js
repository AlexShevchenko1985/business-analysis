function postsSidebar() {
  document.addEventListener('DOMContentLoaded', function () {
    const scrollMagicController = new ScrollMagic.Controller({
      globalSceneOptions: {
        triggerHook: "onLeave",
        duration: "100%"
      }
    });
    const slides = document.querySelectorAll(".scrolling-section");
    for (let i = 0; i < slides.length; i++) {
      new ScrollMagic.Scene({
        triggerElement: slides[i]
      })
        .addTo(scrollMagicController);
    }

    window.addEventListener("scroll", function () {
      let scrollPos = document.documentElement.scrollTop || document.body.scrollTop;

      document.querySelectorAll(".sidebar-block li a").forEach(function (link) {
        const headerMenu = document.getElementById('Header');
        const headerHeight = headerMenu ? headerMenu.offsetHeight : 0;
        let index = link.dataset.index;
        let section = slides[index];

        if (section) {
          let offset = window.innerWidth < 992
            ? section.offsetTop - headerHeight - 120
            : section.offsetTop - headerHeight - 100;

          let height = section.offsetHeight;

          if (scrollPos >= offset && scrollPos < offset + height) {
            link.classList.add("active");
          } else {
            link.classList.remove("active");
          }
        }
      });
    });

    document.querySelectorAll(".sidebar-block li a").forEach(function (link) {
      link.addEventListener("click", function (event) {
        const headerMenu = document.getElementById('Header');
        const headerHeight = headerMenu ? headerMenu.offsetHeight : 0;
        event.preventDefault();
        let index = this.dataset.index;
        let section = slides[index];

        if (section) {
          let offset = window.innerWidth < 992
            ? section.offsetTop - headerHeight + 100
            : section.offsetTop - headerHeight - 20;

          window.scrollTo({
            top: offset,
            behavior: 'smooth'
          });
        }
      });
    });
  });
}

export default postsSidebar;
