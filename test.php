<?php

$projectdao = new ProejctDao();

$anur = [
    "firstName" => "Anur",
    "lastName" => "Peljto",
    "id" => 1
];

$projectdao->addObject($anur);
print_r($projectdao->getAll());





?>