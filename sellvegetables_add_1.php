<!doctype html>
<html lang="en">

<head>
    <title>Sell Products</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/sidebar_style.css">
    <link rel="stylesheet" href="css/styles.css">
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

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <div class="card btncard sellproductcard">
                <div class="card-body ">
                    <h1 class="text-dark font-weight-bold">Add Products</h1>

                    <form action="sellvegetables_add_2.php" method="post" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-dark">Vegetable Name</label>
                            <input type="text" class="form-control formlabel" name="veg_name">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-dark">Price</label>
                            <input type="number" class="form-control formlabel" name="veg_price">
                        </div>

                        <label for="">Availability</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="availability" id="flexRadioDefault">
                            <label class="form-check-label" for="flexRadioDefault">
                                Default radio
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="availability" id="flexRadioChecked"
                                checked>
                            <label class="form-check-label" for="flexRadioChecked">
                                Checked radio
                            </label>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-dark">Quantity</label>
                            <input type="text" class="form-control formlabel" name="available_quntity">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-dark">Contact</label>
                            <input type="text" class="form-control formlabel" name="contact">
                        </div>

                        <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker"
                            inline="true">
                            <label for="example">Date</label>
                            <input type="date" id="date" name="date">
                        </div>

                        <div class="mb-3">
                            <label  class="form-label text-dark">Image</label>
                            <input type="file" class="form-control formlabel" name="picture" id="picture">
                        </div>

                        <button class="btnadd marginbtn" type="submit" name="submit" value="ADD NOW">Add
                            Vegetable</button>
                        <button class="btnadd Canclebtn" type="cancel" name="cancel" value="CANCEL">Cancel</button>

                    </form>
                </div>
            </div>
        </div>

        <script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

        <script>
            // Get the date input element
            const dateInput = document.getElementById('date');

            // Set the minimum and maximum date (optional)
            const today = new Date().toISOString().split('T')[0];
            dateInput.setAttribute('min', today);
            dateInput.setAttribute('max', '2025-12-31');
        </script>

</body>

</html>