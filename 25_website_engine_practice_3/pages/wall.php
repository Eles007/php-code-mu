<?php

require 'config/db.php';
/**@var mysqli $link */

if (!isset($_SESSION['auth'])) {
    header('Location:' . $basePath . '/login');
    exit;
}

if (isset($_GET)) {
    $user_id = $_GET['user_id'];
} else {
    $user_id = $_SESSION['user_id'];
}

if (isset($_POST['add_post'])) {
}

$content = "<h1>Стена</h1>
<form method='post'>
    <textarea name='content' placeholder=\"Что у вас нового?\"></textarea>
    <input type='hidden' name='wall_id' value='$user_id'>
    <button type='submit' name='add_post'>Опубликовать</button>
</form>

<div class=\"post\">
    <strong>Анна</strong>
    <p>Отличная соцсеть 👍</p>
    <span>5 минут назад</span>
</div>";
return $page = [
    'title' => 'Стена',
    'content' => $content,
];
