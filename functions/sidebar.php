<?php
// Check user level
if ($_SESSION['level'] == 0) {
    // User has level 0, show all links
    echo '<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
    <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
            <div class="sidebar-brand-text mx-3"><span>POS SYSTEM &#39</span></div>
        </a>
        <hr class="sidebar-divider my-0" />
        <ul class="navbar-nav text-light" id="accordionSidebar">
            <li class="nav-item"><a class="nav-link" href="dashboard.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
            <li class="nav-item"><a class="nav-link" href="users.php"><i class="fas fa-user"></i><span>Profile</span></a></li>
            <li class="nav-item"><a class="nav-link" href="logs.php"><i class="fas fa-user-circle"></i><span>Logs</span></a></li>
            
            <li class="nav-item"><a class="nav-link" href="additems.php"><i class="fas fa-plus-circle"></i><span>Add Items</span></a></li>

            <li class="nav-item"><a class="nav-link" href="Products.php"><i class="fas fa-box"></i><span>Products</span></a></li>

            
              <li class="nav-item"><a class="nav-link" href="inventory.php"><i class="fas fa-table"></i><span>Inventory</span></a>
              <li class="nav-item"><a class="nav-link" href="point-of-sale.php"><i class="fas fa-shopping-cart"></i><span>Point of Sale</span></a></li>
           <li class="nav-item"><a class="nav-link" href="sales.php"><i class="fas fa-chart-line"></i><span>Sales Report</span></a></li>
            
            <li class="nav-item"><a class="nav-link" href="Record.php"><i class="fas fa-file-alt"></i><span>Record</span></a></li>

           <li class="nav-item"><a class="nav-link" href="Report.php"><i class="fas fa-chart-line"></i><span>Report</span></a></li>
           <li class="nav-item"><a class="nav-link" href="Notification.php"><i class="fas fa-bell"></i><span>Notification</span></a></li>
          <li class="nav-item"><a class="nav-link" href="functions/logout.php"><i class="fas fa-user-circle"></i><span>Logout</span></a></li>
        
          </ul>
        <div class="text-center d-none d-md-inline"><button id="sidebarToggle" class="btn rounded-circle border-0" type="button"></button></div>
    </div>
</nav>';
} else if ($_SESSION['level'] == 1) {
    // User has level 1, show only point of sale link
    echo '<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
    <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
            <div class="sidebar-brand-text mx-3"><span><strong>KSSPOSIM&nbsp;</strong></span></div>
        </a>
        <hr class="sidebar-divider my-0">
        
        <ul class="navbar-nav text-light" id="accordionSidebar">
            <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
            <li class="nav-item"><a class="nav-link" href="functions/logout.php"><i class="fas fa-user-circle"></i><span>Logout</span></a></li>
        </ul>
        <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
    </div>
</nav>';
}

?>