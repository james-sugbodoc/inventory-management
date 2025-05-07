<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inventory</title>
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
            <a href="dashboard.php" class="px-9 py-3 cursor-pointer hover:bg-primary flex items-center text-gray-800 hover:bg-sidebar_hover hover:text-white">
              <img src="assets/svg/dashboard.svg" class="[fill:currentColor] w-5 h-5 mr-3">
              <span class="hidden lg:inline font-medium">Dashboard</span>
            </a>
            <a href="inventory.php" class="px-9 py-3 hover:bg-gray-200 bg-primary hover:text-gray-800 cursor-pointer flex items-center text-white">
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
        <div class="flex-1 overflow-auto">
          <div class="container mx-auto px-3 py-8">
            <!-- Header with Button Group -->
            <div class="flex justify-between items-start mb-8">
              <div>
                <h1 class="text-3xl font-bold text-gray-800">Inventory</h1>
                <h3 class="text-lg text-gray-500 mt-1">Manage your pharmacy's medication stock</h3>
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
              <div class="flex space-x-2 bg-gray-100 p-1 rounded-md w-max "  >
                <button class="px-6 py-2 w-40 rounded-md bg-white text-gray-900 font-semibold shadow">Inventory</button>
                <button class="px-6 py-2 w-40 rounded-md text-gray-600 hover:text-gray-900">Tracking</button>
                <button class="px-6 py-2 w-40 rounded-md text-gray-600 hover:text-gray-900">My Requests</button>
              </div>
              <div class="flex space-x-2 ml-auto">
                <button class="border border-gray-300 px-4 py-2 rounded-md hover:bg-gray-100">
                  <span>+ Export</span>
                </button>
                <button id="add_supply" class="bg-primary text-white px-4 py-2 rounded-md hover:bg-blue-600 flex items-center">
                  <span>Add Supply</span>
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
              <option>All Categories</option>
              <option>Antibiotic</option>
              <option>Antihypertensive</option>
            </select>
            <select class="px-4 py-2 border rounded-md">
              <option>All Suppliers</option>
              <option>PharmacCorp</option>
              <option>MediSupply</option>
            </select>
            <select class="px-4 py-2 border rounded-md">
              <option>Status</option>
              <option></option>
            </select>
          </div>
        
          <!-- Inventory Table -->
          <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-gray-200">
                <tr>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name & Dosage</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Form</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Stock</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Supplier</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                <!-- Row 1 -->
                <tr class="hover:bg-gray-50">
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="font-medium text-gray-900">Amoxicillin</div>
                    <div class="text-sm text-gray-500">500mg</div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Antibiotic</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Capsule</td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">150</span>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₱15.99</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">PharmacCorp</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                    <button class="text-blue-600 hover:text-blue-900 mr-3 view-item">View</button>
                    <button class="text-blue-600 hover:text-blue-900 mr-3 edit-item ">Edit</button>
                    <button class="text-red-600 hover:text-red-900 delete-item ">Delete</button>
                  </td>
                </tr>
                
                <!-- Row 2 -->
                <tr class="hover:bg-gray-50">
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="font-medium text-gray-900">Lisinopril</div>
                    <div class="text-sm text-gray-500">10mg</div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Antihypertensive</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Tablet</td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">85</span>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₱12.50</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">MediSupply</td>
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

        <!-- Modal -->
        <div id="inventoryModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
          <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <!-- Background overlay -->
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
              <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            
            <!-- Modal panel -->
            <div class="inline-block  align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-60 sm:align-middle sm:max-w-lg sm:w-full ">
              <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                  <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                    <h3 class="text-lg leading-6 font-medium text-gray-900 mb-6">
                      Add Inventory
                    </h3>
                    <p class="text-sm text-gray-500 mb-4">
                      Select an Option to Add Inventory
                    </p>
                    
                    <div class="grid gap-4">
                      <!-- Internal Inventory Option -->
                      <div id="internalInventory" class="border border-gray-200 rounded-lg p-4 hover:border-primary hover:bg-faded_red cursor-pointer transition-colors duration-200">
                        <h4 class="font-medium text-gray-900">Add Internal Inventory</h4>
                        <p class="text-sm text-gray-500 mt-1">
                          Directly record inventory inside the facility
                        </p>
                      </div>
                      
                      <!-- External Inventory Option -->
                      <div id="externalInventory" class="border border-gray-200 rounded-lg p-4 hover:border-primary hover:bg-faded_red cursor-pointer transition-colors duration-200">
                        <h4 class="font-medium text-gray-900">Add External Inventory</h4>
                        <p class="text-sm text-gray-500 mt-1">
                          Input external inventory from other facilities
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="button" id="closeModal" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                  Cancel
                </button>
              </div>
            </div>
          </div>
        </div>


        <!-- Internal Inventory Form -->
        <div id="internalForm" class="fixed inset-y-0 right-0 z-50 w-full max-w-2xl bg-white shadow-xl transform translate-x-full transition-transform duration-300 ease-in-out overflow-y-auto">
          <div class="p-6">
            <div class="flex justify-between items-center mb-6">
              <h2 class="text-2xl font-bold text-gray-800">Add Internal Inventory</h2>
              <button id="closeInternalForm" class="text-gray-500 hover:text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
            
            <!-- Inventory Type  -->
            <div class="mb-6">
              <h3 class="text-lg font-medium text-gray-900 mb-3">Category</h3>
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Medication -->
                <label class="flex items-start p-3 border rounded-lg hover:bg-gray-50" data-snomed="105590001" data-fhir="Medication">
                  <input type="radio" name="internal_type" value="medication" class="mt-1 form-radio text-primary" checked>
                  <div class="ml-3">
                    <span class="block font-medium">Medication</span>
                    <span class="block text-sm text-gray-500">Drugs, vaccines, biologics</span>
                  </div>
                </label>
                
                <!-- Medical Devices -->
                <label class="flex items-start p-3 border rounded-lg hover:bg-gray-50" data-snomed="49062001" data-fhir="Device">
                  <input type="radio" name="internal_type" value="medical_device" class="mt-1 form-radio text-primary">
                  <div class="ml-3"> 
                    <span class="block font-medium">Medical Devices</span>
                    <span class="block text-sm text-gray-500">Equipment, instruments, implants</span>
                  </div>
                </label>

                <!-- Clinical Consumables -->
                <label class="flex items-start p-3 border rounded-lg hover:bg-gray-50" data-snomed="385420005" data-fhir="Device">
                  <input type="radio" name="internal_type" value="clinical_consumables" class="mt-1 form-radio text-primary">
                  <div class="ml-3">
                    <span class="block font-medium">Clinical Consumables</span>
                    <span class="block text-sm text-gray-500">Gloves, syringes, dressings</span>
                  </div>
                </label>

                <!-- Patient Support Items -->
                <label class="flex items-start p-3 border rounded-lg hover:bg-gray-50" data-snomed="720516007" data-fhir="SupplyDelivery">
                  <input type="radio" name="internal_type" value="patient_support" class="mt-1 form-radio text-primary">
                  <div class="ml-3">
                    <span class="block font-medium">Patient Support</span>
                    <span class="block text-sm text-gray-500">Water, nutrition, comfort items</span>
                  </div>
                </label> 
              </div>
            </div>
            
            <div class="border-t border-gray-200 my-4"></div>
            
            <!-- Product Details -->
            <div class="mb-6">
              <h3 class="text-lg font-medium text-gray-900 mb-3">Product Details</h3>
              <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">Product Name</label>
                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md" placeholder="Enter product name">
              </div>
              <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">SKU</label>
                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md bg-gray-100" value="MED-[Category]-[ID]" disabled>
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                <textarea class="w-full px-3 py-2 border border-gray-300 rounded-md" rows="3" placeholder="Enter product description"></textarea>
              </div>
            </div>
            
            <div class="border-t border-gray-200 my-4"></div>
            
            <!-- Stock & Tracking -->
            <div class="mb-6">
              <h3 class="text-lg font-medium text-gray-900 mb-3">Stock & Tracking</h3>
              <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">Quantity</label>
                  <input type="number" class="w-full px-3 py-2 border border-gray-300 rounded-md" value="0">
                </div>
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">Batch/Lot #</label>
                  <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md" placeholder="Enter batch number">
                </div>
              </div>
              <div class="grid grid-cols-2 gap-4">
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">Expiration Date</label>
                  <input type="date" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                </div>
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">Minimum Stock Level</label>
                  <input type="number" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                </div>
              </div>
            </div>
            
            <!-- Location & Storage -->
            <div class="mb-6">
              <h3 class="text-lg font-medium text-gray-900 mb-3">Location & Storage</h3>
              <div class="grid grid-cols-3 gap-4">
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">Department</label>
                  <select class="w-full px-3 py-2 border border-gray-300 rounded-md">
                    <option>Select department</option>
                  </select>
                </div>
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">Storage</label>
                  <select class="w-full px-3 py-2 border border-gray-300 rounded-md">
                    <option>Select storage</option>
                  </select>
                </div>
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">Usage Type</label>
                  <select class="w-full px-3 py-2 border border-gray-300 rounded-md">
                    <option>Select usage type</option>
                  </select>
                </div>
              </div>
            </div>
            
            <!-- Status -->
            <div class="mb-6">
              <h3 class="text-lg font-medium text-gray-900 mb-3">Inventory Status</h3>
              <div class="flex flex-wrap gap-4">
                <!-- Active -->
                <label class="flex items-center">
                  <input type="radio" name="inventory_status" value="active" class="form-radio text-primary" checked>
                  <span class="ml-2">
                    <span class="block font-medium">Active</span>
                    <!-- <span class="block text-sm text-gray-500">Available for use</span> -->
                  </span>
                </label>

                <!-- Inactive -->
                <label class="flex items-center">
                  <input type="radio" name="inventory_status" value="inactive" class="form-radio text-primary">
                  <span class="ml-2">
                    <span class="block font-medium">Inactive</span>
                    <!-- <span class="block text-sm text-gray-500">Discontinued/retired</span> -->
                  </span>
                </label>

                <!-- Quarantined -->
                <label class="flex items-center">
                  <input type="radio" name="inventory_status" value="quarantined" class="form-radio text-primary">
                  <span class="ml-2">
                    <span class="block font-medium">Quarantined</span>
                    <!-- <span class="block text-sm text-gray-500">Under quality review</span> -->
                  </span>
                </label>

                <!-- Expired (Recommended Addition) -->
                <label class="flex items-center">
                  <input type="radio" name="inventory_status" value="expired" class="form-radio text-primary">
                  <span class="ml-2">
                    <span class="block font-medium">Expired</span>
                    <!-- <span class="block text-sm text-gray-500">Past shelf life</span> -->
                  </span>
                </label>

                <!-- Recalled (For Compliance) -->
                <label class="flex items-center">
                  <input type="radio" name="inventory_status" value="recalled" class="form-radio text-primary">
                  <span class="ml-2">
                    <span class="block font-medium">Recalled</span>
                    <!-- <span class="block text-sm text-gray-500">Manufacturer recall</span> -->
                  </span>
                </label>
              </div>
            </div>
            
            <!-- Form Actions -->
            <div class="flex justify-end space-x-3 pt-4 border-t border-gray-200">
              <button id="cancelInternal" class="px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-50">
                Cancel
              </button>
              <button class="px-4 py-2 bg-primary text-white rounded-md hover:bg-blue-600">
                Save Inventory
              </button>
            </div>
          </div>
        </div>

        <!-- External Inventory Form -->
        <div id="externalForm" class="fixed inset-y-0 right-0 z-50 w-full max-w-2xl bg-white shadow-xl transform translate-x-full transition-transform duration-300 ease-in-out overflow-y-auto">
          <div class="p-6">
            <div class="flex justify-between items-center mb-6">
              <h2 class="text-2xl font-bold text-gray-800">Add External Inventory</h2>
              <button id="closeExternalForm" class="text-gray-500 hover:text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
            
           <!-- Inventory Type  -->
           <div class="mb-6">
            <h3 class="text-lg font-medium text-gray-900 mb-3">Category</h3>
              <div>
                  <select class="w-full px-3 py-2 border border-gray-300 rounded-md">
                    <option>Select Category</option>   
                    <option>Medication</option>
                    <option>Medical Equipments</option>
                    <option>Clinical Consumables</option>
                    <option>Patient Support</option>
                  </select>
                  <div class="px-3 py-2 text-blue-500">
                    <a href="" >+ Add Category</a>
                  </div>
                </div>
            </div>
            
            <div class="border-t border-gray-200 my-4"></div>
            
            <!-- Product Details -->
            <div class="mb-6">
              <h3 class="text-lg font-medium text-gray-900 mb-3">Product Details</h3>
              <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">Product Name</label>
                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md" placeholder="Enter product name">
              </div>
              <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">SKU</label>
                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md bg-gray-100" value="MED-[Category]-[ID]" disabled>
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                <textarea class="w-full px-3 py-2 border border-gray-300 rounded-md" rows="3" placeholder="Enter product description"></textarea>
              </div>
            </div>
            
            <div class="border-t border-gray-200 my-4"></div>
            
            <!-- Vendor & Ownership -->
            <div class="mb-6">
              <h3 class="text-lg font-medium text-gray-900 mb-3">Vendor & Ownership</h3>
              <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">Vendor</label>
                  <select class="w-full px-3 py-2 border border-gray-300 rounded-md">
                    <option>Select supplier</option>
                  </select>
                </div>
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">Contract Ref</label>
                  <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md" placeholder="Enter batch number">
                </div>
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Ownership</label>
                <select class="w-full px-3 py-2 border border-gray-300 rounded-md">
                  <option>Select ownership</option>
                </select>
              </div>
            </div>
            
            <!-- Stock & Tracking -->
            <div class="mb-6">
              <h3 class="text-lg font-medium text-gray-900 mb-3">Stock & Tracking</h3>
              <div class="grid grid-cols-2 gap-4">
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">Current Vendor Stock</label>
                  <input type="number" class="w-full px-3 py-2 border border-gray-300 rounded-md" value="0">
                </div>
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">Lead Time</label>
                  <div class="flex">
                    <input type="number" class="w-full px-3 py-2 border border-gray-300 rounded-md rounded-r-none" value="0">
                    <span class="inline-flex items-center px-3 py-2 border border-l-0 border-gray-300 bg-gray-50 text-gray-500 rounded-md rounded-l-none">days</span>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Status -->
            <div class="mb-6">
              <h3 class="text-lg font-medium text-gray-900 mb-3">Status</h3>
              <div class="flex space-x-4">
                <label class="inline-flex items-center">
                  <input type="radio" name="external_status" class="form-radio text-primary" checked>
                  <span class="ml-2">Active</span>
                </label>
                <label class="inline-flex items-center">
                  <input type="radio" name="external_status" class="form-radio text-primary">
                  <span class="ml-2">On Hold</span>
                </label>
                <label class="inline-flex items-center">
                  <input type="radio" name="external_status" class="form-radio text-primary">
                  <span class="ml-2">Discontinued</span>
                </label>
              </div>
            </div>
            
            <!-- Form Actions -->
            <div class="flex justify-end space-x-3 pt-4 border-t border-gray-200">
              <button id="cancelExternal" class="px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-50">
                Cancel
              </button>
              <button class="px-4 py-2 bg-primary text-white rounded-md hover:bg-blue-600">
                Save Inventory
              </button>
            </div>
          </div>
        </div>

        <!-- View Panel -->
        <div id="viewPanel" class="fixed inset-y-0 right-0 z-50 w-full max-w-2xl bg-white shadow-xl transform translate-x-full transition-transform duration-300 ease-in-out overflow-y-auto">
          <div class="p-6">
            <div class="flex justify-between items-center mb-6">
              <h2 class="text-2xl font-bold text-gray-800">View Supply</h2>
              <button id="closeViewPanel" class="text-gray-500 hover:text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
            
            <!-- Product Details -->
            <div class="mb-6">
              <h3 class="text-lg font-medium text-gray-900 mb-3">Product Details</h3>
              <div class="space-y-2">
                <div class="flex">
                  <span class="w-1/3 text-sm font-medium text-gray-500">Category:</span>
                  <span class="w-2/3 text-sm text-gray-900">Medication</span>
                </div>
                <div class="flex">
                  <span class="w-1/3 text-sm font-medium text-gray-500">Product Name:</span>
                  <span class="w-2/3 text-sm text-gray-900">Paracetamol 500mg</span>
                </div>
                <div class="flex">
                  <span class="w-1/3 text-sm font-medium text-gray-500">SKU:</span>
                  <span class="w-2/3 text-sm text-gray-900">MED-PARA-500-001</span>
                </div>
                <div class="flex">
                  <span class="w-1/3 text-sm font-medium text-gray-500">Description:</span>
                  <span class="w-2/3 text-sm text-gray-900">Pain reliever, 100-tablet bottles</span>
                </div>
              </div>
            </div>
            
            <div class="border-t border-gray-200 my-4"></div>
            
            <!-- Stock & Tracking -->
            <div class="mb-6">
              <h3 class="text-lg font-medium text-gray-900 mb-3">Stock & Tracking</h3>
              <div class="space-y-2">
                <div class="flex">
                  <span class="w-1/3 text-sm font-medium text-gray-500">Current Quantity:</span>
                  <span class="w-2/3 text-sm text-gray-900">120 units</span>
                </div>
                <div class="flex">
                  <span class="w-1/3 text-sm font-medium text-gray-500">Min. Stock Level:</span>
                  <span class="w-2/3 text-sm text-gray-900">50 units</span>
                </div>
                <div class="flex">
                  <span class="w-1/3 text-sm font-medium text-gray-500">Batch/Lot:</span>
                  <span class="w-2/3 text-sm text-gray-900">BATCH-MED-2024-001</span>
                </div>
                <div class="flex">
                  <span class="w-1/3 text-sm font-medium text-gray-500">Expiration:</span>
                  <span class="w-2/3 text-sm text-gray-900">2025-12-31</span>
                </div>
                <div class="flex">
                  <span class="w-1/3 text-sm font-medium text-gray-500">Last Restock:</span>
                  <span class="w-2/3 text-sm text-gray-900">2024-06-15</span>
                </div>
              </div>
            </div>
            
            <div class="border-t border-gray-200 my-4"></div>
            
            <!-- Location & Compliance -->
            <div class="mb-6">
              <h3 class="text-lg font-medium text-gray-900 mb-3">Location & Compliance</h3>
              <div class="space-y-2">
                <div class="flex">
                  <span class="w-1/3 text-sm font-medium text-gray-500">Location:</span>
                  <span class="w-2/3 text-sm text-gray-900">Main Pharmacy Shelf A</span>
                </div>
                <div class="flex">
                  <span class="w-1/3 text-sm font-medium text-gray-500">Storage:</span>
                  <span class="w-2/3 text-sm text-gray-900">Room Temp</span>
                </div>
                <div class="flex">
                  <span class="w-1/3 text-sm font-medium text-gray-500">Supplier:</span>
                  <span class="w-2/3 text-sm text-gray-900">Supplier 1 (supplier@sample.com)</span>
                </div>
                <div class="flex">
                  <span class="w-1/3 text-sm font-medium text-gray-500">Regulatory:</span>
                  <span class="w-2/3 text-sm text-gray-900">FDA Approved</span>
                </div>
              </div>
            </div>
            
            <div class="border-t border-gray-200 my-4"></div>
            
            <!-- Usage & Movement -->
            <div class="mb-6">
              <h3 class="text-lg font-medium text-gray-900 mb-3">Usage & Movement</h3>
              <div class="space-y-2">
                <div class="flex">
                  <span class="w-1/3 text-sm font-medium text-gray-500">Usage Type:</span>
                  <span class="w-2/3 text-sm text-gray-900">For Consuming</span>
                </div>
                <div class="flex">
                  <span class="w-1/3 text-sm font-medium text-gray-500">Monthly Usage:</span>
                  <span class="w-2/3 text-sm text-gray-900">30 units (Next order in 2 months)</span>
                </div>
                <div class="flex">
                  <span class="w-1/3 text-sm font-medium text-gray-500">Last Used By:</span>
                  <span class="w-2/3 text-sm text-gray-900">Dr. Smith (2024-06-18)</span>
                </div>
                <div class="flex">
                  <span class="w-1/3 text-sm font-medium text-gray-500">Last Transfer:</span>
                  <span class="w-2/3 text-sm text-gray-900">To Ward B (2024-06-20)</span>
                </div>
              </div>
            </div>
            
            <!-- Action Buttons -->
            <div class="flex justify-end space-x-3 pt-4 border-t border-gray-200">
              <button id="openTransferModal" class="px-4 py-2 border border-gray-300 text-white rounded-md bg-primary hover:bg-blue-600">
                Transfer Supply
              </button>
              <button id="openRestockModal" class="px-4 py-2 border border-gray-300 text-white rounded-md bg-primary hover:bg-blue-600">
                Restock
              </button>
              <button id="openAuditLogModal" class="px-4 py-2 border border-gray-300 text-white rounded-md bg-primary hover:bg-blue-600">
                View Audit Log
              </button>
            </div>
          </div>
        </div>

        <!-- Transfer Modal-->
        <div id="transferModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
          <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <!-- Background overlay -->
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
              <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            
            <!-- Modal panel -->
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-20 sm:align-middle sm:max-w-4xl sm:w-full">
              <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                  <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">
                      Transfer Supply
                    </h3>
                    
                    <!-- Transfer Steps Navigation -->
                    <div class="flex border-b border-gray-200 mb-6">
                      <button class="step-btn px-4 py-2 font-medium text-primary border-b-2 border-primary" data-step="1">1. Transfer Details</button>
                      <button class="step-btn px-4 py-2 font-medium text-gray-500 hover:text-gray-700" data-step="2">2. Supply Information</button>
                      <button class="step-btn px-4 py-2 font-medium text-gray-500 hover:text-gray-700" data-step="3">3. Responsible Parties</button>
                      <button class="step-btn px-4 py-2 font-medium text-gray-500 hover:text-gray-700" data-step="4">4. Tracking & Monitoring</button>
                    </div>
                    
                    <!-- Step 1 Content -->
                    <div id="step1" class="step-content active">
                      <div class="mb-6">
                        <h4 class="text-lg font-medium text-gray-900 mb-3">Transfer Details</h4>
                        <div class="space-y-4">
                          <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Transfer ID</label>
                            <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md" placeholder="Sample ID (Auto-generated)">
                          </div>
                          <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Date & Time of Transfer</label>
                            <select class="w-full px-3 py-2 border border-gray-300 rounded-md">
                              <option>Select transfer type</option>
                              <option>Internal Transfer</option>
                              <option>External Transfer</option>
                              <option>Return to Supplier</option>
                              <option>Branch Transfer</option>
                            </select>
                          </div>
                          <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Transfer Type</label>
                            <input type="date" class="w-full px-3 py-2 border border-gray-300 rounded-md" placeholder="ITEM-XXX-ITEM-XX" >
                          </div>
                          <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Priority Level</label>
                            <select class="w-full px-3 py-2 border border-gray-300 rounded-md">
                              <option>Select priority level</option>
                              <option>Low</option>
                              <option>Medium</option>
                              <option>High</option>
                              <option>Urgent</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- Step 2 Content -->
                    <div id="step2" class="step-content hidden">
                      <div class="mb-6">
                        <h4 class="text-lg font-medium text-gray-900 mb-3">Supply Information</h4>
                        <div class="space-y-4">
                          <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">SKU</label>
                            <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md" placeholder="ITEM-XXX-ITEM-XX (Auto-populated)">
                          </div>
                          <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Product Name</label>
                            <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md" placeholder="Sample Status (Auto-populated)">
                          </div>
                          <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Current Location </label>
                            <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md" placeholder="Location A">
                          </div>
                          <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Current Location </label>
                            <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md" placeholder="Location B">
                          </div>
                          <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Quantity to Transfer</label>
                            <input type="number" class="w-full px-3 py-2 border border-gray-300 rounded-md" placeholder="Qty">
                          </div>
                          <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Batch/Lot Number</label>
                            <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md" placeholder="If applicable for medical/expirable items">
                          </div>
                          <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Expiration Date</label>
                            <input type="date" class="w-full px-3 py-2 border border-gray-300 rounded-md" placeholder="If applicable">
                          </div>

                        </div>
                      </div>
                    </div>
                    
                    <!-- Step 3 Content -->
                    <div id="step3" class="step-content hidden">
                      <div class="mb-6">
                        <h4 class="text-lg font-medium text-gray-900 mb-3">Responsible Parties</h4>
                        <div class="space-y-4">
                          <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Initiated By</label>
                            <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md" placeholder="Full name" >
                          </div>
                          <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Approved By </label>
                            <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md" placeholder="Full name" >
                          </div>
                          <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Received By </label>
                            <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md" placeholder="Full name" >
                          </div>

                        </div>
                      </div>
                    </div>
                    
                    <!-- Step 4 Content -->
                    <div id="step4" class="step-content hidden">
                      <div class="mb-6">
                        <h4 class="text-lg font-medium text-gray-900 mb-3">Tracking & Monitoring</h4>
                        <div class="space-y-4">
                          <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                            <select class="w-full px-3 py-2 border border-gray-300 rounded-md">
                              <option>Select Status</option>
                            </select>
                          </div>
                          <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Target Formulation</label>
                            <input type="date" class="w-full px-3 py-2 border border-gray-300 rounded-md" placeholder="MM/DD/YYYY" >
                          </div>
                          <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Tracking Number</label>
                            <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md" placeholder="TRACK-123456" >
                          </div>
                          <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Notes</label>
                            <textarea class="w-full px-3 py-2 border border-gray-300 rounded-md" rows="3" placeholder="Enter product description"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="button" id="nextStep" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-primary text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary sm:ml-3 sm:w-auto sm:text-sm">
                  Next
                </button>
                <button type="button" id="prevStep" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm hidden">
                  Previous
                </button>
                <button type="button" id="closeTransferModal" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                  Cancel
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Restock Form -->
        <div id="restockModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
          <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <!-- Background overlay -->
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
              <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            
            <!-- Modal panel -->
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-5 sm:align-middle sm:max-w-2xl sm:w-full">
              <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                  <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">
                      Restock Form
                    </h3>
                    
                    <!-- Basics Section -->
                    <div class="mb-6">
                      <h4 class="text-lg font-medium text-gray-900 mb-3">Restock</h4>
                      <div class="space-y-4">
                        <div>
                          <label class="block text-sm font-medium text-gray-700 mb-1">Restock ID</label>
                          <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md bg-gray-100" value="RESTOCK-2024-001" disabled>
                        </div>
                      </div>
                    </div>
                    
                    <!-- Priority Section -->
                    <div class="mb-6">
                      <h4 class="text-lg font-medium text-gray-900 mb-3">Priority</h4>
                      <div class="grid grid-cols-2 gap-4">
                        <div>
                          <label class="block text-sm font-medium text-gray-700 mb-1">Priority</label>
                          <select class="w-full px-3 py-2 border border-gray-300 rounded-md">
                            <option>Normal</option>
                            <option>Urgent</option>
                            <option>Critical</option>
                          </select>
                        </div>
                        <div>
                          <label class="block text-sm font-medium text-gray-700 mb-1">Requested By</label>
                          <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md" value="Nurse Alex">
                        </div>
                      </div>
                    </div>
                    
                    <div class="border-t border-gray-200 my-4"></div>
                    
                    <!-- Item Section -->
                    <div class="mb-6">
                      <h4 class="text-lg font-medium text-gray-900 mb-3">Item</h4>
                      <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                          <thead class="bg-gray-50">
                            <tr>
                              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Product</th>
                              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Order Qty</th>
                            </tr>
                          </thead>
                          <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Paracetamol 500mg</div>
                                <div class="text-sm text-gray-500">Suggested: 100 total</div>
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap">
                                <input type="number" class="w-20 px-3 py-2 border border-gray-300 rounded-md" value="80">
                              </td>
                            </tr>
                            <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Current Stock</div>
                                <div class="text-sm text-gray-900">Minimum Stock Level</div>
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">20</div>
                                <div class="text-sm text-gray-900">50</div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    
                    <div class="border-t border-gray-200 my-4"></div>
                    
                    <!-- Order Details Section -->
                    <div class="mb-6">
                      <h4 class="text-lg font-medium text-gray-900 mb-3">Order Details</h4>
                      <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                          <thead class="bg-gray-50">
                            <tr>
                              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Supplier</th>
                              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Order Type</th>
                              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Delivery To</th>
                            </tr>
                          </thead>
                          <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                <select class="w-full px-3 py-2 border border-gray-300 rounded-md">
                                  <option>Supplier 1</option>
                                  <option>Supplier 2</option>
                                  <option>Supplier 3</option>
                                </select>
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap">
                                <select class="w-full px-3 py-2 border border-gray-300 rounded-md">
                                  <option>Purchase Order</option>
                                  <option>Emergency Order</option>
                                  <option>Standing Order</option>
                                </select>
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap">
                                <select class="w-full px-3 py-2 border border-gray-300 rounded-md">
                                  <option>Pharmacy</option>
                                  <option>Ward A</option>
                                  <option>Ward B</option>
                                  <option>Storage Room</option>
                                </select>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    
                    <div class="border-t border-gray-200 my-4"></div>
                    
                    <!-- Compliance Section -->
                    <div class="mb-6">
                      <h4 class="text-lg font-medium text-gray-900 mb-3">Compliance</h4>
                      <div class="flex space-x-4">
                        <label class="inline-flex items-center">
                          <input type="radio" name="compliance_status" class="form-radio text-primary" checked>
                          <span class="ml-2">Active</span>
                        </label>
                        <label class="inline-flex items-center">
                          <input type="radio" name="compliance_status" class="form-radio text-primary">
                          <span class="ml-2">Inactive</span>
                        </label>
                        <label class="inline-flex items-center">
                          <input type="radio" name="compliance_status" class="form-radio text-primary">
                          <span class="ml-2">Quarantined</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="button" class="inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-primary text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary sm:ml-3 sm:w-auto sm:text-sm">
                  Submit Restock
                </button>
                <button type="button" id="closeRestockModal" class="mt-3 inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                  Cancel
                </button>
              </div>
            </div>
          </div>    
    </div>
      <!-- Audit Log -->
      <div id="auditLogModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
          <!-- Background overlay -->
          <div class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
          </div>
          
          <!-- Modal panel -->
          <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-20 sm:align-middle sm:max-w-4xl sm:w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
              <div class="sm:flex sm:items-start">
                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                  <div class="flex justify-between items-center mb-6">
                    <h3 class="text-2xl font-bold text-gray-900">Audit Logs</h3>
                    <button id="closeAuditLogModal" class="text-gray-500 hover:text-gray-700">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                      </svg>
                    </button>
                  </div>
                  
                  <!-- Filters -->
                  <div class="flex flex-wrap gap-3 mb-6">
                    <div class="flex-1 min-w-[200px]">
                      <label class="block text-sm font-medium text-gray-700 mb-1">Date Range</label>
                      <select class="w-full px-3 py-2 border border-gray-300 rounded-md">
                        <option>Last 30 days</option>
                        <option>Last 90 days</option>
                        <option>Last year</option>
                        <option>Custom range</option>
                      </select>
                    </div>
                    <div class="flex-1 min-w-[200px]">
                      <label class="block text-sm font-medium text-gray-700 mb-1">Action Type</label>
                      <select class="w-full px-3 py-2 border border-gray-300 rounded-md">
                        <option>All Actions</option>
                        <option>Restock</option>
                        <option>Transfer</option>
                        <option>Adjustment</option>
                        <option>Usage</option>
                      </select>
                    </div>
                    <div class="flex-1 min-w-[200px]">
                      <label class="block text-sm font-medium text-gray-700 mb-1">Performed By</label>
                      <select class="w-full px-3 py-2 border border-gray-300 rounded-md">
                        <option>All Users</option>
                        <option>Nurse Alex</option>
                        <option>Dr. Smith</option>
                        <option>Pharmacist John</option>
                      </select>
                    </div>
                  </div>
                  
                  <!-- Audit Log Table -->
                  <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                      <thead class="bg-gray-50">
                        <tr>
                          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date/Time</th>
                          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User</th>
                          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Details</th>
                          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Qty Change</th>
                        </tr>
                      </thead>
                      <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Row 1 -->
                        <tr>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2024-06-20 14:30</td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Transfer</td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Nurse Alex</td>
                          <td class="px-6 py-4 text-sm text-gray-500">To Ward B</td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-red-600">-15</td>
                        </tr>
                        <!-- Row 2 -->
                        <tr>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2024-06-18 09:15</td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Usage</td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Dr. Smith</td>
                          <td class="px-6 py-4 text-sm text-gray-500">Patient prescription</td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-red-600">-5</td>
                        </tr>
                        <!-- Row 3 -->
                        <tr>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2024-06-15 11:00</td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Restock</td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Pharmacist John</td>
                          <td class="px-6 py-4 text-sm text-gray-500">Supplier 1</td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-green-600">+100</td>
                        </tr>
                        <!-- Row 4 -->
                        <tr>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2024-05-28 16:45</td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Adjustment</td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">System</td>
                          <td class="px-6 py-4 text-sm text-gray-500">Expired items removed</td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-red-600">-10</td>
                        </tr>
                        <!-- Row 5 -->
                        <tr>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2024-05-15 10:30</td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Transfer</td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Nurse Alex</td>
                          <td class="px-6 py-4 text-sm text-gray-500">To Ward A</td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-red-600">-20</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  
                  <!-- Pagination -->
                  <div class="flex items-center justify-between mt-6">
                    <div class="text-sm text-gray-500">
                      Showing <span class="font-medium">1</span> to <span class="font-medium">5</span> of <span class="font-medium">12</span> entries
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

      <!-- Request Modal -->
      <div id="viewRequestsModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
          <!-- Background overlay -->
          <div class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
          </div>
          
          <!-- Modal panel -->
          <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-40 sm:align-middle sm:max-w-6xl sm:w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
              <div class="sm:flex sm:items-start">
                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                  <div class="flex justify-between items-center mb-6">
                    <h3 class="text-2xl font-bold text-gray-800">Inventory Requests</h3>
                    <button id="closeViewRequestsModal" class="text-gray-500 hover:text-gray-700">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                      </svg>
                    </button>
                  </div>
                  
                  <!-- Filters -->
                  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
                    <div>
                      <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                      <select class="w-full px-3 py-2 border border-gray-300 rounded-md">
                        <option>All Requests</option>
                        <option>Pending</option>
                        <option>Approved</option>
                        <option>Rejected</option>
                        <option>Completed</option>
                      </select>
                    </div>
                    <div>
                      <label class="block text-sm font-medium text-gray-700 mb-1">Request Type</label>
                      <select class="w-full px-3 py-2 border border-gray-300 rounded-md">
                        <option>All Types</option>
                        <option>Restock</option>
                        <option>Transfer</option>
                        <option>Adjustment</option>
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
                      <label class="block text-sm font-medium text-gray-700 mb-1">Requested By</label>
                      <select class="w-full px-3 py-2 border border-gray-300 rounded-md">
                        <option>All Users</option>
                        <option>Nurse Alex</option>
                        <option>Dr. Smith</option>
                        <option>Pharmacist John</option>
                      </select>
                    </div>
                  </div>
                  
                  <!-- Requests Table -->
                  <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                      <thead class="bg-gray-50">
                        <tr>
                          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Request ID</th>
                          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Product</th>
                          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantity</th>
                          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Requested By</th>
                          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                      </thead>
                      <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Sample Request 1 -->
                        <tr class="hover:bg-gray-50">
                          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">REQ-2024-001</td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Restock</td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Paracetamol 500mg</td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">100 units</td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Nurse Alex</td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2024-06-20</td>
                          <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span>
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <button class="text-primary hover:text-blue-700 mr-2">Approve</button>
                            <button class="text-red-600 hover:text-red-900">Reject</button>
                          </td>
                        </tr>
                        <!-- Sample Request 2 -->
                        <tr class="hover:bg-gray-50">
                          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">REQ-2024-002</td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Transfer</td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Amoxicillin 500mg</td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">25 units</td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Dr. Smith</td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2024-06-18</td>
                          <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Approved</span>
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <button class="text-gray-400 cursor-not-allowed" disabled>Completed</button>
                          </td>
                        </tr>
                        <!-- Add more request rows as needed -->
                      </tbody>
                    </table>
                  </div>
                  
                  <!-- Pagination -->
                  <div class="flex items-center justify-between mt-6">
                    <div class="text-sm text-gray-500">
                      Showing <span class="font-medium">1</span> to <span class="font-medium">2</span> of <span class="font-medium">5</span> requests
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

      <!-- Edit Form -->
      <div id="editForm" class="fixed inset-y-0 right-0 z-50 w-full max-w-2xl bg-white shadow-xl transform translate-x-full transition-transform duration-300 ease-in-out overflow-y-auto">
        <div class="p-6">
          <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Edit Inventory Item</h2>
            <button id="closeEditForm" class="text-gray-500 hover:text-gray-700">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
          
          <!-- Product Details -->
          <div class="mb-6">
            <h3 class="text-lg font-medium text-gray-900 mb-3">Product Details</h3>
            <div class="space-y-4">
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Product Name</label>
                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md" value="Paracetamol 500mg">
              </div>
              <div class="grid grid-cols-2 gap-4">
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">Inventory Type</label>
                  <select class="w-full px-3 py-2 border border-gray-300 rounded-md">
                    <option>Medication</option>
                    <option>Medical Devices</option>
                    <option>Clinical Consumables</option>
                    <option>Patient Support</option>
                  </select>
                </div>
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">SKU</label>
                  <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md bg-gray-100" value="MED-PARA-500-001" disabled>
                </div>
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                <textarea class="w-full px-3 py-2 border border-gray-300 rounded-md" rows="3">Pain reliever</textarea>
              </div>
            </div>
          </div>
          
          <div class="border-t border-gray-200 my-4"></div>
          
          <!-- Stock & Pricing -->
          <div class="mb-6">
            <h3 class="text-lg font-medium text-gray-900 mb-3">Stock & Pricing</h3>
            <div class="grid grid-cols-2 gap-4">
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Current Quantity</label>
                <input type="number" class="w-full px-3 py-2 border border-gray-300 rounded-md" value="120">
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Minimum Stock Level</label>
                <input type="number" class="w-full px-3 py-2 border border-gray-300 rounded-md" value="50">
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Price</label>
                <div class="relative rounded-md shadow-sm">
                  <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <span class="text-gray-500 sm:text-sm">₱</span>
                  </div>
                  <input type="text" class="block w-full pl-7 pr-12 py-2 border border-gray-300 rounded-md" value="15.99">
                </div>
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Batch/Lot #</label>
                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md" value="BATCH-MED-2024-001">
              </div>
            </div>
          </div>
          
          <div class="border-t border-gray-200 my-4"></div>
          
          <!-- Supplier & Status -->
          <div class="mb-6">
            <h3 class="text-lg font-medium text-gray-900 mb-3">Supplier & Status</h3>
            <div class="grid grid-cols-2 gap-4">
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Supplier</label>
                <select class="w-full px-3 py-2 border border-gray-300 rounded-md">
                  <option>Supplier 1</option>
                  <option>Supplier 2</option>
                  <option>Supplier 3</option>
                </select>
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                <select class="w-full px-3 py-2 border border-gray-300 rounded-md">
                  <option>Active</option>
                  <option>Inactive</option>
                  <option>Quarantined</option>
                </select>
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
                      Are you sure you want to Remove this item? This action cannot be undone.
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
</body>
<!-- External CSS -->
<script src="assets/js/dashboard.js"></script>
<script src="assets/js/inventory.js"></script>
</html>