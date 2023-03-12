<?php
$nameErr = $emailErr = $passwordErr = $cpasswordErr = "";
$name = $email = $password = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Validates email
    if (empty($_POST["email"])) {
        $emailErr = "You Forgot to Enter Your Email!";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address syntax is valid
        if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
            $emailErr = "You Entered An Invalid Email Format";
        }
    }
}
if (!empty($_POST["password"]) && ($_POST["password"] == $_POST["cpassword"])) {
    $password = test_input($_POST["password"]);
    $cpassword = test_input($_POST["cpassword"]);
    if (strlen($_POST["password"]) <= '8') {
        $passwordErr = "Your Password Must Contain At Least 8 Characters!";
    } elseif (!preg_match("#[0-9]+#", $password)) {
        $passwordErr = "Your Password Must Contain At Least 1 Number!";
    } elseif (!preg_match("#[A-Z]+#", $password)) {
        $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
    } elseif (!preg_match("#[a-z]+#", $password)) {
        $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
    } else {
        $cpasswordErr = "Please Check You've Entered Or Confirmed Your Password!";
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>