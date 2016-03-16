<?php

$array = [ 26, 17, 136, 12, 79, 15];
$sum = 0;

foreach ($array as $value){
    $sum += $value * $value;
}

echo $sum;
