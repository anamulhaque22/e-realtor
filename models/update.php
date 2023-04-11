
<?php
include '../models/dbConnection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $conn = connection();

  $uid = $_POST["uid"];
  $name =$_POST["uname"];
  $phone =$_POST["phone"];
// sql to update a record
$sql = "UPDATE users SET full_name='$name', phone = '$phone' WHERE user_id= $uid";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
  header("Location: ../view/index.php");

} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
  

}

?>