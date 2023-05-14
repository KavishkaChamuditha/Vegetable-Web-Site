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
    include 'sidebar.php';
?>

<?php 
    if(isset($_POST['submit'])){
        $buyveg_id = $_POST['buyveg_id'];
        $sql = "SELECT * FROM `buyvegetables` WHERE `buyveg_id` = '$buyveg_id'";
        $result = mysqli_query($mysqli, $sql);
        $row = mysqli_fetch_assoc($result);
        if ($row) {
            $buyveg_name        = $row['buyveg_name'];
            $catoA              = $row['catoA'];
            $catoB              = $row['catoB'];
            $catoC              = $row['catoC'];
            $dateofveg          = $row['dateofveg'];
            $availablequntity   = $row['availablequntity'];
            $needquntity        = $row['needquntity'];
            $vegstatus          = $row['vegstatus'];
            $contact            = $row['contact'];
            $picture            = $row['picture'];
?>

<div id="content" class="p-4 p-md-5 pt-5">
    <div class="card btncard sellproductcard">
        <div class="card-body ">
            <h1 class="text-dark font-weight-bold">Edit Vegetable</h1>

            <form action="availablevegetables_edit_3.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="buyveg_id" value="<?php echo $row ['buyveg_id']; ?>">
             
            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-dark">Vegetable Name</label>
                            <input type="text" class="form-control formlabel" name="buyveg_name" value="<?php echo $row ['buyveg_name']; ?>" >
                        </div>

                        <label for="exampleInputEmail1" class="form-label text-dark">Prices</label>
                        <div class="mb-3">
                            <div class="d-inline-flex inlinelbl">
                                <label for="exampleInputEmail1" class="form-label text-dark">A</label>
                                <input type="text" class="form-control formlabel inlinelblprt" name="catoA" value="<?php echo $row ['buyveg_name']; ?>">
                            </div>
                            <br>
                            <div class="d-inline-flex inlinelbl">
                                <label for="exampleInputEmail1" class="form-label text-dark">B</label>
                                <input type="text" class="form-control formlabel inlinelblprt" name="catoB" value="<?php echo $row ['catoB']; ?>">
                            </div>
                            <br>
                            <div class="d-inline-flex inlinelbl">
                                <label for="exampleInputEmail1" class="form-label text-dark">C</label>
                                <input type="text" class="form-control formlabel inlinelblprt" name="catoC" value="<?php echo $row ['catoC']; ?>">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-dark">Available Quantity</label>
                            <input type="number" class="form-control formlabel" name="availablequntity" value="<?php if($availability == 'OFF') echo 'checked'; ?>">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-dark">Need Quantity</label>
                            <input type="number" class="form-control formlabel" name="needquntity" value="<?php echo $row ['needquntity']; ?>">
                        </div>

                        <label class="form-check-label" for="flexCheckDefault">
                    Availability
                </label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="availableCheckbox" value="ON" name="vegstatus" <?php if($vegstatus == 'ON') echo 'checked'; ?>>
                    <label class="form-check-label" for="myCheckbox">
                    Available
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="notAvailableCheckbox" value="OFF" name="vegstatus" <?php if($vegstatus == 'OFF') echo 'checked'; ?>>
                    <label class="form-check-label" for="myCheckbox">
                    Not Available
                    </label>
                </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-dark">Contact</label>
                            <input type="text" class="form-control formlabel" name="contact" value="<?php echo $row ['contact']; ?>"> 
                        </div>

                        <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
                            <label for="example">Date</label>
                            <input type="date" id="date" name="dateofveg" value="<?php echo $row ['contact']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="picture" class="form-label text-dark">Image</label>
                            <input type="file" class="form-control formlabel" name="picture" id="picture">
                            <img src="buyvegetables/large/<?php echo $picture;?>" style="width:400px; margin-top:30px;">
                        </div>

                        <button class="btnadd marginbtn" type="submit" name="submit" value="ADD NOW">Add
                            Vegetable</button>
                        <button class="btnadd Canclebtn" type="cancel" name="cancel" value="CANCEL">Cancel</button>

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

        <script>
            $(document).ready(function() {
                $('#availableCheckbox').click(function() {
                $('#notAvailableCheckbox').prop('checked', !$(this).prop('checked'));
                });

                $('#notAvailableCheckbox').click(function() {
                $('#availableCheckbox').prop('checked', !$(this).prop('checked'));
                });
            });
        </script> 
    
    </body>
</html>