<?php

$array = [4, 2, 5, 19, 13, 0, 10];

$e = [2, 3, 4];

foreach ($array as $item) {
    $e = $item;
    if ($e == 2) {
        echo 'Есть <br>';
    } else if
    ($e == 3
    ) {
        echo 'Есть <br>';
    } else if ($e == 4) {
        echo 'Есть <br>';
    }

    echo 'Нет <br>';
}