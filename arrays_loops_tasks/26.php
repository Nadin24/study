<?php
echo "<pre>";

$arr = [];

for($i=0; $i<20; $i++){
       $arr[] = rand(1,100);
}
 print_r($arr);

 $mul = 1;
 foreach($arr as $key => $item){
         if ( $item != 0 ){
                if ( $key % 2 == 0 ){
                         $mul *= $item;
         } else {
                         echo "Непарный индекс $key, значение $item <br>";
         }
    }
 }

 echo "Произведение: $mul";
