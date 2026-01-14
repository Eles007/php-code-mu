<?php

echo "<a href=\"../\"><h1>Главная страница</h1></a>";
echo "<a href=\"./receiver.php\"><h1>Страница</h1></a>";


if (!isset($_COOKIE['first-time-entry'])) {
    setcookie('first-time-entry', time());
    $_COOKIE['first-time-entry'] = time();
} else {
    setcookie('time', time() - $_COOKIE['first-time-entry']);
    $_COOKIE['first-time-entry'] = time() - $_COOKIE['first-time-entry'];
}

echo $_COOKIE['time'];

setcookie('test', "aaaaaaa", time() + 60 * 60 * 24 * 30 * 12 * 10);

if (isset($_COOKIE['test'])) {
    //setcookie('test', '', time()); // удаление
    unset($_COOKIE['test']); // удаление
}
var_dump($_COOKIE['test']);