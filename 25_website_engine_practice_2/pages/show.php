<?php

/**@var mysqli $link */
require 'config/db.php';

$title = str_replace('_', ' ', $params[1]);

$query = "SELECT * FROM topics WHERE title = '$title'";
$topic = mysqli_fetch_assoc(mysqli_query($link, $query));

if (!empty($topic)) {
    $content = "
        <h2>{$topic['title']}</h2>
        ";
} else {
    $content = 'Ошибка! Темы не существует!';
}

return $page = [
    'title' => 'Тема',
    'content' => $content
];