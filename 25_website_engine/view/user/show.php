<?php

$link = require 'db.php';

$user_id = (int)$user_id;
$query = "SELECT * FROM `users` WHERE id = '$user_id'";
$res = mysqli_query($link, $query) or die(mysqli_error($link));
$user = mysqli_fetch_assoc($res);

if (!$user) {
    $page = [
        'title' => 'Пользователь не найден',
        'content' => 'Такого пользователя нет.'
    ];
} else {
    $content = "<p>ID: $user[id]</p>
                <p>Имя: $user[name]</p>
                <p>Email: $user[email]</p>
                ";
    $page = [
        'title' => "Пользователь $user[name]",
        'content' => $content
    ];
}

return $page;
