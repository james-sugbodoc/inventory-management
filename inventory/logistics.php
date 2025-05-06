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

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        header {
            margin-bottom: 20px;
        }

        header h1 {
            font-size: 24px;
            color: #333;
        }

        header p {
            font-size: 14px;
            color: #666;
            margin-top: 5px;
        }

        nav ul {
            display: flex;
            list-style: none;
            margin-bottom: 20px;
        }

        nav ul li {
            padding: 10px 20px;
            font-size: 16px;
            color: #666;
            cursor: pointer;
            border-bottom: 2px solid transparent;
        }

        nav ul li.active {
            color: #333;
            border-bottom: 2px solid #007bff;
        }

        .search-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .search-bar input {
            width: 300px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        .search-bar button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        section h2 {
            font-size: 18px;
            color: #333;
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            overflow: hidden;
        }

        th, td {
            padding: 15px;
            text-align: left;
            font-size: 14px;
            border-bottom: 1px solid #eee;
        }

        th {
            background-color: #f8f9fa;
            color: #666;
            text-transform: uppercase;
            font-size: 12px;
        }

        td {
            color: #333;
        }

        .status {
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 12px;
        }

        .status.active {
            background-color: #e6f4ea;
            color: #28a745;
        }

        .status.on-hold {
            background-color: #fff3cd;
            color: #ffc107;
        }

        .status.normal{
            background-color:rgba(66, 78, 121, 0.30);
            color: #424E79;
            
        }

        .status.high{
            background-color: rgba(204, 210, 230, 0.2);
            color: #424E79;
        }
        .status.process{
            background-color: rgba(107, 33, 168, 0.20);
            color: #6B21A8;
        }

        .action-btn {
            background: none;
            border: none;
            cursor: pointer;
            font-size: 16px;
            margin-right: 10px;
        }

        .action-btn.delete {
            color: #dc3545;
        }

        .custom-nav {
            display: flex;
            height: 44px;
            padding: 4px;
            justify-content: space-between;
            align-items: center;
            border-radius: 8px;
            background: #F1F5F9;
        }

        .nav-list {
            display: flex;
            flex: 1;
            gap: 8px; /* gap between buttons */
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-button {
            display: flex;
            height: 36px;
            padding: 8px 12px;
            justify-content: center;
            align-items: center;
            gap: 8px;
            flex: 1 0 0;
            border-radius: 6px;
            background: #FFF;
            box-shadow: 0px 1px 2px 0px rgba(65, 68, 75, 0.05);
            cursor: pointer;
            text-align: center;
            font-weight: 500;
        }

        .nav-button.active {
            background-color: #E2E8F0;
            font-weight: bold;
        }

        .button-group {
            display: flex;
            gap: 8px;
        }

        .card-container {
            display: flex;
            gap: 16px; /* spacing between cards */
            overflow-x: auto; /* optional: enables horizontal scroll if cards overflow */
            padding: 16px;
        }

        .card {
            min-width: 280px;
            flex-shrink: 0;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0px 2px 6px rgba(0,0,0,0.1);
            padding: 16px;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .card-header,
        .details,
        .footer,
        .route {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .status {
            font-weight: bold;
            color: #007BFF;
        }

        .route-line {
            height: 2px;
            background-color: #E2E8F0;
            margin: 4px 0;
        }

        .ship-id {
            font-weight: bold;
            color: #333;
        }
        .status {
            background-color: #e6f0fa;
            color: #1e90ff;
            padding: 5px 10px;
            border-radius: 12px;
            font-size: 12px;
        }
        .details {
            margin: 10px 0;
            font-size: 14px;
            color: #666;
        }
        .details span {
            display: inline-block;
            margin-right: 20px;
        }
        .items {
            font-size: 14px;
            color: #333;
            margin: 10px 0;
        }
        .route {
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 14px;
            color: #333;
            margin: 10px 0;
        }
        .route .arrow {
            flex-grow: 1;
            text-align: center;
            color: #1e90ff;
        }
        .route-line {
            height: 2px;
            background-color: #1e90ff;
            margin: 5px 0;
        }
        .footer {
            display: flex;
            justify-content: space-between;
            font-size: 12px;
            color: #999;
            margin-top: 10px;
        }

    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body>

<?php include 'sidebar.php'; ?>

<?php include 'topbar.php'; ?>

<br>
<br>
<div class="content" id="content">
        <header>
            <h1>Supply Chain Management</h1>
            <p>Manage suppliers, track procurement, optimize your chain.</p>
        </header>

        <nav class="custom-nav">
            <ul class="nav-list">
                <li class="nav-button active" data-url="supplychain.php">Suppliers</li>
                <li class="nav-button" data-url="procurement.php">Procurement</li>
                <li class="nav-button" data-url="logistics.php">Logistics</li>
                <li class="nav-button" data-url="contracts.php">Contracts</li>
            </ul>
        </nav>



        <br>

        <div class="search-bar">
            <h4>Supplier Directory</h4>
            <div class="button-group">
                <button class="status high"><i class="bi bi-funnel"></i> Filter</button>
                <button class="status high"><i class="bi bi-truck"></i> All Shipments</button>
            </div>
        </div>

    <div class="card-container">
        <div class="card">
            <div class="card-header">
                <div class="ship-id">SHIP-7891</div>
                <div class="status">IN TRANSIT</div>
            </div>
            <div class="details">
                <span>Order Date: 2025-04-01</span>
                <span>Est. Arrival: 2025-04-15</span>
            </div>
            <div class="items">12 products</div>
            <div class="route">
                <span>Tacloban</span>
                <span class="arrow">→</span>
                <span>Cebu City</span>
            </div>
            <div class="route-line"></div>
            <div class="footer">
                <span>Last update: 2025-04-10 08:30 AM</span>
                <span>#TRK45678</span>
            </div>
        </div>

        <div class="card 1">
            <div class="card-header">
                <div class="ship-id">SHIP-7892</div>
                <div class="status process">PROCESSING</div>
            </div>
            <div class="details">
                <span>Order Date: 2025-04-03</span>
                <span>Est. Arrival: 2025-04-14</span>
            </div>
            <div class="items">8 products</div>
            <div class="route">
                <span>Chicago</span>
                <span class="arrow">→</span>
                <span>San Francisco</span>
            </div>
            <div class="route-line"></div>
            <div class="footer">
                <span>Last update: 2025-04-09 09:15 PM</span>
                <span>#TRK45678</span>
            </div>
        </div>

        <div class="card 2">
            <div class="card-header">
                <div class="ship-id">SHIP-7890</div>
                <div class="status active">DELIVERED</div>
            </div>
            <div class="details">
                <span>Order Date: 2025-03-28</span>
                <span>Est. Arrival: 2025-03-28</span>
            </div>
            <div class="items">15 products</div>
            <div class="route">
                <span>New York</span>
                <span class="arrow">→</span>
                <span>San Francisco</span>
            </div>
            <div class="route-line"></div>
            <div class="footer">
                <span>Last update: 2025-04-10 08:45 AM</span>
                <span>#TRK12345</span>
            </div>
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

document.querySelectorAll('.nav-button').forEach(button => {
    button.addEventListener('click', () => {
        // Remove 'active' class from all buttons
        document.querySelectorAll('.nav-button').forEach(btn => {
            btn.classList.remove('active');
        });

        // Add 'active' to clicked button
        button.classList.add('active');

        // Navigate to the assigned URL
        const url = button.getAttribute('data-url');
        window.location.href = url;
    });
});

window.addEventListener('DOMContentLoaded', () => {
    const currentPath = window.location.pathname;

    document.querySelectorAll('.nav-button').forEach(button => {
        const url = button.getAttribute('data-url');

        // Check if current path starts with the button's URL
        if (currentPath.startsWith(url)) {
            button.classList.add('active');
        } else {
            button.classList.remove('active');
        }

        // Add click listener to navigate
        button.addEventListener('click', () => {
            window.location.href = url;
        });
    });
});


function activateLink(element) {
    const links = document.querySelectorAll('.nav-link');
    links.forEach(link => link.classList.remove('active'));
    element.classList.add('active');
}
</script>

</body>
</html>
