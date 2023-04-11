<?php

function connection()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "erealtor";

    $conn = new mysqli($servername, $username, $password, $dbName);
        
    return $conn;
}
