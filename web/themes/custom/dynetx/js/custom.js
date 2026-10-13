// custom.js — port of dynetxdev2020/js/custom.js behaviours (nav, popups, video lightbox triggers).
(function ($, Drupal, once) {
  Drupal.behaviors.dyneCustom = {
    attach(context) {
      // Video lightbox: prettyPhoto -> Colorbox/GLightbox compatible hook.
      once('dyne-video', 'a.video-lightbox', context).forEach((el) => {
        el.setAttribute('data-colorbox', 'true');
      });


      once('dyne-job-filters', '.dyne-jobs[data-dyne-jobs-source="content"]', context).forEach((listing) => {
        const departmentFilter = listing.querySelector('[data-dyne-job-filter="department"]');
        const locationFilter = listing.querySelector('[data-dyne-job-filter="location"]');
        const groups = Array.from(listing.querySelectorAll('[data-dyne-job-group]'));
        const emptyMessage = listing.querySelector('[data-dyne-jobs-empty]');

        const applyFilters = () => {
          const department = departmentFilter?.value || '';
          const location = locationFilter?.value || '';
          let visibleJobs = 0;

          groups.forEach((group) => {
            const departmentMatches = !department || group.dataset.dyneJobGroup === department;
            const jobs = Array.from(group.querySelectorAll('[data-dyne-job-location]'));
            let visibleInGroup = 0;

            jobs.forEach((job) => {
              const locationMatches = !location || job.dataset.dyneJobLocation === location;
              job.hidden = !departmentMatches || !locationMatches;
              if (!job.hidden) {
                visibleInGroup += 1;
              }
            });

            group.hidden = !departmentMatches || visibleInGroup === 0;
            visibleJobs += visibleInGroup;
          });

          if (emptyMessage) {
            emptyMessage.hidden = visibleJobs > 0;
          }
        };

        departmentFilter?.addEventListener('change', applyFilters);
        locationFilter?.addEventListener('change', applyFilters);
      });
    }
  };
})(jQuery, Drupal, once);
