<?php include('../controller/regController.php')?>
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
            <form class="row g-3 login-form" action="../controller/loginController.php" method="post">
              <div class="col-md-12">
                <input type="email" class="form-control" id="email" placeholder="Email" />
              </div>
              <div class="col-md-12">
                <input type="password" class="form-control" id="password" placeholder="password*" required />
              </div>
              <div class="col-12">
                <button type="submit" class="btn">
                  Login
                </button>
              </div>
            </form>
            <form class="row g-3 registration-form">
              <div class="col-md-12">
                <input type="text" class="form-control" id="name" placeholder="Full Name" />
              </div>
              <div class="col-md-12">
                <input type="email" class="form-control" id="email" placeholder="Email" />
              </div>
              <div class="col-md-12">
                <input type="password" class="form-control" id="password" placeholder="password*" required />
              </div>
              <div class="col-12">
                <button type="submit" class="btn">
                  Registration
                </button>
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