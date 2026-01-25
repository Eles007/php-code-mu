<?php

/**@var mysqli $link */
require 'config/db.php';

if (isset($_SESSION['status']) && $_SESSION['status'] === '1') {
    header('Location: ' . $basePath . '/ban');
}

$title = str_replace('_', ' ', $params[1]);

$query = "SELECT * FROM topics WHERE title = '$title'";
$topic = mysqli_fetch_assoc(mysqli_query($link, $query));


if (!empty($topic)) {
    $content = "<h2>{$topic['title']}</h2>";
    if (!empty($_POST['message'])) {
        $query = "INSERT 
        INTO messages(topic_id, user_id, text, created_at) 
        VALUES ('$topic[id]','$_SESSION[user_id]','$_POST[message]',NOW())";
        mysqli_query($link, $query);
        header('Location: ' . $basePath . '/topics/' . $params[1]);
        die;
    }
    $query = "SELECT * FROM messages
         LEFT JOIN users ON users.id = messages.user_id
         WHERE topic_id = '$topic[id]'";
    $res = mysqli_query($link, $query);

    for ($data = []; $message = mysqli_fetch_assoc($res); $data[] = $message) {
    }

    foreach ($data as $message) {
        $content .= "<p>{$message['text']} <small>Отправил: {$message['name']}  $message[created_at]</small></p>";
    }

    $content .= "
        <form method='post'>
        <textarea placeholder='Написать сообщение' name='message'></textarea>
        <button type='submit'>Отправить</button>
        </form>
        ";
} else {
    $content = 'Ошибка!Темы не существует!';
}

return $page = [
    'title' => 'Тема',
    'content' => $content
];