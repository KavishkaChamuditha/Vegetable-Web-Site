<?php   
function component($veg_id, $veg_name, $veg_price, $availablesta, $available_quntity, $contact, $dateofveg, $shopname, $economiccenter, $picture, $vegtableid)
{ 
    $element = '
  
    <div class="col-lg-3 col-mg-4 cardmar">
    <form method="post" enctype="multipart/form-data" >
        <div class="card card-prop">
       
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
            </div>

        <div id="mySidenav" class="sidenav">
            <button type="submit" name="add_cart" id="blog" class="cartstyle"><i class="fa fa-shopping-cart"
                    style="font-size:20px"></i> </button>
            <input type="hidden" name="vegetable_id" value="' . $vegtableid . '">
        </div>

            <img src="sellvegetables/large/'. $picture .'" alt="">
            <p class="marginpa fw-bold">' . $veg_name . '</p>
            <p class="marginpadeta">'.$economiccenter.'</p>
            <p class="marginpadeta" style="margin-top:10px;">Available Quantity: ' . $available_quntity . ' Kg</p>
            <p class="marginpadeta">Price per kg: ' . $veg_price . '.00 Rs</p>
            <p class="marginpadeta">Date: ' . $dateofveg . '</p>
            <p class="marginpadeta">Contact: ' . $contact . '</p>
            <div class="btn btncard">Place Order</div>
        </div>
      
    </div>
    </form> ';

    echo $element;
}
?>



<?php 
    function farmercomponnets($buyveg_id, $buyveg_name, $catoA, $catoB, $catoC, $dateofveg, $availablequntity, $needquntity, $vegstatus, $contact, $shopname, $economiccenter, $picture)
    {
        $element = '
        <div class="col-lg-2 col-mg-3 cardmar">
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
            <div class="btn btncard">Place Order</div>
        </div>
    </div>';

    echo $element;
    }

?>