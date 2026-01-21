<?php

$link = require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($link, $_POST['name']);
    $email = mysqli_real_escape_string($link, $_POST['email']);

    $query = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    mysqli_query($link, $query) or die(mysqli_error($link));

    header('Location: /php-code-mu/25_website_engine/user/all');
    exit;
}

$content = '
<form method="POST">
    <p>Имя: <input type="text" name="name" required></p>
    <p>Email: <input type="email" name="email" required></p>
    <p><button type="submit">Добавить</button></p>
</form>
';

$page = [
    'title' => 'Добавить пользователя',
    'content' => $content
];

return $page;