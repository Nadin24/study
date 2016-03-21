<?php
if ( $_POST ){


    $count = 0;

    if ( isset($_POST['number']) ){
        $number = $_POST['number'];
    }

    if ( isset($_POST['i']) ){
        $i = $_POST['i'];
    }

    $symbols = str_split($number);
    foreach($symbols as $symbol){
        if ( $symbol == $i ){
            $count++;
        }
    }

    echo " {$i} найден {$count} раз";

}

include "24.phtml";
