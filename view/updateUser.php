<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
</head>
<body>
<a href="updateUser.php">Update Data</a> </br></br>

<form name = "Update" method="post" action="../models/update.php">
  Id: <input type="number" name="uid"><br><br>
  Name: <input type="text" name="uname"><br><br>
  Phone: <input type="text" name="phone"><br><br>
  <input type="submit" name="submitUpdate" value="Update">
</form>

<h2>Delete user</h2>
<form action="../models/delete.php" method="post">
Id: <input type="number" name="uid"><br><br>
<input type="submit" name="submitDelete" value="Delete">
</form>

</body>
</html>