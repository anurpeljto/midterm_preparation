<?php

$projectdao = new ProjectDao();

$anur = [
    "firstName" => "Anur",
    "lastName" => "Peljto",
    "id" => 1
];

$projectdao->addObject($anur);
print_r($projectdao->getAll());





?>