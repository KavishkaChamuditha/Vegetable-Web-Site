<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spice.Lk</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="css/styles.css">
   
        <!--===============================================================================================-->
        	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
        <!--===============================================================================================-->
        	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
        <!--===============================================================================================-->
        	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <!--===============================================================================================-->
        	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
        	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <!--===============================================================================================-->
        	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
        	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
        <!--===============================================================================================-->
        	<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
        <!--===============================================================================================-->
        	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
        <!--===============================================================================================-->
      
</head>
<body>
    
	
   
<?php
$showLoadingScreen = true;
require_once('preloader.php');
?>
<style>

.nav-link img {
 border-radius: 50%;
  width: 36px;
  height: 36px;
  margin: -8px 0;
  float: left;
  margin-right: 10px;
}
    
.img-cover {
    width: 100%;
}
/* 
.nav-item{
    margin-left: 200px;
}  */

.navbar {
    background-color: #186600;
    overflow: visible !important;
}

.navbar a {
    color: #fff;
    display: flex !important;
    margin-left: 120px;     
}

.navbar a{
    color: #fff !important;
}

.navbar a:hover {
    color: #fff !important;
    background-color: transparent !important;
}

.dropdown-menu a{
    margin-left:20px !important;    
}

.dropdown-menu a:hover{
    color:#fff !important; 
}

.dropdown-menu {
    margin-top:20px;
    background-color: #186600;
    border-color: #186600 !important;
    position: absolute;
    z-index: 9999;
}

.dropdown-menu i{
    margin-left: -20px;
}

.navbar .dropdown-menu {
    
    border-radius: 1px;
    border-color: #e5e5e5;
    box-shadow: 0 2px 8px rgba(0, 0, 0, .05);
}

.navbar .dropdown-menu a {
     color: #fff'
     line-height: normal;
}

.navbar .dropdown-menu a:hover,
.navbar .dropdown-menu a:active {
     color: #blue;
}

.navbar .dropdown-item .material-icons {
    font-size: 21px;
    line-height: 16px;
    vertical-align: middle;
    margin-top: -2px;
}

.iconmargin{
    margin-top: 4px;
}

.dropdown-item i.iconmargin {
    margin-right: 2px;
    margin-top:4px !important;
}


</style>

<!-- nav bar code start from here -->
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <img src="images/logo.png" width="100" class="d-inline-block align-top" alt="">
        <a class="navbar-brand" href="#">Vegetable Market</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="sellvegetablescus.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#searchveg">Search</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#buynow">Buy Now</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
            </ul>
           
            <a href="place_order_1.php" type="submit" name="submit" id="submit" value="ADD NOW"> <i class="fa fa-shopping-cart" style="font-size:28px;color:white; margin-right: 20px;"> </i> </a>

                <?php

                if(isset($_SESSION['cart']))
                {                 
                    $count = count($_SESSION['cart']);
                    echo" <span id=\"wishlist_count\" class=\"text-warning bg-light\" style=\"font-size:28px; padding: 0 0.9rem 0.1rem 0.9rem;  border-radius:3rem; \" >$count</span>";
                }else
                {
                    echo" <span id=\"cart_count\" class=\"text-warning bg-light\" style=\"font-size:28px; padding: 0 0.9rem 0.1rem 0.9rem; border-radius:3rem; margin-right:-20px;\">0</span>";
                }

                ?>

                <div class="nav-item dropdown" style="">
                    <a href="#" class="nav-link dropdown-toggle user-action" data-bs-toggle="dropdown">
                    <?php 
                    
                        if(isset($_SESSION['custmerimage'])){
                            echo '<img src="customer/large/' . $_SESSION['custmerimage'] . '" class="avatar" alt="Avatar">';
                        } else {
                            echo '<img src="images/default_user.jpg" class="avatar" alt="Avatar">';
                        }

                    ?>

                    <?php

                    if (isset($_SESSION['cus_name'])) {
                        echo $_SESSION['cus_name'];
                    } else {
                        echo "My Account";
                    }

                    ?>

    </a>
    <div class="dropdown-menu">
        <div class="dropdown-container">
            <a href="customer_account.php" class="dropdown-item"><i class="fa fa-user iconmargin"></i>Profile</a>
            <a href="customer_signup_1.php" class="dropdown-item"><i class="fa fa-calendar-o iconmargin"></i>Create an Account</a>
            <a href="customer_account_edit_1.php" class="dropdown-item"><i class="fa fa-sliders iconmargin"></i>Edit Account</a>
            <a href="logout.php" class="dropdown-item"><i class="material-icons iconmargin">&#xE8AC;</i>Sign Out</a>
        </div>
    </div>
</div>


        </div>
    </div>
</nav>
<!-- nav bar code stop from here -->

<!-- banner code start from here -->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="img-cover" src="images/cover image.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img class="img-cover" src="images/2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img class="img-cover" src="images/1.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- banner code stop from here -->



	<!-- Content page -->
	<section class="bg0 p-t-75 p-b-120">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-lg-8">
					<div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
						<h3 class="ltext-105 cl1 p-b-16">
							About Us
						</h3>
							<p class="text-justify">
                            Welcome to our Vegetable Website! We are a dedicated team passionate about providing you with the freshest and highest quality vegetables.

                                <p class="text-justify">At our Vegetable Website, we believe in the power of nature's bounty and the importance of a healthy lifestyle. We source our vegetables directly from local farmers who share our commitment to sustainable farming practices and organic cultivation. This ensures that you receive the finest, farm-fresh produce that is bursting with flavor and nutritional value.</p>

                                <p class="text-justify"> 
                                Our mission is to make it convenient for you to access a wide variety of vegetables, whether you're a home cook, a health enthusiast, or a professional chef. We offer an extensive range of seasonal vegetables, from leafy greens to root vegetables and everything in between. You can explore our website and discover an array of vibrant colors, textures, and flavors that will inspire your culinary creations. </p>

                                <p class="text-justify">We take pride in our commitment to quality and customer satisfaction. Our team works tirelessly to carefully select and package each vegetable to ensure it arrives at your doorstep in pristine condition. We value your trust and strive to exceed your expectations with every order.</p>

                                <p class="text-justify"> Our commitment to sustainability extends beyond the selection of our vegetables. We work closely with farmers who follow organic and eco-friendly farming practices, prioritizing the health of the soil, water, and surrounding ecosystem. By supporting these farmers, we contribute to the preservation of biodiversity and the reduction of harmful environmental impacts.</p>

                                <p class="text-justify">In addition to providing fresh produce, we are also dedicated to customer satisfaction. Our user-friendly website makes it easy for you to browse, select, and order your desired vegetables with just a few clicks. We prioritize efficient delivery services to ensure that your vegetables reach you in a timely manner, maintaining their freshness and quality.</p>

                                <p class="text-justify"> At our Vegetable Website, we believe that healthy eating should be accessible to all. We offer competitive pricing without compromising on the quality of our products. We continuously seek ways to improve our processes and expand our product range to better meet the evolving needs of our customers.</p>
                  </div>
				</div>

				
			</div>
		</div>
	</section>
    
<?php 
include("footer.php");

?>
</body>
</html>
