<?php   
function component($veg_id, $veg_name, $veg_price, $availablesta, $available_quntity, $contact, $dateofveg, $picture)
{
    $element = '
    <div class="col-lg-3 col-mg-4 cardmar">
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
            <p class="marginpa fw-bold">Dambulla Economic Center</p>
            <p class="marginpa fw-bold">' . $veg_name . '</p>
            <p class="marginpa">' . $available_quntity . '</p>
            <p class="marginpa">Price per kg: ' . $veg_price . '</p>
            <p class="marginpa">Available: ' . $availablesta . '</p>
            <p class="marginpa">Date: ' . $dateofveg . '</p>
            <p class="marginpa">Contact: ' . $contact . '</p>
            <div class="btn btncard">Order Now</div>
        </div>
    </div>';

    echo $element;
}
?>
