<!DOCTYPE html>

<html>
<head>

<style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f9f9f9;
  color: #333;
}

.container {
  max-width: 800px;
  margin: 20px auto;
  text-align: center;
}

.description {
  font-size: 18px;
  line-height: 1.6;
  margin-bottom: 20px;
}

.image-container {
  display: flex;
  justify-content: center;
  align-items: center;
}

.image-container img {
  max-width: 100%;
  height: auto;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.col-2 {
    width: 1000%; 
    height: auto; /* Automatically adjusts height based on content */
    margin: 0 auto; /* Centers the div horizontally */
    text-align: center; /* Ensures content inside is centered */
    display: block;
    text-align: center;
    
    
}

.col-2 img {
    max-width: 100%; /* Ensures the image fits within the div */
    height: auto; /* Maintains the aspect ratio of the image */
    border-radius: 10px; /* Adds rounded corners to the image */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Adds a shadow to the image */
    width: 100%; /* Full width */
    height: 50%; /* Half the height of the viewport */
    background-size: cover; /* Ensures the image covers the div */
    background-position: center; /* Centers the image */
    background-repeat: no-repeat; /* Prevents the image from repeating */
    border: 1px solid #ccc; /* Optional for visual separation */
}


.products {
  padding: 50px 0;
  max-width: 100%; /* Ensures the image fits within the div */
    height: auto; /* Maintains the aspect ratio of the image */
    border-radius: 10px; /* Adds rounded corners to the image */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Adds a shadow to the image */
    width: 100%; /* Full width */
    height: 50%; /* Half the height of the viewport */
    background-size: cover; /* Ensures the image covers the div */
    background-position: center; /* Centers the image */
    background-repeat: no-repeat; /* Prevents the image from repeating */
    border: 1px solid #ccc; /* Optional for visual separation */
}


.col-3 {
  flex: 1;
  text-align: center;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  padding: 20px;
  border-radius: 10px;
  max-width: 100%; /* Ensures the image fits within the div */
    height: auto; /* Maintains the aspect ratio of the image */
    border-radius: 10px; /* Adds rounded corners to the image */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Adds a shadow to the image */
    width: 100%; /* Full width */
    height: 50%; /* Half the height of the viewport */
    background-size: cover; /* Ensures the image covers the div */
    background-position: center; /* Centers the image */
    background-repeat: no-repeat; /* Prevents the image from repeating */
    border: 1px solid #ccc; /* Optional for visual separation */
}

.col-3 img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  border-radius: 10px;
  max-width: 100%; /* Ensures the image fits within the div */
    height: auto; /* Maintains the aspect ratio of the image */
    border-radius: 10px; /* Adds rounded corners to the image */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Adds a shadow to the image */
    width: 100%; /* Full width */
    height: 50%; /* Half the height of the viewport */
    background-size: cover; /* Ensures the image covers the div */
    background-position: center; /* Centers the image */
    background-repeat: no-repeat; /* Prevents the image from repeating */
    border: 1px solid #ccc; /* Optional for visual separation */
}

.col-3 h4 {
  margin-top: 10px;
  font-size: 18px;
  font-weight: 600;
}

.col-3 p {
  font-size: 16px;
  color: #888;
}




</style>


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> POS Inventory  </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <link rel="stylesheet" href="Home.css">

</head>
<body>
	<a href="#" class="to-top">
		<i class="fas fa-chevron-up"></i>
	</a>
	<section class="home"=id="home">
	<div class="header">
	<div class="container">
		<div class="navbar">
		<div class="logo">
			<img src="https://scontent.fmnl8-4.fna.fbcdn.net/v/t39.30808-6/310429948_477876244360549_9160262640885568552_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeH5qPNpzZ90KnidK7-RE3P85f436XmvRqLl_jfpea9GovESBL7pbqPV-HmbzLF8Sqrn1jszIIwlSa72vpckUfSI&_nc_ohc=AZ1ob8QgcLIQ7kNvgHm59Aq&_nc_zt=23&_nc_ht=scontent.fmnl8-4.fna&_nc_gid=AVsCKfTJjKgSgk641Zd_R0P&oh=00_AYCxllp-E7YboVzw-H7YiCxFF1yGZqlI4T9b1xkCXIGZIA&oe=676DBDDB" width="125px">
		</div>
		<nav>
			<ul id="MenuItems">
				<li><a href="#home">Home</a></li>
				<a class="nav-link fw-bold text-light" href="About.php">About</a>
				<li><a href="#featured">Menu</a></li>
				<li><a href="#about">Location</a></li>
				<li><a href="#contact">Contact</a></li>
                <a class="nav-link fw-bold text-light" href="Index.php">Login</a>
                <a class="nav-link fw-bold text-light" href="register.php">Register</a>
			</ul>
		</nav>
			<img src="menu.png" class="menu-icon" onclick="menutoggle()">
		</div>
		<div class="row">
			<div class="col-2">
				<h1> Brewing Quality <br> Truly Matters! </h1>
				<p> Pouring Happines!  <br> Every sip's an Experience it's the passion</p>
				<a href="" class="btn"> In Tea Milktea Station &#8594; </a>
			</div>
			<div class="col-2">
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdA3UV5Tl9U3UvKlEWKaIFSLBWuh3Jq4t3xg&s">
			</div>
		</div>
		</div>
	</div>


<!---- products ---->
<section class="products"id="products">
<div class="products">
	<div class="small-container">
		<h2 class="title"> Menu </h2>
		<div class="row">
		<div class="col-3">
			<img src="Milk1.jpg">
		</div>


</div>

<!---- featured products ---->
<section class="featured"id="featured">
	<div class="small-container">
		<h2 class="title"> About  </h2>
        <div class="container">
        <p class="description">
            In Tea Mate Milktea Station is a brand created in 2021, owned by In Tea Mate Frahising Inc., with an objective to serve milk tea, coffee, frappe, and fruit tea.
		<div class="row">
			<div class="col-4">
				<img src="about.jpg">
                <h4> In Tea Mate Milktea Station </h4>
				<p> Location: Phase 5 Bagong Silang Caloocan City </p>
			</div>
	<div class="row">
		
	<h2 class="title"> Location </h2>
<!---- developers ----->
<section class="about"id="about">
		<div class="container">
		<div class="developers">
			<div class="row">
				<div class="col-1">
					<p> In-Tea-Mate Milktea Station is a cozy beverage shop located in Phase 5, North Caloocan City. It offers a wide variety of refreshing milktea flavors and customizable options. With its friendly atmosphere, affordable prices, and high-quality ingredients, it has become a favorite spot for locals to relax and enjoy delicious drinks.</p>
					</div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3857.9375216146077!2d121.0563440191368!3d14.77254926644513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397afdd0fde6927%3A0x2e9b551bf956bb5!2sAGUA%20CLEARGY%20WATER%20REFILLING%20STATION!5e0!3m2!1sen!2sph!4v1734861294336!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

				</div>
			</div>
			<hr>
<!------- footer ------>
<section class="contact"id="contact">
	<div class="footer">
			<div class="container">
<div class="row">
<div class="footer-col-1">
	
	</div>
</div>
		<div class="footer-col-2">
	<h3> Contact </h3>
	<ul>
		
	</ul>
</div>

			</div>	
		</div>
		<hr>
		<p class="Copyright"> Copyright 2024 - POS Iventory  </p>
	</div>
</div>
	<!--- js for toggle menu ----->
	<script>
		var MenuItems = document.getElementById("MenuItems");

		MenuItems.style.maxHeight = "0px";
		function menutoggle(){
			if(MenuItems.style.maxHeight =="0px")
				{
					MenuItems.style.maxHeight = "200px";
				}
				else 
				{
					MenuItems.style.maxHeight = "0px";
				}
		}
		mybutton = document.getElementById("myBtn");

		const to-top =document.querySelector(".toTop");
		window.addEventListener("Scroll,"()=> {
			if(window.pageYoffset>100){
				else{
					to-top.classList.remove("active");
			}
		})   
	</script>
	



</body>
</html>

