<?php

echo "<a href='../'><h1>Главная страница</h1></a>";
//Практика 148.1
$str = 'abcde';
echo '148.1: ' . strlen($str) . "<br>";
//Практика 148.2
$str = 'привет';
echo '148.2: ' . mb_strlen($str) . "<br>";
//Практика 148.3
$password = 'qqqfdgg,.';
$length = mb_strlen($password);
echo '148.2: ';
if ($length > 5 and $length < 10) {
    echo 'Пароль подходит!';
} else {
    echo 'Пароль не подходит!';
}
echo "<br>";