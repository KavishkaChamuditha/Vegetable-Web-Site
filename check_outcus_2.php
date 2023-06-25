<?php

require("db_connection.php");
  //get the values from the form (add_product_1.php) and display
  echo "<pre>";
   print_r($_REQUEST);
   echo "</pre>"; 

// echo "<pre>";
//   print_r($_FILES);
// echo "</pre>";
  //store the form field values to variables
  $veg_name         = $_REQUEST['veg_name'];
  $veg_price        = $_REQUEST['veg_price']; 
  $quntity          = $_REQUEST['quntity'];
  $totalamount      = $_REQUEST['totalamount'];
  $firstname        = $_REQUEST['firstname'];
  $lastname         = $_REQUEST['lastname'];
  $username         = $_REQUEST['username'];
  $mailaddress      = $_REQUEST['mailaddress'];
  $address          = $_REQUEST['address'];
  $email            = $_REQUEST['email'];
  $dateofveg        = date('Y-m-d', strtotime($_REQUEST['dateofveg']));
  
  //building a dynamic sql command
  $sql = "insert into tblcheckoutcus (veg_name, veg_price, quntity, totalamount, firstname, lastname, username, address, mailaddress,  email, dateofveg) values("; 
  $sql .= "'$veg_name',";
  $sql .= "'$veg_price',";
  $sql .= "'$quntity',";
  $sql .= "'$totalamount',";
  $sql .= "'$firstname',";
  $sql .= "'$lastname',";
  $sql .= "'$username',";
  $sql .= "'$address',";
  $sql .= "'$mailaddress',";
  $sql .= "'$email',";
  $sql .= "'$dateofveg')";

    //lets display the sql command
    //echo $sql;

    //lets execute the sql command
    $x = $mysqli->query($sql);

    if($x>0){
      //echo "record successfully added";

            echo"<script>alert('Vegetable Successfully Add ')</script>";
            echo"<script>window.location='sellvegetablescus.php'</script>";
          }
        else{
            //echo "adding new record failed";
       // header("location:sellvegetables_add_3.php?status=fail");
           echo"<script>alert('Vegetable Adding Failed Try Again')</script>";
           echo"<script>window.location='sellvegetablescus.php'</script>";
     }
       
 ?>