<?php   
function component($veg_id, $veg_name, $veg_price, $availablesta, $available_quntity, $contact, $dateofveg, $picture)
{
    $element = '
    <div class="col-lg-2 col-mg-3 cardmar">
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
                <h3 class="marginpa fw-bold">Raslan Products</h3>
            </div>
         
            <img src="sellvegetables/large/'. $picture .'" alt="">
            <p class="marginpa fw-bold">' . $veg_name . '</p>
            <p class="marginpadeta">Dambulla Economic Center</p>
            <p class="marginpadeta"style="margin-top:10px;">Available Quantity: ' . $available_quntity . ' Kg</p>
            <p class="marginpadeta">Price per kg: ' . $veg_price . '.00 Rs</p>
            <p class="marginpadeta">Date: ' . $dateofveg . '</p>
            <p class="marginpadeta">Contact: ' . $contact . '</p>
            <div class="btn btncard">Place Order</div>
        </div>
    </div>';

    echo $element;
}
?>

<?php 
    function farmercomponnets($buyveg_id, $buyveg_name, $catoA, $catoB, $catoC, $dateofveg, $availablequntity, $needquntity, $vegstatus, $contact, $picture)
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

                <h3 class="marginpa fw-bold">Raslan Products</h3>
            </div>
            <img src="buyvegetables/large/'. $picture .'" alt="">
            <p class="marginpa fw-bold">' . $buyveg_name . '</p>
            <p class="marginpadeta">Dambulla Economic Center</p>
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