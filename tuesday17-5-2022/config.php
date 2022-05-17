<?php
$host="localhost";
$dbName="employees";
$userName="root";
$pass="";
try {
    $pdo= new PDO("mysql:host=$host;dbname=$dbName",$userName,$pass);
    // echo"Connection succeeded";
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exeption $err) {
    echo "Connection failed". $err->getMessage();
}

?>