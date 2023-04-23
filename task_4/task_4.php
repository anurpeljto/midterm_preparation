<?php


$username = "root";
$password = "root";
$host = "localhost";
$schema = "lab3";


try{
    $conn = new PDO ("mysql:host=$host;dbname=$schema", $username, $password);
    $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";


    $stmt2 = $conn->prepare("SELECT * FROM Users");
    $res2 = $stmt2 -> execute();
    print_r($res_2);
}catch(PDOException $e){
    echo "Connection failed" . $e->getMessage();
}




?>