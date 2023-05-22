<?php   
function component($veg_id, $veg_name, $veg_price, $availability, $available_quntity, $contact, $dateofveg, $picture)
{
    $element =
    '<div class="col-lg-3 col-mg-4 cardmar">
        <div class="card card-prop">
            <h2 class="marginpa">Raslan Products</h2>
            <img src="sellvegetables/large/'. $picture .'" alt="">
            <p class="marginpa">' . $veg_name . '</p>
            <p class="marginpa">' . $available_quntity . '</p>
            <p class="marginpa">Price per kg: ' . $veg_price . '</p>
            <p class="marginpa">Date: ' . $dateofveg . '</p>
            <p class="marginpa">Contact: ' . $contact . '</p>
            <div class="btn searchbtn">Search</div>
        </div>
    </div>';

    echo $element;
}
?>
