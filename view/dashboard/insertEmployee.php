<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../../assets/css/fontawesome.min.css" />
  <link rel="stylesheet" href="../../assets/css/brands.min.css" />
  <link rel="stylesheet" href="../../assets/css/light.min.css" />
  <link rel="stylesheet" href="../../assets/css/regular.min.css" />

  <link rel="stylesheet" href="../../assets/css/style.css" />
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
              <h3>Registration</h3>
            </div>
            <form class="row g-3 registration-form" method="post" action="#" id="reg-form">
              <div class="col-md-12">
                <input type="text" class="form-control" id="name" placeholder="Full Name" name="name" />
                <!-- <span class="text-danger"><?php //echo $nameErr; 
                                                ?></span> -->
              </div>
              <div class="col-md-12">
                <input type="email" class="form-control" id="email" placeholder="Email" name="email" />
                <!-- <span class="text-danger"><?php //echo $emailErr; 
                                                ?></span> -->
              </div>
              <div class="col-md-12">
                <input type="tel" id="phone" name="phone" class="form-control" placeholder="Phone">
                <!-- <span class="text-danger"><?php //echo $phoneErr; 
                                                ?></span> -->
              </div>
              <div class="col-md-12">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
                <!-- <span class="text-danger"><?php //echo $passwordErr; 
                                                ?></span> -->
              </div>
              <div class="col-md-12">
                <input type="text" class="form-control" id="address" placeholder="Address" name="address" />
                <!-- <span class="text-danger"><?php //echo $addressErr; 
                                                ?></span> -->
              </div>
              <div class="col-md-12 gender">
                <span>Gender:</span>
                <input type="radio" name="gender" value="female"><span class="me-4">Female</span>
                <input type="radio" name="gender" value="male"><span class="me-4">Male</span>
                <input type="radio" name="gender" value="other"><span class="me-4">Other</span>
                <!-- <span class="text-danger"><?php //echo $genderErr; 
                                                ?></span> -->
              </div>
              <div class="col-12">
                <input type="submit" value="Registration" class="btn" id="registration" name="registration">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include('./footer.php') ?>
  <script>
    document.getElementById("reg-form").addEventListener('submit', function(e) {
      e.preventDefault();
      // var name = document.getElementById("name").value;
      // var email = document.getElementById("email").value;
      // var password = document.getElementById("password").value;
      // var address = document.getElementById("address").value;
      // var phone = document.getElementById("phone").value;
      // var gender = document.getElementsByName("gender");
      const user = getFormValue();
      const {
        name,
        email,
        password,
        address,
        phone,
        gender
      } = user;
      if (name == '') {
        alert("Name must be filled out");
        return false;
      } else if (email == "") {
        alert("Email must be filled out");
        return false;
      } else if (password == "") {
        alert("Pasword must be filled out");
        return false;
      } else if (address == "") {
        alert("Address must be filled out");
        return false;
      } else if (phone == "") {
        alert("Phone must be filled out");
        return false;
      } else if (gender == "") {
        alert("Gender must be filled out");
        return false;
      }
    });

    function sendData() {
      const user = getFormValue()
      console.log(user)
      let queryString = formatParams(user);
      console.log(queryString)
      let xhr = new XMLHttpRequest();
      xhr.open("POST", "../../controller/employeeController.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
          alert(this.responseText)
          resetForm();
        }
      }
      xhr.send(queryString);
    }

    function resetForm() {
      // document.getElementById("name").value = "";
      document.getElementsByName("gender");

      $(document).ready(function() {
        $("#name").val("")
        $("#email").val("")
        $("#address").val("")
        $("#password").val("")
        $("#phone").val("")
        $("input[name='gender']").prop("checked", false);

      });


    }

    function getFormValue() {
      var name = document.getElementById("name").value;
      var email = document.getElementById("email").value;
      var password = document.getElementById("password").value;
      var address = document.getElementById("address").value;
      var phone = document.getElementById("phone").value;
      var gender = document.getElementsByName("gender");
      let g = ""
      for (let i = 0; i < gender.length; i++) {
        if (gender[i].checked) {
          g = gender[i].value;
        };
      }
      const user = {
        name,
        email,
        password,
        phone,
        address,
        gender: g,
      }
      return user;
    }

    function formatParams(params) {
      return new URLSearchParams(params).toString();
    }
    document.getElementById("registration").addEventListener('click', sendData);
  </script>
  <script src="../../assets/js/bootstrap.min.js"></script>
  <script src="../../assets/js/jquery-3.7.0.min.js"></script>
  <script src="../../assets/js/main.js"></script>
</body>

</html>