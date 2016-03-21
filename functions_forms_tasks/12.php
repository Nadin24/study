<?php

$text= 'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь,
    все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.';

function sortText ($text){
    $piseText=explode(". ", $text);
    $rev = array_reverse($piseText);
    $result = implode(". ", $rev);
    echo $result;
    }


$func = 'sortText';
$func ($text);