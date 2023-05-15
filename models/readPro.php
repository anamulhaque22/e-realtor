<?php
include '../models/dbConnection.php';
$conn = connection();

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $select = "SELECT * FROM property;";
    $query = mysqli_query($conn, $select);
    while ($row = mysqli_fetch_array($query)) { ?>
        

        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-property">
              <div class="property-image">
                <img src="../assets/images/architecture-home.jpg" alt="" />
              </div>
              <div class="property-info">
                <a href="">
                  <h3><?php echo $row['title'] ?></h3>
                </a>
                <p class="location">
                  <i class="fa-sharp fa-regular fa-location-dot"></i> <?php echo $row['address'] ?>
                </p>
                <p class="family"><?php echo $row['type'] ?></p>
                <div class="price-with-p-info d-flex justify-content-between">
                  <p>$<?php echo $row['price'] ?></p>
                  <ul class="d-flex">
                    <li title="Bedrooms">
                      <i class="fa-regular fa-bed-front"></i> <?php echo $row['bed'] ?>
                    </li>
                    <li title="Bathrooms">
                      <i class="fa-regular fa-shower"></i> <?php echo $row['wash'] ?>
                    </li>
                    <li title="Area">
                      <i class="fa-light fa-rectangle"></i> <?php echo $row['area'] ?> sq ft
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

<?php }
}

?>