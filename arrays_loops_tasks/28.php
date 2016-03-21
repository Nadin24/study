<?php

echo "<pre>";
for($a = 2; $a <= 9; $a++){
    for($b = 2; $b <= 9; $b++) {
        echo "{$a} * {$b} = " . $a*$b . "<br>";
    }
    echo "<br>";
}