<?php
$server = 'localhost';
$username = 'root';
$pass = '';
try {
    $con = new PDO("mysql:host=$server;dbname=rental_app",$username,$pass);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "!!Opps Something went Wrong, Please try again later" . $e->getMessage();
}
