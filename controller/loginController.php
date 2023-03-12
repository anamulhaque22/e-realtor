<?php
// require '../lib/test_input.php';
$emailErr = $passwordErr = "";
$email = $password = "";
$isEmailValid = $isPasswordValid = false;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
  session_start();

  if(isset($_SESSION['email'])){
    header('location:index.php');
  }
    //Validates email
    if (empty($_POST["email"])) {
        $emailErr = "Enter Your Email!";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address syntax is valid
        if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
            $emailErr = "You Entered An Invalid Email Format";
        }else{
          $email = test_input($_POST["email"]);
          $isEmailValid = true;
        }
    }

    //Validates password
    if (empty($_POST["password"])) {
        $passwordErr = "Enter Your Password!";
    } else {
        $password = test_input($_POST["password"]);
        if (strlen($_POST["password"]) <= '8') {
            $passwordErr = "Your Password Must Contain At Least 8 Characters!";
        } elseif (!preg_match("#[0-9]+#", $password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Number!";
        } elseif (!preg_match("#[A-Z]+#", $password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
        } elseif (!preg_match("#[a-z]+#", $password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
        }else{
          $password = test_input($_POST["password"]);
            $isPasswordValid = true;
        }
    }

    if($isEmailValid && $isPasswordValid){
        // session_start();
		$_SESSION['email'] = $email;
		$_SESSION['password'] = $password;
        setcookie('email', $email, time() + (86400), "/");
      

		//echo "Hi ". $_SESSION['user'];
		header('location:index.php');
    }
}


?>

<!-- <?php
// include('../lib/test_input.php');
// $emailErr = $passwordErr = "";
// $email = $password = "";

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     //Validates email
//     if (empty($_POST["email"])) {
//         $emailErr = "Enter Your Email!";
//     } else {
//         $email = test_input($_POST["email"]);
//         // check if e-mail address syntax is valid
//         if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
//             $emailErr = "You Entered An Invalid Email Format";
//         }
//     }

//     //Validates password
//     if (empty($_POST["password"])) {
//         $passwordErr = "Enter Your Password!";
//     } else {
//         $password = test_input($_POST["password"]);
//         if (strlen($_POST["password"]) <= '8') {
//             $passwordErr = "Your Password Must Contain At Least 8 Characters!";
//         } elseif (!preg_match("#[0-9]+#", $password)) {
//             $passwordErr = "Your Password Must Contain At Least 1 Number!";
//         } elseif (!preg_match("#[A-Z]+#", $password)) {
//             $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
//         } elseif (!preg_match("#[a-z]+#", $password)) {
//             $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
//         }
//     }
// }
?> -->