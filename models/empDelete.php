<?php
include '../models/dbConnection.php';


$conn = connection();

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $user_id = $_POST["userId"];
    $delete = "DELETE FROM emp WHERE user_id = '$user_id'";
    $query = mysqli_query($conn, $delete);

    if($query){
        echo "Employee Deleted.";
    }else{
        echo "Failed!";
    }
}
?>