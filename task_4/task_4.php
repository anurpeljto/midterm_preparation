<?php


$username = "root";
$password = "root";
$host = "localhost";
$schema = "lab3";


try{
    $conn = new PDO ("mysql:host=$host;dbname=$schema", $username, $password);
    $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";

    $stmt = $conn ->prepare("SELECT * FROM students");
    $stmt -> execute();
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    print_r($result);
}catch(PDOException $e){
    echo "Connection failed" . $e->getMessage();
}




?>