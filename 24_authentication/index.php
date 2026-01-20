<?php

session_start();
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="auth-wrapper">
    <div class="auth-card">

        <?php
        if (!empty($_SESSION['auth'])): ?>

            <h1>Здравствуйте, <?= htmlspecialchars($_SESSION['login']) ?> 👋</h1>

            <?php
            if (!empty($_SESSION['message'])): ?>
                <div class="alert">
                    <?= $_SESSION['message']; ?>
                </div>
                <?php
                unset($_SESSION['message']); ?>
            <?php
            endif; ?>

            <div class="auth-links">
                <a href="logout.php">Выйти</a>
            </div>

        <?php
        else: ?>

            <h1>Доступ ограничен</h1>
            <p style="text-align:center;">Пользователь не авторизован</p>

            <div class="auth-links">
                <a href="login.php">Авторизоваться</a>
                <a href="register.php">Регистрация</a>
            </div>

        <?php
        endif; ?>

    </div>
</div>

</body>
</html>
