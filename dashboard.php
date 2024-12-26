<?php
include 'functions/authentication.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Point of Sale and Inventory Management System</title>
    <meta name="description" content="Point of Sale and Inventory Management System">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Pricing-Centered-badges.css">
    <link rel="stylesheet" href="assets/css/Pricing-Centered-icons.css">
</head>

<style>
  /* Parent container alignment */
  .navbar-icons {
    display: flex;            /* Enable flexbox */
    justify-content: center;  /* Horizontally center the link */
    align-items: center;      /* Vertically center the link */
    height: 100%;             /* Ensure it takes full height of the parent */
  }

  /* Link-specific styling (optional) */
  .navbar-icons .nav-link {
    text-align: center;       /* Center-align the link text */
    font-size: 16px;          /* Adjust font size as needed */
    padding: 10px 15px;       /* Add padding for better clickability */
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
                    <div class="container-fluid">

                    
                        <span>IN TEA MATE POINT OF SALE AND SYSTEM</span>

                        <div class="chart-container">
                          <h2>Daily Sales Summary</h2>
                             <canvas id="salesChart"></canvas>
                                   </div>

                                   


                                   <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

                        <!-- Navbar icons for notifications and profile/account settings -->
                        <div class="navbar-icons d-flex ms-auto">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">

                        <!-- Notifications Icon -->
                            <a class="nav-link icon-link" href="NotificationPage.php" title="Notifications">    
                                <i class="fas fa-bell text-dark"></i>
                                <!-- Optionally, add a badge for new notifications -->
                            </a>

    <div class="nav-item dropdown">
    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="accountSettingsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fas fa-user-cog me-2"></i> Admin
    </a>
    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="accountSettingsDropdown">
        <li><a class="dropdown-item" href="accountsettings.php">AccountSetting</a></li>
        <li><a class="dropdown-item" href="profile.php">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="index.php">Logout</a></li>
    </ul>
</div>


                           
                          
                          
                          
                          
                            </a>
                        </div>
                    </div>
                </nav>
                
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Dashboard</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-primary py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>Income</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span><?php include_once 'functions/dashboard-users.php'; ?></span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-calendar fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
            
                    <div class="card-body">
                        <div class="chart-area">
                            <?php
                            include_once 'functions/dashboard-chart.php';
                            ?>
                        </div>
                    </div>
                    
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Milktea Station &amp; Point of Sale System</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script> src ="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"</script>


</body>

</html>
