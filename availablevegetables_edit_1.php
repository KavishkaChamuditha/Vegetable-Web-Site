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
    include 'sidebar.php';
    ?>

    <div class="row">
        <div class="container">

            <form class="product-margin" action="availablevegetables_edit_2.php" method="post" enctype="multipart/form-data">

                <h2>Edit products</h2>
                <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-dark">Vegetable Name</label>
                            <input type="text" class="form-control searchbar"name="buyveg_id" id="buyveg_id">
                </div>
                <input type="submit" class=" btn btn-success" name="submit" id="submit" value="Search">
                <input type="reset" class=" btn btn-danger" name="reset" id="reset" value="Cancle">

            </form>
        </div> <!-- end of container -->
    </div> <!-- end of row -->




</body>

</html>