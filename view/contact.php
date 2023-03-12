<?php
include('../controller/contactController.php');
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
  <title>Contact | E-Realtor</title>
</head>

<body>
  <?php include('./header.php') ?>
  <div class="contact-from">
    <div class="container">
      <div class="row align-items-centers">
        <div class="col-md-7">
          <form class="row g-3" method="post">
            <div class="col-md-12">
              <input type="text" class="form-control" id="name" placeholder="Name" name="name" />
              <span class="text-danger"><?php echo $nameErr; ?></span>
            </div>
            <div class="col-md-12">
              <input type="email" class="form-control" id="email" placeholder="Email*" required name="email" />
              <span class="text-danger"><?php echo $emailErr; ?></span>
            </div>
            <div class="col-md-12">
              <input type="text" class="form-control" id="mobile" placeholder="Mobile" required] name="phone" />
            </div>
            <div class="col-md-12">
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Message" name="message"></textarea>
              <span class="text-danger"><?php echo $messageErr; ?></span>

            </div>
            <div class="col-12">
              <input type="submit" value="Contact" class="btn" name="contact">
            </div>
          </form>
        </div>
        <div class="col-md-5 d-flex">
          <div class="d-flex align-self-center">
            <div class="info">
              <div class="info-item d-flex">
                <i class="fa-sharp fa-regular fa-envelope"></i>
                <div>
                  <h3>Email:</h3>
                  <p>anamul.ah00@gmail.com</p>
                  <p>anamulah535367@gmail.com</p>
                </div>
              </div>
              <div class="info-item d-flex">
                <i class="fa-regular fa-phone"></i>
                <div>
                  <h3>Phone:</h3>
                  <p>01946988659</p>
                  <p>01310862682</p>
                </div>
              </div>
              <div class="info-item d-flex">
                <i class="fa-regular fa-location-dot"></i>
                <div>
                  <h3>Location:</h3>
                  <p>Kuratoli, Kuril, Dhaka</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include('./footer.php') ?>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/main.js"></script>
</body>

</html>