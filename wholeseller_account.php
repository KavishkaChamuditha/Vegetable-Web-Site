<?php
  session_start();

  // validating the user
  if($_SESSION['seller_id']==''){
    // redirect to invalid log in
    header("location:customer_sign_in_1.php");
  }

 ?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

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
  <style>
    /* Image Upload code Starts here */

    .avatar-upload {
      position: relative;
      max-width: 140px;
      margin: 50px auto;
    }

    .avatar-upload .avatar-edit {
      position: absolute;
      right: 12px;
      z-index: 1;
      top: 10px;
    }

    .avatar-upload .avatar-edit input {
      display: none;
    }

    .avatar-upload .avatar-edit input+label {
      display: inline-block;
      width: 34px;
      height: 34px;
      margin-bottom: 0;
      border-radius: 100%;
      background: #FFFFFF;
      border: 1px solid transparent;
      box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
      cursor: pointer;
      font-weight: normal;
      transition: all .2s ease-in-out;
    }

    .avatar-upload .avatar-edit input+label:hover {
      background: #f1f1f1;
      border-color: #d6d6d6;
    }

    .avatar-upload .avatar-edit input+label:after {
      content: "\f040";
      font-family: 'FontAwesome';
      color: #757575;
      position: absolute;
      top: 5px;
      left: 0;
      right: 0;
      text-align: center;
      margin: auto;
    }

    .avatar-upload .avatar-preview {
      width: 120px;
      height: 120px;
      position: relative;
      border-radius: 100%;
      border: 6px solid #F8F8F8;
      box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
    }

    .avatar-upload .avatar-preview>div {
      width: 100%;
      height: 100%;
      border-radius: 100%;
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    }

    .signinstyle {
      border-radius: 20px 0px 20px 0px !important;
    }

    .card{
      height: 1100px;
      border-radius: 40px 0px 40px 0px !important;
    }
    
  </style>

  <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card text-white" style="border-radius: 1rem; background-color: darkgreen !important;">
            <div class="card-body p-5 text-center">

              <div class="mb-md-5 mt-md-4 pb-5">
          <form action="farmrer_user_edit.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="cus_id" value="<?php echo $row ['cus_id']; ?>">

                <div class="avatar-upload">
                   <div class="avatar-edit">
                  
                    <label for="imageUpload"></label>
                  </div>
                  <div class="avatar-preview">
                     <!-- <div id="imagePreview" style="background-image: url('images/default_user.jpg');"> -->
                    <?php 
                        if(isset($_SESSION['sellerimage'])){
                          echo '<div id="imagePreview" style="background-image: url(\'wholseller/large/' . $_SESSION['sellerimage'] . '\');">';
                        } else {
                            echo '<div id="imagePreview" style="background-image: url(\'images/default_user.jpg\');">';
                        }
                    ?>
                    </div>
                  </div>
                </div>

                <h2 class="fw-bold mb-2 text-uppercase text-light">Your Account</h2>
                <p class="text-white-50 mb-5">Please enter your new details</p> 

                <div class="form-outline form-white mb-4">
                    <input type="email" id="disabledTextInput" class="form-control form-control-lg signinstyle text-dark" value="<?php echo $_SESSION['sellername']; ?>" disabled />
                    <label class="form-label" for="typeEmailX">Your Name</label>
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="email" id="disabledTextInput" class="form-control form-control-lg signinstyle" value="<?php echo $_SESSION['mailaddress']; ?>" disabled/>
                  <label class="form-label" for="typeEmailX">Email</label>
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="cus_password" id="disabledTextInput" class="form-control form-control-lg signinstyle" value="<?php echo $_SESSION['sellerpaswrd']; ?>" disabled/>
                  <label class="form-label" for="typePasswordX">Password</label>
                </div>
                
                <div class="form-outline form-white mb-4">
                  <input type="email" id="disabledTextInput" class="form-control form-control-lg signinstyle" value="<?php echo $_SESSION['shopname']; ?>" disabled/>
                  <label class="form-label" for="typeEmailX">Shop Name</label>
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="email" id="disabledTextInput" class="form-control form-control-lg signinstyle" value="<?php echo $_SESSION['economiccenter']; ?>" disabled/>
                  <label class="form-label" for="typeEmailX">Economic Center</label>
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="email" id="disabledTextInput" class="form-control form-control-lg signinstyle" value="<?php echo $_SESSION['idnumber']; ?>" disabled/>
                  <label class="form-label" for="typeEmailX">Your ID Number</label>
                </div>

          </form>

                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                  <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                  <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                  <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                </div>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




</body>

</html>