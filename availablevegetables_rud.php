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
    

<div class="container">
<div class="row">
<form class="product-margin" action="availablevegetables_rud.php" method="post" enctype="multipart/form-data">
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
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>

    </thead>

    <?php
// Function to display farmer components
function farmercomponnets($buyveg_id, $buyveg_name, $catoA, $catoB, $catoC, $dateofveg, $availablequntity, $needquntity, $vegstatus, $contact, $picture)
{
    $element = '
    <tr>
        <td>' . $buyveg_id . '</td>
        <td>' . $buyveg_name . '</td>
        <td>' . $catoA . '</td>
        <td>' . $catoB . '</td>
        <td>' . $catoC . '</td>
        <td>' . $dateofveg . '</td>
        <td>' . $availablequntity . '</td>
        <td>' . $needquntity . '</td>
        <td>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="myCheckbox" value="on" name="vegstatus" ' . ($vegstatus == 'ON' ? 'checked' : '') . '>
                <label class="form-check-label" for="myCheckbox">
                    Available
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="myCheckbox" value="on" name="vegstatus" ' . ($vegstatus == 'OFF' ? 'checked' : '') . '>
                <label class="form-check-label" for="myCheckbox">
                    Not Available
                </label>
            </div>
        </td>
        <td>' . $contact . '</td>
        <td><img src="buyvegetables/large/' . $picture . '" style="max-width:200px; max-height:200px;" alt=""></td>
        <td>' . $dateofveg . '</td>
        <td>
            <a class="btn btn-small btn-warning" href="availablevegetables_edit_2.php?buyveg_id=' . $buyveg_id . '">Edit</a>
            <a class="btn btn-small btn-danger" href="availablevegetables_delete_2.php?buyveg_id=' . $buyveg_id . '">Delete</a>
        </td>
    </tr>';

    echo $element;
}

// Fetch the logged-in user's email address from the session
if (!empty($_SESSION['mailaddress'])) {
    $mailaddress = $_SESSION['mailaddress'];

    // Fetch records for the logged-in user
    $sql = "SELECT * FROM buyvegetables WHERE mailaddress = '$mailaddress'";
    $result = $mysqli->query($sql);

    // Check if any records exist for the user
    if ($result->num_rows > 0) {

        // Display records for the user
        while ($row = $result->fetch_assoc()) {
            farmercomponnets($row['buyveg_id'], $row['buyveg_name'], $row['catoA'], $row['catoB'], $row['catoC'], $row['dateofveg'], $row['availablequntity'], $row['needquntity'], $row['vegstatus'], $row['contact'], $row['picture']);
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


        <script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

  </body>
</html>
