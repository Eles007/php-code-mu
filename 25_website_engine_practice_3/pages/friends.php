<?php

require 'config/db.php';
/**@var mysqli $link */

$user_id = $_SESSION['user_id'];

if (!isset($_SESSION['auth'])) {
    header('Location:' . $basePath . '/login');
    exit;
}

$res = mysqli_query($link, "SELECT * FROM users LEFT JOIN profiles ON profiles.user_id = users.id");
for ($data = []; $friend = mysqli_fetch_assoc($res); $data[] = $friend) {
}

if (isset($_POST['add'])) {
    $friend_id = $_POST['friend_id'];
    $check = mysqli_query(
        $link,
        "
            SELECT id FROM friends 
            WHERE (user_id = '$user_id' AND friend_id = '$friend_id')
            OR (user_id = '$friend_id' AND friend_id = '$user_id')"
    );

    if (mysqli_num_rows($check) == 0) {
        mysqli_query(
            $link,
            "
                INSERT INTO friends (user_id, friend_id) 
                VALUES ('$_SESSION[user_id]', '$friend_id')"
        );
    }
}
if (isset($_POST['accept'])) {
    $friend_id = $_POST['friend_id'];
    mysqli_query(
        $link,
        "
            UPDATE friends 
            SET status = 'accepted' 
            WHERE user_id = '$friend_id' AND friend_id = '$user_id'"
    );
}

$res = mysqli_query(
    $link,
    "
        SELECT user_id, friend_id, status 
        FROM friends 
        WHERE user_id = '$user_id' OR friend_id = '$user_id'"
);

for ($relations = []; $row = mysqli_fetch_assoc($res);) {
    $other_id = ($row['user_id'] == $user_id) ? $row['friend_id'] : $row['user_id'];
    $relations[$other_id] = [
        'status' => $row['status'],
        'from' => $row['user_id']
    ];
}

$content = "<h1>Друзья</h1>";
foreach ($data as $friend) {
    $friend_id = $friend['id'];

    if ($friend_id == $user_id) {
        continue;
    }

    if (!isset($relations[$friend_id])) {
        $button = "<button type='submit' name='add'>Добавить</button>";
    } elseif (
        $relations[$friend_id]['status'] === 'pending'
        && $relations[$friend_id]['from'] == $user_id) {
        $button = "<span>Отправлено</span>";
    } elseif ($relations[$friend_id]['status'] === 'pending') {
        $button = "<button type='submit' name='accept'>Принять</button>";
    } else {
        $button = "<span>Друг</span>";
    }

    $content .= "
        <form method='post'>
            <div class=\"friend\">
                <span>$friend[name] $friend[surname]</span>
                <input hidden='hidden' name='friend_id' value='$friend[id]'>
                $button
            </div>
        </form>";
}
return $page = [
    'title' => 'Друзья',
    'content' => $content,
];
