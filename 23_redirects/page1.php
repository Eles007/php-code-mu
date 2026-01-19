<?php

session_start();
echo "<a href=\"index.php\"><h1>Назад</h1></a>";
/*if ($_GET['success'] == 1) {
    echo "<h3>Успех</h3>";
}

if (!isset($_GET['num']) == 1) {
    header("Location: ?num=1");
}*/

$_SESSION['flash'][] = 'message 2';