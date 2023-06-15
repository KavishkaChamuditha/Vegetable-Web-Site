<?php

require("db_connection.php");
  //get the values from the form (add_product_1.php) and display
//   echo "<pre>";
//   print_r($_REQUEST);
//   echo "</pre>";

if ($result->num_rows > 0) {
  // User already exists, redirect to signup page
  echo "<script>alert('User with the same email address already exists. Please try again.')</script>";
  echo "<script>window.location='customer_signup_1.php'</script>";
  exit;
}

// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";
  //store the form field values to variables
  $cus_name      = $_REQUEST['cus_name'];
  $mailaddress   = $_REQUEST['mailaddress'];
  $cus_password  = $_REQUEST['cus_password'];
  $id_num        = $_REQUEST['id_num'];
 
  //building a dynamic sql command
  $sql = "insert into tblcustomer (cus_name, mailaddress, cus_password, id_num) values(";
  $sql .= "'$cus_name',";
  $sql .= "'$mailaddress',";
  $sql .= "'$cus_password',";
  $sql .= "'$id_num')";

    //lets display the sql command
    //echo $sql;

    //lets execute the sql command
    $x = $mysqli->query($sql);

    if($x>0){
      //echo "record successfully added";
      //upload code start here
        if(($_FILES['custmerimage']['error'] == 0) && ($_FILES['custmerimage']['type']=="image/jpeg")) {
            //echo "error not found";

          //can  upload
           $last_id     = $mysqli->insert_id;
           $filename    = $_FILES['custmerimage']['tmp_name'];
           $destination = $last_id . "_".rand().rand().rand().".jpg";
          
           $y = move_uploaded_file($filename,"customer/large/".$destination);
          
           if($y>0){
           //lets update the product table's picture column with the generated file name
            $sql2 = "update tblcustomer set custmerimage='$destination' where cus_id=$last_id";

            $z = $mysqli->query($sql2);

            }

            echo"<script>alert('Customer Successfully Add')</script>";
            echo"<script>window.location='customer_signup_1.php'</script>";
          }
        else{
            //echo "adding new record failed";
       // header("location:sellvegetables_add_3.php?status=fail");
          echo"<script>alert('Customer Successfully Add')</script>";
          echo"<script>window.location='customer_signup_1.php'</script>";
     }
       }

 ?>