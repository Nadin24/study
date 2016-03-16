<?php
$array = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sandy'];

$day = 'Tuesday';

foreach ($array as $value){
    if ($value == $day){
        echo "<i>$value</i><br>";
    } else{
        echo $value . "<br>";
    }
}