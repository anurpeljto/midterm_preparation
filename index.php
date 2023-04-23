<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS, PATCH');
require 'vendor/autoload.php';
require 'flight/Flight.php';

Flight::route('/', function(){
  echo 'hello world!';
});

Flight::start();

?>