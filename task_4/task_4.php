<?php

require_once("rest/dao/StudentsDao.class.php");
$students_dao = new StudentsDao();


/* $username = "root";
$password = "root";
$host = "localhost";
$schema = "lab3";


try{
    $conn = new PDO ("mysql:host=$host;dbname=$schema", $username, $password);
    $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";

    $first_name = $_REQUEST['firstName'];
    $last_name = $_REQUEST['lastName'];
    $stmt = $conn -> prepare("INSERT INTO Users (firstName, lastName) VALUES ('$first_name', '$last_name')");
    $stmt ->execute();
    print_r($result);

}catch(PDOException $e){
    echo "Connection failed" . $e->getMessage();
}

*/


?>