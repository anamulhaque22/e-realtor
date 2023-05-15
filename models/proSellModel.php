<?php
include '../models/dbConnection.php';

function proSell($title, $price, $bed, $wash, $type, $area, $location)
{

    $conn = connection();

    session_start();
    $email = $_SESSION['email'];

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        $sql = "INSERT INTO property(title, price, bed, wash, type, area, address, email) values('$title', '$price', '$bed', '$wash', '$type', '$area', '$location', '$email')";

        if ($conn->query($sql) === TRUE) {
            $conn->close();
            return 1;
        } else {
            $conn->close();
            return $conn->error;
        }
    }



}
