<?php

require("db_connection.php");

// Retrieve the submitted username and password from the login form
$mailaddress = $_POST['mailaddress'];
$sellerpaswrd = $_POST['sellerpaswrd'];

// Check in the 'customers' table
$query = "SELECT * FROM tblwholeseller WHERE mailaddress = '$mailaddress'";
$result = $mysqli->query($query);

if ($result->num_rows === 1) {
    // Retrieve data from the table
    $row = $result->fetch_assoc(); 

    if ($row['sellerpaswrd'] == crypt($sellerpaswrd, $row['sellerpaswrd'])) {
        session_start();
        $_SESSION['mailaddress']    = $mailaddress;
        $_SESSION['sellerpaswrd']   = $row['sellerpaswrd'];
        $_SESSION['seller_id']      = $row['seller_id'];
        $_SESSION['sellername']     = $row['sellername'];
        $_SESSION['shopname']       = $row['shopname'];
        $_SESSION['economiccenter'] = $row['economiccenter'];
        $_SESSION['idnumber']       = $row['idnumber'];
        $_SESSION['sellerimage']    = $row['sellerimage'];
        header('Location: wholesellermain_dashboard.php');
        exit;
    } else {
        // If the username/password are incorrect or don't exist.
        echo "<script>alert('Incorrect Username Or Password. Please Try Again.')</script>";
        echo "<script>window.location='wholeseller_signin_1.php'</script>";
        exit;
    }
} else {
    // If the user doesn't exist.
    echo "<script>alert('User not found. Please Try Again.')</script>";
    echo "<script>window.location='wholeseller_signin_1.php'</script>";
    exit;
}

?>
