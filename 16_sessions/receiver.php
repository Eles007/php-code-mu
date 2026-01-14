<?php

session_start();


echo "<a href=\"./sender.php\"><h1>Назад</h1></a>";

//322
if (!empty($_SESSION['user1'])) {
    echo "<ul>";
    foreach ($_SESSION['user1'] as $key => $value) {
        echo "<li>$key: $value</li>";
    }
    echo "</ul>";
}