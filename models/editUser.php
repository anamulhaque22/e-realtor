<?php
include '../models/dbConnection.php';


    $conn = connection();

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        session_start();
    $email = $_SESSION['email'];

    $name = $_POST['name'];
    $phone = $_POST['phone'];
     $password = $_POST['password'];
     $gender = $_POST['gender'];
     $address = $_POST['address'];

        $sql = "UPDATE users SET full_name = '$name', phone ='$phone', password = '$password', genger = '$gender', address = '$address' WHERE email = '$email'";

        if ($conn->query($sql) === TRUE) {
            $conn->close();
            echo "Updated successfully.";
        } else {
            $conn->close();
            echo "Update Failed!";
        }
    }
?>