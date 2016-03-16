<?php

$n = 1000;
$num = 0;

do {
    $num++;
    echo $n . "<br>";
    $n = $n / 2;
}
while ($n >= 50);

echo $n;
echo "<br>";

echo $num . 'итераций';