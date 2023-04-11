<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>
</head>

<body>
    <?php
    include "../models/dbConnection.php";
    $conn = connection();
    $sql = "SELECT user_id, full_name, email, phone, genger FROM users";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>Id</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Genger</th>
                </tr>";
        // output data of each row;
        while ($row = $result->fetch_assoc()) {
            echo "<tr > 
            <td>" . $row["user_id"] . "</td> 
             <td>" . $row["full_name"] . "</td>
             <td>" . $row["email"] . "</td>
             <td>" . $row["phone"] . "</td>
             <td>" . $row["genger"] . "</td>
            </tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    ?>
</body>

</html>