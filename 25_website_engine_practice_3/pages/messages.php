<?php

require 'config/db.php';
/**@var mysqli $link */

if (!isset($_SESSION['auth'])) {
    header('Location:' . $basePath . '/login');
    exit;
}

$res = mysqli_query(
    $link,
    "
    SELECT u.id, p.name, p.surname
    FROM friends f
    JOIN users u ON (u.id = f.friend_id OR u.id = f.user_id)
    JOIN profiles p ON (p.user_id = u.id)
    WHERE (f.user_id = '$_SESSION[user_id]' OR f.friend_id = '$_SESSION[user_id]') 
      AND u.id != '$_SESSION[user_id]'
"
);
for ($friends = []; $row = mysqli_fetch_assoc($res); $friends[] = $row) {
}


$content = "<h1>Диалоги</h1>";
foreach ($friends as $friend) {
    $content .= "
    <div class=\"dialog\">
        <a href=\"$basePath/chat?id=$friend[id]\">$friend[name] $friend[surname]</a>
    </div>";
}
return $page = [
    'title' => 'Диологи',
    'content' => $content,
];
