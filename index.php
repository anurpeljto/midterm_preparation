<?php

require 'vendor/autoload.php';

// mysql:host=HOSTNAME;dbname=DBNAME','USERNAME','PASSWORD'
Flight::register('db', 'PDO', array('mysql:host=localhost;dbname=lab3','root','root'));


Flight::start();

echo "Hello World!";

?>
