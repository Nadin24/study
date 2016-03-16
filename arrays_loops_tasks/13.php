<?php

echo "<h3>1-й вариант:</h3>";
echo "<table><tr>";

for ($i=1; $i<=10; $i++){

    for ($n=1; $n<+10; $n++){
        echo "<td>" . ($i*$n) . "</td>";
    }
if ($i !=10) {
    echo "</tr><tr>";
}
}
echo "</tr></table>";

echo "<h3>2-й вариант: </h3>";

echo "<pre>";
for($a = 2; $a <= 9; $a++){
    for($b = 2; $b <= 9; $b++) {
        echo "{$a} * {$b} = " . $a*$b . "<br>";
    }
    echo "<br>";
}