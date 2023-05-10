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


<div class="container">
<div class="row">
<form class="product-margin" action="sellvegetables_search_2.php" method="post" enctype="multipart/form-data">
  <!--  -->
  <div class="form-row align-item-left">
     <div class="form-group col-lg-4 col-md-4">

        <label class="label mx-1 border-primary" for="name"> Search By </label>
        <div class="input-group mx-1 mb-2 ">
          <div class="input-group-prepend">
          </div>
          <select class="form-control" name="searchBy" title="searchBy">
            <option value="veg_id">Vegetable ID</option>
            <option value="veg_name">Vegetable Name</option>
            <option value="veg_price">Vegetable Price</option>
            <option value="availability">Availability</option>
            <option value="available_quntity">Available Quantity</option>
            <option value="dateofveg">Contact</option>
            <option value="picture">Date</option>
          </select>

      </div>
    </div><!-- end of form group size 6-->


    <div class="form-group col-lg-4 col-md-4">
     <label class="label mx-1" for="keywords">Keywords </label>
     <div class="input-group mx-1 mb-2 ">
       <input type="text" class="form-control "
        id="keywords" name="keywords" placeholder="">

   </div>
   </div><!-- end of form group size 6-->



   <div class="form-group col-lg-4 col-md-4">
     <label for="" class="mb-4"></label>
     <div class="input-group mx-1 mb-2 ">
      <input type="submit" class="btn btn-success col-6 " id="submit"
       name="submit" value="SEARCH" >
      <input type="reset" class="btn btn-danger col-6"  id="reset"
       name="reset" value="CANCLE">
     </div><!--.... -->
  </div>
  </div><!-- end of form group size 6-->
</form>
      </div> <!-- end of container -->
      </div> <!-- end of row -->

      </div> <!-- end of content -->

        <script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

  </body>
</html>
