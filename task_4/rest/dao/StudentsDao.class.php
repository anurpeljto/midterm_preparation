<?php

 
class StudentsDao{

    private $conn;

    public function __construct(){
        $hostname = "localhost";
        $username = "root";
        $password = "root";
        $schema = "lab3";

        try{
            $this->$conn = new PDO("mysql:host=$hostname;dbname=$schema", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO:ERRMODE_EXCEPTION);
            echo "Successfully connected";
        }catch(PDOException $e){
            echo "Connection failed " . $e->getMessage();
        }
    }

    public function get_all(){
        $stmt = $this->$conn->prepare("SELECT * FROM Users");
        $stmt -> execute();
        $result = $stmt->fetchAll();
        print_r($result);
    }

    
}



?>