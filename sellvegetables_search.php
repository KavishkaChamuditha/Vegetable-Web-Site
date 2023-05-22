<?php 
    require("db_connection.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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
 
<div class="row">
<div class="container">
<form class="product-margin" action="sellvegetables_search.php" method="post" enctype="multipart/form-data">
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
            <option value="availablesta">Availability</option>
            <option value="available_quantity">Available Quantity</option>
            <option value="contact">Contact</option>
            <option value="dateofveg">Date</option>
          </select>
        </div>
      </div>
      <div class="form-group col-lg-4 col-md-4">
        <label class="label mx-1" for="keywords">Keywords </label>
        <div class="input-group mx-1 mb-2 ">
          <input type="text" class="form-control " id="keywords" name="keywords" placeholder="">
        </div>
      </div>
      <div class="form-group col-lg-4 col-md-4">
        <label for="" class="mb-4"></label>
        <div class="input-group mx-1 mb-2 ">
          <input type="submit" class="btn btn-success col-6 " id="search" name="search" value="search">
          <input type="reset" class="btn btn-danger col-6" id="reset" name="reset" value="CANCEL">
        </div>
      </div>
    </div>
  </form>

<table class="table table-striped">
  <thead class="thead">
    <tr>
      <th scope="col">Vegetable ID</th>
      <th scope="col">Vegetable Name</th>
      <th scope="col">Vegetable Price</th>
      <th scope="col">Availability</th>
      <th scope="col">Available Quantity</th>
      <th scope="col">Contact</th>
      <th scope="col">Picture</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>

    </thead>

    <?php
if (isset($_POST['search'])) {
  $searchBy = $_POST['searchBy'];
  $keywords = $_POST['keywords'];

  $sql = "";

  switch($searchBy) {
    case 'veg_id':
      $sql = "select * from sellingvegetables where veg_id=$keywords";
      break;
    case 'veg_name':
      $sql = "select * from sellingvegetables where veg_name='$keywords' or veg_name like '%$keywords%'";
      break;
    case 'veg_price':
      $sql = "select * from sellingvegetables where veg_price='$keywords' or veg_price like '%$keywords%'";
      break;
    case 'availablesta':
      $sql = "select * from sellingvegetables where availablesta='$keywords' or availablesta like '%$keywords%'";
      break;
    case 'available_quntity':
      $sql = "select * from sellingvegetables where available_quntity='$keywords'";
      break;
    case 'contact':
      $sql = "select * from sellingvegetables where contact<=$keywords";
      break;
    case 'dateofveg':
      $sql = "select * from sellingvegetables where dateofveg<=$keywords";
      break;
  }

  $rs = $mysqli->query($sql);

  if(mysqli_num_rows($rs)>0){
    while ($row = mysqli_fetch_assoc($rs)) {
?>
      <tr>
        <td><?php echo $row['veg_id']; ?></td>
        <td><?php echo $row['veg_name']; ?></td>
        <td><?php echo $row['veg_price']; ?></td>
        <td>
          <?php 
          $availablesta = $row['availablesta']; 
          ?>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="myCheckbox" value="on" name="availablesta" <?php if($availablesta == 'on') echo 'checked'; ?>>
            <label class="form-check-label" for="myCheckbox">
              Available
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="myCheckbox" value="on" name="availablesta" <?php if($availablesta == 'OFF') echo 'checked'; ?>>
            <label class="form-check-label" for="myCheckbox">
              Not Available
            </label>
          </div>
        </td>
        <td><?php echo $row['available_quntity']; ?></td>
        <td><?php echo $row['contact']; ?></td>
        <td><img src="sellvegetables/large/<?php echo $row['picture'];?>" style="max-width:200px; max-height:200px;"alt=""></td>
        <td><?php echo $row['dateofveg']; ?></td>
        <td>
          <a class="btn btn-small btn-warning" href="edit_product_2.php?pro_id=<?php echo $row['veg_id']; ?>">Edit</a>
          <a class="btn btn-small btn-danger"  href="delete_product_2.php?pro_id=<?php echo $row['veg_id']; ?>">Delete</a>
        </td>
      </tr>
      <?php
          }
        } else {
          
      ?>
      <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">No Records Were Found</h4>
        <?php
        }
      }
          ?>

 </table>
    </div> <!-- end of container -->
  </div> <!-- end of row -->
</div> <!-- end of content -->


        <script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

  </body>
</html>
