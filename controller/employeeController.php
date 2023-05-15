<?php
require '../lib/test_input.php';
include "../models/employeeModel.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];


    $result = emp($name, $email, $address, $phone, $password, $gender);
    if($result == 1){
        echo "New record created successfully";
    }else{
        echo "Failed to create user!";
    }
    
}




// echo json_encode($data, JSON_PRETTY_PRINT);
    // insert user registration data 
