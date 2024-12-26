<!DOCTYPE html>
<html lang="en">

<head>

<style>

.img-fluid {
  object-fit: cover; /* Ensures image covers the container */
  width: 100%; /* Image takes up 100% of the width of its container */
  height: 100%; /* Image takes up 100% of the height of its container */
  max-width: 100%; /* Ensures the image fits within the div */
    height: auto; /* Maintains the aspect ratio of the image */
    border-radius: 10px; /* Adds rounded corners to the image */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Adds a shadow to the image */
    width: 100%; /* Full width */
    height: 50%; /* Half the height of the viewport */
    background-size: cover; /* Ensures the image covers the div */
    background-position: center; /* Centers the image */
    border: 1px solid #ccc; /* Optional for visual separation */
}

/* Optional: Add extra styles to customize the container or image */
.container {
  position: relative;
  width: 100%;
  height: 500px; /* Define a height for the container */
}

.img-container {
  position: relative;
  width: 100%;
  height: 100%;
  overflow: hidden;
}

{
    border: 2px solid black;
  padding: 25px;
  background: url();
  background-repeat: no-repeat;
  background-size: cover;
}


</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Point of Sale and Inventory Management System</title>
    <meta name="description" content="Point of Sale and Inventory Management System">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/css/Pricing-Centered-badges.css">
    <link rel="stylesheet" href="assets/css/Pricing-Centered-icons.css">
    <link rel="stylesheet" href="index.css">
</head>

<body class="bg-gradient-primary">
    <!-- Navbar Section -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#" style="color: rgb(255, 159, 14);">POS IVENTORY </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <nav>
			<ul id="MenuItems">
            <li><a href="Home.php">Home</a></li>
			<li><a href="Home.php">About</a></li>
			<li><a href="Home.php">Menu</a></li>
			<li><a href="Home.php">Location</a></li>
			<li><a href="Home.php">Contact</a></li>
            <li><a href="Home.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
			</ul>
		</nav>
                </ul>
            </div>
        </div>
    </nav>




    
    <!-- Main Content -->
    <div class="container">
        <div class="text-center p-4 p-lg-5">
            <h1 class="fw-bold mb-4">
                <span style="color: rgb(255, 159, 14);">IN TEA MATE MILTEA STATION  </span>
                <span style="color: rgb(255, 255, 255);"> POINT OF SALE AND INVENTORY  SYSTEM</span>
            </h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <!-- Left Image Section -->
                            <div class="col-lg-6 d-none d-lg-flex">
                            <img src="milk.jpg" alt="Milk Image" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                            </div>
                            <!-- Login Form Section -->
                            <div class="col-lg-6" style="padding: 68px;">
                                <div class="p-5">
                                <div class="background-container">
                                <div class="login-container">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Login</h4>
                                    </div>
                                    <form class="user" action="functions/login.php" method="post">
                                        <div class="mb-3">
                                            <input class="form-control form-control-user" type="text" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Username" name="username">
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Password" name="password">
                                        </div>
                                        <hr>
                                        <button class="btn btn-primary d-block btn-user w-100" type="submit">Login</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="py-4 py-xl-5"></section>

    <!-- Bootstrap Scripts -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
