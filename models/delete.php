
<?php
include '../models/dbConnection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submitDelete"])) {
    $conn = connection();

    $uid = $_POST["uid"];
    // sql to update a record
    $sql = "DELETE FROM users WHERE user_id= $uid";

    if ($conn->query($sql) === TRUE) {
        echo "Record DELETED successfully";
        header("Location: ../view/index.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
}

?>