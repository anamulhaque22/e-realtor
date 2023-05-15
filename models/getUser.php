<?php
include '../models/dbConnection.php';
$conn = connection();

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    session_start();
    $email = $_SESSION['email'];

    $select = "SELECT * FROM users where email='$email';";
    $query = mysqli_query($conn, $select);

    $result = mysqli_fetch_assoc($query);
    
    echo json_encode($result, JSON_PRETTY_PRINT);
}

?>