<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Users - Point of Sale and Inventory Management System</title>
    <meta name="description" content="Inventory &amp; Point of Sale System">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Pricing-Centered-badges.css">
    <link rel="stylesheet" href="assets/css/Pricing-Centered-icons.css">
</head>

<style>

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

                         <!-- Navbar -->
            </div>
        </div>
    </nav>

    <div class="container">
        <!-- Manage Account Section -->
        <div class="form-section">
            <div class="form-title">Manage Account</div>
            <form action="manage_account.php" method="POST">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="firstname" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" required>
                    </div>
                    <div class="col-md-6">
                        <label for="lastname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="mb-3">
                    <label for="contact" class="form-label">Contact #</label>
                    <input type="text" class="form-control" id="contact" name="contact" required>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>

        <!-- System Settings Section -->
        <div class="form-section">
            <div class="form-title">System Settings</div>
            <form action="system_settings.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="business_email" class="form-label">Business Email</label>
                    <input type="email" class="form-control" id="business_email" name="business_email" required>
                </div>
                <div class="mb-3">
                    <label for="system_title" class="form-label">System Title</label>
                    <input type="text" class="form-control" id="system_title" name="system_title" required>
                </div>
                <div class="mb-3">
                    <label for="business_logo" class="form-label">Business Logo</label>
                    <input type="file" class="form-control" id="business_logo" name="business_logo">
                </div>
                <div class="mb-3">
                    <label for="business_address" class="form-label">Business Address</label>
                    <textarea class="form-control" id="business_address" name="business_address" rows="3" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="facebook_page" class="form-label">Business Facebook Page</label>
                    <input type="url" class="form-control" id="facebook_page" name="facebook_page">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>



<div class="navbar-icons d-flex ms-auto">
    <!-- Notifications Icon -->
    <a class="nav-link icon-link" href="accountsettings.php" title="AccountSetting">
        <i class="fas fa-bell text-dark"></i>
        <!-- Optionally, add a badge for new notifications -->
        <span class="badge bg-danger">3</span>
    </a>
</div>





</script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
    