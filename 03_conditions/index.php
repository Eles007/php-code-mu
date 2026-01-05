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