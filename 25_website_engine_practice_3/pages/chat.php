<?php

require 'config/db.php';
/**@var mysqli $link */

if (!isset($_SESSION['auth'])) {
    header('Location:' . $basePath . '/login');
    exit;
}

if (isset($_POST['send_message'])) {
    $fromUserId = $_SESSION['user_id'];
    $toUserId = $_GET['id'];
    $message = mysqli_real_escape_string($link, $_POST['message']);

    if (!empty($message)) {
        mysqli_query(
            $link,
            "
            INSERT INTO messages (from_user, to_user, message)
            VALUES ('$fromUserId', '$toUserId', '$message')
        "
        );
    }
}

$user_id = $_SESSION['user_id'];
$friend_id = $_GET['id'];

$res = mysqli_query(
    $link,
    "
    SELECT * FROM messages
    WHERE (from_user = '$user_id' AND to_user = '$friend_id') 
       OR (from_user = '$friend_id' AND to_user = '$user_id')
    ORDER BY created_at ASC 
"
);

for ($messages = []; $row = mysqli_fetch_assoc($res); $messages[] = $row) {
}

$content = "<h1>Чат</h1>";
foreach ($messages as $message) {
    $content .= "<div class=\"message"
        . ($message['from_user'] == $user_id ? ' me' : '')
        . "\">$message[message]</div>";
}
$content .= "<form method='post'>
    <textarea placeholder=\"Введите сообщение\" name='message'></textarea>
    <button type='submit' name='send_message'>Отправить</button>
</form>";

return $page = [
    'title' => 'Чат',
    'content' => $content,
];
