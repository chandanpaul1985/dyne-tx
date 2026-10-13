// Exit-link interceptor — ports WP "You are now leaving..." modal.
(function ($, Drupal, once) {
  Drupal.behaviors.dyneExitModal = {
    attach(context) {
      once('dyne-exit', 'a[href^="http"]', context).forEach((el) => {
        if (el.hostname === window.location.hostname) return;
        if (el.classList.contains('no-exit-modal')) return;
        el.addEventListener('click', (e) => {
          e.preventDefault();
          const cont = document.getElementById('dyneExitContinue');
          if (cont) cont.setAttribute('href', el.getAttribute('href'));
          const modal = document.getElementById('dyneExitModal');
          if (modal && window.bootstrap) new bootstrap.Modal(modal).show();
          else window.open(el.getAttribute('href'), '_blank');
        });
      });
    }
  };
})(jQuery, Drupal, once);
