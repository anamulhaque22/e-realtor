<?php
require '../lib/test_input.php';
$nameErr = $emailErr = $phone = $message = "";
$name = $email = $phoneErr = $messageErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["contact"])) {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

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



    if (!empty($_POST["phone"])) {
        $phone = test_input($_POST["phone"]);
    }

    if (empty($_POST["message"])) {
        $messageErr = "You Forgot to Enter Your Message!";
    } else {
        $message = test_input($_POST["message"]);
    }
}
