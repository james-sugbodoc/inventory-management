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
      <nav class="border-gray-200 bg-gray-20">
        <div class="max-w-screen-xl bg-bg_sidebar flex flex-wrap items-center justify-between mx-auto p-4 border-b-2">
          <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse h-10">
            <!-- Expanded Logo -->
            <img src="assets/svg/logo.png" class="h-10" id="expanded-logo" alt="Sugbodoc Logo" />
            <!-- Collapsed Logo -->
            <img src="assets/svg/sugbodoc-small.png" class="hidden h-10 mx-auto" id="collapsed-logo">
          </a>
          <button id="toggleSidebar" type="button" class="inline-flex items-center justify-center p-2 w-10 h-10 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-200 " aria-controls="navbar-hamburger" aria-expanded="false">
            <svg class="w-10 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="#4454C3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
          </button>
        </div>
      </nav>

      <nav class="mt-6">
        <a href="dashboard.php" class="px-9 py-3 bg-primary text-white cursor-pointer flex items-center text-gray-800 hover:bg-gray-200 hover:text-gray-800">
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
        <a href="settings.php" class="px-9 py-3 hover:bg-primary hover:text-white cursor-pointer flex items-center text-gray-800">
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
        <h1 class="text-3xl font-bold text-gray-800">Admin Dashboard</h1>
        <h3 class="text-lg text-gray-500 mt-1">Welcome back, Admin User</h3>
        </div>
        <div class="flex items-center space-x-3">
        <div class="relative">
            <img src="assets/svg/notification.svg" class="w-8 h-8  text-gray-400 hover:text-primary cursor-pointer" alt="Notifications">
            <span class="absolute -top-1 -right-0 bg-red rounded-full w-3 h-3 border border-white"></span>
        </div>
        <img src="assets/svg/profile.svg" class="w-10 h-10 cursor-pointer" alt="Profile">
        </div>
    </div>

    <!-- Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
      <!-- Total Inventory -->
      <div class="bg-white rounded-lg shadow p-6 border-l-4 border-primary ">
        <div class="flex justify-between items-start">
          <div>
            <h3 class="text-gray-600 font-medium mb-1">Total Inventory Items</h3>
            <p class="text-3xl font-bold">1,240</p>
          </div>
          <img src="assets/svg/inventory.svg" class="w-10 h-10 text-primary" alt="Inventory Icon">
        </div>
      </div>

      <!-- Low  -->      
      <div class="bg-white rounded-lg shadow p-6 border-l-4 border-warning ">
        <div class="flex justify-between items-start">
          <div>
            <h3 class="text-gray-600 font-medium mb-1">Low Stock Items</h3>
            <p class="text-3xl font-bold">1,240</p>
          </div>
          <img src="assets/svg/warning.svg" class="w-10 h-10 text-primary" alt="Inventory Icon">
        </div>
      </div>
      
      <!-- Expiring -->
      <div class="bg-white rounded-lg shadow p-6 border-l-4 border-danger ">
        <div class="flex justify-between items-start">
          <div>
            <h3 class="text-gray-600 font-medium mb-1">Expiring Soon</h3>
            <p class="text-3xl font-bold">1,240</p>
          </div>
          <img src="assets/svg/expiring_soon.svg" class="w-10 h-10 text-primary" alt="Inventory Icon">
        </div>
      </div>
      
      <!-- Pending  -->
      <div class="bg-white rounded-lg shadow p-6 border-l-4 border-success">
        <div class="flex justify-between items-start">
          <div>
            <h3 class="text-gray-600 font-medium mb-1">Pending Requests</h3>
            <p class="text-3xl font-bold">1,240</p>
          </div>
          <img src="assets/svg/pending_request.svg" class="w-10 h-10 text-primary" alt="Inventory Icon">
        </div>
      </div>

    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
      <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="bg-primary px-6 py-3">
          <h2 class="text-white font-semibold">Inventory Alerts</h2>
        </div>
        <div class="p-6">
          <div class="flex items-start mb-4 p-3 bg-amber-100 rounded-lg">
            <input type="checkbox" class="mt-1 mr-3">
            <div>
              <h3 class="font-medium text-warning">Low Stock Alert</h3>
              <p class="text-gray-700">Paracetamol 500mg</p>
              <p class="text-sm text-gray-500">45 left (reorder at 50)</p>
              <button class="mt-2 text-sm text-primary hover:underline">Create Purchase Order</button>
            </div>
          </div>
          
          <div class="flex items-start mb-4 p-3 bg-faded_red rounded-lg">
            <input type="checkbox" class="mt-1 mr-3">
            <div>
              <h3 class="font-medium text-red">Expiring Soon</h3>
              <p class="text-gray-700">Aspirin 500mg</p>
              <p class="text-sm text-gray-500">Expires in 93 days (2025-01-01)</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Recent Activities -->
      <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="bg-primary px-6 py-3">
          <h2 class="text-white font-semibold">Recent Activities</h2>
        </div>
        <div class="p-6">
          <div class="space-y-4">
            <div class="border-b pb-4">
              <p class="font-medium">Inventory updated</p>
              <p class="text-sm text-gray-500">30 minutes ago</p>
            </div>
            <div class="border-b pb-4">
              <p class="font-medium">New prescription filled</p>
              <p class="text-sm text-gray-500">2 hours ago</p>
            </div>
            <div>
              <p class="font-medium">Stock level warning</p>
              <p class="text-sm text-gray-500">1 day ago</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Restock Section -->
    <div class="bg-white rounded-lg shadow overflow-hidden mb-8">
      <div class="bg-primary px-6 py-3">
        <h2 class="text-white font-semibold">Restock Recommendations</h2>
      </div>
      <div class="p-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
          <!-- Restock Item 1 -->
          <div class="border rounded-lg p-4 hover:bg-gray-50">
            <h3 class="font-medium">Ibuprofen 200mg</h3>
            <p class="text-sm text-gray-500">Expires in 239 days (2024-06-15)</p>
            <button class="mt-2 w-full bg-primary text-white py-1 px-3 rounded text-sm hover:bg-blue-600">
              Restock
            </button>
          </div>
          
          <!-- Restock Item 2 -->
          <div class="border rounded-lg p-4 hover:bg-gray-50">
            <h3 class="font-medium">Paracetamol 500mg</h3>
            <p class="text-sm text-gray-500">Expires in 186 days (2024-09-30)</p>
            <button class="mt-2 w-full bg-primary text-white py-1 px-3 rounded text-sm hover:bg-blue-600">
              Restock
            </button>
          </div>
          
          <!-- Restock Item 3 -->
          <div class="border rounded-lg p-4 hover:bg-gray-50">
            <h3 class="font-medium">Amoxicillin 250mg</h3>
            <p class="text-sm text-gray-500">Expires in 369 days (2024-03-31)</p>
            <button class="mt-2 w-full bg-primary text-white py-1 px-3 rounded text-sm hover:bg-blue-600">
              Restock
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</body>
<!-- External CSS -->
<script src="assets/js/dashboard.js"></script>
</html>