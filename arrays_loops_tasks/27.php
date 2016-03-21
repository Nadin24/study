<?php

$colors = array('red','yellow','blue','green', 'white', 'purple', 'orange');

$row = rand (1, 10);
$cols = rand (1, 10);



echo "<table border = 1></tr>";

    for ($i = 1; $i <= $row; $i++) {
    for ($j = 1; $j <= $cols; $j++) {
    $num = array_rand($colors, 2);
    $final = $colors[$num[1]];
    echo "<td style='background-color: $final'>" . rand(1000, 9999) . "</td>";
    }
    if ($i != 11) {
    echo "</tr><tr>";
        }
        }



        echo "</tr></table>";



