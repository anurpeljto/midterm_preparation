<?php


$username = "root";
$password = "root";
$host = "localhost";
$schema = "lab3";


try{
    $conn = new PDO ("mysql:host=$host;dbname=$schema", $username, $password);
    $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";

    print_r($_REQUEST);
    $stmt = $conn -> prepare("INSERT INTO Users (firstName, lastName) VALUES ('khoo', 'rcina')");
    $stmt ->execute();
    print_r($result);

}catch(PDOException $e){
    echo "Connection failed" . $e->getMessage();
}




?>