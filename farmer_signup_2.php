<?php

require("db_connection.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $farmername      = $_POST['farmername'];
    $farmailaddress  = $_POST['farmailaddress'];
    $farpassword     = $_POST['farpassword'];
    $farmeridnumber  = $_POST['farmeridnumber'];

    // Check if the user already exists
    $query = "SELECT * FROM farmertable WHERE farmailaddress = '$farmailaddress'";
    $result = $mysqli->query($query);

    if ($result->num_rows > 0) {
        // User already exists, redirect to signup page
        echo "<script>alert('User with the same email address already exists. Please try again.')</script>";
        echo "<script>window.location='wholeseller_signup_1.php'</script>";
        exit;
    }

    // Building the SQL command to insert the user details
    $sql = "INSERT INTO farmertable (farmername, farmailaddress, farpassword, farmeridnumber) VALUES (";
    $sql .= "'$farmername',";
    $sql .= "'$farmailaddress',";
    $sql .= "'$farpassword',";
    $sql .= "'$farmeridnumber'";
    $sql .= ")";

    // Execute the SQL command
    $result = $mysqli->query($sql);

    if ($result) {
        // Upload the seller image if provided
        if ($_FILES['farmerimage']['error'] == 0 && $_FILES['farmerimage']['type'] == "image/jpeg") {
            $last_id = $mysqli->insert_id;
            $filename = $_FILES['farmerimage']['tmp_name'];
            $destination = $last_id . "_" . rand() . rand() . rand() . ".jpg";

            $success = move_uploaded_file($filename, "farmer/large/" . $destination);

            if ($success) {
                // Update the seller image in the database
                $sql2 = "UPDATE farmertable SET farmerimage = '$destination' WHERE  farmer_id= $last_id";
                $result2 = $mysqli->query($sql2);
            }
        }

        // Account created successfully
         echo "<script>alert('You have created your account successfully.')</script>";
         echo "<script>window.location='farmer_signup_1.php'</script>";
       
    } else {
        // Error occurred while inserting the user details
         echo "<script>alert('Something went wrong. Please try again.')</script>";
         echo "<script>window.location='wfarmer_signup_1.php'</script>";
      
    }
}
?>

 ?>