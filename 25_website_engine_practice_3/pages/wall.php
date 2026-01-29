<?php

require 'config/db.php';
/**@var mysqli $link */

if (!isset($_SESSION['auth'])) {
    header('Location:' . $basePath . '/login');
    exit;
}

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];
} else {
    $user_id = $_SESSION['user_id'];
}

if (isset($_POST['add_post'])) {
    $author_id = $_SESSION['user_id'];
    $wall_id = $_POST['wall_id'];
    $content = mysqli_real_escape_string($link, $_POST['content']);

    if (!empty($content)) {
        mysqli_query(
            $link,
            "
            INSERT INTO posts (author_id, wall_id, content)
            VALUES ('$author_id', '$wall_id', '$content')
        "
        );
    }
}

$wall_id = $user_id;

$res = mysqli_query(
    $link,
    "
        SELECT p.*, profiles.name, profiles.surname 
        FROM posts p
        JOIN profiles ON profiles.user_id = p.author_id
        WHERE p.wall_id = '$wall_id'
        ORDER BY p.created_at DESC
        "
);

for ($posts = []; $row = mysqli_fetch_assoc($res); $posts[] = $row) {
}

$content = "<h1>Стена</h1>
<form method='post'>
    <textarea name='content' placeholder=\"Что у вас нового?\"></textarea>
    <input type='hidden' name='wall_id' value='$user_id'>
    <button type='submit' name='add_post'>Опубликовать</button>
</form>";

foreach ($posts as $post) {
    $content .= "<div class=\"post\">
        <strong>$post[name]</strong>
        <p>$post[content]</p>
        <span>$post[created_at]</span>
    </div>";
}

return $page = [
    'title' => 'Стена',
    'content' => $content,
];
