<?php
include '../models/dbConnection.php';

function user($name, $email, $address, $phone, $password, $gender)
{

    $conn = connection();

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        $sql = "INSERT INTO users(full_name, email, phone, password, genger) values('$name', '$email', '$phone', '$password', '$gender')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            header("Location: login.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }



    $conn->close();
}
