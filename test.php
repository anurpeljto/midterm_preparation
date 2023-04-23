<?php

require 'UserDao.class.php';

$userDao = new UserDao();
$users = $userDao->getUsers();
var_dump($users);
echo "<br>";

$newUser = [
    'firstName' => 'John',
    'lastName' => 'Doe',
    'age' => 25
];

$savedUser = $userDao->addUser($newUser);
$users = $userDao->getUsers();
var_dump($users);
echo "<br>";

$savedUser['firstName'] = 'Jane';
$userDao->updateUser($savedUser);
$users = $userDao->getUsers();
var_dump($users);
echo "<br>";

$userDao->deleteUser($savedUser['id']);
$users = $userDao->getUsers();
var_dump($users);

?>