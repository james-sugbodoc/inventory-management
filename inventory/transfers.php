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
        .status.danger{
            background-color:rgb(226, 165, 165);
            color:rgb(207, 32, 32);
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
            <h1>Transfers</h1>
            <p>Manage transfers, track inventory, optimize your chain.</p>
        </header>

        <div class="tabs-menu1 px-3">
            <ul class="nav-list">
                <li class="nav-button active" data-url="transfers.php">Inventory</li>
                <li class="nav-button" data-url="reqtransfer.php">Transfer Request</li>
<!-- 
                <li class="nav-button"><a href="#tab-7" class="active" data-toggle="tab">Posts</a></li>
				<li class="nav-button"><a href="#tab-8" data-toggle="tab" class="">Friends</a></li>
				<li class="nav-button"><a href="#tab-9" data-toggle="tab" class="">About</a></li>
				<li class="nav-button"><a href="#tab-10" data-toggle="tab" class="">About</a></li> -->

            </ul>
        </div>



        <br>

        <div class="search-bar">
            <input type="text" placeholder="Search">
            <button><i class="bi bi-plus-lg"></i> Add Medication</button>
        </div>

        <section>
            <h2>External Pharmacy</h2>
            <table>
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>SKU ID</th>
                        <th>Category</th>
                        <th>Department</th>
                        <th>Stock</th>
                        <th>Batch Info</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Paracetamol<br>500mg</td>
                        <td>EXT-001</td>
                        <td>Medication<br>Pain Relief</td>
                        <td>Pharmacy</td>
                        <td>230 tablets<br>₱2.50</td>
                        <td>Batch: B2025-001<br>Mfg: 01/12/2024<br>Exp: 01/12/2026</td>
                        <td><span class="status high">In Stock</span></td>
                        <td>
                            <button class="btn btn-outline-dark"><i class="bi bi-arrow-left-right">Transfer</i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Amlodipine<br>5mg</td>
                        <td>EXT-002</td>
                        <td>Medication<br>Cardiovascular</td>
                        <td>Pharmacy</td>
                        <td>120 tablets<br>₱15.75</td>
                        <td>Batch: B2025-002<br>Mfg: 15/11/2024<br>Exp: 15/08/2026</td>
                        <td><span class="status danger">Low Stock</span></td>
                        <td>
                            <button class="btn btn-outline-dark"><i class="bi bi-arrow-left-right">Transfer</i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Salbutamol<br>Inhaler</td>
                        <td>EXT-003</td>
                        <td>Medication<br>Respiratory</td>
                        <td>Pharmacy</td>
                        <td>25 inhalers<br>₱220.00</td>
                        <td>Batch: B2025-003<br>Mfg: 01/11/2024<br>Exp: 01/11/2026</td>
                        <td><span class="status high">In Stock</span></td>
                        <td>
                            <button class="btn btn-outline-dark"><i class="bi bi-arrow-left-right">Transfer</i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Mineral Water<br>500ml</td>
                        <td>EXT-004</td>
                        <td>Food & Beverages<br>Drinks</td>
                        <td>Pharmacy</td>
                        <td>200 bottles<br>₱15.00</td>
                        <td>Batch: B2025-004<br>Mfg: 01/11/2024<br>Exp: 01/11/2026</td>
                        <td><span class="status high">In Stock</span></td>
                        <td>
                            <button class="btn btn-outline-dark"><i class="bi bi-arrow-left-right">Transfer</i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Potato Chips<br>(Regular)</td>
                        <td>EXT-005</td>
                        <td>Food & Beverages<br>Snacks</td>
                        <td>Pharmacy</td>
                        <td>100 bags<br>₱25.00</td>
                        <td>Batch: B2025-005<br>Mfg: 01/11/2024<br>Exp: 01/11/2026</td>
                        <td><span class="status high">In Stock</span></td>
                        <td>
                            <button class="btn btn-outline-dark"><i class="bi bi-arrow-left-right">Transfer</i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Safeguard Soap</td>
                        <td>EXT-006</td>
                        <td>Personal Care<br>Hygiene</td>
                        <td>Pharmacy</td>
                        <td>80 pcs<br>₱18.00</td>
                        <td>Batch: B2025-006<br>Mfg: 01/11/2024<br>Exp: 01/11/2026</td>
                        <td><span class="status high">In Stock</span></td>
                        <td>
                            <button class="btn btn-outline-dark"><i class="bi bi-arrow-left-right">Transfer</i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
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



function activateLink(element) {
    const links = document.querySelectorAll('.nav-link');
    links.forEach(link => link.classList.remove('active'));
    element.classList.add('active');
}
</script>

</body>
</html>
