<?php

$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];

foreach ($arr as $kay => $value){
    $en[] = $kay;
    $ru[] = $value;
}

echo "<pre>";

print_r($en);
print_r($ru);