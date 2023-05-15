<?php
require '../lib/test_input.php';
include "../models/loginModel.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // session_start();

    session_start();

  if(isset($_SESSION['email'])){
    header('location:index.php');
  }

    $email = $_POST['email'];
    $password = $_POST['password'];
    $isValidUser = validUser($email, $password);

    if ($isValidUser == 1) {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        setcookie('email', $email, time() + (86400), "/");

        echo "Login successful";
        //echo "Hi ". $_SESSION['user'];
    } else {
        http_response_code(403);
        // echo "Login failed. Unauthorized User!";
    }
}
