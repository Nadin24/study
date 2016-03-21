<?php
$string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня
    яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша
    яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';

function countFruit($srting){
    $arr = explode(" ", $srting);
    $a = 0;
    $c = 0;
    $g = 0;
    $v = 0;
    // print_r($arr);
    foreach ($arr as $value){
        if ($value == 'яблоко'){
            $a++;
        }
        else if ($value == 'черешня'){
            $c++;
        }
        else if ($value == 'вишня'){
            $v++;
        }
        else if ($value == 'груша'){
            $g++;
        }
    }
    echo "яблоко - $a <br>";
    echo "черешня - $c <br>";
    echo "вишня - $v <br>";
    echo "груша - $g <br>";
}
$result = 'countFruit';
$result ($string);