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
  $buyveg_name      = $_REQUEST['buyveg_name'];
  $catogary         = $_REQUEST['catogary']; 
  $quantity          = $_REQUEST['quantity'];
  $totalValue       = $_REQUEST['totalValue'];
  $firstname        = $_REQUEST['firstname'];
  $lastname         = $_REQUEST['lastname'];
  $state            = $_REQUEST['state'];
  $mailaddress      = $_REQUEST['mailaddress'];
  $address          = $_REQUEST['address'];
  $email            = $_REQUEST['email'];
  $dateofveg        = date('Y-m-d', strtotime($_REQUEST['dateofveg']));
  
  //building a dynamic sql command
  $sql = "insert into farmer_checkout (buyveg_name, catogary, quantity, totalValue, firstname, lastname, state, mailaddress, address, email, dateofveg) values("; 
  $sql .= "'$buyveg_name',";
  $sql .= "'$catogary',";
  $sql .= "'$quantity',";
  $sql .= "'$totalValue',";
  $sql .= "'$firstname',";
  $sql .= "'$lastname',";
  $sql .= "'$state',";
  $sql .= "'$mailaddress',";
  $sql .= "'$address',";
  $sql .= "'$email',";
  $sql .= "'$dateofveg')";

    //lets display the sql command
    //echo $sql;

    //lets execute the sql command
    $x = $mysqli->query($sql);

    if($x>0){
      //echo "record successfully added";

            echo"<script>alert('Vegetable Successfully Add ')</script>";
            echo"<script>window.location='buyvegetablesfrmfarmrs.php'</script>";
          }
        else{
            //echo "adding new record failed";
       // header("location:sellvegetables_add_3.php?status=fail");
           echo"<script>alert('Vegetable Adding Failed Try Again')</script>";
           echo"<script>window.location='buyvegetablesfrmfarmrs.php'</script>";
     }
       
 ?>