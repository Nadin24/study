<?php

echo "<pre>";
 $arr = [];

for($i=0; $i<=10; $i++){
    $arr[] = rand(15, 82);
}

 print_r($arr);

$max = current($arr);
$maxKey = 0;
$min = current($arr);
$minKey = 0;

foreach($arr as $key => $value){
    if ( $value > $max ){
        $max = $value;
        $maxKey = $key;

    }
    else if ( $value < $min ){
        $min = $value;
        $minKey = $key;
    }
}

 echo 'Max - ' . $max . '<br>';

 echo 'Min - ' . $min . '<br>';


$arr[$maxKey] = $min;
$arr[$minKey] = $max;

 print_r($arr);
