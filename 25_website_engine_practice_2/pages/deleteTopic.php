<?php

require 'config/db.php';
/**@var mysqli $link */

if (!empty($_POST['topic_id'])) {
    $topic_id = $_POST['topic_id'];
    $query = "SELECT * FROM messages WHERE topic_id = '$topic_id'";
    $result = mysqli_query($link, $query);
    while ($message = mysqli_fetch_assoc($result)) {
        $query = "DELETE FROM messages WHERE topic_id = '$topic_id'";
        mysqli_query($link, $query);
    }
    $query = "DELETE FROM topics WHERE id = '$topic_id'";
    mysqli_query($link, $query);
}
header('Location: ' . $basePath . '/topics');
exit;