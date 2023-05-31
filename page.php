<?php
    require('cardscodebank.php');
    require('create_db.php');

    $database = new CreateDb("vegetable_website", "sellingvegetables");

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

</head>

<body>

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
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ">Disabled</a>
                    </li>
                </ul>
                <li class="navbar-nav position-absolute top-50 end-0 translate-middle">
                    <a class="nav-link text-end">Sign Up</a>
                </li>
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

        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card card-search">
                        <div class="input-group justify-content-between">
                            <p class="searchword">Vegetable name</p>
                            <p class="searchsecond">Economic Center</p>
                        </div>
                        <div class="input-group justify-content-between">
                            <input type="text" class="form-control searcharea searchinput" placeholder="Vegetable Name"
                                aria-label="Recipient's username" aria-describedby="button-addon2">
                            <input type="text" class="form-control searcharea searchinputsec"
                                placeholder="Economic Center" aria-label="Recipient's username"
                                aria-describedby="button-addon2">
                        </div>
                        <div class="input-group justify-content-between">
                            <p class="searchword">Shope name</p>
                            <p class="searchsecond">Date</p>
                        </div>
                        <div class="input-group justify-content-between">
                            <input type="text" class="form-control searcharea searchinput" placeholder="Vegetable Name"
                                aria-label="Recipient's username" aria-describedby="button-addon2">
                            <input type="text" class="form-control searcharea searchinputsec"
                                placeholder="Vegetable Name" aria-label="Recipient's username"
                                aria-describedby="button-addon2">
                        </div>
                        <div class="btn searchbtn">Search</div>
                    </div>
                </div>
            </div>
        </div>
    

        <div class="container">
            <div class="row">
              <?php
               $result = $database->getData();
               while ($row = mysqli_fetch_assoc($result)){
                   component($row['veg_id'],$row['veg_name'],$row['veg_price'],$row['availablesta'],$row['available_quntity'],$row['contact'],$row['dateofveg'],$row['picture']);
               }
              ?>
            </div> <!-- container stop from here -->
        </div><!-- row stop from here -->


        <!-- Footer -->
        <footer class="text-center text-lg-start bg-light text-muted ">

            <!-- Section: Links  -->
            <section class="backgroundcolo">
                <div class="container text-center text-md-start mt-5 ">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4 margintext">
                                <i class="fas fa-gem me-3"></i>Company name
                            </h6>
                            <p>
                                Here you can use rows and columns to organize your footer content. Lorem ipsum
                                dolor sit amet, consectetur adipisicing elit.
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4 margintext">
                                Products
                            </h6>
                            <p>
                                <a href="#!" class="text-reset">Angular</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">React</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Vue</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Laravel</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4 margintext">
                                Useful links
                            </h6>
                            <p>
                                <a href="#!" class="text-reset">Pricing</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Settings</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Orders</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Help</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4 margintext">Contact</h6>
                            <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                            <p>
                                <i class="fas fa-envelope me-3"></i>
                                info@example.com
                            </p>
                            <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                            <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center p-4 text-light" style="background-color: #186600;">
                © 2021 Copyright:
                <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->

</body>

</html>