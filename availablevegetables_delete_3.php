<?php
  // connecting the database
  require("db_connection.php");

  $buyveg_id = $_REQUEST['buyveg_id'];

  // lets build a dynamic sql command to delete the record permanatly

  $sql = "DELETE FROM buyvegetables where buyveg_id=$buyveg_id";

  // excecute the sql command
  $x = $mysqli->query($sql);

  if ($x > 0) {

    if($old_picture_name != "default.jpg"){
      unlink("sellvegetables/large/$old_picture_name");
    }
    //echo "succefully delete";
    echo"<script>alert('Vegetable Delete Successfully Done')</script>";
    echo"<script>window.location='availablevegetables_delete_1.php'</script>";
  }else {
     //echo "succefully not delete";
     echo"<script>alert('Vegetable Delete Not Successful')</script>";
     echo"<script>window.location='availablevegetables_delete_1.php'</script>";
  }

 ?>
