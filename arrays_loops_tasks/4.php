<?php

echo "<p><b> Cтолбец ключей: </b></p>";

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

foreach ($arr as $key){

    echo "<pre> $key </pre> ";
}

echo "<p><b> Cтолбец элементов: </b></p>";

foreach ($arr as $value){
    echo "<pre> $value </pre> ";
}
