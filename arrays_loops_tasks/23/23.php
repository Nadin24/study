<?php

if ( $_POST ){

$sum = 0;

if ( isset($_POST['number']) ){
$number = $_POST['number'];
}

for($i = 0; $i < strlen($number); $i++){
;
$sum += $number[$i];
}

echo "Сумма: {$sum}";

}

include "23.html";