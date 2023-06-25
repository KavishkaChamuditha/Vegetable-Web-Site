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
    // echo "$_SESSION[mailaddress]";
    require_once('sidebarsellvegetables.php');
    ?>
    
<div class="container">
<div class="row">
<form class="product-margin" action="sell_vegetableorder.php" method="post" enctype="multipart/form-data">
    <div class="form-row align-item-left">
      <div class="form-group col-lg-4 col-md-4">
        <label class="label mx-1 border-primary" for="name"> Search By </label>
        <div class="input-group mx-1 mb-2 ">
          <div class="input-group-prepend">
          </div>
          <select class="form-control" name="searchBy" title="searchBy">
            <option value="id">ID</option>
            <option value="catogary">Vegetable Category</option>
            <option value="buyveg_name">Vegetable Name</option>
            <option value="quantity">Giving Quantity</option>
            <option value="firstname">First Name</option>
            <option value="lastname">Last Name</option>
            <option value="email">Email</option>
            <option value="address">Address</option>
            <option value="dateofveg">Date</option>
            <option value="state">state</option>
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
      <th scope="col">ID</th>
      <th scope="col">Vegetable Category</th>
      <th scope="col">Vegetable Name</th>
      <th scope="col">Giving Quantity</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Date</th>
      <th scope="col">state</th>
    
      <th scope="col">Action</th>
    </tr>

    </thead>

    <?php
    // Function to display farmer components
    function component($id, $catogary, $buyveg_name, $quantity, $firstname, $lastname, $email, $address, $dateofveg, $state)
    {
        $element = '
        <tr>
            <td>' . $id . '</td>
            <td>' . $catogary . '</td>
            <td>' . $buyveg_name . '</td>
            <td>' . $quantity . '</td>
            <td>' . $firstname . '</td>
            <td>' . $lastname . '</td>
            <td>' . $email . '</td>
            <td>' . $dateofveg . '</td>
            <td>' . $address . '</td>
            <td>' . $state . '</td>

        <td>
             <button id="colorButton" onclick="changeColor()" style="width:150px; border-radios: 30px 0px 30px 0px; background-color:red;">Order Done</button>
        </td>
    
        </tr>';

        echo $element;
    }

// Fetch the logged-in user's email address from the session
if (!empty($_SESSION['mailaddress'])) {
    $mailaddress = $_SESSION['mailaddress'];

    // Fetch records for the logged-in user
    $sql = "SELECT * FROM farmer_checkout WHERE mailaddress = '$mailaddress'";
    $result = $mysqli->query($sql);

    // Check if any records exist for the user
    if ($result->num_rows > 0) {

        // Display records for the user
        while ($row = $result->fetch_assoc()) {
          component($row['id'],$row['catogary'],$row['buyveg_name'],$row['quantity'],$row['firstname'],$row['lastname'],  $row['email'],  $row['dateofveg'], $row['address'], $row['state']);
        }

        echo '
            </tbody>
        </table>';
    } else {
        echo '<div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">No Records Found for the User</h4>
        </div>';
    }
} else {
    echo '<div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">User Not Logged In</h4>
    </div>';
}

// Close the database connection
$mysqli->close();
?>

 </table>
    </div> <!-- end of container -->
  </div> <!-- end of row -->
</div> <!-- end of content -->

<script>
  function changeColor() {
    var button = document.getElementById("colorButton");

    if (button.style.backgroundColor === "red") {
      button.style.backgroundColor = "green";
      button.style.color = "white";
    } else {
      button.style.backgroundColor = "red";
      button.style.color = "black";
    }
  }
</script>
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

  </body>
</html>
