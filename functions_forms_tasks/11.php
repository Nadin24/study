<?php


$text =
    'a hundred years ago people believed that plants and animals had always been as they are now. they thought that all the different sorts of living things, including men and women, were put
         in this world by some mysterious power a few thousand years ago. it was Charles Darwin, born at Shrewsbury on the 12th of February, 1809, who showed that this was just a legend.
         as a boy Darwin loved to walk in the countryside, collecting insects, flowers and minerals. he liked to watch his elder brother making chemical experiments.';

function upFirstLetter ($text){
    $piseText=explode(". ", $text);
    foreach ($piseText as $key => $value ){
        echo ucfirst($piseText[$key]) . '. ';
    }
}

$func = 'upFirstLetter';
$func ($text);