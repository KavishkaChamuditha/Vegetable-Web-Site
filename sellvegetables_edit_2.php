<?php
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/styles.css">

</head>
<body>


<?php 
    require("db_connection.php");
    require_once('sidebar.php');
?>


<?php 
 if (isset($_GET['veg_id'])) {
    $veg_id = $_GET['veg_id'];

    // Fetch the record based on the buyveg_id
    $sql = "SELECT * FROM sellingvegetables WHERE veg_id = '$veg_id'";
    $result = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        $veg_name          = $row['veg_name'];
        $veg_price         = $row['veg_price'];
        $availablesta      = $row['availablesta'];
        $available_quntity = $row['available_quntity'];
        $contact           = $row['contact'];
        $dateofveg         = $row['dateofveg'];
        $picture           = $row['picture'];
?>

<div id="content" class="p-4 p-md-5 pt-5">
    <div class="card sellproductcard">
        <div class="card-body ">
            <h1 class="text-dark font-weight-bold">Edit Vegetable</h1>

            <form action="sellvegetables_edit_3.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="veg_id" value="<?php echo $row ['veg_id']; ?>">
                <div class="form-group">
                    <label for="veg_name" class="form-label text-dark">Vegetable Name</label>
                    <input type="text" class="form-control searchbar" name="veg_name" id="veg_name" value="<?php echo $veg_name; ?>">
                </div>

                <div class="form-group">
                    <label for="veg_price" class="form-label text-dark">Vegetable Price</label>
                    <input type="text" class="form-control searchbar" name="veg_price" id="veg_price" value="<?php echo $veg_price; ?>">
                </div>

                <label class="form-check-label" for="flexCheckDefault">
                    Availability
                </label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="myCheckbox" value="ON" name="availablesta" <?php if($availablesta == 'on') echo 'checked'; ?>>
                    <label class="form-check-label" for="myCheckbox">
                    Available
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="myCheckbox" value="OFF" name="availablesta" <?php if($availablesta == 'OFF') echo 'checked'; ?>>
                    <label class="form-check-label" for="myCheckbox">
                    Not Available
                    </label>
                </div>
                
                <div class="form-group">
                    <label for="available_quantity" class="form-label text-dark">Available Quantity</label>
                    <input type="text" class="form-control searchbar" name="available_quntity" id="available_quntity" value="<?php echo $available_quntity; ?>">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label text-dark">Contact</label>
                    <input type="text" class="form-control formlabel" name="contact" value="<?php echo $contact; ?>">
                </div>

                <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker"inline="true">
                    <label for="example">Date</label>
                    <input type="text" id="dateofveg" name="dateofveg" value ="<?php echo $dateofveg; ?>">
                </div>

                <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker"inline="true">
                    <label for="example">Add new Date</label>
                    <input type="date" id="dateofveg" name="dateofveg">
                </div>

                <div class="form-group">
                    <label for="picture" class="form-label text-dark">Image</label>
                    <input type="file" class="form-control formlabel" name="picture" id="picture">
                    <img src="sellvegetables/large/<?php echo $picture;?>" style="width:400px; margin-top:30px;">
                </div>

                <input type="submit" class="btn btn-danger"  name="submit" id="submit" value="Confirm Delete">
                <input type="reset"  class="btn btn-warning" name="reset"  id="reset" value="Clear">

            </form>
        </div>
    </div>
</div>
    <?php
    }else {
        ?>
        <br>
        <br>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <h2>NO Records found</h2>
          <strong>Sorry</strong> No record found. Pleas try again.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <br />
          <a href="edit_product_1.php" class="btn btn-danger my-3">Try again</a>
        </div>
        <?php
    }
}
?>

    <script>
        // Get the date input field
        var dateInput = document.getElementById("dateofveg");

        // Get the value of the date input field
        var dateValue = dateInput.value;

        // Set the value of the calendar input field to the date input field's value
        var calendarInput = document.getElementById("calendar");
        calendarInput.value = dateValue;

    </script>

    
<script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>