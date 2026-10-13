// Carousel — ports multi-carousel.min.js + custom.js quote/video sliders.
(function ($, Drupal, once) {
  Drupal.behaviors.dyneCarousel = {
    attach(context) {
      once('dyne-carousel', '.dyne-carousel', context).forEach((el) => {
        // Bootstrap 5 carousel is initialised via data-bs-ride; fallback prev/next.
        el.querySelectorAll('[data-slide]').forEach((btn) => {
          btn.addEventListener('click', () => {
            el.dispatchEvent(new CustomEvent(btn.dataset.slide === 'prev' ? 'slidePrev' : 'slideNext'));
          });
        });
      });
    }
  };
})(jQuery, Drupal, once);
