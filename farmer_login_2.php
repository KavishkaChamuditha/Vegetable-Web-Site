<?php
 
require("db_connection.php");

// Retrieve the submitted username and password from the login form
$farmailaddress = $_POST['farmailaddress'];
$farpassword = $_POST['farpassword'];

// Check in the 'farmertable' table
$query = "SELECT * FROM farmertable WHERE farmailaddress = '$farmailaddress'";
$result = $mysqli->query($query);

if ($result->num_rows === 1) {
    // Retrieve data from the table
    $row = $result->fetch_assoc();

    if ($row['farpassword'] == crypt($farpassword, $row['farpassword'])) {
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
        // If the username/password is incorrect
        echo "<script>alert('Incorrect Username or Password. Please try again.')</script>";
        echo "<script>window.location='farmer_login_1.php'</script>";
        exit;
    }
} else {
    // If the user doesn't exist
    echo "<script>alert('User not found. Please try again.')</script>";
    echo "<script>window.location='farmer_login_1.php'</script>";
    exit;
}

?>
