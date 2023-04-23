<?php

require 'vendor/autoload.php';

// mysql:host=HOSTNAME;dbname=DBNAME','USERNAME','PASSWORD'
$hostname = "localhost";
$dbname = "lab3";
Flight::register('db', 'PDO', array("mysql:host=localhost;dbname=lab3",'root','root'));

Flight::route('GET /api/users', function(){
    $users = Flight::db()->query('SELECT * FROM Users', PDO::FETCH_ASSOC)->fetchAll();
    var_dump($users);
    Flight::json($users);
});

Flight::start();

echo "Hello World!";

?>
