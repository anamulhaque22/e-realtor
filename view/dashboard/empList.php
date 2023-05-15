<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../assets/css/fontawesome.min.css" />
    <link rel="stylesheet" href="../../assets/css/brands.min.css" />
    <link rel="stylesheet" href="../../assets/css/light.min.css" />
    <link rel="stylesheet" href="../../assets/css/regular.min.css" />

    <link rel="stylesheet" href="../../assets/css/style.css" />
    <title>Users List</title>
</head>

<body>
    <?php include('./header.php') ?>


    <!-- property for sell or rent start -->
    <section class="property">
        <div class="container">
            <div class="row g-5" id="main-pro">
                <h2>User List</h2>

                <?php
                include "../../models/dbConnection.php";
                $conn = connection();
                $sql = "SELECT user_id, full_name, email, phone, genger, address FROM emp";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    echo "<table class='table'>
                <thead>
                    <tr>
                    <th scope='col'>Id</th>
                    <th scope='col'>Full Name</th>
                    <th scope='col'>Email</th>
                    <th scope='col'>Phone</th>
                    <th scope='col'>Gender</th>
                    <th scope='col'>Loation</th>
                    <th scope='col'>Delete</th>
                    </tr>
                </thead>
                <tbody>";



                    // output data of each row;
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr > 
                            <th scope='row'>" . $row["user_id"] . "</th> 
                            <td>" . $row["full_name"] . "</td>
                            <td>" . $row["email"] . "</td>
                            <td>" . $row["phone"] . "</td>
                            <td>" . $row["genger"] . "</td>
                            <td>" . $row["address"] . "</td>
                            <td><button class='btn' onclick='deleteUser(" . $row["user_id"] . ")'>Delete</button></td>
                            </tr>";
                    }
                    echo "</tbody>";
                    echo "</table>";
                } else {
                    echo "0 results";
                }
                ?>
            </div>
        </div>
    </section>
    <?php include('./footer.php') ?>
    <!-- Footer area end -->
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/jquery-3.7.0.min.js"></script>

    <script>
       function deleteUser(user_id){
        console.log(user_id)
            $.ajax({
                url: "../../models/empDelete.php",
                method: "POST",
                data: {userId : user_id},
                success:function(data){
                    alert(data);
                    location.reload();
                }
            })
        }
    </script>
</body>

</html>