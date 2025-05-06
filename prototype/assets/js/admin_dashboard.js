document.addEventListener('DOMContentLoaded', function() {
  // DOM Elements
  const toggleSidebar = document.getElementById('toggleSidebar');
  const toggleSidebarDesktop = document.getElementById('toggleSidebarDesktop');
  const sidebar = document.querySelector('div.bg-gray-200');
  const navTextLabels = document.querySelectorAll('nav span:not(:first-child)');
  const toggleIcons = document.querySelectorAll('.toggle-icon');

  // Mobile toggle (hides/shows completely)
  if (toggleSidebar) {
    toggleSidebar.addEventListener('click', () => {
      sidebar.classList.toggle('hidden');
    });
  }

  // Desktop toggle (collapses/expands)
  if (toggleSidebarDesktop) {
    toggleSidebarDesktop.addEventListener('click', () => {
      sidebar.classList.toggle('lg:w-64');
      sidebar.classList.toggle('lg:w-20');
      
      navTextLabels.forEach(el => {
        el.classList.toggle('lg:hidden');
      });
      
      // Toggle SVG icons
      toggleIcons.forEach(icon => icon.classList.toggle('hidden'));
    });
  }

});