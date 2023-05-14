<?php
// connecting to database
  require("db_connection.php");
  require("code_lib.inc.php");
// get products from edit_product_2.php
//  echo "<pre>";
//  print_r($_REQUEST);
//  echo "</pre>";

$buyveg_id           = $_REQUEST ['buyveg_id'];     
$veg_name            = $_REQUEST ['veg_name'];
$veg_price           = $_REQUEST ['veg_price'];
$available_quntity   = $_REQUEST ['available_quntity'];
$availability        = $_REQUEST ['availability'];
$contact             = $_REQUEST ['contact'];
$dateofveg           = date('Y-m-d', strtotime($_REQUEST['dateofveg']));

// let's build a dynamic sql command
$sql = "UPDATE sellingvegetables SET ";
$sql .= "veg_name='$veg_name', ";
$sql .= "veg_price='$veg_price', ";
$sql .= "available_quntity='$available_quntity', ";
$sql .= "availability='$availability', ";
$sql .= "contact='$contact', ";
$sql .= "dateofveg='$dateofveg' ";
$sql .= "WHERE veg_id=$veg_id";


// execute the sql command
$x = $mysqli->query($sql);

  //file upload code starts here
  if($x > 0){
    // echo "successfully updated";

    //file upload code starts here

      if($_FILES['picture']['error']==0 && $_FILES['picture']['type']=="image/jpeg"){
        //we can proceed with the upload

        $old_picture_name = getProductPicture($veg_id);

        $filename = $_FILES['picture']['tmp_name'];
        $destination;

        if($old_picture_name=="default.jpg"){
            //generate  a new file name
            $destination = $veg_id . "_" . rand().rand().rand().".jpg";
        }
        else{
           $destination = $old_picture_name;
           $destination = $veg_id . "_" . rand().rand().rand().".jpg";
        }

        move_uploaded_file($filename,"sellvegetables/large/".$destination);
        //lets update the picture field in product table

        $sql2 = "update sellingvegetables set picture='$destination' where veg_id=$veg_id";
        $mysqli->query($sql2);

      }

    //file upload code ends here 
    //echo "Successfully updated";
    header("location:sellvegetables_edit_4.php?status=pass");
  }
  else{
     //echo "saving changes failed";
    header("location:sellvegetables_edit_4.php?status=fail");
  }






 ?>
