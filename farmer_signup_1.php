<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Signup</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>


    <link rel="stylesheet" href="css/customer_style.css">

</head>

<body>
    
<?php
$showLoadingScreen = true;
require_once('preloader.php');
?>
    <!-- <div class="container"> -->
    <!-- <div class="row"> -->

    <section class="ftco-section">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="wrap d-md-flex">
                    <div class="backclrsignup" style=" width: 600px !important;
  background-color: #186600 !important; height: 805px;">
                        <div class="farmergsignup" style="background-image: url(images/farmer_signup.png);">
                        </div>
                    </div>
                    <div class="login-wrap p-4 p-md-5" style="width: 500px; margin-left: 90px;">
                        <div class="d-flex">
                            <div class="w-100">
                                <h2 class="mb-4" style="font-weight: bold;">Farmer Sign Up</h2>
                            </div>
                            <div class="w-100">
                            </div>
                        </div>
                        <form action="farmer_signup_2.php" method="post" enctype="multipart/form-data"
                            class="signin-form">

                            <div class="form-group mb-3">
                                <label class="label" for="name">Your Name</label>
                                <input type="text" name="farmername" class="form-control formlabelcat"
                                    placeholder="Username" required>
                            </div>

                            <div class="form-group mb-3">
                                <label class="label" for="password">E-Mail Address</label>
                                <input type="text" name="farmailaddress" class="form-control formlabelcat"
                                    placeholder="Email Address" required>
                            </div>

                            <div class="form-group mb-3">
                                <label class="label" for="password">Password</label>
                                <input type="password" name="farpassword" class="form-control formlabelcat"
                                    placeholder="Password" required>
                            </div>

                            <div class="form-group mb-3">
                                <label class="label" for="password">Your ID Number</label>
                                <input type="text" name="farmeridnumber" class="form-control formlabelcat"
                                    placeholder="Username" required>
                            </div>

                            <div class="form-group mb-3">
                                <label class="label" for="password">Upload Your Image</label>
                                <input type="file" name="farmerimage" class="form-control formlabelcat" placeholder=""
                                    required>
                            </div>

                            <div class="d-flex inline">
                                <div class="form-group">
                                    <button type="submit" class="form-control btn signupbtn submit px-3">Sign
                                        Up</button>
                                </div>
                                <div class="form-group">
                                    <button type="cancel" class="form-control btn signinbtn submit px-3">Cancle</button>
                                </div>
                            </div>
                        </form>
                        <div class="d-flex justify-content-center">
                            <a class="" style="margin-left: 80px;">
                                <p class="text-center">Not a Member?<a data-toggle="tab" href="#signup"> Sign Up</a>
                                </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </div>
    </div>

    </div><!-- flex class stop from here -->

    </div><!-- row finish from here -->
    </div> <!-- container finish from here -->


</body>

</html>