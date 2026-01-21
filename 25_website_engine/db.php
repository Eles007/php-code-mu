<?php

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'mydb';

$link = mysqli_connect($host, $user, $password, $db);

if (!$link) {
    die("Ошибка подключения: " . mysqli_connect_error());
}

return $link;