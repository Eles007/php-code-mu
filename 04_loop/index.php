<?php

echo "<a href='../'><h1>Главная страница</h1></a>";
//Практика 112.1
$arr = [1, 2, 3, 4, 5];
echo '112.1: ';
foreach ($arr as $v) {
    echo $v ** 2 . " ";
}
echo "<br>";
//Практика 112.2 - 112.3
echo '112.2 - 112.3: ';
foreach ($arr as $v) {
    echo "<b>$v</b> <br>";
}
//Практика 113
$arr = ['user1' => 30, 'user2' => 32, 'user3' => 33];
echo '113: ';
foreach ($arr as $key => $value) {
    echo "$key - $value, ";
}
echo "<br>";
//Практика 114.1
echo '114.1: ';
$i = 1;
while ($i <= 100) {
    echo "$i ";
    $i++;
}
echo "<br>";
//Практика 114.2
echo '114.2: ';
$i = 11;
while ($i <= 33) {
    echo "$i ";
    $i += 11;
}
echo "<br>";
//Практика 114.3
echo '114.3: ';
$i = 100;
while ($i > 0) {
    echo "$i ";
    $i--;
}
echo "<br>";
//Практика 114.4
echo '114.4: ';
$i = 100;
while ($i > 0) {
    echo "$i ";
    $i--;
}
echo "<br>";
//Практика 115.1
echo '115.1: ';
for ($i = 1; $i <= 100; $i++) {
    echo "$i ";
}
echo "<br>";
//Практика 115.2
echo '115.2: ';
for ($i = 11; $i <= 33; $i += 11) {
    echo "$i ";
}
echo "<br>";
//Практика 115.3
echo '115.3: ';
for ($i = 0; $i <= 100; $i += 2) {
    echo "$i ";
}
echo "<br>";
//Практика 115.4
echo '115.4: ';
for ($i = 1; $i <= 99; $i += 2) {
    echo "$i ";
}
echo "<br>";
//Практика 115.5
echo '115.5: ';
for ($i = 100; $i >= 0; $i--) {
    echo "$i ";
}
echo "<br>";
//Практика 116.1
$arr = [1, 2, 3, 4, 5];
echo '116.1: ';
foreach ($arr as $v) {
    if ($v % 2 === 1) {
        echo "$v ";
    }
}
echo "<br>";
//Практика 116.2
$arr = [2, 5, 9, 15, 1, 4];
echo '116.2: ';
foreach ($arr as $v) {
    if ($v > 3 and $v < 10) {
        echo "$v ";
    }
}
echo "<br>";
//Практика 116.3
$arr = [2, -5, 9, 15, 1, -4];
$sum = 0;
echo '116.3: ';
foreach ($arr as $v) {
    if ($v > 0) {
        $sum += $v;
    }
}
echo "$sum<br> ";
//Практика 116.4
$arr = [10, 20, 30, 50, 235, 3000];
echo '116.4: ';
foreach ($arr as $v) {
    $str_v = (string)$v;
    $num0 = $str_v[0];
    if ($num0 === '1' or $num0 === '2' or $num0 === '5') {
        echo "$v ";
    }
}
echo "<br> ";
//Практика 116.5
$daysOfWeek = [
    "Понедельник",
    "Вторник",
    "Среда",
    "Четверг",
    "Пятница",
    "Суббота",
    "Воскресенье"
];
echo '116.5: ';
foreach ($daysOfWeek as $day) {
    if ($day === "Суббота" or $day === "Воскресенье") {
        echo "<b>$day</b> ";
    } else {
        echo "$day ";
    }
}
echo "<br> ";
//Практика 116.6
echo '116.6: ';
$day = 5;
foreach ($daysOfWeek as $key => $dayOfWeek) {
    if ($day === $key + 1) {
        echo "<b>$dayOfWeek</b> ";
    } else {
        echo "$dayOfWeek ";
    }
}
echo "<br> ";