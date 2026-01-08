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
//Практика 117.1
echo '117.1: ';
$sum = 0;
for ($i = 0; $i <= 100; $i += 2) {
    $sum += $i;
}
echo "$sum <br> ";
//Практика 117.2
echo '117.2: ';
$sum = 0;
for ($i = 1; $i <= 99; $i += 2) {
    $sum += $i;
}
echo "$sum <br> ";
//Практика 117.3
echo '117.3: ';
$mult = 1;
for ($i = 1; $i <= 20; $i++) {
    $mult *= $i;
}
echo "$mult <br> ";
//Практика 118.1
$arr = [2, 5, 9, 3, 1, 4];
$sum = 0;
echo '118.1: ';
foreach ($arr as $v) {
    $sum += $v;
}
echo "$sum<br> ";
//Практика 118.2
$sum = 0;
echo '118.2: ';
foreach ($arr as $v) {
    if ($v % 2 === 0) {
        $sum += $v;
    }
}
echo "$sum<br> ";
//Практика 118.3
$sum = 0;
echo '118.3: ';
foreach ($arr as $v) {
    $sum += $v * $v;
}
echo "$sum<br> ";
//Практика 118.4
$mult = 1;
echo '118.3: ';
foreach ($arr as $v) {
    $mult *= $v;
}
echo "$mult<br> ";
//Практика 119.1
echo '119.1: ';
$str = '';
for ($i = 0; $i < 5; $i++) {
    $str .= '-';
}
echo "$str <br>";
//Практика 119.2
echo '119.2: ';
$str = '';
for ($i = 1; $i <= 9; $i++) {
    $str .= $i;
}
echo "$str <br>";
//Практика 119.3
echo '119.3: ';
$str = '';
for ($i = 9; $i > 0; $i--) {
    $str .= $i;
}
echo "$str <br>";
//Практика 119.4
echo '119.4: ';
$str = '';
for ($i = 1; $i <= 9; $i++) {
    $str .= "-$i";
}
echo "$str- <br>";
//Практика 122.1
echo '122.1: ';
$arr = [1, 2, 3, 0, 4, 5];
foreach ($arr as $v) {
    if ($v === 0) {
        break;
    } else {
        echo "$v ";
    }
}
echo "<br>";
//Практика 122.2
echo '122.2: ';
$arr = [1, 2, 3, -1, 3, 5];
$sum = 0;
foreach ($arr as $v) {
    if ($v < 0) {
        break;
    } else {
        $sum += $v;
    }
}
echo "$sum <br>";
//Практика 122.3
echo '122.3: ';
$arr = [1, 2, 3, -1, 3, 5];
foreach ($arr as $key => $v) {
    if ($v === 3) {
        echo "$v [$key] ";
        break;
    }
}
echo "<br>";
//Практика 122.4
echo '122.4: ';
$sum = 0;
for ($i = 0; $i <= 100; $i++) {
    $sum += $i;
    if ($sum > 100) {
        echo "Количество целых чисел - $i";
        break;
    }
}
echo "<br>";
//Практика 123
echo '123: ';
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 === 1) {
        continue;
    } else {
        echo "$i ";
    }
}
echo "<br>";
//Практика 124.1
$arr = ['a', 'b', 'c', 'd', 'e'];
echo '124.1: ';
$flag = false;
foreach ($arr as $v) {
    if ($v === 'c') {
        $flag = true;
        break;
    }
}
if ($flag) {
    echo '+++';
} else {
    echo '---';
}
echo "<br>";
//Практика 124.2
$arr = [1, 2, 3, 0, 4, 5];
echo '124.2: ';
foreach ($arr as $v) {
    if ($v <= 1) {
        echo "$v - не простое число ";
        continue;
    }
    if ($v === 2) {
        echo " [$v] ";
        continue;
    }
    if ($v % 2 === 0) {
        echo "$v - не простое число ";
        continue;
    }
    $isPrime = true;
    $sqrt = (int)sqrt($v);
    for ($i = 3; $i <= $sqrt; $i += 2) {
        if ($v % $i === 0) {
            $isPrime = false;
            break;
        }
    }
    echo $isPrime ? " [$v] " : "$v - не простое число ";
}
echo "<br>";
//Практика 125.1
echo '125.1: ';
for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 3; $j++) {
        echo "$i";
    }
}
echo "<br>";
//Практика 125.2
echo '125.2: ';
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 3; $j++) {
        echo "$i$j ";
    }
}
echo "<br>";
//Практика 126.1
echo '126.1: ';
$arr = ['a', 'b', 'c', 'd', 'e'];
$length = count($arr);
for ($i = 0; $i < $length; $i++) {
    echo "$arr[$i] ";
}
echo "<br>";
//Практика 126.2
echo '126.2: ';
for ($i = 0; $i < $length - 1; $i++) {
    echo "$arr[$i] ";
}
echo "<br>";
//Практика 126.3
echo '126.3: ';
$arr = [1, 2, 3, 4, 5, 6, 7, 8];
$length = count($arr);
for ($i = 0; $i < $length / 2; $i++) {
    echo "$arr[$i] ";
}
echo "<br>";
//Практика 127.1
echo '127.1: ';
$arr = [];
for ($i = 1; $i <= 100; $i++) {
    $arr[] = $i;
}
echo '[ ' . implode(', ', $arr) . ' ]';
echo "<br>";
//Практика 127.2
echo '127.2: ';
$arr = [];
for ($i = 1; $i < 100; $i += 2) {
    $arr[] = $i;
}
print_r($arr);
echo "<br>";
//Практика 128
echo '128: ';
$arr = [1, 2, 3, 4, 5];
$length = count($arr);
for ($i = 0; $i < $length; $i++) {
    $arr[$i] *= $arr[$i];
}
var_dump($arr);
echo "<br>";
//Практика 129
echo '129: ';
$arr = [10, 20, 30, 40, 21, 32, 51];
$sum = 0;
foreach ($arr as $value) {
    $str = (string)$value;
    if ($str[0] === '1' or $str[0] === '2') {
        $sum += $value;
    }
}
echo "$sum <br>";
//Практика 131.4
echo '131.4: ';
$arr = [];
for ($i = 0; $i < 10; $i++) {
    $arr[] = 'x';
}
var_dump($arr);
echo "<br>";
//Практика 131.10
echo '131.10: ';
$arr = [1, 2, 3, 4, 5, 6, 7, 8];
$length = count($arr);
$sum = 0;
foreach ($arr as $value) {
    $sum += $value;
}
echo ($sum / $length) . "<br>";
//Практика 131.11
echo '131.11: ';
$num = 4;
$mult = 1;
for ($i = 1; $i <= $num; $i++) {
    $mult *= $i;
}
echo "$mult ";
echo "<br>";
//Практика 131.12 - 131.13
echo '131.12 - 131.13: ';
$arr = [
    'employee1' => 100,
    'employee2' => 200,
    'employee3' => 300,
    'employee4' => 400,
    'employee5' => 500,
    'employee6' => 600,
    'employee7' => 700,
];
foreach ($arr as $k => $v) {
    if ($v <= 400) {
        $arr[$k] *= 1.1;
    }
}
echo implode(',', $arr);
echo "<br>";
//Практика 131.14
echo '131.14: ';
$arr = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10];
$sum_k = 0;
$sum_v = 0;
foreach ($arr as $k => $v) {
    $sum_k += $k;
    $sum_v += $v;
}
echo $sum_k / $sum_v;
echo "<br>";
//Практика 131.15
echo '131.15: ';
$arr = [
    'a' => 1,
    'b' => 2,
    'c' => 3,
    'd' => 4,
    'e'
    => 5
];
$arr_key = [];
$arr_value = [];
foreach ($arr as $k => $v) {
    $arr_key[] = $k;
    $arr_value[] = $v;
}
var_dump($arr_key, $arr_value);
echo "<br>";
//Практика 131.16
echo '131.16: ';
$arr = [
    1 => 125,
    2 => 225,
    3 => 128,
    4 => 356,
    5 => 145,
    6 => 281,
    7 => 452,
];
$newArr = [];
foreach ($arr as $v) {
    $str = (string)$v;
    if ($str[0] === '1' or $str[0] === '2') {
        $newArr[] = $v;
    }
}
var_dump($newArr);
echo "<br>";