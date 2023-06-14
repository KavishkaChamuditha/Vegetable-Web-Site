<?php

require("db_connection.php");

// Retrieve the submitted username and password from the login form
$mailaddress = $_POST['mailaddress'];
$cus_password = $_POST['cus_password'];


// Check in the 'customers' table
$query = "SELECT * FROM tblcustomer WHERE mailaddress = '$mailaddress' AND cus_password = '$cus_password'";
$result = $mysqli->query($query);

if ($result->num_rows === 1) {

        $row = $result->fetch_assoc();

        session_start();
        $_SESSION['mailaddress']  = $mailaddress;
        $_SESSION['role']         = 'customer';
        $_SESSION['cus_id']       = $row['cus_id'];
        $_SESSION['cus_name']     = $row['cus_name'];
        $_SESSION['custmerimage'] = $row['custmerimage'];
        header('Location: sellvegetablescus.php');
        // Add more session variables for other details you want to store
// } else {
//     // Check in the 'buyers' table
//     $query = "SELECT * FROM buyers WHERE username = '$username' AND password = '$password'";
//     $result = $conn->query($query);

//     if ($result->num_rows === 1) {
//         // Username and password are correct for a buyer
//         session_start();
//         $_SESSION['username'] = $username;
//         $_SESSION['role'] = 'buyer';
//         header('Location: buyer-page.php');
//     } else {
//         // Check in the 'sellers' table
//         $query = "SELECT * FROM sellers WHERE username = '$username' AND password = '$password'";
//         $result = $conn->query($query);

//         if ($result->num_rows === 1) {
//             // Username and password are correct for a seller
//             session_start();
//             $_SESSION['username'] = $username;
//             $_SESSION['role'] = 'seller';
//             header('Location: seller-page.php');
//         } else {
//             // Invalid username or password
//             header('Location: login.php?error=invalid_credentials');
//         }
//     }
}


?>