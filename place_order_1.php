<?php

    session_start();
    require('cardscodebank.php');
    require('create_db.php');

    $database = new CreateDb("vegetable_website", "sellingvegetables");

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
    crossorigin="anonymous"></script>

</head> 
<body>
<form action="availablevegetables_add_1.php" method="post" enctype="multipart/form-data">
<section class="h-100" style="background-color: #eee;">
  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-10">

        <div class="d-flex justify-content-between align-items-center mb-4">
          <h3 class="fw-normal mb-0 text-black" style="font-size:40px; font-weight:bold !important;">Your Cart</h3>
        </div>

  
        <?php
$total = 0;

if (isset($_SESSION['cart'])) {
    $vegetable_id = array_column($_SESSION['cart'], 'vegetable_id');
    $result = $database->getData();
    while ($row = mysqli_fetch_assoc($result)) {
        foreach ($vegetable_id as $veg_id) {
            if ($row['veg_id'] == $veg_id) {
                cartcard($row['veg_name'], $row['veg_price'], $row['contact'], $row['dateofveg'], $row['shopname'], $row['economiccenter'], $row['picture'], $row['mailaddress']);
                $total = $total + (int)$row['veg_price'];
            }
        }
    }
} else {
    echo "<h5>Cart is Empty</h5>";
}
?>

<div class="card" style="border-radius: 30px 0px 30px 0px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; margin-bottom:90px;">
    <div class="col-md-4 offset-md-1 border-rounded mt-5 bg-green">
        <div class="pt-4">
            <h6 class="fw-bold">PRICE DETAILS</h6>
            <hr>
            <div class="row price-details">
                <div class="col-md-6">
                    <?php
                    if (isset($_SESSION['cart'])) {
                        $count = count($_SESSION['cart']);
                        echo "<h6>Items ($count Items)</h6>";
                    } else {
                        echo "<h6>Price (0 items)</h6>";
                    }
                    ?>
                    <hr>
                    <h6 class="fw-bold">Amount Payable</h6>
                    <div class="col-md-6">
                        <hr>
                        <h6> Rs. <span id="total"><?php echo $total; ?></span></h6>
                        <hr>
                        
                   <a href="place_order_2.php"><div class="btn btn-danger"> Proceed</div></a>   

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</form>

<script>
    // Attach event listeners to all remove buttons
    var removeButtons = document.getElementsByClassName('remove-btn');
    for (var i = 0; i < removeButtons.length; i++) {
        removeButtons[i].addEventListener('click', removeProduct);
    }

    // Function to handle remove button click event
    function removeProduct(event) {
        var card = event.target.closest('.card');
        card.remove();
        var price = parseInt(card.querySelector('.veg-price').textContent);
        var totalElement = document.getElementById('total');
        var total = parseInt(totalElement.textContent);
        total -= price;
        totalElement.textContent = total.toFixed(2);
        // Perform additional logic to update the cart or perform an AJAX request to update the server-side cart data
    }
</script>


</body>
</html>