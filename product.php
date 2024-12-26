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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<style>

body {
      background-color: #f8f9fa;
    }
    .form-container {
      max-width: 600px;
      margin: 50px auto;
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .form-control:disabled {
      background-color: #e9ecef;
      opacity: 1;
    }
    .custom-switch .form-check-input:checked {
      background-color: #0d6efd;
    }
  </style>


<body id="page-top">
    <div id="wrapper">
        <?php
        include_once 'functions/authentication.php';
        include_once 'functions/sidebar.php';
        ?>

               
            

                        <div class="form-container">
    <h3 class="mb-4">Add New Product</h3>
    <form>
      <!-- Product Name -->
      <div class="mb-3">
        <label for="productName" class="form-label">Product Name:</label>
        <input type="text" class="form-control" id="productName" placeholder="Enter product name" required>
      </div>

      <!-- Description -->
      <div class="mb-3">
        <label for="productDescription" class="form-label">Description:</label>
        <textarea class="form-control" id="productDescription" rows="3" placeholder="Enter description"></textarea>
      </div>

      <!-- Product Category -->
      <div class="mb-3">
        <label for="productCategory" class="form-label">Product Category:</label>
        <select class="form-select" id="productCategory" aria-label="Default select example">
          <option selected>No available product group.</option>
        </select>
      </div>

      <!-- Price -->
      <div class="mb-3">
        <label for="productPrice" class="form-label">Price:</label>
        <input type="number" class="form-control" id="productPrice" placeholder="Enter price">
      </div>

      <!-- Availability -->
      <div class="form-check form-switch mb-3">
        <input class="form-check-input" type="checkbox" id="availabilitySwitch" checked>
        <label class="form-check-label" for="availabilitySwitch">Available</label>
      </div>

      <!-- Image Upload -->
      <div class="mb-3">
        <label for="productImage" class="form-label">Image:</label>
        <input type="file" class="form-control" id="productImage">
        <img src="#" alt="Preview" id="imagePreview" class="mt-2" style="max-width: 100px; display: none;">
      </div>

      <!-- Save Button -->
      <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-warning text-white">Save</button>
      </div>
    </form>
  </div>

</script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
    
     <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Preview uploaded image
    document.getElementById('productImage').addEventListener('change', function (event) {
      const preview = document.getElementById('imagePreview');
      const file = event.target.files[0];
      if (file) {
        preview.src = URL.createObjectURL(file);
        preview.style.display = 'block';
      } else {
        preview.style.display = 'none';
      }
    });
  </script>
</body>

</html>
    