<?php
include '../models/dbConnection.php';

function validUser($email, $password)
{

    $conn = connection();

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            $conn->close();
            return 1;
        } else {
            $conn->close();
            return 0;
        }
    }
}
