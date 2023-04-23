<?php

$array = [
    "Sarajevo" => 71000,
    "Mostar" => 88000,
    "Tuzla" => 75000,
    "Zenica" => 72000
];

echo 'Initial array: <br>';
foreach ($array as $x => $x_val){
    echo $x . ' => ' . $x_val . '<br>';
}

unset($array["Zenica"]);
$array["Sarajevo"] = "capital";
$array["Banja Luka"] = 78000;

echo '<br> Modified array: <br>';
foreach ($array as $x => $x_val){
    echo $x . ' => ' . $x_val . '<br>';
}
?>