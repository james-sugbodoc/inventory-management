<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link href="dist/output.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script> 
    tailwind.config = {
        theme: {
        extend: {
            colors: {
            primary: '#4454C3',
            danger: '#FD7F7F',
            warning: '#F59E0B',
            success: '#10B981',
            red: '#EF4444',
            faded_red: '#FFEFEF',
            bg_sidebar: '#F3F4F6',
            sidebar_hover: '#e9ecef'
            }
        }
        }
    } 
  </script>
</head>
<body class="bg-gray-50 flex h-screen">
    <!-- Collapsible Sidebar -->
    <div class="bg-bg_sidebar text-white w-64 md:w-20 lg:w-64 transition-all duration-300 ease-in-out flex-shrink-0">
      <nav class="border-gray-200 bg-gray-20 ">
        <div class="max-w-screen-xl bg-bg_sidebar flex flex-wrap items-center justify-between mx-auto p-4 border-b-2">
          <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
              <img src="assets/svg/logo.png" class="h-10" alt="Sugbodoc Logo" />
              <span class="self-center text-2xl fon t-semibold whitespace-nowrap dark:text-white"></span>
          </a>
          <button id="toggleSidebar" data-collapse-toggle="navbar-hamburger" type="button" class="inline-flex items-center justify-center p-2 w-10 h-10 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-200 " aria-controls="navbar-hamburger" aria-expanded="false">
            <svg class="w-10 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="#4454C3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
          </button>
        </div>
      </nav>

      <nav class="mt-6">
        <a href="dashboard.php" class="px-9 py-3 hover:bg-primary hover:text-white cursor-pointer flex items-center text-gray-800">
          <img src="assets/svg/dashboard.svg" class="[fill:currentColor] w-5 h-5 mr-3">
          <span class="hidden lg:inline font-medium">Dashboard</span>
        </a>
        <a href="inventory.php" class="px-9 py-3 hover:bg-primary hover:text-white cursor-pointer flex items-center text-gray-800">
          <img src="assets/svg/inventory.svg" class="[fill:currentColor] w-5 h-5 mr-3">
          <span class="hidden lg:inline font-medium">Inventory</span>
        </a>
        <a href="partners.php" class="px-9 py-3 hover:bg-primary hover:text-white cursor-pointer flex items-center text-gray-800">
          <img src="assets/svg/partners.svg" class="[fill:currentColor] w-5 h-5 mr-3">
          <span class="hidden lg:inline font-medium">Partners</span>
        </a>
        <a href="prescription.php" class="px-9 py-3 hover:bg-primary hover:text-white cursor-pointer flex items-center text-gray-800">
          <span class="mr-3"><img src="assets/svg/reports.svg"></span>
          <span class="hidden lg:inline font-medium">Prescription</span>
        </a>
        <a href="reports.php" class="px-9 py-3 hover:bg-primary hover:text-white cursor-pointer flex items-center text-gray-800">
          <span class="mr-3"><img src="assets/svg/reports.svg"></span>
          <span class="hidden lg:inline font-medium">Reports</span>
        </a>
        <a href="POS.php" class="px-9 py-3 hover:bg-primary hover:text-white cursor-pointer flex items-center text-gray-800">
          <span class="mr-3"><img src="assets/svg/POS.svg"></span>
          <span class="hidden lg:inline font-medium">POS</span>
        </a>
        <a href="settings.php" class="px-9 py-3 bg-primary text-white cursor-pointer flex items-center text-gray-800 hover:bg-gray-200 hover:text-gray-800">
          <span class="mr-3"><img src="assets/svg/reports.svg"></span>
          <span class="hidden lg:inline font-medium">Settings</span>
        </a>
        <a href="POS.php" class="px-9 py-3 hover:bg-primary hover:text-white cursor-pointer flex items-center text-gray-800">
          <span class="mr-3"><img src="assets/svg/POS.svg"></span>
          <span class="hidden lg:inline font-medium">Logout</span>
        </a>
      </nav>
    </div>
  
    <!-- Main Content -->
    <div class="flex-1 overflow-auto">
      <div class="container mx-auto px-3 py-8">
    <!-- Header -->
    <div class="flex justify-between items-center mb-8">
        <div>
        <h1 class="text-3xl font-bold text-gray-800">Settings</h1>
        <h3 class="text-lg text-gray-500 mt-1">System Modification</h3>
        </div>
        <div class="flex items-center space-x-3">
        <div class="relative">
            <img src="assets/svg/notification.svg" class="w-8 h-8  text-gray-400 hover:text-primary cursor-pointer" alt="Notifications">
            <span class="absolute -top-1 -right-0 bg-red rounded-full w-3 h-3 border border-white"></span>
        </div>
        <img src="assets/svg/profile.svg" class="w-10 h-10 cursor-pointer" alt="Profile">
        </div>
    </div>