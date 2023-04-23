<?php


/*Write your own PHP functions to calculate and display average, lowest and highest temperatures.
Recorded temperatures:
 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68,
  73, 75, 79, 73
*/

function avg($temperature){
    $sum = 0.0;
    $count = 0.0;
    foreach ($temperature as $temp){
        $sum += $temp;
        $count+=1.0;
    }
    return $sum / $count;
}

// return highest:

function highest($temperature){
    $max = $temperature[0];
    foreach($temperature as $temp){
        if ($temp > $max){
            $max = $temp;
        }
    }
    return $max;
}

// return lowest

function lowest($temperature){
    $min = $temperature[0];
    foreach ($temperature as $temp){
        if ($temp < $min){
            $min = $temp;
        }
    }
    return $min;
}

echo 'Testing functions<br>';
$array = [
    78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
];

echo 'Lowest: ' . lowest($array). '<br>';
echo 'Average: ' . avg($array) . '<br>';
echo 'Highest: ' . highest($array) . '<br>'; 

?>