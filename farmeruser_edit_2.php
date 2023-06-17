<?php
// connecting to database
  require("db_connection.php");
  require("code_lib.inc.php");
// get products from edit_product_2.php
//  echo "<pre>";
//   print_r($_REQUEST);
//   echo "</pre>";
$farmer_id         = $_REQUEST['farmer_id'];
$farmername        = $_REQUEST['farmername'];
$farmailaddress    = $_REQUEST['farmailaddress'];
$farpassword       = $_REQUEST['farpassword'];
$farmeridnumber    = $_REQUEST['farmeridnumber'];

// let's build a dynamic SQL command
$sql  = "UPDATE farmertable SET ";
$sql .= "farmername = '$farmername', ";
$sql .= "farpassword = '$farpassword' WHERE farmer_id = '$farmer_id'";

// execute the SQL command
$x = $mysqli->query($sql);

// file upload code starts here
if ($x > 0) {
    // file upload code starts here
    if ($_FILES['farmerimage']['error'] == 0 && $_FILES['farmerimage']['type'] == "image/jpeg") {
        // we can proceed with the upload

        $old_picture_name = getfarmerPicture($farmer_id);

        $filename = $_FILES['farmerimage']['tmp_name'];
        $destination;

        if ($old_picture_name == "default.jpg") {
            // generate a new file name
            $destination = $farmer_id . "_" . rand() . rand() . rand() . ".jpg";
        } else {
            $destination = $farmer_id . "_" . rand() . rand() . rand() . ".jpg";
        }

        move_uploaded_file($filename, "farmer/large/" . $destination);
        // let's update the picture field in the farmertable

        $sql2 = "UPDATE farmertable SET farmerimage = '$destination' WHERE farmer_id = $farmer_id";
        $mysqli->query($sql2);
    }
    // file upload code ends here

     echo "<script>alert('Account Edit Successful')</script>";
    echo "<script>window.location='farmrer_user_edit.php'</script>";
} else {
    echo "<script>alert('Something Went Wrong. Try Again.')</script>";
    echo "<script>window.location='farmrer_user_edit.php'</script>";
}

 ?>
