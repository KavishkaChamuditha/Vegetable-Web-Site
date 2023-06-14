<?php

require("db_connection.php");
  //get the values from the form (add_product_1.php) and display
//   echo "<pre>";
//   print_r($_REQUEST);
//   echo "</pre>";

// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";
  //store the form field values to variables
  $sellername          = $_REQUEST['sellername'];
  $mailaddress         = $_REQUEST['mailaddress'];
  $sellerpaswrd        = $_REQUEST['sellerpaswrd'];
  $shopname            = $_REQUEST['shopname'];
  $economiccenter      = $_REQUEST['economiccenter'];
  $idnumber            = $_REQUEST['idnumber'];

  //building a dynamic sql command
  $sql = "INSERT INTO tblwholeseller (sellername, mailaddress, sellerpaswrd, shopname, economiccenter, idnumber) VALUES (";
  $sql .= "'$sellername',";
  $sql .= "'$mailaddress',";
  $sql .= "'$sellerpaswrd',";
  $sql .= "'$shopname',";
  $sql .= "'$economiccenter',";
  $sql .= "'$idnumber'";
  $sql .= ")"; 
  
    //lets display the sql command
    //echo $sql;

    //lets execute the sql command
    $x = $mysqli->query($sql);

    if($x>0){
      //echo "record successfully added";
      //upload code start here
        if(($_FILES['sellerimage']['error'] == 0) && ($_FILES['sellerimage']['type']=="image/jpeg")) {
            //echo "error not found";

          //can  upload
           $last_id     = $mysqli->insert_id;
           $filename    = $_FILES['sellerimage']['tmp_name'];
           $destination = $last_id . "_".rand().rand().rand().".jpg";
          
           $y = move_uploaded_file($filename,"wholseller/large/".$destination);
          
           if($y>0){
           //lets update the product table's picture column with the generated file name
            $sql2 = "update tblwholeseller set sellerimage='$destination' where sellerid=$last_id";

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