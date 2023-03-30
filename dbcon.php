<?php

$servername = 'localhost';
$username = 'root';
$password = '1234';
$dbname = 'php_pdo_crud';

try {
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected Successfully";

} catch (PDOException $e) {
    echo "Connection Failed: ".$e->getMessage();
}

?>