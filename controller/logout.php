<?php
session_start();
setcookie('email', $email, time() - (86400), "/");
if(session_destroy()) {
header("Location: ../view/login.php"); 
}
?>