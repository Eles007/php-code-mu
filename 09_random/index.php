<?php

echo "<a href=\"../\"><h1>Главная страница</h1></a>";

//Практика 178.1
echo '178.1: ' . mt_rand(1, 100) . "<br>";
//Практика 178.2
echo '178.2: ';
$arr = [];
for ($i = 0; $i < 10; $i++) {
    $arr[] = mt_rand(1, 100);
}
echo json_encode($arr);
echo "<br>";
//Практика 179.1
echo '179.1: ';
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
echo json_encode(array_rand($arr));
echo "<br>";
//Практика 179.2
echo '179.2: ';
echo json_encode($arr[array_rand($arr)]);
echo "<br>";
//Практика 180.1
echo '180.1: ';
$arr = [1, 2, 3, 4, 5];
shuffle($arr);
echo json_encode($arr);
echo "<br>";
//Практика 180.2
echo '180.2: ';
$arr = range(1, 25);
shuffle($arr);
echo json_encode($arr);
echo "<br>";
//Практика 180.3
echo '180.3: ';
$arr = range('a', 'z');
shuffle($arr);
echo json_encode($arr);
echo "<br>";
//Практика 181.1
echo '181.1: ';
$digits = '0123456789';
echo json_encode(str_shuffle($digits));
echo "<br>";
//Практика 181.2
echo '181.2: ';
$str = 'abcdef';
echo json_encode(str_shuffle($str));
echo "<br>";