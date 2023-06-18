<?php
// connecting to database
  require("db_connection.php");
  require("code_lib.inc.php");
// get products from edit_product_2.php
// echo "<pre>";
//   print_r($_REQUEST);
//    echo "</pre>";
$seller_id        = $_REQUEST['seller_id'];
$sellername       = $_REQUEST['sellername'];
$mailaddress      = $_REQUEST['mailaddress'];
$sellerpaswrd     = $_REQUEST['sellerpaswrd'];
$shopname         = $_REQUEST['shopname'];
$economiccenter   = $_REQUEST['economiccenter'];
$idnumber         = $_REQUEST['idnumber'];

// let's build a dynamic SQL command
$sql  = "UPDATE tblwholeseller SET ";
$sql .= "sellername     = '$sellername', ";
$sql .= "mailaddress    = '$mailaddress', ";
$sql .= "sellerpaswrd   = '$sellerpaswrd', ";
$sql .= "shopname       = '$shopname', ";
$sql .= "economiccenter = '$economiccenter', ";
$sql .= "idnumber       = '$idnumber', ";
$sql .= "sellerpaswrd   = '$sellerpaswrd' WHERE seller_id = '$seller_id'";

// execute the SQL command
$x = $mysqli->query($sql);

// file upload code starts here
if ($x > 0) {
    // file upload code starts here
    if ($_FILES['sellerimage']['error'] == 0 && $_FILES['sellerimage']['type'] == "image/jpeg") {
        // we can proceed with the upload

        $old_picture_name = getfarmerPicture($seller_id);

        $filename = $_FILES['sellerimage']['tmp_name'];
        $destination;

        if ($old_picture_name == "default.jpg") {
            // generate a new file name
            $destination = $seller_id . "_" . rand() . rand() . rand() . ".jpg";
        } else {
            $destination = $seller_id . "_" . rand() . rand() . rand() . ".jpg";
        }

        move_uploaded_file($filename, "wholseller/large/" . $destination);
        // let's update the picture field in the farmertable

        $sql2 = "UPDATE tblwholeseller SET sellerimage = '$destination' WHERE seller_id = $seller_id";
        $mysqli->query($sql2);
    }
    // file upload code ends here

     echo "<script>alert('Account Edit Successful')</script>";
     echo "<script>window.location='wholeseller_account_edit.php'</script>";
} else {
     echo "<script>alert('Something Went Wrong. Try Again.')</script>";
     echo "<script>window.location='wholeseller_account_edit.php'</script>";
}

 ?>
