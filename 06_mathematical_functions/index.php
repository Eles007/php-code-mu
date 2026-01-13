<?php

echo "<a href=\"../\"><h1>Главная страница</h1></a>";
//Практика 143.1
echo '143.1: ' . pow(2, 10) . "<br>";
//Практика 143.2
echo '143.2: ' . sqrt(245) . "<br>";
//Практика 143.3
echo '143.3: ';
$arr = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($arr as $value) {
    $sum += pow($value, 2);
}
echo sqrt($sum) . "<br>";
//Практика 144.1
echo '144.1: ' . round(sqrt(379)) . " "
    . round(sqrt(379), 1) . " "
    . round(sqrt(379), 2) . "<br>";
//Практика 144.2
echo '144.2: ';
$arr = [
    'floor' => floor(sqrt(587)),
    'ceil' => ceil(sqrt(587)),
];
echo json_encode($arr);
echo "<br>";
//Практика 145
echo '145: ';
$arr = [4, -2, 5, 19, -130, 0, 10];
echo min($arr) . " " . max($arr);
echo "<br>";
//Практика 146
echo '146: ';
$a = 10;
$b = 100;
echo abs($a - $b);
echo "<br>";
//Практика 147.1
$arr = [1, 2, 3, 4, 5];
echo '147.1: ' . array_sum($arr) . "<br>";
//Практика 147.2
echo '147.2: ' . array_product($arr) . "<br>";
//Практика 147.3
echo '147.3: ' . array_sum($arr) / count($arr) . "<br>";