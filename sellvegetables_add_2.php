<?php
  // require("validate_user.php");
  //adding a new record to the table product in the db_ad4850 database

  //1st lets connect to the database server

require("db_connection.php");
require("code_lib.inc.php");

  //get the values from the form (add_product_1.php) and display
  /*echo "<pre>";
  print_r($_REQUEST);
  echo "</pre>";*/

// echo "<pre>";
//   print_r($_FILES);
// echo "</pre>";
  //store the form field values to variables
$veg_name            = $_REQUEST ['veg_name'];
$veg_price           = $_REQUEST ['veg_price'];
$Available_quntity   = $_REQUEST ['Available_quntity'];
$contact             = $_REQUEST ['contact'];
$date                = $_REQUEST ['date'];

  //building a dynamic sql comman
  
     $sql  = "insert into sellingvegetables (veg_name,veg_price,Available_quntity,contact,date) values(";
     $sql .= "'$veg_name',";
     $sql .= "'$veg_price',";
     $sql .= "'$Available_quntity',";
     $sql .= "'$contact',";
     $sql .= "$date)";
    
    //lets display the sql command
    //echo $sql;

    //lets execute the sql command
    $x = $mysqli->query($sql);

    if($x>0){
      //echo "record successfully added";
      //upload code start here
        if(($_FILES['image']['error'] == 0) && ($_FILES['image']['type']=="image/jpeg")) {
            echo "error not found";

          // //can  upload
           $last_id     = $mysqli->insert_id;
           $filename    = $_FILES['image']['tmp_name'];
           $destination = $last_id . "_".rand().rand().rand().".jpg";
          //
           $y = move_uploaded_file($filename,"sellveg/sellvegetable/large/".$destination);
          //
           if($y>0){
           //lets update the product table's picture column with the generated file name
            $sql2 = "update sellingvegetables set image='$destination' where veg_id=$veg_id";
            //execute the sql command
            $z = $mysqli->query($sql2);
            //lets copy the image to thumb folder then resize it to a smaller size

            copy("sellveg/vegetable/large/".$destination,"sellveg/vegetable/thumbs/".$destination);

            // //lets resize it
          resizeThumbPicture("sellveg/vegetable/thumbs/",$destination);

            }

      //upload code ends here
       header("location:add_product_3.php?status=pass");
     }
   else{
       //echo "adding new record failed";
   header("location:add_product_3.php?status=fail");

}
  }

 ?>