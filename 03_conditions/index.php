<?php
echo "<a href='../'><h1>Главная страница</h1></a>";
//Практика 71.1
$test1 = 10;
$test2 = 20;
echo '71.1: ';
if($test1 > $test2){
    echo 'test1 - больше';
} else {
    echo 'test2 - больше';
}
echo "<br>";
//Практика 91.1
$test = 10;
echo '91.1: ';
 if ($test == 10) {
     echo '+++';
 }
echo "<br>";
//Практика 94.1
$day = 30;
echo '94.1: ';
if (1 <=$day and $day<= 10) {
    echo '1 декада';
}

if (11 <=$day and $day<= 20) {
    echo '2 декада';
}

if (21 <=$day and $day<= 31) {
    echo '3 декада';
}
echo "<br>";
//Практика 95
echo '95: ';
if (1 <=$day and $day<= 10) {
    echo '1 декада';
}elseif (11 <=$day and $day<= 20) {
    echo '2 декада';
}elseif (21 <=$day and $day<= 31) {
    echo '3 декада';
} else {
    echo 'Ошибка: Число не подходит';
}
echo "<br>";
//Практика 96
$age = 19;
echo '96: ';
if (10 < $age and $age < 99) {
    $sum = (int)($age / 10) + ($age % 10);
    if($sum <= 9){
        echo 'Сумма чисел однозначна';
    } else {
        echo 'Сумма чисел двухзначна';
    }
} else {
    echo 'Ошибка: Ваш возраст не подходит!';
}
echo "<br>";
//Практика 97
$num = 2;
echo '97: ';
switch ($num) {
    case 1:
        echo 'Зима';
        break;
    case 2:
        echo 'Весна';
        break;
    case 3:
        echo 'Лето';
        break;
    case 4:
        echo 'Осень';
        break;
    default:
        echo 'Ошибка: Нет такого сезона!';
        break;
}
echo "<br>";
//Практика 99
$num = 3;
echo '99: ';
echo match($num) {
    1 => 'Зима',
    2 => 'Весна',
    3 => 'Лето',
    4 => 'Осень',
    default => 'Ошибка: Нет такого сезона!'
};
echo "<br>";
//Практика 101
$num = 4;
echo '101: ';
$res = ($num >= 0) ? 1 : -1;
echo $res;
echo "<br>";
//Практика 102
$user = ['name' => 'john', 'age' => 30];
echo '102: ';
$name = $user['name'] ?? 'unknown';
echo $name;
echo "<br>";
//Практика 103
$res = $user['name'] ?? $user['age'] ?? 'empty';
//Практика 105
echo '105: ';
$min = 10;

if ($min >= 0 and $min <= 20) {
    echo '1 quarter';
}

if ($min >= 21 and $min <= 40) {
    echo '2 quarter';
}

if ($min >= 41 and $min <= 60) {
    echo '3 quarter';
}
echo "<br>";
//Практика 106
echo '106: ';
$arr = [1,2,3];
if(count($arr) == 3){
    echo $arr[0] + $arr[1] + $arr[2];
}
echo "<br>";
//Практика 107
echo '107: ';
$str = '1230';
var_dump ($str[-1] === '0');
echo "<br>";
//Практика 108.1
$num = 100;
echo '108.1: ';
echo ($num % 2 === 0) ? 'четное' : 'нечетное';
echo "<br>";
//Практика 108.2
echo '108.2: ';
var_dump ($num % 3 === 0);
echo "<br>";
//Практика 110.1
echo '110.1: ';
$month = 5;
if( $month === 12 or (1 <= $month and  $month <= 2) ){
    echo 'Зима';
} elseif( 3 <= $month and  $month <= 5 ){
    echo 'Весна';
} elseif( 6 <= $month and  $month <= 8 ){
    echo 'Лето';
} elseif( 9 <= $month and  $month <= 11 ){
    echo 'Осень';
}
echo "<br>";
//Практика 110.2
echo '110.2: ';
$str = 'abcde';
var_dump($str[0] === 'a');
echo "<br>";
//Практика 110.3
echo '110.3: ';
$num = 12345;
$num0 = (int) ($num / 10000);
var_dump($num0 === 1 or $num0 === 2 or $num0 === 3);
echo "<br>";
//Практика 110.4
echo '110.4: ';
$num = 123;
$str = (string) $num;
echo $str[0] + $str[1] + $str[2];
echo "<br>";
//Практика 110.5
echo '110.5: ';
$num = 123123;
$str = (string) $num;
var_dump($str[0] + $str[1] + $str[2] === $str[3] + $str[4] + $str[5]);
echo "<br>";