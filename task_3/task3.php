<?php

/*Write a PHP function to change the following array's all values to uppercase. */

function changeToUpper($arr){
    foreach($arr as $x => $x_val){
        $arr[$x] = strtoupper($x_val);
    }
    return $arr;
}

$color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

print_r(changeToUpper($color));


?>