<?php

require("db_connection.php");

// Retrieve the submitted username and password from the login form
$farmailaddress = $_POST['farmailaddress'];
$farpassword    = $_POST['farpassword'];

 //   echo "<pre>";
//   print_r($_REQUEST);
//   echo "</pre>";
// Check in the 'customers' table
$query = "SELECT * FROM farmertable WHERE farmailaddress = '$farmailaddress' AND farpassword = '$farpassword'";
$result = $mysqli->query($query);

if ($result->num_rows === 1) {
    // Retrieve data from the table
    $row = $result->fetch_assoc();

    session_start();
    $_SESSION['farmailaddress'] = $farmailaddress;
    $_SESSION['farpassword'] = $row['farpassword'];
    $_SESSION['farmer_id'] = $row['farmer_id'];
    $_SESSION['farmername'] = $row['farmername'];
    $_SESSION['farmerimage'] = $row['farmerimage'];
    $_SESSION['farmeridnumber'] = $row['farmeridnumber'];
    header('Location: buyvegetablesfrmfarmrs.php');
    exit;
} else {
    // If the username/password are incorrect or don't exist.
    echo "<script>alert('Incorrect Username Or Password. Please Try Again.')</script>";
    echo "<script>window.location='farmer_login_1.php'</script>";
    exit;
}
?>
