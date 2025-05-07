<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Partners</title>
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
            <a href="dashboard.php" class="px-9 py-3 hover:bg-primary cursor-pointer flex items-center text-gray-800 hover:bg-sidebar_hover hover:text-white">
              <img src="assets/svg/dashboard.svg" class="[fill:currentColor] w-5 h-5 mr-3">
              <span class="hidden lg:inline font-medium">Dashboard</span>
            </a>
            <a href="inventory.php" class="px-9 py-3 hover:bg-primary hover:text-white cursor-pointer flex items-center text-gray-800">
              <img src="assets/svg/inventory.svg" class="[fill:currentColor] w-5 h-5 mr-3">
              <span class="hidden lg:inline font-medium">Inventory</span>
            </a>
            <a href="partners.php" class="px-9 py-3 bg-primary hover:bg-gray-200 hover:text-gray-800 cursor-pointer flex items-center text-white">
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

        <div class="flex-1 overflow-auto">
          <div class="container mx-auto px-3 py-8">
            <!-- Header with Button Group -->
            <div class="flex justify-between items-start mb-8">
              <div>
                <h1 class="text-3xl font-bold text-gray-800">Partners</h1>
                <h3 class="text-lg text-gray-500 mt-1">Manage System Partners</h3>
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
              <div class="flex space-x-2 ml-auto">
                <button class="border border-gray-300 px-4 py-2 rounded-md hover:bg-gray-100">
                  <span>+ Export</span>
                </button>
                <button id="add_partner" class="bg-primary text-white px-4 py-2 rounded-md hover:bg-blue-600 flex items-center">
                  <span>Add Partners</span>
                </button>
                <button id="openViewRequestsModal" class="bg-primary text-white px-4 py-2 rounded-md hover:bg-blue-600 flex items-center">
                  View Requests
                </button>
              </div>
            </div>

          <!-- Search and Filters -->
          <div class="grid grid-cols-1 md:grid-cols-8 gap-4 mb-6">
            <!-- Enhanced Search Input -->
            <div class="relative col-span-5">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
              </div>
              <input 
                type="text" 
                class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                placeholder="Search medications by name, category, or supplier...">
            </div>
            <select class="px-3 py-2 border rounded-md">
              <option>All Roles</option>
              <option>Antibiotic</option>
              <option>Antihypertensive</option>
            </select>
            <select class="px-4 py-2 border rounded-md">
              <option>Location</option>
              <option>Cebu</option>
              <option>Manila</option>
            </select>
            <select class="px-4 py-2 border rounded-md">
              <option>Status</option>
              <option>Active</option>
              <option>Inactive</option>
            </select>
          </div>

          <!-- Inventory Table -->
          <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-gray-200">
                <tr>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Patner Type</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Location</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                <!-- Row 1 -->
                <tr class="hover:bg-gray-50">
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="font-medium text-gray-900">Pharmacy</div>
                    <div class="text-sm text-gray-500">Address/location here</div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">pharmacy@gmail.com</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Pharmacy</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Cebu City</td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                    <button class="text-blue-600 hover:text-blue-900 mr-3 view-item">View</button>
                    <button class="text-blue-600 hover:text-blue-900 mr-3 edit-item ">Edit</button>
                    <button class="text-red-600 hover:text-red-900 delete-item ">Delete</button>
                  </td>
                </tr>
                
                <!-- Row 2 -->
                <tr class="hover:bg-gray-50">
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="font-medium text-gray-900">Supplier</div>
                    <div class="text-sm text-gray-500">Address/location here</div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Supplier@gmail.com</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Supplier</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Cebu City</td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                    <button class="text-blue-600 hover:text-blue-900 mr-3 view-item">View</button>
                    <button class="text-blue-600 hover:text-blue-900 mr-3 edit-item ">Edit</button>
                    <button class="text-red-600 hover:text-red-900 delete-item ">Delete</button>
                  </td>
                </tr>
                <!-- Row 3 -->
                <tr class="hover:bg-gray-50">
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="font-medium text-gray-900">Inactive Pharmacy</div>
                    <div class="text-sm text-gray-500">Address/location here</div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">inactive_pharmacy@gmail.com</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Pharmacy</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Cebu City</td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-300 text-grey-100">Inactive</span>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                    <button class="text-blue-600 hover:text-blue-900 mr-3 view-item">View</button>
                    <button class="text-blue-600 hover:text-blue-900 mr-3 edit-item ">Edit</button>
                    <button class="text-red-600 hover:text-red-900 delete-item ">Delete</button>
                  </td>
                </tr>
                
                <!-- Row 4 -->
                <tr class="hover:bg-gray-50">
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="font-medium text-gray-900">Inactive Supplier</div>
                    <div class="text-sm text-gray-500">Address/location here</div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">inactive_supplier@gmail.com</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Supplier</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Cebu City</td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-300 text-grey-100">Inactive</span>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                    <button class="text-blue-600 hover:text-blue-900 mr-3 view-item">View</button>
                    <button class="text-blue-600 hover:text-blue-900 mr-3 edit-item ">Edit</button>
                    <button class="text-red-600 hover:text-red-900 delete-item ">Delete</button>
                  </td>
                </tr>
                
                <!-- Add other rows following the same pattern -->
              </tbody>
            </table>
          </div>

          <!-- Pagination -->
          <div class="flex items-center justify-between mt-6">
            <div class="text-sm text-gray-500">
              Showing <span class="font-medium">1</span> to <span class="font-medium">5</span> of <span class="font-medium">24</span> results
            </div>
            <div class="flex space-x-2">
              <button class="px-3 py-1 border rounded-md text-gray-500 hover:bg-gray-300">Previous</button>
              <button class="px-3 py-1 border rounded-md bg-primary text-white">1</button>
              <button class="px-3 py-1 border rounded-md hover:bg-gray-300">2</button>
              <button class="px-3 py-1 border rounded-md hover:bg-gray-300">Next</button>
            </div>
          </div>
        </div>

        <!-- Modals -->

        <!-- Partner View Panel -->
        <div id="viewPanel" class="fixed inset-y-0 right-0 z-50 w-full max-w-2xl bg-white shadow-xl transform translate-x-full transition-transform duration-300 ease-in-out overflow-y-auto">
          <div class="p-6">
            <div class="flex justify-between items-center mb-6">
              <h2 class="text-2xl font-bold text-gray-800">View Partner</h2>
              <button id="closeViewPanel" class="text-gray-500 hover:text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
              </button>
            </div>
            
            <!-- Partner Details -->
            <div class="mb-6">
              <h3 class="text-lg font-medium text-gray-900 mb-3">Partner Details</h3>
              <div class="space-y-2">
                <div class="flex">
                  <span class="w-1/3 text-sm font-medium text-gray-500">Name:</span>
                  <span class="w-2/3 text-sm text-gray-900">Pharmacy Partner</span>
                </div>
                <div class="flex">
                  <span class="w-1/3 text-sm font-medium text-gray-500">Email:</span>
                  <span class="w-2/3 text-sm text-gray-900">pharmacy@gmail.com</span>
                </div>
                <div class="flex">
                  <span class="w-1/3 text-sm font-medium text-gray-500">Partner Type:</span>
                  <span class="w-2/3 text-sm text-gray-900">Pharmacy</span>
                </div>
                <div class="flex">
                  <span class="w-1/3 text-sm font-medium text-gray-500">Status:</span>
                  <span class="w-2/3 text-sm text-gray-900">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                  </span>
                </div>
              </div>
            </div>
            
            <div class="border-t border-gray-200 my-4"></div>
            
            <!-- Location Information -->
            <div class="mb-6">
              <h3 class="text-lg font-medium text-gray-900 mb-3">Location Information</h3>
              <div class="space-y-2">
                <div class="flex">
                  <span class="w-1/3 text-sm font-medium text-gray-500">Address:</span>
                  <span class="w-2/3 text-sm text-gray-900">123 Pharmacy Street, Cebu City</span>
                </div>
                <div class="flex">
                  <span class="w-1/3 text-sm font-medium text-gray-500">Region:</span>
                  <span class="w-2/3 text-sm text-gray-900">Central Visayas</span>
                </div>
                <div class="flex">
                  <span class="w-1/3 text-sm font-medium text-gray-500">Postal Code:</span>
                  <span class="w-2/3 text-sm text-gray-900">6000</span>
                </div>
              </div>
            </div>
            
            <div class="border-t border-gray-200 my-4"></div>
            
            <!-- Contact Information -->
            <div class="mb-6">
              <h3 class="text-lg font-medium text-gray-900 mb-3">Contact Information</h3>
              <div class="space-y-2">
                <div class="flex">
                  <span class="w-1/3 text-sm font-medium text-gray-500">Contact Person:</span>
                  <span class="w-2/3 text-sm text-gray-900">Juan Dela Cruz</span>
                </div>
                <div class="flex">
                  <span class="w-1/3 text-sm font-medium text-gray-500">Phone Number:</span>
                  <span class="w-2/3 text-sm text-gray-900">+63 912 345 6789</span>
                </div>
                <div class="flex">
                  <span class="w-1/3 text-sm font-medium text-gray-500">Date Joined:</span>
                  <span class="w-2/3 text-sm text-gray-900">2023-05-15</span>
                </div>
              </div>
            </div>
            
            <div class="border-t border-gray-200 my-4"></div>
            
            <!-- Partner Statistics -->
            <div class="mb-6">
              <h3 class="text-lg font-medium text-gray-900 mb-3">Partner Statistics</h3>
              <div class="grid grid-cols-2 gap-4">
                <div class="border rounded-md p-3">
                  <div class="text-sm font-medium text-gray-500">Total Transactions</div>
                  <div class="text-2xl font-bold text-primary">142</div>
                </div>
                <div class="border rounded-md p-3">
                  <div class="text-sm font-medium text-gray-500">Last Activity</div>
                  <div class="text-lg font-medium">2024-06-20</div>
                </div>
              </div>
            </div>
            
            <!-- Action Buttons -->
            <div class="flex justify-end space-x-3 pt-4 border-t border-gray-200">
              <button id="openEditModal" class="px-4 py-2 border border-gray-300 text-white rounded-md bg-primary hover:bg-blue-600">
                Edit Partner
              </button>
              <button id="openTransactionsModal" class="px-4 py-2 border border-gray-300 text-white rounded-md bg-green-600 hover:bg-green-700">
                View Transactions
              </button>
              <button id="changeStatusBtn" class="px-4 py-2 border border-gray-300 text-white rounded-md bg-yellow-500 hover:bg-yellow-600">
                Change Status
              </button>
            </div>
          </div>
        </div>
        
        <!-- Delete Confirmation Modal -->
        <div id="deleteModal" class="fixed inset-0 z-50 hidden overflow-y-auto mt-80">
          <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <!-- Background overlay -->
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
              <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <!-- Modal content -->
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
              <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                  <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                    <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke=" red ">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                    </svg>
                  </div>
                  <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                    <h3 class="text-lg leading-6 mt-1 font-medium text-gray-900" id=""   >
                      Delete Inventory Item
                    </h3>
                    <div class="mt-2">
                      <p class="text-sm text-gray-500">
                        Are you sure you want to delete this item? This action cannot be undone.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="button" id="confirmDelete" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red text-base font-medium text-white hover:bg-red focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red sm:ml-3 sm:w-auto sm:text-sm ">
                  Delete
                </button>
                <button type="button" id="cancelDelete" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                  Cancel
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Edit Form -->
        <div id="editForm" class="fixed inset-y-0 right-0 z-50 w-full max-w-2xl bg-white shadow-xl transform translate-x-full transition-transform duration-300 ease-in-out overflow-y-auto">
          <div class="p-6">
            <div class="flex justify-between items-center mb-6">
              <h2 class="text-2xl font-bold text-gray-800">Edit Partner</h2>
              <button id="closeEditForm" class="text-gray-500 hover:text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
            
            <!-- Partner Details -->
            <div class="mb-6">
              <h3 class="text-lg font-medium text-gray-900 mb-3">Partner Details</h3>
              <div class="space-y-4">
                <div class="grid grid-cols-2 gap-4">
                  <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Partner Name</label>
                    <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md" value="Pharmacy Partner">
                  </div>
                  <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" class="w-full px-3 py-2 border border-gray-300 rounded-md" value="pharmacy@gmail.com">
                  </div>
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                  <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Partner Type</label>
                    <select class="w-full px-3 py-2 border border-gray-300 rounded-md">
                      <option>Pharmacy</option>
                      <option>Supplier</option>
                      <option>Distributor</option>
                    </select>
                  </div>
                  <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                    <select class="w-full px-3 py-2 border border-gray-300 rounded-md">
                      <option>Active</option>
                      <option>Inactive</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="border-t border-gray-200 my-4"></div>
            
            <!-- Location Information -->
            <div class="mb-6">
              <h3 class="text-lg font-medium text-gray-900 mb-3">Location Information</h3>
              <div class="space-y-4">
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">Address</label>
                  <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md" value="123 Pharmacy Street">
                </div>
                <div class="grid grid-cols-3 gap-4">
                  <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">City</label>
                    <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md" value="Cebu City">
                  </div>
                  <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Region</label>
                    <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md" value="Central Visayas">
                  </div>
                  <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Postal Code</label>
                    <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md" value="6000">
                  </div>
                </div>
              </div>
            </div>
            
            <div class="border-t border-gray-200 my-4"></div>
            
            <!-- Contact Information -->
            <div class="mb-6">
              <h3 class="text-lg font-medium text-gray-900 mb-3">Contact Information</h3>
              <div class="grid grid-cols-2 gap-4">
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">Contact Person</label>
                  <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md" value="Juan Dela Cruz">
                </div>
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                  <input type="tel" class="w-full px-3 py-2 border border-gray-300 rounded-md" value="+63 912 345 6789">
                </div>
              </div>
            </div>
            
            <!-- Form Actions -->
            <div class="flex justify-end space-x-3 pt-4 border-t border-gray-200">
              <button id="cancelEdit" class="px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-50">
                Cancel
              </button>
              <button class="px-4 py-2 bg-primary text-white rounded-md hover:bg-blue-600">
                Save Changes
              </button>
            </div>
          </div>
        </div>

        <!-- Add Partner Modal -->
        <div id="partnerModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
          <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <!-- Background overlay -->
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
              <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            
            <!-- Modal panel -->
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-2xl sm:w-full">
              <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                  <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                    <div class="flex justify-between items-center mb-6">
                      <h3 class="text-2xl font-bold text-gray-800">
                        Add New Partner
                      </h3>
                      <button id="closePartnerModal" class="text-gray-500 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                      </button>
                    </div>
                    
                    <!-- Partner Form -->
                    <form id="partnerForm" class="space-y-4">
                      <!-- Basic Information -->
                      <div class="border-b border-gray-200 pb-4">
                        <h4 class="text-lg font-medium text-gray-900 mb-4">Basic Information</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                          <div>
                            <label for="partnerName" class="block text-sm font-medium text-gray-700 mb-1">Partner Name*</label>
                            <input type="text" id="partnerName" name="partnerName" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                          </div>
                          <div>
                            <label for="partnerType" class="block text-sm font-medium text-gray-700 mb-1">Partner Type*</label>
                            <select id="partnerType" name="partnerType" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                              <option value="">Select Type</option>
                              <option value="pharmacy">Pharmacy</option>
                              <option value="supplier">Supplier</option>
                              <option value="distributor">Distributor</option>
                            </select>
                          </div>
                        </div>
                        <div class="mt-4">
                          <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address*</label>
                          <input type="email" id="email" name="email" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                      </div>
                      
                      <!-- Contact Information -->
                      <div class="border-b border-gray-200 pb-4">
                        <h4 class="text-lg font-medium text-gray-900 mb-4">Contact Information</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                          <div>
                            <label for="contactPerson" class="block text-sm font-medium text-gray-700 mb-1">Contact Person*</label>
                            <input type="text" id="contactPerson" name="contactPerson" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                          </div>
                          <div>
                            <label for="phoneNumber" class="block text-sm font-medium text-gray-700 mb-1">Phone Number*</label>
                            <input type="tel" id="phoneNumber" name="phoneNumber" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                          </div>
                        </div>
                      </div>
                      
                      <!-- Location Information -->
                      <div class="pb-4">
                        <h4 class="text-lg font-medium text-gray-900 mb-4">Location Information</h4>
                        <div class="mb-4">
                          <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Address*</label>
                          <input type="text" id="address" name="address" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                          <div>
                            <label for="city" class="block text-sm font-medium text-gray-700 mb-1">City*</label>
                            <input type="text" id="city" name="city" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                          </div>
                          <div>
                            <label for="region" class="block text-sm font-medium text-gray-700 mb-1">Region*</label>
                            <input type="text" id="region" name="region" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                          </div>
                          <div>
                            <label for="postalCode" class="block text-sm font-medium text-gray-700 mb-1">Postal Code</label>
                            <input type="text" id="postalCode" name="postalCode" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                          </div>
                        </div>
                      </div>
                      
                      <!-- Status -->
                      <div>
                        <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status*</label>
                        <select id="status" name="status" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                          <option value="active">Active</option>
                          <option value="inactive">Inactive</option>
                          <option value="pending">Pending Approval</option>
                        </select>
                      </div>
                      
                      <!-- Form Actions -->
                      <div class="flex justify-end space-x-3 pt-4 border-t border-gray-200">
                        <button type="button" id="cancelPartner" class="px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-50">
                          Cancel
                        </button>
                        <button type="submit" class="px-4 py-2 bg-primary text-white rounded-md hover:bg-blue-600">
                          Save Partner
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Partner Requests Modal -->
        <div id="viewRequestsModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
          <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <!-- Background overlay -->
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
              <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            
            <!-- Modal panel -->
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-6xl sm:w-full">
              <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                  <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                    <div class="flex justify-between items-center mb-6">
                      <h3 class="text-2xl font-bold text-gray-800">Partner Requests</h3>
                      <button id="closeViewRequestsModal" class="text-gray-500 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                      </button>
                    </div>
                    
                    <!-- Filters -->
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
                      <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Request Status</label>
                        <select class="w-full px-3 py-2 border border-gray-300 rounded-md">
                          <option>All Requests</option>
                          <option>Pending Approval</option>
                          <option>Approved</option>
                          <option>Rejected</option>
                          <option>Completed</option>
                        </select>
                      </div>
                      <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Partner Type</label>
                        <select class="w-full px-3 py-2 border border-gray-300 rounded-md">
                          <option>All Types</option>
                          <option>Pharmacy</option>
                          <option>Supplier</option>
                          <option>Distributor</option>
                        </select>
                      </div>
                      <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Date Range</label>
                        <select class="w-full px-3 py-2 border border-gray-300 rounded-md">
                          <option>Last 7 days</option>
                          <option>Last 30 days</option>
                          <option>Last 90 days</option>
                          <option>Custom range</option>
                        </select>
                      </div>
                      <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Location</label>
                        <select class="w-full px-3 py-2 border border-gray-300 rounded-md">
                          <option>All Locations</option>
                          <option>Cebu City</option>
                          <option>Manila</option>
                          <option>Davao</option>
                        </select>
                      </div>
                    </div>
                    
                    <!-- Requests Table -->
                    <div class="overflow-x-auto">
                      <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                          <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Request ID</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Partner</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Request Details</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Submitted</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                          </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                          <!-- Sample Partner Request 1 -->
                          <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">PREQ-2024-001</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                              <div class="text-sm text-gray-900">Pharmacy Partner</div>
                              <div class="text-sm text-gray-500">pharmacy@example.com</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">New Partnership</td>
                            <td class="px-6 py-4 text-sm text-gray-500">
                              <div>Requesting full access</div>
                              <div class="text-xs text-gray-400">3 items pending approval</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2025-06-20</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                              <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                              <button class="text-primary hover:text-blue-700 mr-2">Approve</button>
                              <button class="text-red-600 hover:text-red-900">Reject</button>
                            </td>
                          </tr>
                          
                          <!-- Sample Partner Request 2 -->
                          <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">PREQ-2024-002</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                              <div class="text-sm text-gray-900">MediSupply Co.</div>
                              <div class="text-sm text-gray-500">supply@example.com</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Supplier</td>
                            <td class="px-6 py-4 text-sm text-gray-500">
                              <div>Requesting premium supplier status</div>
                              <div class="text-xs text-gray-400">15 products</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2025-06-18</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                              <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Approved</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                              <button class="text-gray-400 cursor-not-allowed" disabled>Completed</button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    
                    <!-- Pagination -->
                    <div class="flex items-center justify-between mt-6">
                      <div class="text-sm text-gray-500">
                        Showing <span class="font-medium">1</span> to <span class="font-medium">2</span> of <span class="font-medium">8</span> requests
                      </div>
                      <div class="flex space-x-2">
                        <button class="px-3 py-1 border rounded-md text-gray-500 hover:bg-gray-50">Previous</button>
                        <button class="px-3 py-1 border rounded-md bg-primary text-white">1</button>
                        <button class="px-3 py-1 border rounded-md hover:bg-gray-50">2</button>
                        <button class="px-3 py-1 border rounded-md hover:bg-gray-50">3</button>
                        <button class="px-3 py-1 border rounded-md hover:bg-gray-50">Next</button>
                      </div>
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
<script src="assets/js/partners.js"></script>
</html>