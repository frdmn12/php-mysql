<?php

require_once __DIR__ . "/../vendor/autoload.php";
// Looing for .env at the root directory
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ );
$dotenv->load();

$db_host = $_ENV["HOST"];
$db_user = $_ENV["USER"];
$db_pass = $_ENV["PASS"];
$db_name =  $_ENV["DB"];

try {
    //code...
    $db = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
} catch (error) {
    echo   "Error : $error <br>";
    die("Error");
}
