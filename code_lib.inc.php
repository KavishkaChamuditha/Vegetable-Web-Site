<?php
/* image resize function starts here */
function resizeThumbPicture($path, $image_name)	{
  $uploadedfile = $path.$image_name;//actual path of the image


  // Capture the original size of the uploaded image
  list($width,$height,$type) = getimagesize($uploadedfile);


  if(@$width==@$height){
    @$newwidth=150;
    @$newheight=150;
  }
  else if(@$width>@$height){
    //landscape
    @$newwidth=150;
    @$newheight=120;
  }
  else if(@$height>@$width){
    //portrait
    @$newwidth=150;
    @$newheight=150;
  }

  if($type==1)
  {
    $src = imagecreatefromgif(@$uploadedfile);
  }
  else if($type==2)
  {
    $src = imagecreatefromjpeg(@$uploadedfile);
  }
  else if($type==3)
  {
    $src = imagecreatefrompng(@$uploadedfile);
  }


  @$tmp=imagecreatetruecolor(@$newwidth,@$newheight);
  imagecopyresampled($tmp,$src,0,0,0,0,@$newwidth,@$newheight,@$width,@$height);
  @$filename = $path.$image_name;
  imagejpeg($tmp,$filename,100);//100 means full 100% quality
  imagedestroy($src);
  imagedestroy($tmp); // NOTE: PHP will clean up the temp

  }/* image resize function ends   here */

//************ file resize code with PHP end


 //get the picture name from product table via pid
 function getProductPicture($veg_id){
   global $mysqli;
   $sql = "select picture from sellingvegetables where veg_id=$veg_id";
   $rs  = $mysqli->query($sql);
   $row = mysqli_fetch_assoc($rs);
   return $row['picture'];
 }
 
 function getCustomerPicture($cus_id){
  global $mysqli;
  $sql = "select picture from tblcustomer where cus_id='$cus_id'";
  $rs  = $mysqli->query($sql);
  $row = mysqli_fetch_assoc($rs);
  return $row['picture'];
}

function getfarmerPicture($farmer_id){
  global $mysqli;
  $sql = "select farmerimage from farmertable where farmer_id='$farmer_id'";
  $rs  = $mysqli->query($sql);
  $row = mysqli_fetch_assoc($rs);
  return $row['farmerimage'];
}
 
function getsellerPicture($seller_id){
  global $mysqli;
  $sql = "select sellerimage from sellerimage where seller_id='$seller_id'";
  $rs  = $mysqli->query($sql);
  $row = mysqli_fetch_assoc($rs);
  return $row['sellerimage'];
}
 


 ?>
 <!-- password showing script -->
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>