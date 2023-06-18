<?php 
    
require("db_connection.php");
    session_start();
    require('cardscodebank.php');
    require('create_db.php');

    $database = new CreateDb("vegetable_website", "sellingvegetables");

?>
<html lang="en">
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title></title>
   
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
</head>

<body>



  
<div class="container">
<div class="row">

<form class="product-margin" action="" method="post" enctype="multipart/form-data">
          <?php
          $searchBy = $_REQUEST ['searchBy'];
          $keywords = $_REQUEST ['keywords'];
          ?>
</form>

  </div>
</div><!-- end of form group size 6-->

    <?php
    // RECIVING THE SEARCH BY KEY WORDS
    
$searchBy = isset($_POST['searchBy']) ? $_POST['searchBy'] : '';
$keywords = isset($_POST['keywords']) ? $_POST['keywords'] : '';

$sql = "";
switch ($searchBy) {
    case 'veg_name':
        $sql = "SELECT * FROM sellingvegetables WHERE veg_name = '$keywords' OR veg_name LIKE '%$keywords%'";
        break;
    case 'economiccenter':
        $sql = "SELECT * FROM sellingvegetables WHERE economiccenter = '$keywords' OR economiccenter LIKE '%$keywords%'";
        break;
    case 'shopname':
        $sql = "SELECT * FROM sellingvegetables WHERE shopname = '$keywords' OR shopname LIKE '%$keywords%'";
        break;
    case 'dateofveg':
        $sql = "SELECT * FROM sellingvegetables WHERE dateofveg = '$keywords' OR dateofveg LIKE '%$keywords%'";
        break;
}

$rs = $mysqli->query($sql);

?>

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
        <div class="col-md-6 mx-auto">
            <div class="card card-search">
                <form class="product-margin" action="" method="post" enctype="multipart/form-data">
                    <div class="input-group">
                    <h1 class="" style="margin-left:230px;">Search Vegetables</h1>
                    <div class="row">
                    <div class="col-md-6">
                        <select class="form-control" name="searchBy">
                            <option value="veg_name" <?php echo ($searchBy == 'veg_name') ? 'selected' : ''; ?>>Vegetable Name</option>
                            <option value="economiccenter" <?php echo ($searchBy == 'economiccenter') ? 'selected' : ''; ?>>Economic Center</option>
                            <option value="shopname" <?php echo ($searchBy == 'shopname') ? 'selected' : ''; ?>>Shop Name</option>
                            <option value="dateofveg" <?php echo ($searchBy == 'dateofveg') ? 'selected' : ''; ?>>Date</option>
                        </select>
                    </div>
                        <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Keywords" name="keywords" value="<?php echo $keywords; ?>">
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


<div class="container">
    <div class="row">
        <?php
        if ($rs && $rs->num_rows > 0) {
            while ($row = $rs->fetch_assoc()) {
                component($row['veg_id'], $row['veg_name'], $row['veg_price'], $row['availablesta'], $row['available_quntity'], $row['contact'], $row['dateofveg'], $row['shopname'], $row['economiccenter'], $row['picture']);
            }
        } else {
        ?>
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">No Records Were Found</h4>
                <p class="font-weight-bold">No Records Were Found, Please Try Again...</p>
                <hr>
            </div>
        <?php
        }
        ?>
    </div> <!-- end of row -->
</div> <!-- end of container -->


<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>
</html>