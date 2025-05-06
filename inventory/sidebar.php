<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<div class="sidebar" id="sidebar">
    <div class="d-flex align-items-center justify-content-between">
        <img id="logo-img" src="assets/files/sugbodoc.png" alt="SugboDoc Logo" style="height: 40px; margin-right: 10px; cursor: pointer;">
        <img id="menu-toggle" src="assets/svg/menu.svg" alt="Menu" style="height: 24px; cursor: pointer;">
    </div>

    <ul class="nav flex-column mt-4">
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 <?= ($current_page == 'dashboard.php') ? 'active' : '' ?>" href="dashboard.php">
                <img src="assets/svg/dashboard.svg" alt="Dashboard" style="height: 20px;">
                Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 <?= ($current_page == 'requests.php') ? 'active' : '' ?>" href="requests.php">
                <img src="assets/svg/requests.png" alt="Requests" style="height: 20px;">
                Requests
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 <?= ($current_page == 'supplychain.php') ? 'active' : '' ?>" href="supplychain.php">
                <img src="assets/svg/supplychain.svg" alt="SupplyChain" style="height: 20px;">
                Supply Chain
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 <?= ($current_page == 'inventory.php') ? 'active' : '' ?>" href="inventory.php">
                <img src="assets/svg/inventory.svg" alt="Inventory" style="height: 20px;">
                Inventory
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 <?= ($current_page == 'transfers.php') ? 'active' : '' ?>" href="transfers.php">
                <img src="assets/svg/transfers.svg" alt="transfers" style="height: 20px;">
                Transfers
            </a>
        </li>
    </ul>

    <div class="bottom-links">
        <a class="nav-link" href="#">
        <img src="assets/svg/settings.svg" alt="settings" style="height: 20px;">
             Settings</a>
        <a class="nav-link text-danger" href="#">
        <img src="assets/svg/box-arrow-right.svg" alt="logout" style="height: 20px; color: #FF5B51;">    
        Logout</a>
    </div>
</div>
