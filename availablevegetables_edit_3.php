<?php
// connecting to database
  require("db_connection.php");
  require("code_lib.inc.php");
// get products from edit_product_2.php
//  echo "<pre>";
//  print_r($_REQUEST);
//  echo "</pre>";

$buyveg_id          = $_REQUEST ['buyveg_id'];     
$buyveg_name        = $_REQUEST ['buyveg_name'];
$catoA              = $_REQUEST ['catoA'];
$catoB              = $_REQUEST ['catoB'];
$catoC              = $_REQUEST ['catoC'];
$availablequntity   = $_REQUEST ['availablequntity'];
$needquntity        = $_REQUEST ['needquntity'];
$vegstatus          = $_REQUEST ['vegstatus'];
$contact            = $_REQUEST ['contact'];
$dateofveg          = date('Y-m-d', strtotime($_REQUEST['dateofveg']));


// let's build a dynamic sql command
$sql  = "UPDATE buyvegetables SET ";
$sql .= "buyveg_id='$buyveg_id', ";
$sql .= "buyveg_name='$buyveg_name', ";
$sql .= "catoA='$catoA', ";
$sql .= "catoB='$catoB', ";
$sql .= "catoC='$catoC', ";
$sql .= "availablequntity='$availablequntity', ";
$sql .= "needquntity='$needquntity', ";
$sql .= "vegstatus='$vegstatus', ";
$sql .= "contact='$contact', ";
$sql .= "dateofveg='$dateofveg' ";
$sql .= "WHERE buyveg_id=$buyveg_id";

// execute the sql command
$x = $mysqli->query($sql);

  //file upload code starts here
  if($x > 0){
    // echo "successfully updated";

    //file upload code starts here

      if($_FILES['picture']['error']==0 && $_FILES['picture']['type']=="image/jpeg"){
        //we can proceed with the upload

        $old_picture_name = getProductPicture($buyveg_id);

        $filename = $_FILES['picture']['tmp_name'];
        $destination;

        if($old_picture_name=="default.jpg"){
            //generate  a new file name
            $destination = $buyveg_id . "_" . rand().rand().rand().".jpg";
        }
        else{
            $destination = $old_picture_name;
            $destination = $buyveg_id . "_" . rand().rand().rand().".jpg";
        }

        move_uploaded_file($filename,"buyvegetables/large/".$destination);
        //lets update the picture field in product table

        $sql2 = "update buyvegetables set picture='$destination' where buyveg_id=$buyveg_id";
        $mysqli->query($sql2);

      }

    //file upload code ends here 
    //echo "Successfully updated";
       echo"<script>alert('Vegetable Update Successfully')</script>";
       echo"<script>window.location='availablevegetables_add_1.php'</script>";
  }
  else{
     //echo "saving changes failed";
     echo"<script>alert('Vegetable Not Updated Successfully')</script>";
     echo"<script>window.location='availablevegetables_add_1.php'</script>";
  }

 ?>
