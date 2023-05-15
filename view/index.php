<?php
// session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../assets/css/fontawesome.min.css" />
  <link rel="stylesheet" href="../assets/css/brands.min.css" />
  <link rel="stylesheet" href="../assets/css/light.min.css" />
  <link rel="stylesheet" href="../assets/css/regular.min.css" />

  <link rel="stylesheet" href="../assets/css/style.css" />
  <title>Home | E-Realtor</title>
</head>

<body>


  <?php include('./header.php') ?>
  <?php
  if (!isset($_SESSION["email"])) {
    header('location:login.php');
  }
  ?>
  <!-- Hero section -->
  <div class="hero d-flex align-items-center">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-11 col-sm-7 col-md-6 col-lg-4 col-xl-3">
          <div class="hero-content">
            <div class="property-info">
              <a href="">
                <h3>Home in Merrick Way</h3>
              </a>
              <p class="location">
                <i class="fa-sharp fa-regular fa-location-dot"></i> Merrick
                Way, Miami, FL 33134, USA
              </p>
              <p class="family">Single Family</p>
              <div class="price-with-p-info d-flex justify-content-between">
                <p>$555555</p>
                <ul class="d-flex">
                  <li title="Bedrooms">
                    <i class="fa-regular fa-bed-front"></i> 3
                  </li>
                  <li title="Bathrooms">
                    <i class="fa-regular fa-shower"></i> 3
                  </li>
                  <li title="Area">
                    <i class="fa-light fa-rectangle"></i> 4300 sq ft
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- property for sell or rent start -->
  <section class="property">
    <div class="container">
      <div class="row g-5" id="main-pro">
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="single-property">
            <div class="property-image">
              <img src="../assets/images/architecture-home.jpg" alt="" />
            </div>
            <div class="property-info">
              <a href="">
                <h3>Home in Merrick Way</h3>
              </a>
              <p class="location">
                <i class="fa-sharp fa-regular fa-location-dot"></i> Merrick
                Way, Miami, FL 33134, USA
              </p>
              <p class="family">Single Family</p>
              <div class="price-with-p-info d-flex justify-content-between">
                <p>$555555</p>
                <ul class="d-flex">
                  <li title="Bedrooms">
                    <i class="fa-regular fa-bed-front"></i> 3
                  </li>
                  <li title="Bathrooms">
                    <i class="fa-regular fa-shower"></i> 3
                  </li>
                  <li title="Area">
                    <i class="fa-light fa-rectangle"></i> 4300 sq ft
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="single-property">
            <div class="property-image">
              <img src="../assets/images/architecture-home.jpg" alt="" />
            </div>
            <div class="property-info">
              <a href="">
                <h3>Home in Merrick Way</h3>
              </a>
              <p class="location">
                <i class="fa-sharp fa-regular fa-location-dot"></i> Merrick
                Way, Miami, FL 33134, USA
              </p>
              <p class="family">Single Family</p>
              <div class="price-with-p-info d-flex justify-content-between">
                <p>$555555</p>
                <ul class="d-flex">
                  <li title="Bedrooms">
                    <i class="fa-regular fa-bed-front"></i> 3
                  </li>
                  <li title="Bathrooms">
                    <i class="fa-regular fa-shower"></i> 3
                  </li>
                  <li title="Area">
                    <i class="fa-light fa-rectangle"></i> 4300 sq ft
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="single-property">
            <div class="property-image">
              <img src="../assets/images/architecture-home.jpg" alt="" />
            </div>
            <div class="property-info">
              <a href="">
                <h3>Home in Merrick Way</h3>
              </a>
              <p class="location">
                <i class="fa-sharp fa-regular fa-location-dot"></i> Merrick
                Way, Miami, FL 33134, USA
              </p>
              <p class="family">Single Family</p>
              <div class="price-with-p-info d-flex justify-content-between">
                <p>$555555</p>
                <ul class="d-flex">
                  <li title="Bedrooms">
                    <i class="fa-regular fa-bed-front"></i> 3
                  </li>
                  <li title="Bathrooms">
                    <i class="fa-regular fa-shower"></i> 3
                  </li>
                  <li title="Area">
                    <i class="fa-light fa-rectangle"></i> 4300 sq ft
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="single-property">
            <div class="property-image">
              <img src="../assets/images/architecture-home.jpg" alt="" />
            </div>
            <div class="property-info">
              <a href="">
                <h3>Home in Merrick Way</h3>
              </a>
              <p class="location">
                <i class="fa-sharp fa-regular fa-location-dot"></i> Merrick
                Way, Miami, FL 33134, USA
              </p>
              <p class="family">Single Family</p>
              <div class="price-with-p-info d-flex justify-content-between">
                <p>$555555</p>
                <ul class="d-flex">
                  <li title="Bedrooms">
                    <i class="fa-regular fa-bed-front"></i> 3
                  </li>
                  <li title="Bathrooms">
                    <i class="fa-regular fa-shower"></i> 3
                  </li>
                  <li title="Area">
                    <i class="fa-light fa-rectangle"></i> 4300 sq ft
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="single-property">
            <div class="property-image">
              <img src="../assets/images/architecture-home.jpg" alt="" />
            </div>
            <div class="property-info">
              <a href="">
                <h3>Home in Merrick Way</h3>
              </a>
              <p class="location">
                <i class="fa-sharp fa-regular fa-location-dot"></i> Merrick
                Way, Miami, FL 33134, USA
              </p>
              <p class="family">Single Family</p>
              <div class="price-with-p-info d-flex justify-content-between">
                <p>$555555</p>
                <ul class="d-flex">
                  <li title="Bedrooms">
                    <i class="fa-regular fa-bed-front"></i> 3
                  </li>
                  <li title="Bathrooms">
                    <i class="fa-regular fa-shower"></i> 3
                  </li>
                  <li title="Area">
                    <i class="fa-light fa-rectangle"></i> 4300 sq ft
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="single-property">
            <div class="property-image">
              <img src="../assets/images/architecture-home.jpg" alt="" />
            </div>
            <div class="property-info">
              <a href="">
                <h3>Home in Merrick Way</h3>
              </a>
              <p class="location">
                <i class="fa-sharp fa-regular fa-location-dot"></i> Merrick
                Way, Miami, FL 33134, USA
              </p>
              <p class="family">Single Family</p>
              <div class="price-with-p-info d-flex justify-content-between">
                <p>$555555</p>
                <ul class="d-flex">
                  <li title="Bedrooms">
                    <i class="fa-regular fa-bed-front"></i> 3
                  </li>
                  <li title="Bathrooms">
                    <i class="fa-regular fa-shower"></i> 3
                  </li>
                  <li title="Area">
                    <i class="fa-light fa-rectangle"></i> 4300 sq ft
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- property for sell or rent end  -->

  <!-- Footer area start -->
  <?php include('./footer.php') ?>
  <!-- Footer area end -->
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/jquery-3.7.0.min.js"></script>
  <script src="../assets/js/main.js"></script>

  <script>
    $(document).ready(function() {
      read()
    })

    function read() {
      var read = "";

      $.ajax({
        method: "GET",
        url: "../models/readPro.php",
        data: {
          read
        },
        success: function(data) {
          $("#main-pro").html(data);
        }
      })
    }
  </script>

</body>

</html>
<!-- <ul>
  <li><a href="#">Home</a></li>
  <li><a href="#">Blog</a></li>
  <li><a href="#">Contact</a></li>
  <li><a href="#">About Us</a></li>
  1a1a1a
</ul> -->