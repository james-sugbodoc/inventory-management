document.addEventListener('DOMContentLoaded', function() {
  const toggleSidebar = document.getElementById('toggleSidebar');
  const sidebar = document.querySelector('.bg-bg_sidebar');
  
  if (toggleSidebar && sidebar) {
    toggleSidebar.addEventListener('click', () => {
      // Toggle sidebar width classes
      sidebar.classList.toggle('md:w-20');
      sidebar.classList.toggle('md:w-64');
      sidebar.classList.toggle('lg:w-20');
      sidebar.classList.toggle('lg:w-64');
      
      // Toggle text labels
      document.querySelectorAll('nav span.hidden.lg\\:inline').forEach(el => {
        el.classList.toggle('lg:hidden');
      });
      
      // Toggle logos
      const expandedLogo = document.getElementById('expanded-logo');
      const collapsedLogo = document.getElementById('collapsed-logo');
      if (expandedLogo && collapsedLogo) {
        expandedLogo.classList.toggle('hidden');
        collapsedLogo.classList.toggle('hidden');
      }
      
      // Rotate hamburger icon
      toggleSidebar.classList.toggle('rotate-90');
    });
  }
});