<?php

$array = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sandy'];

$offDay1 = 'Saturday';
$offDay2 = 'Sandy';

foreach ($array as $value){

    if ($value == $offDay1 or $value == $offDay2 ){
        echo "<b>$value</b><br>";
    } else {
        echo $value . "<br>";
    }
}
