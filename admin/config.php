<?php
$conn = 'localhost';
$username = 'root';
$pass = '';
$db ='rentalapp';
try {
    $config = new PDO("mysql:host=$conn;bdname=$db",$username,$pass);
    $config->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "!!Opps Something went Wrong, Please try again later" . $e->getMessage();
}
