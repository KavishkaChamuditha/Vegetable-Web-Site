<?php

require("db_connection.php");

// Retrieve the submitted username and password from the login form
$mailaddress = $_POST['mailaddress'];
$cus_password = $_POST['cus_password'];


// Check in the 'customers' table
$query = "SELECT * FROM tblcustomer WHERE mailaddress = '$mailaddress' AND cus_password = '$cus_password'";
$result = $mysqli->query($query);

if ($result->num_rows === 1) {
        //retrive data in the table 
        $row = $result->fetch_assoc();

        session_start();
        $_SESSION['mailaddress']  = $mailaddress;
        $_SESSION['role']         = 'customer';
        $_SESSION['cus_id']       = $row['cus_id'];
        $_SESSION['cus_password'] = $row['cus_password'];
        $_SESSION['cus_name']     = $row['cus_name'];
        $_SESSION['id_num']       = $row['id_num'];
        $_SESSION['custmerimage'] = $row['custmerimage'];
        header('Location: sellvegetablescus.php');
        // Add more session variables for other details you want to store
}
else {
        // If the username/password are incorrect or don't exist.
        echo "<script>alert('Incorrect Username Or Password Please Try Again...')</script>";
        echo "<script>window.location='customer_sign_in_1.php'</script>";
        
}
?>