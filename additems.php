<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="Inventory &amp; Point of Sale System">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Pricing-Centered-badges.css">
    <link rel="stylesheet" href="assets/css/Pricing-Centered-icons.css">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<style>
      
    
  </style>

<body id="page-top">
    <div id="wrapper">
        <?php
        include_once 'functions/authentication.php';
        include_once 'functions/sidebar.php';
        ?>

<a href="Categories.php">
    <button class="btn btn-pay float-end">Categories</button>
</a>

    <div class="container-fluid">
	
	<div class="col-lg-12">
		<div class="row">
			<!-- FORM Panel -->
			<div class="col-md-12">
			<form action="" id="manage-category">
				<div class="card">
					<div class="card-header">
						    Category Form
				  	</div>
					<div class="card-body">
							<input type="hidden" name="id">
							<div class="form-group">
								<label class="control-label">Name</label>
								<input type="text" class="form-control" name="name">
							</div>
							<div class="form-group">
								<label class="control-label">Description</label>
								<textarea name="description" id="description" cols="30" rows="4" class="form-control"></textarea>
							</div>
					</div>
							
					<div class="card-footer">
						<div class="row">
							<div class="col-md-12">
								<button class="btn btn-primary "> Save</button>
								<button class="btn btn-default" type="button" onclick="$('#manage-category').get(0).reset()"> Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			</div>
			<!-- FORM Panel -->
		</div>
	</div>	

</div>
<style>
	
	td{
		vertical-align: middle !important;
	}
	td p {
		margin:unset;
	}
</style>
<script>
	$('#manage-category').on('reset',function(){
		$('input:hidden').val('')
	})
	
	$('#manage-category').submit(function(e){
		e.preventDefault()
		start_load()
		$.ajax({
			url:'ajax.php?action=save_category',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully added",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
				else if(resp==2){
					alert_toast("Data successfully updated",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	})
	$('.edit_category').click(function(){
		start_load()
		var cat = $('#manage-category')
		cat.get(0).reset()
		cat.find("[name='id']").val($(this).attr('data-id'))
		cat.find("[name='name']").val($(this).attr('data-name'))
		cat.find("[name='description']").val($(this).attr('data-description'))
		end_load()
	})
	$('.delete_category').click(function(){
		_conf("Are you sure to delete this category?","delete_category",[$(this).attr('data-id')])
	})
	function delete_category($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_category',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
	$('table').dataTable()
</script>




</script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const categoryInput = document.getElementById("categoryInput");
        const saveButton = document.getElementById("saveButton");
        const categoryTable = document.getElementById("categoryTable").querySelector("tbody");

        let categoryId = 1; // Counter for category IDs

        // Function to add a new row
        function addRow(categoryName) {
            const row = categoryTable.insertRow();
            row.dataset.id = categoryId; // Add unique ID for the row

            row.innerHTML = `
                <td>${categoryId}</td>
                <td class="category-name">${categoryName}</td>
                <td>
                    <span class="btn btn-sm btn-primary btn-edit">Edit</span>
                    <span class="btn btn-sm btn-danger btn-delete">Delete</span>
                </td>
            `;

            // Add event listeners for Edit and Delete buttons
            row.querySelector(".btn-edit").addEventListener("click", () => editRow(row));
            row.querySelector(".btn-delete").addEventListener("click", () => deleteRow(row));

            categoryId++; // Increment the ID counter
        }

        // Function to edit a row
        function editRow(row) {
            const categoryNameCell = row.querySelector(".category-name");
            const currentName = categoryNameCell.textContent;

            // Populate the input field with the current category name
            categoryInput.value = currentName;
            saveButton.textContent = "Update";
            saveButton.dataset.editId = row.dataset.id; // Store the row ID in the button
        }

        // Function to update a row
        function updateRow(row, newName) {
            const categoryNameCell = row.querySelector(".category-name");
            categoryNameCell.textContent = newName;

            // Reset the input field and button
            categoryInput.value = "";
            saveButton.textContent = "Save";
            delete saveButton.dataset.editId;
        }

        // Function to delete a row
        function deleteRow(row) {
            categoryTable.removeChild(row);
        }

        // Event listener for the Save/Update button
        saveButton.addEventListener("click", () => {
            const categoryName = categoryInput.value.trim();

            if (categoryName === "") {
                alert("Please enter a category name.");
                return;
            }

            if (saveButton.dataset.editId) {
                // Update existing row
                const editId = saveButton.dataset.editId;
                const row = categoryTable.querySelector(`tr[data-id="${editId}"]`);
                updateRow(row, categoryName);
            } else {
                // Add new row
                addRow(categoryName);
            }
        });
    </script>

    
  
  
</body>

</html>
    