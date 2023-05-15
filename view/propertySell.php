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

  ob_start();

  if(!isset($_SESSION["email"])){
    header('location:login.php');
    ob_end_flush();
  }
  ?>
    <!-- Hero section -->
   

    <div class="login-registration d-flex align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7">
          <div class="form-content">
            <div class="tabbed-btn d-flex justify-content-center">
              <h3>Registration For Sell</h3>
            </div>
            <div class="row g-3 registration-form" id="sell-form">
              <div class="col-md-12">
                <input type="text" class="form-control" id="title" placeholder="Title" name="title" />
                <!-- <span class="text-danger"><?php //echo $nameErr; 
                                                ?></span> -->
              </div>
              <div class="col-md-12">
                <input type="location" class="form-control" id="location" placeholder="Location" name="location" />
                <!-- <span class="text-danger"><?php //echo $emailErr; 
                                                ?></span> -->
              </div>
              <div class="col-md-12">
                <input type="text" id="type" name="type" class="form-control" placeholder="For">
                <!-- <span class="text-danger"><?php //echo $phoneErr; 
                                                ?></span> -->
              </div>
              <div class="col-md-12">
                <input type="text" class="form-control" id="price" name="price" placeholder="Price" />
                <!-- <span class="text-danger"><?php //echo $passwordErr; 
                                                ?></span> -->
              </div>
              <div class="col-md-12">
                <input type="text" class="form-control" id="area" name="area" placeholder="Area" />
                <!-- <span class="text-danger"><?php //echo $passwordErr; 
                                                ?></span> -->
              </div>
              <div class="col-md-12">
                <input type="text" class="form-control" id="bed" placeholder="Bed Room" name="bed" />
                <!-- <span class="text-danger"><?php //echo $addressErr; 
                                                ?></span> -->
              </div>
              <div class="col-md-12">
                <input type="text" class="form-control" id="wash" placeholder="Wash Room" name="wash" />
                <!-- <span class="text-danger"><?php //echo $addressErr; 
                                                ?></span> -->
              </div>
             
              <div class="col-12">
                <input type="submit" value="Registration" class="btn" id="sell-pro" name="registration">
              </div>
</div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!-- Footer area start -->
    <?php include('./footer.php') ?>
    <!-- Footer area end -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery-3.7.0.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script>
    $('#sell-pro').click(() => {
    const title = $('#title').val();
    const price = $('#price').val();
    const bed = $('#bed').val();
    const wash = $('#wash').val();
    const type = $('#type').val();
    const area = $('#area').val();
    const location = $('#location').val();
    $.ajax({
        method: "POST",
        url: "../controller/proSellController.php",
        data: {title,price,bed,wash,type,area,location},
        success: function(data){
            alert(data);
        }
    })
})
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
