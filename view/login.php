
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
  <?php 
  if(isset($_SESSION["email"])){
    header('location:index.php');
  }
  ?>
  <div class="login-registration d-flex align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7">
          <div class="form-content">
            <div class="tabbed-btn d-flex justify-content-center">
              <H3>Login</h3>
            </div>
            <form class="row g-3 login-form" id="login-form" action="#" method="post">
              <div class="col-md-12">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" />
                <span class="text-danger" id="mail-error"></span>
              </div>
              <div class="col-md-12">
                <input type="password" class="form-control" id="password" name="password" placeholder="password*" />
                <span class="error" id="pass-error"></span>
              </div>
              <div class="col-12">
                <!-- <button type="submit" class="btn" value="login">
                  Login
                </button> -->
                <input type="submit" value="Login" class="btn" id="login" name="login">
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include('./footer.php') ?>

  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/jquery-3.7.0.min.js"></script>
  <script src="../assets/js/main.js"></script>
  <script>
    document.getElementById("login-form").addEventListener('submit', function(e) {
      e.preventDefault();
      let email = $("#email").val()
      let password = $("#password").val()

      if (email == "" && password == "") {
        $("#mail-error").text("Name must be filled out");
        $("#pass-error").text("Password must be filled out");
        return false;
      } else if (password.length < 6) {
        $("#pass-error").text("Password length must be grather then six");
        return false;
      }

    });

    function sendData() {
      let email = $("#email").val();
      let password = $("#password").val();

      if (email !== "" && password !== "") {
        let user = {
          email,
          password
        };

        let queryString = formatParams(user);
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "../controller/loginController.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
          if (this.readyState === 4 && this.status === 200) {
            alert(this.responseText);
            // console.log("some")
            window.location = "http://localhost/e-realtor-bd/view/index.php";
          } else if (this.status === 403) {
            console.log("some")
            alert("Login failed. Unauthorized User!")
            resetForm();
          }
        }
        xhr.send(queryString);
      }
    }

    function resetForm() {

      $(document).ready(function() {
        $("#email").val("")
        $("#password").val("")

      });


    }

    function formatParams(params) {
      return new URLSearchParams(params).toString();
    }
    document.getElementById("login").addEventListener('click', sendData);
  </script>
</body>

</html>