<?php

$link = require 'db.php';

$query = "SELECT id, name, email FROM users";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

$content = '<ul>';
while ($row = mysqli_fetch_assoc($result)) {
    $content .= '<li><a href="/php-code-mu/25_website_engine/user/' . $row['id'] . '">' . $row['name'] . ' (' . $row['email'] . ')</a></li>';
}
$content .= '</ul>';

$page = [
    'title' => 'Все пользователи',
    'content' => $content
];

return $page;