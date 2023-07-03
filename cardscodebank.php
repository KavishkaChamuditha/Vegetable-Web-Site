<?php   
function component($veg_id, $veg_name, $veg_price, $availablesta, $available_quntity, $contact, $dateofveg, $shopname, $economiccenter, $picture, $vegtableid, $mailaddress) 
{  
    $element = '
    <div class="col-lg-3 col-mg-4 cardmar">
    <form method="post" enctype="multipart/form-data">
        <div class="card card-prop">
        <input type="hidden" name="mailaddress" value="'. $mailaddress .'">
            <div class="d-flex align-items-center" style="margin-top: 20px; margin-left: -5px;">';
    if ($availablesta == "ON") {
        $element .= '
                <div class="availablestatus"></div>';
    } else {
        $element .= '
                <div class="notavailablestatus"></div>';
    }
    $element .= '
                <h3 class="marginpa fw-bold">'.$shopname.'</h3>
            </div>';

    if (isset($_SESSION['cus_id'])) {
        $element .= '
        <div id="mySidenav" class="sidenav">
            <button type="submit" name="add_cart" id="blog" class="cartstyle"><i class="fa fa-shopping-cart" style="font-size:20px"></i></button>
            <input type="hidden" name="vegetable_id" value="' . $vegtableid . '">
        </div>';
    } else {
        $element .= '
        <div id="mySidenav" class="sidenav">
            <a href="customer_sign_in_1.php"><button type="button" class="cartstyle"><i class="fa fa-shopping-cart" style="font-size:20px"></i></button></a>
        </div>';
    }

    $element .= '
            <img src="sellvegetables/large/'. $picture .'" alt="">
            <p class="marginpa fw-bold">' . $veg_name . '</p>
            <p class="marginpadeta">'.$economiccenter.'</p>
            <p class="marginpadeta" style="margin-top:10px;">Available Quantity: ' . $available_quntity . ' Kg</p>
            <p class="marginpadeta">Price per kg: ' . $veg_price . '.00 Rs</p>
            <p class="marginpadeta">Date: ' . $dateofveg . '</p>
            <p class="marginpadeta">Contact: ' . $contact . '</p>
           
            <a class="btn btn-light text-light btncard" href="check_outcus_1.php?veg_id=' . $veg_id . '">Buy Now</a>
            
        </div>     
    </div>
    </form> ';

    echo $element;
}
?>






<?php 
    function farmercomponnets($buyveg_id, $buyveg_name, $catoA, $catoB, $catoC, $dateofveg, $availablequntity, $needquntity, $vegstatus, $contact, $shopname, $economiccenter, $picture, $mailaddress)
    {
        $element = '
        <div class="col-lg-2 col-mg-3 cardmar">
        <form method="post" enctype="multipart/form-data" >
        <input type="hidden" name="mailaddress" value="'. $mailaddress .'">
        <div class="card card-prop" style="height: 670px; width: 280px;">
            <div class="d-flex align-items-center" style="margin-top: 20px; margin-left: -5px;">';
            if ($vegstatus == "ON") {
                $element .= '
                        <div class="availablestatus"></div>';
            } else {
                $element .= '
                        <div class="notavailablestatus"></div>';
            }
            $element .= ' 

                <h4 class="marginpa fw-bold">'.$shopname.'</h4>
            </div>
            <img src="buyvegetables/large/'. $picture .'" alt="">
            <p class="marginpa fw-bold">' . $buyveg_name . '</p>
            <p class="marginpadeta">'.$economiccenter.'</p>
            <p class="marginpadeta" style="margin-top:10px;">Available Quantity:' . $availablequntity . ' Kg </p>
            <p class="marginpadeta" style="margin-top:-10px;">Need Quantity:' . $needquntity . ' Kg</p>
            <div class="" style="display: flex;">
                <div class="card text-center catogaris">
                    A
                </div>
                <p class="marginpadeta">Price per kg:' . $catoA . '</p>
            </div>
            <div class="" style="display: flex;">
                <div class="card text-center catogaris">
                    B 
                </div>
                <p class="marginpadeta">Price per kg: ' . $catoB . '</p>
            </div>
            <div class="" style="display: flex;">
                <div class="card text-center catogaris">
                    C
                </div>
                <p class="marginpadeta">Price per kg: ' . $catoB . '</p>
            </div>
            <p class="marginpadeta">Date: ' . $dateofveg . '</p>
            <p class="marginpadeta">Contact:' . $contact . '</p>

            <button type="submit" name="checkout" class="btn btn-light text-light btncard" formaction="checkoutfarmer_1.php">Available</button>
            <input type="hidden" name="buyveg_id" value=" ' .$buyveg_id. '">

        </div>
    </div>
    </form>';

    echo $element;
    }

?>

<?php

function cartcard($veg_name, $veg_price, $contact, $dateofveg, $shopname, $economiccenter, $picture, $mailaddress) {
    echo '
        <div class="card rounded-3 mb-4" style="border-radius:40px 0px 40px 0px !important; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
        <div class="card-body p-4">
          <div class="row d-flex justify-content-between align-items-center">
            <div class="col-md-2 col-lg-2 col-xl-2">
              <img
                src="sellvegetables/large/'. $picture .'"
                class="img-fluid rounded-3" alt="" style="width:900px !important;">
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3">
              <p class="lead fw-bold mb-2 text-dark">'.$veg_name.'</p>
              <p class="text-dark"><span>Price per kg: </span> Rs. <span class="veg-price">'. $veg_price.'.00  </span> <br> Dates: </span>'.$dateofveg.'</p>
              <p class="text-dark"><span>Economic Center:</span>'.$economiccenter.' <span> <br>Shop Name: </span>'.$shopname.'</p>
              <p class=""><span">Contact: </span>'.$contact.'</p>
            </div>
            <div class="col-md-3 col-lg-4 col-xl-2 d-flex">

              <button class="btn btn-link px-2"
                onclick="this.parentNode.querySelector(\'input[type=number]\').stepDown()">
                <i class="fas fa-minus"></i>
              </button>

              <input id="form1" min="0" name="quantity" value="1" type="number"
                class="form-control form-control-sm" />

              <button class="btn btn-link px-2"
                onclick="this.parentNode.querySelector(\'input[type=number]\').stepUp()">
                <i class="fas fa-plus"></i>
              </button>
              
                <input type="hidden" value="'.$mailaddress.'">

            </div>
            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">

            <div class="btn btn-danger px-3 remove-btn" style="width:100px; border-radius:30px 0px 30px 0px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">Remove</div>

            </div>
            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
              <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
            </div>
          </div>
        </div>
      </div>';
      
}

?>

<?php
function checkout($veg_name, $veg_price, $shopname, $mailaddress) {
    echo '
        <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
                <h6 class="my-0">' . $veg_name . '</h6>
                <div class="btn btn-danger px-3 remove-btn" style="width:10px; height:10px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M19 13H5v-2h14v2Z"/> </div></svg>
                <small class="text-muted">' . $shopname . '</small>
            </div>
            <span class="text-muted veg-price">' . $veg_price . '</span>
        </li>
    ';
}
?>
 <!-- <div class="btn btncard">Place Order</div> -->