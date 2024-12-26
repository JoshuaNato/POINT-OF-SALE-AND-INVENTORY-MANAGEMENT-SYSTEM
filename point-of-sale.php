<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>POS - Point of Sale and Inventory Management System</title>
    <meta name="description" content="Inventory &amp; Point of Sale System">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Pricing-Centered-badges.css">
    <link rel="stylesheet" href="assets/css/Pricing-Centered-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<style>

body {
            background-color: #f8f9fa;
        }
        .order-section {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            background-color: white;
        }
        .order-table th, .order-table td {
            text-align: center;
        }
        .order-summary {
            background-color: #ff7f00;
            color: white;
            font-weight: bold;
        }
        .side-panel {
            background-color: #4b4b4b;
            color: white;
            border-radius: 5px;
            padding: 20px;
        }
        .side-panel .btn {
            width: 100%;
            margin-bottom: 10px;
        }
        .btn-pay {
            background-color: #ff7f00;
            color: white;
        }
        .btn-save {
            background-color: #ff7f00;
            color: white;
        }


        .navbar {
            background-color: #28a745; /* Green background color */
        }
        .navbar-brand {
            color: white; /* White text for brand */
            font-weight: bold;
            font-size: 1.2rem;
        }
        .navbar-nav .nav-link {
            color: white; /* White text for navigation links */
            font-weight: bold;
            margin-right: 15px;
        }
        .navbar-nav .nav-link:hover {
            color: #f8f9fa; /* Lighter color on hover */
            text-decoration: underline;
        }

        
    </style>
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
                    <div class="container-fluid"><span>IN TEA MATE  POINT OF SALE AND  SYSTEM</span></div>
                </nav>
               
               
                <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <!-- Brand -->
            <a class="navbar-brand" href="#">
                <i class="bi bi-list"></i> In Tea Mate Milktea Station             </a>
            <!-- Toggler for mobile view -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">POS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Request</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Reports</a>
                    </li>
                    <li class="nav-item">
            <a class="nav-link" href="transaction.php">Transaction</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <!-- Products Section -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5>Products</h5>
                        <div class="btn-group">
                            <button class="btn btn-dark">All</button>
                            <button class="btn btn-primary">Milktea</button>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <img src="milktea.png" alt="Milktea" class="img-fluid" style="max-height: 150px;">
                        <p class="mt-2">Milktea</p>
                        <div class="d-flex justify-content-around">
                            <button class="btn btn-primary">Pay</button>
                            <button class="btn btn-secondary">Pay Later</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Order List Section -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5>Order List</h5>
                        <button class="btn btn-dark">
                            <i class="bi bi-house-door"></i> Home
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="orderNo" class="form-label">Order No.</label>
                            <input type="text" class="form-control" id="orderNo">
                        </div>
                        <table id="orderTable" class="table table-sm">
                            <thead>
                                <tr>
                                    <th>QTY</th>
                                    <th>Order</th>
                                    <th>Amount</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="orderList">
                                <!-- Dynamically populated -->
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-end">
                        <button id="exportExcel" class="btn btn-success">Export Excel</button>
                        <button id="exportPDF" class="btn btn-danger">Export PDF</button>
                        <h6 class="mt-2">Total: <span id="totalAmount">0.00</span></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Adding/Editing Record -->
    <div class="modal fade" id="recordModal" tabindex="-1" aria-labelledby="recordModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="recordModalLabel">Add/Edit Record</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="recordForm">
                        <div class="mb-3">
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="productName" required>
                        </div>
                        <div class="mb-3">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="number" class="form-control" id="quantity" required>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" step="0.01" class="form-control" id="price" required>
                        </div>
                        <div class="mb-3">
                            <label for="productImage" class="form-label">Upload Image</label>
                            <input type="file" class="form-control" id="productImage" accept="image/*">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
               
               
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body text-center p-4">
                                    <h6 class="text-uppercase text-muted card-subtitle">TOTAL</h6>
                                    <h4 class="display-4 fw-bold card-title">₱<?php include_once 'functions/pos-total.php'; ?></h4>
                                </div>
                                <div class="card-footer p-4">
                                    <form class="text-center" method="post">
                                        <div class="mb-3"><button class="btn btn-primary d-block w-100" type="button" data-bs-target="#purchase" data-bs-toggle="modal">Purchase&nbsp;</button></div>
                                    </form>
                                    <div class="card" style="margin-top: 16px;">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 fw-bold">Items</p>
                                        </div>
                                        <div class="container my-5">
    <div class="row">
        <div class="col-12 mb-3">
            <select class="form-select w-auto d-inline">
                <option selected>Dine-in</option>
                <option>Takeaway</option>
                <option>Delivery</option>
            </select>
            <button class="btn btn-save float-end mx-2">Save</button>
            <button class="btn btn-pay float-end">Pay</button>
            <a href="Order.php">
    <button class="btn btn-pay float-end">Order List</button>
</a>

        </div>
    </div>
    <div class="row">
        <!-- Order Section -->
        <div class="col-lg-8">
            <div class="order-section">
                <table class="table order-table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>QTY</th>
                            <th>Price</th>
                            <th>Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Placeholder for dynamic rows -->
                    </tbody>
                </table>
                <div class="row mt-3">
                    <div class="col-6 text-end order-summary">Total</div>
                    <div class="col-6 text-start order-summary">0.00</div>
                </div>
            </div>
        </div>

        <!-- Side Panel -->
        <div class="col-lg-4">
            <div class="side-panel">
                <p class="text-center">No Data...</p>
                <button class="btn btn-success">All</button>
            </div>
        </div>
    </div>
</div>
                                        <div class="card-body">
                                            <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                                                <table class="table table-hover table-bordered my-0" id="dataTable">
                                                    <thead>
                                                        <tr>
                                                            <th>Product Code</th>
                                                            <th>Product Name</th>
                                                            <th>Size</th>
                                                            <th>Quantity</th>
                                                            <th>Price</th>
                                                            <th>Option</th>
                                                       
                                                            
                        <div class="container mt-4">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr class="table-header">
                        <th scope="col">Action</th>
                        <th scope="col">Order</th>
                        <th scope="col">Description</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="4" class="no-data">No data available in table</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="action-buttons">
            <button type="button" class="btn btn-php btn-lg mb-2">
                <i class="bi bi-check-circle"></i> Php
            </button>
            <br>
            <button type="button" class="btn btn-cancel btn-lg">
                <i class="bi bi-x-circle"></i> Cancel
            </button>
        </div>
    </div>

                                                       
                                                       
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php include_once 'functions/pos-history.php'; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-md-6">
                            <div class="card shadow">
                                <div class="card-header py-3">
                                    <p class="text-primary m-0 fw-bold">Products</p>
                                </div>
                                <div class="card-body">
                                    
                                    <div class="table-responsive table mt-2" id="dataTable-2" role="grid" aria-describedby="dataTable_info">
                                        <table class="table table-hover table-bordered my-0" id="dataTable">
                                            <thead>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <th>Product Name</th>
                                                    <th>Size</th>
                                                    <th>Quantity</th>
                                                    <th>Price</th>
                                                    <th>Option</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php include_once 'functions/pos-view-products.php'; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="purchase">
        <div class="modal-dialog" role="document">
            <form action="functions/pos-transaction.php" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Point of Sale</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <p>Purchase Confirmation&nbsp;</p>
                        <div class="card">
                            <div class="card-body text-center p-4">
                                <h6 class="text-uppercase text-muted card-subtitle">TOTAL</h6>
                                <h4 class="display-4 fw-bold card-title">₱<?php include 'functions/pos-total.php'; ?></h4>
                                <div class="mb-3"><input class="form-control" type="number" name="discount" placeholder="Discount "></div>
                                <div class="mb-3"><input class="form-control" type="number" name="amount" placeholder="Amount "></div>
                                <input type="hidden" name="total_sales" value="<?php include 'functions/pos-total.php'; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="submit">Save</button></div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="confirmation">
        <div class="modal-dialog" role="document">
            <form action="functions/pos-remove-history.php" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Confirmation</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to remove this product?</p>
                        <input type="hidden" name="history_id">
                        <input type="hidden" name="product_id">
                        <input type="hidden" name="product_qty">

                    </div>
                    <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-danger" type="submit">Remove</button></div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="add-item">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Item</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Quantity</p>
                    <form class="text-center" action="functions/pos-add-item.php" method="post">
                        <input type="hidden" name="product_id">
                        <div class="mb-3"><input class="form-control" type="number" name="item_qty" value="1" placeholder="Quantity" required></div>
                        <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Add Item</button></div>
                    </form>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>
    
    <script src="assets/js/jquery.min.js"></script>
    <script>
        
        $('button[data-bs-target="#add-item"]').on('click', function() {
        // Get the user ID from the data attribute.
        var product_id = $(this).data('product-id');
        console.log(product_id);
        // Set the value of all input fields with the name "userid" to the user ID.
        $('input[name="product_id"]').each(function() {
            $(this).val(product_id);
        });
        });

        $('button[data-bs-target="#confirmation"]').on('click', function() {
        // Get the user ID from the data attribute.
        var product_id = $(this).data('product-id');
        var history_id = $(this).data('history-id');
        var qty = $(this).data('qty');
        

        console.log(product_id);
        // Set the value of all input fields with the name "userid" to the user ID.
        $('input[name="history_id"]').each(function() {
            $(this).val(history_id);
        });

        $('input[name="product_id"]').each(function() {
            $(this).val(product_id);
        });


        $('input[name="product_qty"]').each(function() {
            $(this).val(qty);
        });
        });
        $(document).ready(() => {
    const orderList = [];
    const totalAmountElem = $("#totalAmount");
    const orderTable = $("#orderTable").DataTable();

    // Add/Edit functionality
    $("#recordForm").on("submit", function (e) {
        e.preventDefault();
        const productName = $("#productName").val();
        const quantity = parseInt($("#quantity").val(), 10);
        const price = parseFloat($("#price").val());

        const amount = quantity * price;
        orderList.push({ productName, quantity, price, amount });

        // Add row to table
        orderTable.row.add([
            quantity,
            productName,
            amount.toFixed(2),
            `<button class="btn btn-warning btn-sm edit-btn">Edit</button>
             <button class="btn btn-danger btn-sm delete-btn">Delete</button>`
        ]).draw();

        updateTotal();
        $("#recordModal").modal("hide");
    });

    // Update total amount
    function updateTotal() {
        const total = orderList.reduce((sum, item) => sum + item.amount, 0);
        totalAmountElem.text(total.toFixed(2));
    }

    // Export to Excel
    $("#exportExcel").on("click", () => {
        const csvContent = orderList.map(item => `${item.quantity},${item.productName},${item.amount}`).join("\n");
        const blob = new Blob([csvContent], { type: "text/csv;charset=utf-8;" });
        saveAs(blob, "order_list.csv");
    });

    // Export to PDF
    $("#exportPDF").on("click", () => {
        // Placeholder: Use a library like jsPDF here for better PDF export functionality.
        alert("PDF export is not implemented in this demo.");
    });
});

    </script>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="script.js"></script>

</body>

</html>