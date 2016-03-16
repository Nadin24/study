<?php

echo "<h3>Четные числа: </h3>";

for ($i = 0; $i <= 100; $i++){
   if ( $i%2 ){
        continue;
  }
   echo $i . "<br>";
}