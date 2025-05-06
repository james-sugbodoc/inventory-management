document.addEventListener('DOMContentLoaded', function() {
  // Chart instances
  let categoryChart, supplierChart, deliveryChart, volumeChart;

  // Initialize Category Chart
  function initCategoryChart() {
    const ctx = document.getElementById('categoryChart').getContext('2d');
    categoryChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ['Antibiotics', 'Antihypertensives', 'Analgesics', 'Antidiabetics', 'Others'],
        datasets: [{
          data: [35, 25, 20, 15, 5],
          backgroundColor: [
            '#4454C3', '#FD7F7F', '#F59E0B', '#10B981', '#9966FF'
          ],
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: { position: 'right' },
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
  }

  // Initialize Supplier Charts
  function initSupplierCharts() {
    // Supplier Distribution Pie Chart
    const supplierCtx = document.getElementById('supplierChart').getContext('2d');
    supplierChart = new Chart(supplierCtx, {
      type: 'pie',
      data: {
        labels: ['PharmaCorp', 'MediSupply', 'HealthPharm', 'Global Pharmaceuticals'],
        datasets: [{
          data: [40, 30, 20, 10],
          backgroundColor: ['#4454C3', '#FD7F7F', '#F59E0B', '#10B981'],
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: { position: 'right' }
        }
      }
    });

    // Delivery Performance Bar Chart
    const deliveryCtx = document.getElementById('deliveryChart').getContext('2d');
    deliveryChart = new Chart(deliveryCtx, {
      type: 'bar',
      data: {
        labels: ['PharmaCorp', 'MediSupply', 'HealthPharm', 'Global Pharmaceuticals'],
        datasets: [
          {
            label: 'On Time %',
            data: [85, 92, 78, 65],
            backgroundColor: '#10B981'
          },
          {
            label: 'Delayed %',
            data: [15, 8, 22, 35],
            backgroundColor: '#FD7F7F'
          }
        ]
      },
      options: {
        responsive: true,
        scales: {
          x: { stacked: true },
          y: { stacked: true, max: 100 }
        }
      }
    });

    // Order Volume Bar Chart
    const volumeCtx = document.getElementById('volumeChart').getContext('2d');
    volumeChart = new Chart(volumeCtx, {
      type: 'bar',
      data: {
        labels: ['PharmaCorp', 'MediSupply', 'HealthPharm', 'Global Pharmaceuticals'],
        datasets: [{
          label: 'Purchase Volume',
          data: [1200, 900, 600, 300],
          backgroundColor: '#4454C3'
        }]
      },
      options: {
        responsive: true,
        scales: {
          y: { beginAtZero: true }
        }
      }
    });
  }

  // Change Report View Function
  function changeReportView(viewType) {
    // Update button states
    document.querySelectorAll('[id$="ViewBtn"]').forEach(btn => {
      btn.classList.remove('bg-white', 'text-black', 'shadow');
      btn.classList.add('text-gray-600', 'hover:bg-gray-200');
    });
    
    const activeBtn = document.getElementById(`${viewType}ViewBtn`);
    activeBtn.classList.add('bg-white', 'text-black', 'shadow');
    activeBtn.classList.remove('text-gray-600', 'hover:bg-gray-200');
    
    // Hide all reports first
    document.getElementById('categoryReport').classList.add('hidden');
    document.getElementById('supplierReport').classList.add('hidden');
    
    // Show only the selected report
    if (viewType === 'category') {
      document.getElementById('categoryReport').classList.remove('hidden');
    } else {
      document.getElementById('supplierReport').classList.remove('hidden');
      if (!supplierChart) initSupplierCharts();
    }
  }

  // Set up event listeners
  document.getElementById('categoryViewBtn').addEventListener('click', () => changeReportView('category'));
  document.getElementById('supplierViewBtn').addEventListener('click', () => changeReportView('supplier'));

  // Initialize
  initCategoryChart();
  changeReportView('category'); // Set default view
});