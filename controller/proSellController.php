<?php
require '../lib/test_input.php';
include "../models/proSellModel.php";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = $_POST['title'];
    $price = $_POST['price'];
    $bed = $_POST['bed'];
    $wash = $_POST['wash'];
    $type = $_POST['type'];
    $area = $_POST['area'];
    $location = $_POST['location'];


    $result = proSell($title, $price, $bed, $wash, $type, $area, $location);
    
    if($result == 1){
        echo "New record created successfully";
    }else{
        echo "Failed to insert property!";
    }
    
}