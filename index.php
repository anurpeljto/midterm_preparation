<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS, PATCH');
require 'vendor/autoload.php';
require 'flight/Flight.php';
require_once '/rest/dao/ProjectDao.class.php';

Flight::route('/', function(){
  echo 'hello world!';
});

$projectDao = new ProjectDao();

$anur = [
  "firstName" => "Anur",
  "id" => "1",
  "lastName" => "Peljto"
];

$projectDao->addObject($anur);
$projectDao->getAll();

Flight::start();

?>