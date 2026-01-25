<?php

/**@var mysqli $link */
require 'config/db.php';

if (!isset($_SESSION['auth'])) {
    header('Location: ./login');
    exit;
} elseif (isset($_SESSION['status']) && $_SESSION['status'] === '1') {
    header('Location: ' . $basePath . '/ban');
}

if (!empty($_POST['topic'])) {
    $topic = $_POST['topic'];
    $query = "SELECT * FROM users WHERE login = '$_SESSION[login]'";
    $user = mysqli_fetch_assoc(mysqli_query($link, $query));

    if (!empty($user)) {
        $query = "INSERT 
                  INTO topics (title, user_id, created_at) 
                  VALUES ('$topic' , '$user[id]', NOW())";
        mysqli_query($link, $query);
        $message = "Тема успешно создана";
        header('Location: ./topics');
        exit;
    } else {
        header('Location: ./login');
        exit;
    }
} else {
    $message = 'Назовите тему';
}

$query = "SELECT COUNT(*) FROM topics";
$countTopics = mysqli_fetch_column(mysqli_query($link, $query));
$content = '<ul>';
if ($countTopics > 0) {
    $query = 'SELECT * FROM topics';
    $topics = mysqli_query($link, $query);
    foreach ($topics as $topic) {
        $title = str_replace(' ', '_', $topic['title']);
        $content .= "<li><a href='./topics/$title'><h4> $topic[title] </h4></a>";
        if ($_SESSION['role'] !== 'user') {
            $content .= "
                <form action='deleteTopic' method='POST'>
                    <input type='hidden' name='topic_id' value='$topic[id]'>
                    <button type='submit'>Удалить</button>
                </form>";
        } else {
            $content .= '</li>';
        }
    }
}

$content .= "
</ul>
<form method='post'>
    <h3>Создать тему</h3>
    Название <input type='text' name='topic'><br>
    <button type='submit'>Создать</button>
</form>
<h3>" . ($message ?? '') . "</h3>
";
return $page = [
    'title' => 'Темы',
    'content' => $content,
];
?>