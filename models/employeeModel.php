<?php
include '../models/dbConnection.php';

function emp($name, $email, $address, $phone, $password, $gender)
{

    $conn = connection();

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        $sql = "INSERT INTO emp(full_name, email, phone, password, genger, address) values('$name', '$email', '$phone', '$password', '$gender', '$address')";

        if ($conn->query($sql) === TRUE) {
            $conn->close();
            return 1;
        } else {
            $conn->close();
            return $conn->error;
        }
    }



}
