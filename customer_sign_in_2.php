<?php

require("db_connection.php");

// Retrieve the submitted username and password from the login form
$mailaddress = $_POST['mailaddress'];
$cus_password = $_POST['cus_password'];

// Check in the 'tblcustomer' table
$query = "SELECT * FROM tblcustomer WHERE mailaddress = '$mailaddress'";
$result = $mysqli->query($query);

if ($result->num_rows === 1) {
    // Retrieve data from the table
    $row = $result->fetch_assoc();

    if ($row['cus_password'] == crypt($cus_password, $row['cus_password'])) {
        session_start();
        $_SESSION['mailaddress'] = $mailaddress;
        $_SESSION['role'] = 'customer';
        $_SESSION['cus_id'] = $row['cus_id'];
        $_SESSION['cus_password'] = $row['cus_password'];
        $_SESSION['cus_name'] = $row['cus_name'];
        $_SESSION['id_num'] = $row['id_num'];
        $_SESSION['custmerimage'] = $row['custmerimage'];
        header('Location: sellvegetablescus.php');
        exit;
    } else {
        // If the username/password are incorrect
        echo "<script>alert('Incorrect Username Or Password. Please Try Again.')</script>";
        echo "<script>window.location='customer_sign_in_1.php'</script>";
        exit;
    }
} else {
    // If the user doesn't exist
    echo "<script>alert('User not found. Please Try Again.')</script>";
    echo "<script>window.location='customer_sign_in_1.php'</script>";
    exit;
}

?>
