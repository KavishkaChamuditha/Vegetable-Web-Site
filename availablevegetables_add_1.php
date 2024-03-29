<?php 
    session_start();

    // validating the user
  if($_SESSION['seller_id']==''){
    // redirect to invalid log in
    header("location:wholeseller_signin_1.php");
  }

?>

<!doctype html> 
<html lang="en">

<head>
    <title>Sell Products</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/sidebar_style.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    
    <?php 
        require_once('sidebar.php');
    ?>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <div class="card sellproductcard">
                <div class="card-body">
                    <h1 class="text-dark font-weight-bold">Add Products</h1>

                    <form action="availablevegetables_add_2.php" method="post" enctype="multipart/form-data">

                    <input type="hidden" name="mailaddress" value="<?php echo $_SESSION['mailaddress']; ?>">
                    <input type="hidden" name="shopname" value="<?php echo $_SESSION['shopname']; ?>">
                    <input type="hidden" name="economiccenter" value="<?php echo $_SESSION['economiccenter']; ?>">

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-dark">Vegetable Name</label>
                            <input type="text" class="form-control formlabel" name="buyveg_name">
                        </div>

                        <label for="exampleInputEmail1" class="form-label text-dark">Prices</label>
                        <div class="mb-3">
                            <div class="d-inline-flex inlinelbl">
                                <label for="exampleInputEmail1" class="form-label text-dark">A</label>
                                <input type="text" class="form-control formlabelcat inlinelblprt" name="catoA">
                            </div>
                            <br>
                            <div class="d-inline-flex inlinelbl">
                                <label for="exampleInputEmail1" class="form-label text-dark">B</label>
                                <input type="text" class="form-control formlabelcat inlinelblprt" name="catoB">
                            </div>
                            <br>
                            <div class="d-inline-flex inlinelbl">
                                <label for="exampleInputEmail1" class="form-label text-dark">C</label>
                                <input type="text" class="form-control formlabelcat inlinelblprt" name="catoC">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-dark">Available Quantity</label>
                            <input type="number" class="form-control formlabel" name="availablequntity">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-dark">Need Quantity</label>
                            <input type="number" class="form-control formlabel" name="needquntity">
                        </div>

                        <label class="form-check-label" for="flexCheckDefault">
                            Availability
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="availableCheckbox" value="ON"
                                name="vegstatus">
                            <label class="form-check-label" for="availableCheckbox">
                                Available
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="notAvailableCheckbox" value="OFF"
                                name="vegstatus">
                            <label class="form-check-label" for="notAvailableCheckbox">
                                Not Available
                            </label>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-dark">Contact</label>
                            <input type="text" class="form-control formlabel" name="contact">
                        </div>

                        <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker"
                            inline="true">
                            <label for="example">Date</label>
                            <input type="date" id="date" name="dateofveg">
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-dark">Image</label>
                            <input type="file" class="form-control formlabel" name="picture" id="picture">
                        </div>

                        <button class="btnadd marginbtn" type="submit" name="submit" value="ADD NOW">Add
                            Vegetable</button>
                        <button class="btnadd Canclebtn" type="cancel" name="cancel" value="CANCEL">Cancel</button>

                    </form>
                </div>
            </div>
        </div>

        <script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

        <!-- selling and sold -->

        <script>
            $(document).ready(function () {
                $('#availableCheckbox').click(function () {
                    $('#notAvailableCheckbox').prop('checked', !$(this).prop('checked'));
                });

                $('#notAvailableCheckbox').click(function () {
                    $('#availableCheckbox').prop('checked', !$(this).prop('checked'));
                });
            });
        </script>


</body>

</html>