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

    <!-- <div class="container"> -->
    <!-- <div class="row"> -->

    <section class="ftco-section">
        <div class="">
            <div class="row justify-content-center">
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img" style="background-image: url(images/log_in.png);">
                        </div>
                        <div class="login-wrap p-4 p-md-5" style="width: 700px;">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h2 class="mb-4" style="font-weight: bold;">Customer SignUp</h2>
                                </div>
                                <div class="w-100">
                                </div>
                            </div>
                            <form action="customer_signup_2.php" method="post" enctype="multipart/form-data" class="signin-form">
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Your Name</label>
                                    <input type="text" name="cus_name" class="form-control formlabelcat" placeholder="Username"
                                        required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">E-Mail Address</label>
                                    <input type="text" name="mailaddress" class="form-control formlabelcat" placeholder="Email Address"
                                        required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input type="password" name="cus_password" class="form-control formlabelcat" placeholder="Password"
                                        required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">ID card Number</label>
                                    <input type="text" name="id_num" class="form-control formlabelcat" placeholder="Username"
                                        required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Upload Your Image</label>
                                    <input type="file" name="custmerimage" class="form-control formlabelcat" placeholder=""
                                        required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn signupbtn submit px-3">Sign
                                        Up</button>
                                </div>

                            </form>
                            <a class="style=" color: #80E55D !important;"">
                                <p class="text-center">Already a Member? <a data-toggle="tab" href="#signup">Log In</a>
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