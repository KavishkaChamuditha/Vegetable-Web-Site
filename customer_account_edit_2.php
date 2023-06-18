<?php
// connecting to database
  require("db_connection.php");
  require("code_lib.inc.php");
// get products from edit_product_2.php
     echo "<pre>";
     print_r($_REQUEST);
     echo "</pre>";
$cus_id         = $_REQUEST['cus_id'];
$cus_name       = $_REQUEST['cus_name'];
$mailaddress    = $_REQUEST['mailaddress'];
$cus_password   = $_REQUEST['cus_password'];
$id_num         = $_REQUEST['id_num'];

// let's build a dynamic SQL command
$sql  = "UPDATE tblcustomer SET ";
$sql .= "cus_name       = '$cus_name', ";
$sql .= "mailaddress    = '$mailaddress', ";
$sql .= "cus_password   = '$cus_password', ";
$sql .= "id_num         = '$id_num', ";
$sql .= "cus_password   = '$cus_password' WHERE cus_id = '$cus_id'";

// execute the SQL command
$x = $mysqli->query($sql);

// file upload code starts here
if ($x > 0) {
    // file upload code starts here
    if ($_FILES['custmerimage']['error'] == 0 && $_FILES['custmerimage']['type'] == "image/jpeg") {
        // we can proceed with the upload

        $old_picture_name = getfarmerPicture($cus_id);

        $filename = $_FILES['custmerimage']['tmp_name'];
        $destination;

        if ($old_picture_name == "default.jpg") {
            // generate a new file name
            $destination = $cus_id . "_" . rand() . rand() . rand() . ".jpg";
        } else {
            $destination = $cus_id . "_" . rand() . rand() . rand() . ".jpg";
        }

        move_uploaded_file($filename, "customer/large/" . $destination);
        // let's update the picture field in the farmertable

        $sql2 = "UPDATE tblcustomer SET custmerimage = '$destination' WHERE cus_id = $cus_id";
        $mysqli->query($sql2);
    }
    // file upload code ends here

    //  echo "<script>alert('Account Edit Successful')</script>";
    //  echo "<script>window.location='wholeseller_account_edit.php'</script>";
} else {
    //  echo "<script>alert('Something Went Wrong. Try Again.')</script>";
    //  echo "<script>window.location='wholeseller_account_edit.php'</script>";
}

 ?>
