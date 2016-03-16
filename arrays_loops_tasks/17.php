<?php

$array = ['January', 'February', 'March', 'April', 'June', 'July',
          'August', 'September', 'October', 'November', 'December'];

$month = 'March';

foreach ($array as $value){
    if ($value == $month){
        echo "<b>$value</b><br>";
    }
    else {
        echo $value . "<br>";
    }
}