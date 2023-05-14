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
  $buyveg_name      = $_REQUEST['buyveg_name'];
  $catoA            = $_REQUEST['catoA'];
  $catoB            = $_REQUEST['catoB'];
  $catoC            = $_REQUEST['catoC'];
  $availablequntity = $_REQUEST['availablequntity'];
  $needquntity      = $_REQUEST['needquntity'];
  $vegstatus        = $_REQUEST['vegstatus'];
  $contact          = $_REQUEST['contact'];
  $dateofveg        = date('Y-m-d', strtotime($_REQUEST['dateofveg']));
  
  //building a dynamic sql command
  $sql = "insert into buyvegetables (buyveg_name, catoA, catoB, catoC, availablequntity,needquntity,vegstatus,contact, dateofveg) values(";
  $sql .= "'$buyveg_name',";
  $sql .= "'$catoA',";
  $sql .= "'$catoB',";
  $sql .= "'$catoC',";
  $sql .= "'$availablequntity',";
  $sql .= "'$needquntity',";
  $sql .= "'$vegstatus',";
  $sql .= "'$contact',";
  $sql .= "'$dateofveg')";

    //lets display the sql command
    //echo $sql;

    //lets execute the sql command
    $x = $mysqli->query($sql);

    if($x>0){
      //echo "record successfully added";
      //upload code start here
        if(($_FILES['picture']['error'] == 0) && ($_FILES['picture']['type']=="image/jpeg")) {
            //echo "error not found";

          // //can  upload
           $last_id     = $mysqli->insert_id;
           $filename    = $_FILES['picture']['tmp_name'];
           $destination = $last_id . "_".rand().rand().rand().".jpg";
          
           $y = move_uploaded_file($filename,"buyvegetables/large/".$destination);
          
           if($y>0){
           //lets update the product table's picture column with the generated file name
            $sql2 = "update buyvegetables set picture='$destination' where buyveg_id=$last_id";

            $z = $mysqli->query($sql2);

            }

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