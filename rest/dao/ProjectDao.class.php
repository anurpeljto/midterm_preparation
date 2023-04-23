<?php

class ProjectDao{
    private $conn;

    public function __construct(){
        $hostname = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "lab3";
        try{
            $this->$conn = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
            $this->$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connection successful";
        }
        catch(PDOException $e){
            echo "Connection failed " . $e->getMessage();
                }
    }


    //add object to database

    public function addObject($object){
        $stmt = $this->$conn->prepare("INSERT INTO (firstName) VALUES ($object)");
        $stmt -> execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $this->$conn->lastInsertID();
    }

    // get all objects from table

    public function getAll(){
        $stmt = $this->$conn->prepare("SELECT * FROM Users");
        $stmt -> execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    // update object

    public function updateObject($object){
        $id = $object['id'];
        $firstName = $object['firstName'];
        $lastName = $object['lastName'];
        $stmt = $this->$conn->prepare("UPDATE Users set firstName = :firstName, lastName = :lastName WHERE id = :id");
        $stmt -> bindParam(':firstName', $firstName);
        $stmt -> bindParam(':lastName', $lastName);
        $stmt -> bindParam(':id', $id);
        $stmt -> execute();
       echo 'User updated successfully';
    }

    // delete object

    public function deleteObject($user){
        $id = $user['id'];
        $firstName = $user['firstName'];
        $lastName = $user['lastName'];
        $stmt=$this->$conn->prepare("DELETE FROM Users WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt -> execute();
        echo "User deleted";
    }
    

    
}