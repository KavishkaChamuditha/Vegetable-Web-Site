<?php
  // connecting the database
  require("db_connection.php");

  $veg_id = $_REQUEST['veg_id'];

  // lets build a dynamic sql command to delete the record permanatly

  $sql = "DELETE FROM sellingvegetables where veg_id=$veg_id";

  // excecute the sql command
  $x = $mysqli->query($sql);

  if ($x > 0) {

    if($old_picture_name != "default.jpg"){
      unlink("sellvegetables/large/$old_picture_name");
    }
    //echo "succefully delete";
    header("location:sellvegetables_delete_4.php?status=pass");
  }else {
     //echo "succefully not delete";
    header("location:sellvegetables_delete_4.php?status=fail");
  }

 ?>
