// Drupal + Bootstrap5 dropdown navigation — ports WP navbar hover menus.
(function ($, Drupal, once) {
  Drupal.behaviors.dyneNavigation = {
    attach(context) {
      once('dyne-nav', '.dyne-nav .dropdown', context).forEach((item) => {
        const toggle = item.querySelector(':scope > .nav-link');
        const menu = item.querySelector(':scope > .dropdown-menu');
        if (!toggle || !menu) return;
        // Desktop hover open (WP behaviour), click still follows parent link.
        item.addEventListener('mouseenter', () => {
          if (window.matchMedia('(min-width: 992px)').matches) {
            menu.classList.add('show');
            toggle.setAttribute('aria-expanded', 'true');
          }
        });
        item.addEventListener('mouseleave', () => {
          if (window.matchMedia('(min-width: 992px)').matches) {
            menu.classList.remove('show');
            toggle.setAttribute('aria-expanded', 'false');
          }
        });
      });
    }
  };
})(jQuery, Drupal, once);
