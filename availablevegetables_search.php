<?php 
    session_start();
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
  <?php 
        require_once('sidebar.php');
    ?>
    
<div class="row">
<div class="container">
<form class="product-margin" action="availablevegetables_search.php" method="post" enctype="multipart/form-data">
    <div class="form-row align-item-left">
      <div class="form-group col-lg-4 col-md-4">
        <label class="label mx-1 border-primary" for="name"> Search By </label>
        <div class="input-group mx-1 mb-2 ">
          <div class="input-group-prepend">
          </div>
          <select class="form-control" name="searchBy" title="searchBy">
            <option value="buyveg_id">Vegetable ID</option>
            <option value="buyveg_name">Vegetable Name</option>
            <option value="catoA">Category  A</option>
            <option value="catoB">Category  B</option>
            <option value="catoC">Category  B</option>
            <option value="dateofveg">Date</option>
            <option value="availablequntity">Available Quantity</option>
            <option value="needquntity">Need Quantity</option>
            <option value="vegstatus">Vegetable Status</option>
            <option value="contact">Contact</option>
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
      <th scope="col">Category  A</th>
      <th scope="col">Category  B</th>
      <th scope="col">Category  C</th>
      <th scope="col">Date</th>
      <th scope="col">Available Quantity</th>
      <th scope="col">Need Quantity</th>
      <th scope="col">Vegetable Status</th>
      <th scope="col">Contact</th>
      <th scope="col">Action</th>
    </tr>

    </thead>

    <?php
if (isset($_POST['search'])) {
  $searchBy = $_POST['searchBy'];
  $keywords = $_POST['keywords'];

  $sql = "";

  switch($searchBy) {
    case 'buyveg_id':
      $sql = "select * from buyvegetables where buyveg_id=$keywords";
      break;
    case 'buyveg_name':
      $sql = "select * from buyvegetables where buyveg_name='$keywords' or buyveg_name like '%$keywords%'";
      break;
    case 'catoA':
      $sql = "SELECT * FROM buyvegetables WHERE catoA = $keywords";
        break; 
    case 'catoB':
      $sql = "SELECT * FROM buyvegetables WHERE catoB = $keywords";
        break; 
    case 'catoC':
      $sql = "SELECT * FROM buyvegetables WHERE catoC = $keywords";
        break; 
    case 'dateofveg':
      $sql = "SELECT * FROM buyvegetables WHERE dateofveg = '$keywords'";
        break; 
    case 'availablequntity':
          $sql = "select * from buyvegetables where availablequntity= '$keywords'";
          break;
    case 'vegstatus':
          $sql = "select * from buyvegetables where vegstatus= '$keywords'";
          break;
    case 'needquntity':
          $sql = "select * from buyvegetables where needquntity= '$keywords'";
          break;
    case 'contact':
          $sql = "select * from buyvegetables where contact<=$keywords";
      break;
  }

  $rs = $mysqli->query($sql);

  if(mysqli_num_rows($rs)>0){
    while ($row = mysqli_fetch_assoc($rs)) {
?>
      <tr>
        <td><?php echo $row['buyveg_id']; ?></td>
        <td><?php echo $row['buyveg_name']; ?></td>
        <td><?php echo $row['catoA']; ?></td>
        <td><?php echo $row['catoB']; ?></td>
        <td><?php echo $row['catoC']; ?></td>
        <td><?php echo $row['dateofveg']; ?></td>
        <td><?php echo $row['availablequntity']; ?></td>
        <td><?php echo $row['needquntity']; ?></td>
        <td>
          <?php 
          $vegstatus = $row['vegstatus']; 
          ?>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="myCheckbox" value="on" name="vegstatus" <?php if($vegstatus == 'ON') echo 'checked'; ?>>
            <label class="form-check-label" for="myCheckbox">
              Available
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="myCheckbox" value="on" name="vegstatus" <?php if($vegstatus == 'OFF') echo 'checked'; ?>>
            <label class="form-check-label" for="myCheckbox">
              Not Available
            </label>
          </div>
        </td>
        <td><?php echo $row['contact']; ?></td>
        <td><img src="buyvegetables/large/<?php echo $row['picture'];?>" style="max-width:200px; max-height:200px;"alt=""></td>
        <td><?php echo $row['dateofveg']; ?></td>
        <td>
          <a class="btn btn-small btn-warning" href="availablevegetables_edit_1.php?buyveg_id=<?php echo $row['buyveg_id']; ?>">Edit</a>
          <a class="btn btn-small btn-danger"  href="availablevegetables_delete_1.php?buyveg_id=<?php echo $row['buyveg_id']; ?>">Delete</a>
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
