<?php


$username = "root";
$password = "root";
$host = "localhost";
$schema = "lab3";


try{
    $conn = new PDO ("mysql:host=$host;dbname=$schema", $username, $password);
    $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";

    $stmt = $conn ->prepare("INSERT INTO Users (firstName, lastName) VALUES ('koo', 'rac'");
    $result = $stmt -> execute();
    print_r($result);
}catch(PDOException $e){
    echo "Connection failed" . $e->getMessage();
}




?>