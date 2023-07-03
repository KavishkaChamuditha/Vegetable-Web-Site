<?php

require("db_connection.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sellername     = $_POST['sellername'];
    $mailaddress    = $_POST['mailaddress'];
    $sellerpaswrd   = crypt( $_POST['sellerpaswrd'],"x07h");
    $shopname       = $_POST['shopname'];
    $economiccenter = $_POST['economiccenter'];
    $idnumber       = $_POST['idnumber'];

    // Check if the user already exists
    $query = "SELECT * FROM tblwholeseller WHERE mailaddress = '$mailaddress'";
    $result = $mysqli->query($query);

    if ($result->num_rows > 0) {
        // User already exists, redirect to signup page
        echo "<script>alert('User with the same email address already exists. Please try again.')</script>";
        echo "<script>window.location='wholeseller_signup_1.php'</script>";
        exit;
    } 

    // Building the SQL command to insert the user details
    $sql = "INSERT INTO tblwholeseller (sellername, mailaddress, sellerpaswrd, shopname, economiccenter, idnumber) VALUES (";
    $sql .= "'$sellername',";
    $sql .= "'$mailaddress',";
    $sql .= "'$sellerpaswrd',";
    $sql .= "'$shopname',";
    $sql .= "'$economiccenter',"; 
    $sql .= "'$idnumber'";
    $sql .= ")";

    // Execute the SQL command
    $result = $mysqli->query($sql);

    if ($result) {
        // Upload the seller image if provided
        if ($_FILES['sellerimage']['error'] == 0 && $_FILES['sellerimage']['type'] == "image/jpeg") {
            $last_id = $mysqli->insert_id;
            $filename = $_FILES['sellerimage']['tmp_name'];
            $destination = $last_id . "_" . rand() . rand() . rand() . ".jpg";

            $success = move_uploaded_file($filename, "wholseller/large/" . $destination);

            if ($success) {
                // Update the seller image in the database
                $sql2 = "UPDATE tblwholeseller SET sellerimage = '$destination' WHERE  seller_id= $last_id";
                $result2 = $mysqli->query($sql2);
            }
        }

        // Account created successfully
         echo "<script>alert('You have created your account successfully.')</script>";
         echo "<script>window.location='wholeseller_signup_1.php'</script>";
       
    } else {
        // Error occurred while inserting the user details
         echo "<script>alert('Something went wrong. Please try again.')</script>";
         echo "<script>window.location='wholeseller_signup_1.php'</script>";
      
    }
}
?>

 ?>