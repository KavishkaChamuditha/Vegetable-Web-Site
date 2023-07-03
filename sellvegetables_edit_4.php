<?php 

session_start();

    // validating the user
    if($_SESSION['seller_id']==''){
      // redirect to invalid log in
      header("location:wholeseller_signin_1.php");
    }
  
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/styles.css">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="js/bootstrap.js">
    </script>

  </head>
  <body>
        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/add_products_img.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
        </div>

<div class="row">
<div class="container">
    <?php

      if($_REQUEST['status']=="pass"){
        // echo "<h2 class='text-success'>Record Successfully Added</h2>";
        ?>
            <div class="alert alert-success alert-dismissible fade show product-alert" role="alert">
              <h2>Record Successfully Edited</h2>
              <strong>Great </strong> Editing new record is successfully done.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <br />
              <a href="sellvegetables_edit_1.php" class="btn btn-success my-3">Edit Another Record</a>
            </div>
        <?php
      }
      else{
        // echo "<h2 class='text-danger'>Add new record failed.!</h2>";
        ?>
            <div class="alert alert-danger alert-dismissible fade show product-alert" role="alert">
              <h2>Editing record failed.!</h2>
              <strong>Sorry</strong> Editing new record failed. Pleas try again.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <br />
              <a href="sellvegetables_edit_1.php" class="btn btn-danger my-3">Try again</a>
            </div>
        <?php
      }

     ?>

</div>
</div>


  </body>
</html>
