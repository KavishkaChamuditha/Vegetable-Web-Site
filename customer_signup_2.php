<?php

require("db_connection.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cus_name = $_POST['cus_name'];
    $mailaddress = $_POST['mailaddress'];
    $cus_password = $_POST['cus_password'];
    $id_num = $_POST['id_num'];

    $query = "SELECT * FROM tblcustomer WHERE mailaddress = '$mailaddress'";
    $result = $mysqli->query($query);

    if ($result->num_rows > 0) {
        // User already exists, redirect to signup page
        echo "<script>alert('User with the same email address already exists. Please try again.')</script>";
        echo "<script>window.location='customer_signup_1.php'</script>";
        exit;
    }

    // Store the form field values to variables
    $cus_name = $_REQUEST['cus_name'];
    $mailaddress = $_REQUEST['mailaddress'];
    $cus_password = $_REQUEST['cus_password'];
    $id_num = $_REQUEST['id_num'];

    // Building a dynamic SQL command
    $sql = "INSERT INTO tblcustomer (cus_name, mailaddress, cus_password, id_num) VALUES ('$cus_name', '$mailaddress', '$cus_password', '$id_num')";

    // Execute the SQL command
    $x = $mysqli->query($sql);

    if ($x > 0) {
        // Upload code starts here
        if ($_FILES['custmerimage']['error'] == 0 && $_FILES['custmerimage']['type'] == "image/jpeg") {
            $last_id = $mysqli->insert_id;
            $filename = $_FILES['custmerimage']['tmp_name'];
            $destination = $last_id . "_" . rand() . rand() . rand() . ".jpg";
            $destination_path = "customer/large/" . $destination;

            if (move_uploaded_file($filename, $destination_path)) {
                // Update the customer table's custmerimage column with the generated file name
                $sql2 = "UPDATE tblcustomer SET custmerimage = '$destination' WHERE cus_id = $last_id";
                $z = $mysqli->query($sql2);
            }
        }

        // Account created successfully
        echo "<script>alert('You have created your account successfully.')</script>";
        echo "<script>window.location='wholeseller_signup_1.php'</script>";
    } else {
        // Failed to create account
        echo "<script>alert('Something went wrong. Please try again.')</script>";
        echo "<script>window.location='wholeseller_signup_1.php'</script>";
    }
}

?>
