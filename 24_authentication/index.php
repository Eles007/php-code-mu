<?php

session_start();
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>index</title>
</head>
<body>
<?php
if (!empty($_SESSION['auth'])): ?>
    <h2>Здравствуйте, <?= $_SESSION['login'] ?></h2>
    <?php
    if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
; ?>
    <a href="logout.php"><h4>Выйти</h4></a>
<?php
else: ?>
    <h2><?php
        if (!isset($_SESSION['auth'])) {
            echo "Пользователь не авторизирован";
        } ?></h2>
    <a href="login.php"><h4>Авторизируйтесь</h4></a>
<?php
endif; ?>
</body>
</html>
