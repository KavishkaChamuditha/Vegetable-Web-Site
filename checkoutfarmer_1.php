<?php
session_start();
require('cardscodebank.php');
require('create_db_farmer.php');
require_once('db_connection.php');

$database = new CreatefarmerDb("vegetable_website", "buyvegetables");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>Checkout example for Bootstrap</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

  <style>
    /* Custom styles for this template */
    .needs-validation .error {
      color: red;
    }
  </style>
</head>

<body>

  <?php
  // Check if the buyveg_id is set
  if (isset($_REQUEST['buyveg_id'])) {
    $buyveg_id = $_REQUEST['buyveg_id'];

    $sql = "SELECT * FROM buyvegetables WHERE buyveg_id='$buyveg_id'";
    $rs = $mysqli->query($sql);

    if (mysqli_num_rows($rs) > 0) {
      $row = mysqli_fetch_assoc($rs);
  ?>

      <div class="container">
        <div class="py-5 text-center">
          <img class="d-block mx-auto mb-4" src="images/logodownloads.png" alt="" width="200" height="180">
          <h2>Checkout form</h2>
          <p class="lead">Please complete all the required fields to finalize your purchase.</p>
        </div>

        <div class="row">
          <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
              <span class="fw-bold">Product Detail</span>
              <span class="badge badge-secondary badge-pill">3</span>
            </h4>
            <ul class="list-group mb-3">
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                  <h6 class="my-0 fw-bold">Vegetable name</h6>
                  <span></span>
                </div>
                <span><?php  echo $row['buyveg_name']; ?></span>
              </li>

                <!-- Add the select element -->
                <div class="mb-3">
                <label for="categorySelect">Select Category</label>
                <select class="form-select" id="categorySelect" onchange="updateTotal()">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                </select>
                </div>

                <script>
                // Function to update the total value based on the selected category
                function updateTotal() {
                    var selectElement = document.getElementById("categorySelect");
                    var totalElement = document.getElementById("totalValue");

                    // Get the selected category value
                    var selectedCategory = selectElement.value;

                    // Update the total value based on the selected category
                    if (selectedCategory === "A") {
                    totalElement.textContent = "<?php echo $row['catoA']; ?>";
                    } else if (selectedCategory === "B") {
                    totalElement.textContent = "<?php echo $row['catoB']; ?>";
                    } else if (selectedCategory === "C") {
                    totalElement.textContent = "<?php echo $row['catoC']; ?>";
                    }
                }
                </script>
<li class="list-group-item d-flex justify-content-between lh-condensed">
  <div>
    <h6 class="my-0 fw-bold">Total</h6>
  </div>
  <span id="totalValue"></span>
</li>

<li class="list-group-item d-flex justify-content-between lh-condensed">
  <div>
    <h6 class="my-0 fw-bold">Add Quantity in Kg</h6>
  </div>
  <span><input type="number" id="quantityInput" oninput="updateTotal()" /></span>
</li>

<li class="list-group-item d-flex justify-content-between lh-condensed">
  <div>
    <h6 class="my-0 fw-bold">Full Total</h6>
  </div>
  <span id="fullTotalValue"></span>
</li>


          </div>
          <div class="col-md-8 order-md-1">
            <form class="needs-validation" novalidate>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="firstName">First name</label>
                  <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="lastName">Last name</label>
                  <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>
              </div>

              <div class="mb-3">
                <label for="email">Email <span class="text-muted">(Optional)</span></label>
                <input type="email" class="form-control" id="email" placeholder="you@example.com">
                <div class="invalid-feedback">
                  Please enter a valid email address for shipping updates.
                </div>
              </div>

              <div class="mb-3">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                <div class="invalid-feedback">
                  Please enter your shipping address.
                </div>
              </div>

              <div class="row">
                <div class="col-md-5 mb-3">
                  <label for="country">Country</label>
                  <select class="custom-select d-block w-100" id="country" required>
                    <option value="">Choose...</option>
                    <option>United States</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid country.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="state">State</label>
                  <select class="custom-select d-block w-100" id="state" required>
                    <option value="">Choose...</option>
                    <option>California</option>
                  </select>
                  <div class="invalid-feedback">
                    Please provide a valid state.
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <label for="zip">Zip</label>
                  <input type="text" class="form-control" id="zip" placeholder="" required>
                  <div class="invalid-feedback">
                    Zip code required.
                  </div>
                </div>
              </div>
              
            <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                <h6 class="my-0 fw-bold">A</h6>
                </div>
                <span><?php echo $row['catoA']; ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                <h6 class="my-0 fw-bold">B</h6>
                </div>
                <span><?php echo $row['catoB']; ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                <h6 class="my-0 fw-bold">C</h6>
                </div>
                <span><?php echo $row['catoC']; ?></span>
            </li>
            </ul>
            <img style="width:400px;" src="buyvegetables/large/<?php echo $row['picture']; ?>" alt="">
              <hr class="mb-4">
              <button class="btn btn-md btn-block text-light" type="submit" style="background-color:green; border-radius:20px 0px 20px 0px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">Continue to checkout</button>
            </form>
          </div>
        </div>

        <footer class="my-5 pt-5 text-muted text-center text-small">
          <p class="mb-1">&copy; 2023 Company Name</p>
        </footer>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
      <script>
        // Disable form submissions if there are invalid fields
        (function() {
          'use strict';
          window.addEventListener('load', function() {
            // Get the forms we want to add validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
      </script>

  <?php
    } else {
      echo "No product found with the provided ID.";
    }
  } else {
    echo "Invalid request.";
  }
  ?>

</body>

</html>
