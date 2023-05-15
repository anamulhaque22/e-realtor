<?php
require '../lib/test_input.php';
include "../models/usersModel.php";
// $nameErr = $emailErr = $passwordErr = $phoneErr = $addressErr = $genderErr = "";
// $name = $email = $password = $phone = $address = $gender= "";
// if (empty($_POST["name"])) {
//     $nameErr = "Name is required";
// } else {
//     $name = test_input($_POST["name"]);
// }

// //Validates email
// if (empty($_POST["email"])) {
//     $emailErr = "You Forgot to Enter Your Email!";
// } else {
//     $email = test_input($_POST["email"]);
//     // check if e-mail address syntax is valid
//     if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
//         $emailErr = "You Entered An Invalid Email Format";
//     }
// }

// if (empty($_POST["password"])) {
//     $passwordErr = "You Forgot to Enter Your Password!";
// } else {
//     $password = test_input($_POST["password"]);
//     // $cpassword = test_input($_POST["cpassword"]);
//     if (strlen($_POST["password"]) <= '8') {
//         $passwordErr = "Your Password Must Contain At Least 8 Characters!";
//     } elseif (!preg_match("#[0-9]+#", $password)) {
//         $passwordErr = "Your Password Must Contain At Least 1 Number!";
//     } elseif (!preg_match("#[A-Z]+#", $password)) {
//         $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
//     } elseif (!preg_match("#[a-z]+#", $password)) {
//         $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
//     }
// }

// if (empty($_POST["phone"])) {
//     $phoneErr = "You Forgot to Enter Your Phone Number!";
// } else {
//     $phone = test_input($_POST["phone"]);
// }

// if (empty($_POST["address"])) {
//     $addressErr = "You Forgot to Enter Your Address!";
// } else {
//     $address = test_input($_POST["address"]);
// }

// if (empty($_POST["gender"])) {
//     $genderErr = "You Forgot to Enter Your Gender!";
// } else {
//     $gender = test_input($_POST["gender"]);
// }


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];


    $result = user($name, $email, $address, $phone, $password, $gender);
    if($result == 1){
        echo "New record created successfully";
    }else{
        echo "Failed to create user!";
    }
    
}




// echo json_encode($data, JSON_PRETTY_PRINT);
    // insert user registration data 
