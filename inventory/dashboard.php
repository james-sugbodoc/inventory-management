<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List of Requests</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #F9FAFB;
            margin: 0;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            background-color: #F3F4F6;
            padding: 20px;
            border-right: 1px solid #E5E7EB;
            transition: all 0.3s;
            flex-direction: column;
        }

        .sidebar-collapsed {
            width: 70px !important;
        }

        .sidebar-collapsed .nav-link {
            font-size: 0;
            padding-left: 0;
            padding-right: 0;
        }

        .sidebar-collapsed .nav-link::before {
            font-size: 16px;
        }

        .sidebar .nav-link.active {
            background-color: #4454C3;
            font-weight: 600;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
            color: white; 
        }

        .sidebar .nav-link {
            color: #374151;
            padding: 10px 15px;
            border-radius: 8px;
            transition: all 0.2s;
        }

        .sidebar .nav-link:hover {
            background-color: #e9ecef;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            text-decoration: none;
        }

        .sidebar .bottom-links {
            margin-top: auto;
            padding-top: 30px;
            border-top: 1px solid #ddd;
        }

        .topbar {
            margin-left: 240px;
            background-color: #4454C3;
            padding: 10px 20px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: margin-left 0.3s;
        }

        .topbar-collapsed {
            margin-left: 70px !important;
        }

        .content {
            margin-left: 240px;
            padding: 30px;
            transition: margin-left 0.3s;
        }

        .content-collapsed {
            margin-left: 70px !important;
        }

        .table thead {
            background-color: #F3F4F6;
        }

        .icon-btn {
            border: none;
            background: none;
            cursor: pointer;
        }

        .icon-btn i {
            font-size: 16px;
        }

        .sidebar .nav-link.active img {
            filter: invert(100%) brightness(100%) grayscale(100%);  
        }

        .clinic-selector {
            display: flex;
            padding: 8px 12px;
            align-items: center;
            gap: 8px;
            border-radius: 8px;
            background: #FFF;   
            color: #424E79;
        }

        .clinic-logo {
            width: 20px;
            height: 20px;
            object-fit: contain;
        }

        .user-info {
            display: flex;
            align-items: center;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            aspect-ratio: 1 / 1;
            border-radius: 20px;
            object-fit: cover;
        }

        .dropdown-menu {
            min-width: 180px;
        }

        .summary {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 16px;
            margin-bottom: 24px;
        }
        .summary-card {
            background: white;
            padding: 16px;
            border-radius: 12px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
            display: flex;
            flex-direction: column;
        }
        .summary-card span {
            font-size: 14px;
            color: #6B7280;
        }
        .summary-card h2 {
            font-size: 20px;
            color: #10B981;
            margin: 8px 0 0;
        }
        .main-content {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 24px;
        }
        .card {
            background: white;
            border-radius: 12px;
            padding: 16px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
            margin-bottom: 24px;
        }
        .card h3 {
            margin-top: 0;
        }

        table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 8px;
    }
    th, td {
      text-align: left;
      padding: 8px;
      font-size: 14px;
    }
    thead {
      background-color: #F3F4F6;
    }
    .status {
      font-weight: 600;
    }
    .in-stock { color: #10B981; }
    .low { color: #F59E0B; }
    .partner-status {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .partner-online { color: #10B981; font-weight: 500; }
    .pharmacy-info {
      background-color: #ECFDF5;
      padding: 10px;
      border-radius: 8px;
      margin-top: 10px;
    }
    .recent-activity {
      font-size: 14px;
    }
    .activity-item {
      margin-bottom: 12px;
    }
    .activity-item span {
      color: #6B7280;
    }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body>

<?php include 'sidebar.php'; ?>

<?php include 'topbar.php'; ?>

<div class="content" id="content">
    <h1>Partner Dashboard</h1>
    <p>Welcome back, Rose Pharmacy Downtown Branch</p>

    <div class="summary">
    <div class="summary-card">
      <span>Total Medicines</span>
      <h2>1,284</h2>
    </div>
    <div class="summary-card">
      <span>Current Inventory</span>
      <h2>24,521</h2>
    </div>
    <div class="summary-card">
      <span>Partner Pharmacies</span>
      <h2>8</h2>
    </div>
    <div class="summary-card">
      <span>Staff Members</span>
      <h2>15</h2>
    </div>
  </div>

  <div class="main-content">
    <div>
      <div class="card">
        <h3>Inventory Status</h3>
        <table>
          <thead>
            <tr>
              <th>Name</th>
              <th>SKU</th>
              <th>Stock</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Paracetamol 500mg</td>
              <td>PAR-500-TAB</td>
              <td>120</td>
              <td class="status in-stock">In Stock</td>
            </tr>
            <tr>
              <td>Amoxicillin 500mg</td>
              <td>AMOX-500-CAP</td>
              <td>15</td>
              <td class="status low">Low</td>
            </tr>
            <tr>
              <td>Ibuprofen 400mg</td>
              <td>IBU-400-TAB</td>
              <td>85</td>
              <td class="status in-stock">In Stock</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="card">
        <h3>Partner Pharmacies</h3>
        <div class="partner-status">
          <div>
            <strong>Rose Pharmacy</strong><br/>
            <small>Downtown Branch</small>
          </div>
          <span class="partner-online">Online</span>
        </div>
        <hr />
        <div class="partner-status">
          <div>
            <strong>Green Cross Pharmacy</strong><br/>
            <small>Westside Mall</small>
          </div>
          <span class="partner-online">Online</span>
        </div>
      </div>
    </div>

    <div>
      <div class="card">
        <h3>Nearby Pharmacies</h3>
        <input type="text" placeholder="Search medicine..." style="width: 100%; padding: 8px; border: 1px solid #D1D5DB; border-radius: 8px; margin-bottom: 12px;">
        <div class="pharmacy-info">
          <strong>Rose Pharmacy</strong><br/>
          <small>123 Main St, Suite A</small><br/>
          <small style="color: #10B981">✓ Has requested medications</small>
        </div>
        <div class="pharmacy-info">
          <strong>Green Cross Pharmacy</strong><br/>
          <small>456 Oak Ave</small><br/>
          <small style="color: #EF4444">✗ Missing some requested medications</small>
        </div>
      </div>

      <div class="card recent-activity">
        <h3>Recent Activity</h3>
        <div class="activity-item">
          <strong>John Doe</strong> <span>• 10 minutes ago</span><br/>
          Stock updated: Amoxicillin 500mg (+50 units)
        </div>
        <div class="activity-item">
          <strong>Maria Garcia</strong> <span>• 1 hour ago</span><br/>
          Request sent to Rose Pharmacy for Paracetamol
        </div>
      </div>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.getElementById('menu-toggle').addEventListener('click', function () {
    const sidebar = document.getElementById('sidebar');
    const topbar = document.getElementById('topbar');
    const content = document.getElementById('content');
    const logo = document.getElementById('logo-img');
    const menuToggle = document.getElementById('menu-toggle');

    // Collapse sidebar
    sidebar.classList.add('sidebar-collapsed');
    topbar.classList.add('topbar-collapsed');
    content.classList.add('content-collapsed');

    // Change logo and hide menu button
    logo.src = "assets/svg/sugbodoc-small.png";
    menuToggle.style.display = "none";
});

// Re-open sidebar when clicking the small logo
document.getElementById('logo-img').addEventListener('click', function () {
    const sidebar = document.getElementById('sidebar');
    const topbar = document.getElementById('topbar');
    const content = document.getElementById('content');
    const logo = document.getElementById('logo-img');
    const menuToggle = document.getElementById('menu-toggle');

    if (sidebar.classList.contains('sidebar-collapsed')) {
        sidebar.classList.remove('sidebar-collapsed');
        topbar.classList.remove('topbar-collapsed');
        content.classList.remove('content-collapsed');

        logo.src = "assets/files/sugbodoc.png";
        menuToggle.style.display = "inline";
    }
});

function activateLink(element) {
    const links = document.querySelectorAll('.nav-link');
    links.forEach(link => link.classList.remove('active'));
    element.classList.add('active');
}
</script>

</body>
</html>
