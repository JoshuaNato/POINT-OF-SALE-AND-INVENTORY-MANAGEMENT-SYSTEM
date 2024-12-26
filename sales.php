<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sales Report - Point of Sale and Inventory Management System</title>
    <meta name="description" content="Inventory &amp; Point of Sale System">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Pricing-Centered-badges.css">
    <link rel="stylesheet" href="assets/css/Pricing-Centered-icons.css">
</head>

<style>

body {
      background-color: #f8f9fa; /* Light background color */
    }
    .sales-report {
      margin: 20px auto;
      max-width: 90%;
    }
    .table th, .table td {
      text-align: center;
    }
    .filter-btn {
      background-color: #fd7e14; /* Orange color */
      border: none;
    }
    .filter-btn:hover {
      background-color: #e96b10;
    }
    .export-btn {
      background-color: #fd7e14; /* Orange color */
      border: none;
    }
    .export-btn:hover {
      background-color: #e96b10;
    }
  </style>


<body id="page-top">
    <div id="wrapper">
    <?php
            include_once 'functions/authentication.php';
            include_once 'functions/sidebar.php';
        ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><span>IN TEA MATE POINT OF SALE AND INVENTORY  SYSTEM</span></div>
                </nav>
                <div class="container-fluid">
                    
                    <div class="row">
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-primary py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>Earnings (today)</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span>₱<?php include_once 'functions/dashboard-today-sales.php'; ?></span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-calendar fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-success py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-success fw-bold text-xs mb-1"><span>Earnings (month)</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span>₱<?php include_once 'functions/dashboard-month-sales.php'; ?></span></div>
                                            <div class="text-dark fw-bold h5 mb-0"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-success py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-success fw-bold text-xs mb-1"><span>Earnings (annual)</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span>₱<?php include_once 'functions/dashboard-year-sales.php'; ?></span></div>
                                            <div class="text-dark fw-bold h5 mb-0"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   

            <div class="sales-report container">
    <h2 class="text-center mb-4">Sales Report</h2>

    <!-- Filter Section -->
    <form class="row g-3 align-items-center">
      <div class="col-md-4">
        <label for="startDate" class="form-label">Date Start:</label>
        <input type="date" class="form-control" id="startDate" name="start_date">
      </div>
      <div class="col-md-4">
        <label for="endDate" class="form-label">End Date:</label>
        <input type="date" class="form-control" id="endDate" name="end_date">
      </div>
      <div class="col-md-4 d-flex align-items-end">
        <button type="submit" class="btn filter-btn me-2">Filter</button>
        <button type="button" class="btn export-btn">Export to Excel</button>
      </div>
    </form>

    <!-- Table Section -->
    <div class="table-responsive mt-4">
      <table class="table table-bordered">
        <thead class="table-light">
          <tr>
            <th>#</th>
            <th>Reference #</th>
            <th>Date</th>
            <th>Amount</th>
          </tr>
        </thead>
        <tbody>

        <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Sales List</p>
                        </div>
                        <div class="card-body">
                            
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table table-hover table-bordered my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Transaction ID</th>
                                            <th>User ID</th>
                                            <th>Total</th>
                                            <th>Discount</th>
                                            <th>Amount</th>
                                            <th>Discounted Total</th>
                                            <th>Transaction Created</th>

                                            <tr>
            <td colspan="4" class="text-center">No data to be display.</td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="3" class="text-end"><strong>Total Sales</strong></td>
            <td class="text-end"><strong>Php 0.00</strong></td>
          </tr>
        </tfoot>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php include_once 'functions/view-sales.php'; ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
      </table>
    </div>
  </div>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Inventory &amp; Point of Sale System 2023</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>