<?php

$db_host = "localhost:3308";
$db_user = "root";
$db_pass = "";
$db_name = "businessdb";

try {
    //code...
    $db = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
} catch (error) {
    echo   "Error : $error <br>";
    die("Error");
}
