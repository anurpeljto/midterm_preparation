<?php

function transformArray($array){
    // array(4) { ["Sarajevo"]=> int(71000) ["Mostar"]=> int(88000) ["Tuzla"]=> int(75000) ["Zenica"]=> int(72000) }
    // into : array(4) { ["Sarajevo"]=> string(7) "capital" ["Mostar"]=> int(88000) ["Tuzla"]=> int(75000) ["Banja Luka"]=> int(78000) }
    $array["Sarajevo"] = "capital";
    $array["Mostar"] = 88000;
    $array["Banja Luka"] = 78000;
    unset($array["Zenica"]);
};

$array = array(
    "Sarajevo" => 71000,
    "Mostar" => 88000,
    "Tuzla" => 75000,
    "Zenica" => 72000
);

echo 'Initial array: <br>';
foreach($array as $element){
     echo $element . '<br>';
    };

echo 'Modified array: <br>';
transformArray($array);
foreach($array as $element){
    echo $element . '<br>';
}

?>