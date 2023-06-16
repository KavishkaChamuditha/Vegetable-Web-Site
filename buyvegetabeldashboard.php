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

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar" class="active">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-dark">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Toggle Menu</span>
                </button>
            </div>
            <div class="p-4">
                <img class="profile-img" src="images/girl2.png" alt="">
                <h6 class=" text-dark text-center">Name: Raslan</h6>
                <ul class="list-unstyled components mb-5">
                    <li class="active">
                        <a href="#"><span class="fa fa-home mr-3"></span>Add Products</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-user mr-3"></span>Update Products</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-briefcase mr-3"></span>View Products</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-sticky-note mr-3"></span>Delete Products</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-paper-plane mr-3"></span> Contact</a>
                    </li>
                </ul>

                <div class="footer">
                    <p class="text-dark">
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script> <i class="icon-heart"
                            aria-hidden="true"></i> by <a href="" target="_blank">VegetableMarket.com</a>
                    </p>
                </div>
            </div>
        </nav>


        <div id="content" class="p-4 p-md-5 pt-5">
            <div class="card " style="background-color: #186600;">
                <h1 class="text-light font-weight-bold text-center">Buy Vegetables</h1>
            </div>
            <div class="card sellproductcard crdcolor">
                <div class="card-body">
                    <div class="container" style="margin-left: 300px; ">
                        <div class="row">

                            <div class="col-3 col-md-4">
                                <a href="availablevegetables_add_1.php">
                                    <div class="btn btn-success btnadprdct font-weight-bold" style="font-size: 25px;">
                                        Add
                                        Product</div>
                                </a>
                            </div>


                            <div class="col-4 col-md-5">
                                <a href="availablevegetables_search.php">
                                    <div class="btn btn-success btnadprdct font-weight-bold"
                                        style="font-size: 25px; margin-top: 20px;">View
                                        Products </div>
                                </a>
                            </div>

                            <div class="col-3 col-md-4">
                                <div class="btn btn-success btnadprdct font-weight-bold"
                                    style="margin-top: 25px; font-size: 25px; margin-left: 200px;">
                                    Orders
                                </div>
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