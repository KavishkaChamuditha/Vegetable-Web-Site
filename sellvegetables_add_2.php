<?php

require("db_connection.php");
  //get the values from the form (add_product_1.php) and display
//   echo "<pre>";
//   print_r($_REQUEST);
//   echo "</pre>";

// echo "<pre>";
//   print_r($_FILES);
// echo "</pre>";
  //store the form field values to variables
  $veg_name           = $_REQUEST['veg_name'];
  $veg_price          = $_REQUEST['veg_price'];
  $available_quntity  = $_REQUEST['available_quntity'];
  $availablesta       = $_REQUEST['availablesta'];
  $contact            = $_REQUEST['contact'];
  $mailaddress        = $_REQUEST['mailaddress'];
  $shopname           = $_REQUEST['shopname'];
  $economiccenter     = $_REQUEST['economiccenter'];
  $dateofveg          = date('Y-m-d', strtotime($_REQUEST['dateofveg']));
  
  //building a dynamic sql command
  $sql = "INSERT INTO sellingvegetables (veg_name, veg_price, available_quntity, availablesta, contact, mailaddress, shopname, economiccenter, dateofveg) VALUES (";
  $sql .= "'$veg_name',";
  $sql .= "'$veg_price',";
  $sql .= "'$available_quntity',";
  $sql .= "'$availablesta',";
  $sql .= "'$contact',";
  $sql .= "'$mailaddress',";
  $sql .= "'$shopname',";
  $sql .= "'$economiccenter',";
  $sql .= "'$dateofveg')";
  
    
    //lets display the sql command
    //echo $sql;

    //lets execute the sql command
    $x = $mysqli->query($sql);

    if($x>0){
      //echo "record successfully added";
      //upload code start here
        if(($_FILES['picture']['error'] == 0) && ($_FILES['picture']['type']=="image/jpeg")) {
            echo "error not found";

          // //can  upload
           $last_id     = $mysqli->insert_id;
           $filename    = $_FILES['picture']['tmp_name'];
           $destination = $last_id . "_".rand().rand().rand().".jpg";
          //
           $y = move_uploaded_file($filename,"sellvegetables/large/".$destination);
          //
           if($y>0){
           //lets update the product table's picture column with the generated file name
            $sql2 = "update sellingvegetables set picture='$destination' where veg_id=$last_id";

            $z = $mysqli->query($sql2);

            }
            
      //upload code ends here
       //header("location:sellvegetables_add_3.php?status=pass");
       echo"<script>alert('Vegetable Successfully Add ')</script>";
       echo"<script>window.location='availablevegetables_add_1.php'</script>";
     }
   else{
       //echo "adding new record failed";
  // header("location:sellvegetables_add_3.php?status=fail");
      echo"<script>alert('Vegetable Adding Failed Try Again')</script>";
      echo"<script>window.location='availablevegetables_add_1.php'</script>";
}
  }

 ?>