<?php include('../controller/regController.php')?>
<?php include('../controller/loginController.php')?>
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
  <style>
    span.error {
    transition: 0s;
}
  </style>
  <title>Login/Registration | E-Realtor</title>
</head>

<body>
  <?php include('./header.php') ?>

  <div class="login-registration d-flex align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7">
          <div class="form-content">
            <div class="tabbed-btn d-flex justify-content-center">
              <a href="#" id="login-btn" class="btn">Login</a>
              <a href="#" id="registration-btn" class="btn">Registration</a>
            </div>
            <form class="row g-3 login-form" method="post">
              <div class="col-md-12">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" />
                <span class="error"><?php echo $emailErr;?></span>
              </div>
              <div class="col-md-12">
                <input type="password" class="form-control" id="password" name="password" placeholder="password*" required />
                <span class="error"><?php echo $passwordErr;?></span>
              </div>
              <div class="col-12">
                <!-- <button type="submit" class="btn" value="login">
                  Login
                </button> -->
                <input type="submit" value="Login" class="btn" name="login">
              </div>
            </form>
            <form class="row g-3 registration-form" method="post">
              <div class="col-md-12">
                <input type="text" class="form-control" id="name" placeholder="Full Name" name="name" />
              </div>
              <div class="col-md-12">
                <input type="email" class="form-control" id="email" placeholder="Email" name="email" />
              </div>
              <div class="col-md-12">
              <input type="tel" id="phone" name="phone" class="form-control" placeholder="Phone">
              </div>
              <div class="col-md-12">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required />
              </div>
              <div class="col-md-12">
                <input type="text" class="form-control" id="address" placeholder="Address" name="address" />
              </div>
              <div class="col-md-12 gender">
                <span>Gender:</span>
                <input type="radio" name="gender" value="female"><span class="me-4">Female</span>
                <input type="radio" name="gender" value="male"><span class="me-4">Male</span>
                <input type="radio" name="gender" value="other"><span class="me-4">Other</span>
              </div>
              <div class="col-12">
                <input type="submit" value="Registration" class="btn" name="registration">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include('./footer.php') ?>
  <script>
    const login = document.querySelector('.login-form')
    const registration = document.querySelector('.registration-form')
    const loginBtn = document.querySelector('#login-btn')
    const registrationBtn = document.querySelector('#registration-btn')

    function displayLogin() {
      login.style.transition = "3s all ease-in"
      login.style.display = "block"
      registration.style.display = "none"
    }

    function displayRegistration() {
      registration.style.display = "block"
      login.style.display = "none"
    }
    loginBtn.addEventListener('click', displayLogin);
    registrationBtn.addEventListener('click', displayRegistration);
  </script>

  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/main.js"></script>
</body>

</html>