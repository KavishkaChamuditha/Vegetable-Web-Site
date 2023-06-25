<?php
    session_start();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <head>
        <title>Sell Products</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/sidebar_style.css">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/admin_side.css">
    </head>

<body>

    <?php 
        require_once('sidebarsellvegetables.php');
    ?>
        <div id="content" class="p-4 p-md-5 pt-5">
            <div class="card " style="background-color: #186600;">
                <h1 class="text-light font-weight-bold text-center">Sell Vegetables</h1>
            </div>
            <div class="card sellproductcard crdcolor">
                <div class="card-body">
                    <div class="container d-flex justify-content-center">
                        <div class="row">
                            
                            <div class="col-3 col-md-4 mx-auto">
                                <a href="sellvegetables_add_1.php ">
                                    <div class="btn btn-success btnadprdct font-weight-bold" style="font-size: 25px;">
                                        Add
                                        Product</div>
                                </a>
                            </div>

                            <div class="col-4 col-md-5">
                                <a href="sellvegetables_rud.php">
                                    <div class="btn btn-success btnadprdct font-weight-bold"
                                        style="font-size: 25px;">View
                                        Products </div>
                                </a>
                            </div>

                            <div class="col-3 col-md-4 mx-auto">
                                <a href="sell_vegetableorder.php">
                                <div class="btn btn-success btnadprdct font-weight-bold"
                                    style="margin-top: 25px; font-size: 25px;">
                                    Orders
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <script src="js/jquery.min.js"></script>
            <script src="js/popper.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/main.js"></script>

            <!-- selling and sold -->
</body>

</html>