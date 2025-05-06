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

        /*  sidebar */
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
            <h1>List of Requests</h1>
            <p>Manage requests from practitioners</p>
        </header>



        <div class="d-flex justify-content-between align-items-center mb-3">
            <input type="text" class="form-control w-50" placeholder="Search">
            <div>
                <select class="form-select d-inline-block w-auto me-2">
                    <option>All Categories</option>
                </select>
                <select class="form-select d-inline-block w-auto">
                    <option>All Suppliers</option>
                </select>
            </div>
        </div>

        <section>
    <h2>Supplier Directory</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Practitioner</th>
                <th>Medication Name</th>
                <th>Quantity</th>
                <th>Date Requested</th>
                <th>Patient Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>John Doe</strong><br><small class="text-muted">Doctor - Pediatrics</small></td>
                <td>Amoxicillin 500 mg</td>
                <td>30</td>
                <td>March 21, 2025</td>
                <td>Juan Dela Cruz</td>
                <td>
                    <button class="icon-btn text-primary" data-bs-toggle="modal" data-bs-target="#modalJohnDoe"><i class="bi bi-eye"></i></button>
                    <button class="icon-btn text-warning" data-bs-toggle="modal" data-bs-target="#editModal"><i class="bi bi-pencil"></i></button>
                    <button class="icon-btn text-danger"  data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash"></i></button>
                </td>
            </tr>

            <tr>
                <td><strong>Cristiano Ronaldo</strong><br><small class="text-muted">Nurse</small></td>
                <td>Losartan 50mg</td>
                <td>20</td>
                <td>March 21, 2025</td>
                <td>Maria Santos</td>
                <td>
                    <button class="icon-btn text-primary" data-bs-toggle="modal" data-bs-target="#modalRonaldo"><i class="bi bi-eye"></i></button>
                    <button class="icon-btn text-warning" data-bs-toggle="modal" data-bs-target="#editModal"><i class="bi bi-pencil"></i></button>
                    <button class="icon-btn text-danger"  data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash"></i></button>
                </td>
            </tr>

            <tr>
                <td><strong>Tanggol Dimaguiba</strong><br><small class="text-muted">Practitioner</small></td>
                <td>Metformin 500mg</td>
                <td>10</td>
                <td>March 21, 2025</td>
                <td>Pedro Lopez</td>
                <td>
                    <button class="icon-btn text-primary" data-bs-toggle="modal" data-bs-target="#modalTanggol"><i class="bi bi-eye"></i></button>
                    <button class="icon-btn text-warning" data-bs-toggle="modal" data-bs-target="#editModal"><i class="bi bi-pencil"></i></button>
                    <button class="icon-btn text-danger"  data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash"></i></button>
                </td>
            </tr>
        </tbody>
    </table>
</section>

<div class="modal fade" id="modalJohnDoe" tabindex="-1" aria-labelledby="modalJohnDoeLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalJohnDoeLabel">Request Details - John Doe</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p><strong>Practitioner:</strong> John Doe (Doctor - Pediatrics)</p>
        <p><strong>Medication:</strong> Amoxicillin 500 mg</p>
        <p><strong>Quantity:</strong> 30</p>
        <p><strong>Date Requested:</strong> March 21, 2025</p>
        <p><strong>Patient:</strong> Juan Dela Cruz</p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="editForm">
        <div class="modal-header">
          <h5 class="modal-title">Edit Request</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="mb-2">
            <label>Practitioner</label>
            <input type="text" class="form-control" id="editName">
          </div>
          <div class="mb-2">
            <label>Role</label>
            <input type="text" class="form-control" id="editRole">
          </div>
          <div class="mb-2">
            <label>Medication</label>
            <input type="text" class="form-control" id="editMed">
          </div>
          <div class="mb-2">
            <label>Quantity</label>
            <input type="number" class="form-control" id="editQty">
          </div>
          <div class="mb-2">
            <label>Date Requested</label>
            <input type="date" class="form-control" id="editDate">
          </div>
          <div class="mb-2">
            <label>Patient</label>
            <input type="text" class="form-control" id="editPatient">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete Confirmation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete <strong><span id="deleteMed"></span></strong> requested by <strong><span id="deleteName"></span></strong>?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger">Yes, Delete</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modalRonaldo" tabindex="-1" aria-labelledby="modalRonaldoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalRonaldoLabel">Request Details - Cristiano Ronaldo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p><strong>Practitioner:</strong> Cristiano Ronaldo (Nurse)</p>
        <p><strong>Medication:</strong> Losartan 50mg</p>
        <p><strong>Quantity:</strong> 20</p>
        <p><strong>Date Requested:</strong> March 21, 2025</p>
        <p><strong>Patient:</strong> Maria Santos</p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalTanggol" tabindex="-1" aria-labelledby="modalTanggolLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTanggolLabel">Request Details - Tanggol Dimaguiba</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p><strong>Practitioner:</strong> Tanggol Dimaguiba (Practitioner)</p>
        <p><strong>Medication:</strong> Metformin 500mg</p>
        <p><strong>Quantity:</strong> 10</p>
        <p><strong>Date Requested:</strong> March 21, 2025</p>
        <p><strong>Patient:</strong> Pedro Lopez</p>
      </div>
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


  document.querySelectorAll('.view-btn').forEach(btn => {
    btn.onclick = () => {
      document.getElementById('viewName').textContent = btn.dataset.name;
      document.getElementById('viewRole').textContent = btn.dataset.role;
      document.getElementById('viewMed').textContent = btn.dataset.med;
      document.getElementById('viewQty').textContent = btn.dataset.qty;
      document.getElementById('viewDate').textContent = btn.dataset.date;
      document.getElementById('viewPatient').textContent = btn.dataset.patient;
    };
  });

  document.querySelectorAll('.edit-btn').forEach(btn => {
    btn.onclick = () => {
      document.getElementById('editName').value = btn.dataset.name;
      document.getElementById('editRole').value = btn.dataset.role;
      document.getElementById('editMed').value = btn.dataset.med;
      document.getElementById('editQty').value = btn.dataset.qty;
      document.getElementById('editDate').value = btn.dataset.date;
      document.getElementById('editPatient').value = btn.dataset.patient;
    };
  });

  document.querySelectorAll('.delete-btn').forEach(btn => {
    btn.onclick = () => {
      document.getElementById('deleteName').textContent = btn.dataset.name;
      document.getElementById('deleteMed').textContent = btn.dataset.med;
    };
  });



function activateLink(element) {
    const links = document.querySelectorAll('.nav-link');
    links.forEach(link => link.classList.remove('active'));
    element.classList.add('active');
}
</script>

</body>
</html>
