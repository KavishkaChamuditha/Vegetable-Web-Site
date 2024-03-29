<?php
 session_start();
    require('cardscodebank.php');
    require('create_db_farmer.php');

    $database = new CreatefarmerDb("vegetable_website", "buyvegetables");

?> 
 
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-... (integrity value)" crossorigin="anonymous">

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
    margin-left: 30px;
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
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="#searchveg">Search </a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="about_us.php">About Us </a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
            </ul>
            
                <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle user-action" data-bs-toggle="dropdown" >
                <?php 
                    if(isset($_SESSION['farmerimage'])){
                        echo '<img src="farmer/large/' . $_SESSION['farmerimage'] . '" class="avatar" alt="Avatar">';
                    } else {
                        echo '<img src="images/default_user.jpg" class="avatar" alt="Avatar">';
                    }
                    ?>

                    <?php
                    if (isset($_SESSION['farmername'])) {
                        echo $_SESSION['farmername'];
                    } else {
                        echo "My Account" ;
                     }
                ?>

                </a>
                <div class="dropdown-menu"> 
                    <div class="dropdown-container">
                        <a href="farmer_accout.php" class="dropdown-item"><i class="fa fa-user iconmargin"></i>Profile</a>
                        <a href="farmer_signup_1.php" class="dropdown-item"><i class="fas fa-user-plus iconmargin"></i>Create an account</a>
                        <a href="farmrer_user_edit.php" class="dropdown-item"><i class="fa fa-sliders iconmargin"></i>Edit Account</a>
                        <a href="farmer_login_1.php" class="dropdown-item"><i class="fas fa-sign-in-alt iconmargin"></i>Sign In</a>
                        <a href="farmer_login_1.php" class="dropdown-item"><i class="fas fa-sign-out-alt iconmargin"></i>Sign Out</a>
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
                <img class="img-cover" src="images/farmer_img (3).jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img class="img-cover" src="images/farmer_img (2).jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img class="img-cover" src="images/farmer_img (1).jpg" class="d-block w-100" alt="...">
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

    

<style>
    .form-control{
        margin-top: 20px;
        border-radius: 20px 0px 20px 0px!important;
        margin-right: 300px;
        border:none !important;
    }

    .searchtn{
        margin-top: 40px; 
        margin-left:400px;
        width: 170px !important;
        height: 40px !important;
        margin-left: auto !important;
        margin-right: auto !important;
        border:none !important;
        background-color: #80E55D !important;
        color: #fff;
        border-radius: 30px 0px 30px 0px !important;
        font-size: 18px;
    }

</style>

<div class="container">
<div class="row">
 <div class="col-md-6 mx-auto" id="searchveg">
    <div class="card card-search">
        <form class="product-margin" action="farmer_side_search.php" method="post" enctype="multipart/form-data">
            <div class="input-group">
                <h1 class="" style="margin-left:10px;">Search Vegetables</h1>
                <div class="row">
                    <div class="col-md-6">
                        <select class="form-control" name="searchBy">
                            <option value="buyveg_name">Vegetable Name</option>
                            <option value="economiccenter">Economic Center</option>
                            <option value="shopname">Shop Name</option>
                            <option value="dateofveg">Date</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Keywords" name="keywords">
                    </div>
                </div>
                <div class="input-group-append">
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-primary d-flex justify-content-center searchtn" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>
</div>
</div>

    <h1 class="text-center" style="margin-top:90px; font-family: 'Roboto', sans-serif;">Place Your Availability Now</h1>

    <div class="container">
        <div class="row">

            <?php
               $result = $database->getData();
               while ($row = mysqli_fetch_assoc($result)){
                farmercomponnets($row['buyveg_id'],$row['buyveg_name'],$row['catoA'],$row['catoB'],$row['catoC'],$row['dateofveg'],$row['availablequntity'],$row['needquntity'],$row['vegstatus'], $row['contact'], $row['shopname'], $row['economiccenter'], $row['picture'], $row['mailaddress']);
               }
            ?>

        </div>
    </div>

<!-- 

    <div class="col-lg-2 col-mg-3 cardmar">
                <div class="card card-prop" style="height: 650px; width: 280px;">
                    <div class="d-flex align-items-center" style="margin-top: 20px; margin-left: -5px;">
                        <div class="availablestatus"></div>
                        <h3 class="marginpa fw-bold">Raslan Products</h3>
                    </div>
                    <img src="images/fresh (2) 1.png" alt="">
                    <p class="marginpa fw-bold">Tommatto</p>
                    <p class="marginpadeta">Dambulla Economic Center</p>
                    <p class="marginpadeta" style="margin-top:10px;">Need Quantity: 100kg</p>
                    <div class="" style="display: flex;">
                        <div class="card text-center catogaris">
                            A
                        </div>
                        <p class="marginpadeta">Price per kg: Rs 1200.00</p>
                    </div>
                    <div class="" style="display: flex;">
                        <div class="card text-center catogaris">
                            B
                        </div>
                        <p class="marginpadeta">Price per kg: Rs 1200.00</p>
                    </div>
                    <div class="" style="display: flex;">
                        <div class="card text-center catogaris">
                            C
                        </div>
                        <p class="marginpadeta">Price per kg: Rs 1200.00</p>
                    </div>
                    <p class="marginpadeta">Date: 2022/00/00</p>
                    <p class="marginpadeta">Contact: 0771271727</p>
                    <div class="btn btncard">Place Order</div>
                </div>
            </div> -->

               <?php 
                require_once('footer.php');
               ?>


</body>

</html>