<?php


$name = ["Nikita", "Dima", "Alex", "Sergey", "Vlad", "Andrey","Artem", "Ivan", "Anton", "Max", "Oleg","Roman"];

$surname = ["Melnyk", "Shevchenko", "Boyko", "Kovalenko", "Bondarenko", "Tkachenko",
    "Kovalchuk", "Kravchenko", "Oliynyk", "Shevchuk", "Polishchuk", "Lysenko"];

for ( $i=1; $i<=30; $i++ ){
    $randName = array_rand($name);
    $randSurname = array_rand($surname);

    $outName = $name[$randName];
    $outSurname = $surname[$randSurname];
    $age = rand(18, 60);
    $result[$i] = ["name" => $outName, "surname" => $outSurname, "age" => $age];
}

echo "<pre>";
echo "<h3> My players: </h3>";
print_r($result);

echo "<h3> Loosers: </h3>";

for ($day=1; $day<=30; $day++) {
    $randPlayer = array_rand($result);
    $outPlayer = $result[$randPlayer];
    $looser = [implode(" ", $outPlayer)];
    foreach ($looser as $notToday) {
        if ($day < 30) {
            echo "<p><b>" . $notToday . "</b>" . "  years -  left our game at day $day <br></p>";
        }
        else if ($day == 30) {
            echo "<p><b>" . $notToday . "</b>" . " Winner! <br></p>";
        }
    }
}