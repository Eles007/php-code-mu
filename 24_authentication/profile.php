<?php

session_start();
/** @var mysqli $link */
require_once 'config.php';

$user = null;

if (!empty($_GET['id'])) {
    $id = (int)$_GET['id'];
    $query = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($link, $query);
    $user = mysqli_fetch_assoc($result);
}

if (!empty($_SESSION['auth']) && $user):
    ?>
    <!doctype html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Профиль пользователя</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <?php
    include 'header.php'; ?>
    <div class="auth-wrapper">
        <div class="auth-card">

            <h1>Профиль</h1>

            <div class="profile-info">
                <div class="profile-row">
                    <span>Логин:</span>
                    <strong><?= htmlspecialchars($user['login']) ?></strong>
                </div>

                <?php
                if (!empty($user['name'])): ?>
                    <div class="profile-row">
                        <span>Имя:</span>
                        <strong><?= htmlspecialchars($user['name']) ?></strong>
                    </div>
                <?php
                endif; ?>

                <?php
                if (!empty($user['surname'])): ?>
                    <div class="profile-row">
                        <span>Фамилия:</span>
                        <strong><?= htmlspecialchars($user['surname']) ?></strong>
                    </div>
                <?php
                endif; ?>

                <?php
                if (!empty($user['patronymic'])): ?>
                    <div class="profile-row">
                        <span>Отчество:</span>
                        <strong><?= htmlspecialchars($user['patronymic']) ?></strong>
                    </div>
                <?php
                endif; ?>

                <div class="profile-row">
                    <span>Возраст:</span>
                    <strong>
                        <?php
                        echo floor((time() - strtotime($user['birthdate'])) / (365.25 * 24 * 60 * 60));
                        ?> лет
                    </strong>
                </div>
            </div>

            <div class="auth-links">
                <a href="users.php">Список пользователей</a>
                <a href="index.php">На главную</a>
            </div>

        </div>
    </div>

    </body>
    </html>
<?php
endif; ?>