<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reports</title>
        <link href="dist/output.css" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                  bg_sidebar: '#F3F4F6'
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
          <a href="dashboard.php" class="px-9 py-3 cursor-pointer flex items-center text-gray-800 hover:bg-sidebar_hover hover:text-gray-800">
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
          <a href="reports.php" class="px-9 py-3 bg-primary hover:bg-gray-200 hover:text-gray-800 cursor-pointer flex items-center text-white">
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

        <div class="flex-1 overflow-auto">
          <div class="container mx-auto px-3 py-8">
            <!-- Header with Button Group -->
            <div class="flex justify-between items-start mb-8">
              <div>
                <h1 class="text-3xl font-bold text-gray-800">Inventory Reports</h1>
                <h3 class="text-lg text-gray-500 mt-1">View and export reports about inventory usage and status.</h3>
              </div>
              <div class="flex items-center space-x-3">
                <!-- Notification and Profile -->
                <div class="relative">
                  <img src="assets/svg/notification.svg" class="w-8 h-8 text-gray-400 hover:text-primary cursor-pointer" alt="Notifications">
                  <span class="absolute -top-1 -right-0 bg-red rounded-full w-3 h-3 border border-white"></span>
                </div>
                <img src="assets/svg/profile.svg" class="w-10 h-10 cursor-pointer" alt="Profile">
              </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex justify-between items-center w-full mb-4">
              <div class="mb-6">
                <h4 class="text-sm font-medium text-gray-500 mb-2">Report View</h4>
                <div class="flex space-x-2 bg-gray-100 p-1 rounded-md w-max">
                  <button 
                    class="px-6 py-2 w-40 rounded-md bg-white text-black font-semibold shadow transition-all"
                    id="categoryViewBtn">
                    By Category
                  </button>
                  <button 
                    class="px-6 py-2 w-40 rounded-md text-gray-600 hover:bg-gray-200 transition-all"
                    id="supplierViewBtn">
                    By Supplier
                  </button>
                </div>
              </div>
                <div>
                  <select class="px-3 py-2 border rounded-md">
                    <option>All Categories</option>
                    <option>Antibiotic</option>
                    <option>Antihypertensive</option>
                  </select>
                  <select class="px-4 py-2 border rounded-md">
                    <option>Last 6 Month</option>
                    <option>Last 12 Month</option>
                    <option>Last 24 Month</option>
                  </select>
                </div>
                <button class="px-4 py-2 bg-primary text-white rounded-md hover:bg-blue-600">
                  Export Report
                </button>
              </div>
            
              <!-- Inventory Reports Section -->
              <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                <!-- Category Report -->
                <div id="categoryReport">
                  <!-- Category Distribution Section -->
                  <div class="mb-8">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Category Distribution</h3>
                    <div class="bg-gray-50 p-4 rounded-lg mb-4">
                      <p class="text-gray-700 mb-4">Distribution of medications by category in the inventory</p>
                      
                      <!-- Pie Chart Container -->
                      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <div class="bg-white p-4 rounded-lg border border-gray-200">
                          <canvas id="categoryChart"></canvas>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                          <div class="bg-white p-4 rounded-lg border border-gray-200">
                            <p class="font-medium">Antibiotics <span class="text-primary">35%</span></p>
                          </div>
                          <div class="bg-white p-4 rounded-lg border border-gray-200">
                            <p class="font-medium">Antihypertensives <span class="text-primary">25%</span></p>
                          </div>
                          <div class="bg-white p-4 rounded-lg border border-gray-200">
                            <p class="font-medium">Analgesics <span class="text-primary">20%</span></p>
                          </div>
                          <div class="bg-white p-4 rounded-lg border border-gray-200">
                            <p class="font-medium">Antidiabetics <span class="text-primary">15%</span></p>
                          </div>
                          <div class="bg-white p-4 rounded-lg border border-gray-200">
                            <p class="font-medium">Others <span class="text-primary">5%</span></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Category Details Table -->
                  <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Category Details</h3>
                    <p class="text-gray-600 mb-4">Detailed breakdown of medications by category.</p>
                    
                    <div class="overflow-x-auto">
                      <table class="min-w-full divide-y divide-gray-200">
                        <!-- Table content -->
                      </table>
                    </div>
                  </div>
                </div>

                <!-- Supplier Report (initially hidden) -->
                <div id="supplierReport" class="hidden">
                  <!-- Supplier Distribution -->
                  <div class="mb-8">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Supplier Distribution</h3>
                    <div class="bg-gray-50 p-4 rounded-lg mb-4">
                      <p class="text-gray-700 mb-4">Distribution of medications by supplier in the inventory</p>
                      
                      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <div class="bg-white p-4 rounded-lg border border-gray-200">
                          <canvas id="supplierChart"></canvas>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                          <div class="bg-white p-4 rounded-lg border border-gray-200">
                            <p class="font-medium">PharmaCorp <span class="text-primary">40%</span></p>
                          </div>
                          <div class="bg-white p-4 rounded-lg border border-gray-200">
                            <p class="font-medium">MediSupply <span class="text-primary">30%</span></p>
                          </div>
                          <div class="bg-white p-4 rounded-lg border border-gray-200">
                            <p class="font-medium">HealthPharm <span class="text-primary">20%</span></p>
                          </div>
                          <div class="bg-white p-4 rounded-lg border border-gray-200">
                            <p class="font-medium">Global Pharmaceuticals <span class="text-primary">10%</span></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Supplier Performance -->
                  <div class="mb-8">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Supplier Performance</h3>
                    <div class="bg-gray-50 p-4 rounded-lg mb-4">
                      <p class="text-gray-700 mb-4">Delivery performance by supplier</p>
                      
                      <div class="bg-white p-4 rounded-lg border border-gray-200">
                        <canvas id="deliveryChart"></canvas>
                      </div>
                    </div>
                  </div>

                  <!-- Order Volume -->
                  <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Order Volume</h3>
                    <p class="text-gray-600 mb-4">Purchase volume by supplier.</p>
                    
                    <div class="bg-white p-4 rounded-lg border border-gray-200">
                      <canvas id="volumeChart"></canvas>
                    </div>
                  </div>
                </div>
              </div>
</body>

<!-- Chart.js Script (internal script) -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('categoryChart').getContext('2d');
    
    const categoryChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ['Antibiotics', 'Antihypertensives', 'Analgesics', 'Antidiabetics', 'Others'],
        datasets: [{
          data: [35, 25, 20, 15, 5],
          backgroundColor: [
            '#4454C3', // Primary color from your config
            '#FD7F7F', // Danger color
            '#F59E0B', // Warning color
            '#10B981', // Success color
            '#9966FF'  // Purple
          ],
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            position: 'right',
          },
          tooltip: {
            callbacks: {
              label: function(context) {
                return `${context.label}: ${context.raw}%`;
              }
            }
          }
        }
      }
    });
  });
</script>

<!-- External CSS -->
<script src="assets/js/dashboard.js"></script>
<script src="assets/js/report.js"></script>
</html>