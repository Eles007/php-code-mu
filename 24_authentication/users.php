<?php

session_start();
/** @var mysqli $link */
require_once 'config.php';

if (empty($_SESSION['auth'])) {
    header('Location: login.php');
    exit;
}

$query = "SELECT * FROM users";
$result = mysqli_query($link, $query);
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Пользователи</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include 'header.php'; ?>
<div class="auth-wrapper">
    <div class="auth-card auth-card--wide">

        <h1>Пользователи</h1>

        <div class="users-grid">
            <?php
            while ($user = mysqli_fetch_assoc($result)): ?>
                <a href="profile.php?id=<?= $user['id'] ?>" class="user-card">
                    <div class="user-avatar">
                        <?= strtoupper(mb_substr($user['login'], 0, 1)) ?>
                    </div>

                    <div class="user-info">
                        <div class="user-login"><?= htmlspecialchars($user['login']) ?></div>
                        <?php
                        if (!empty($user['email'])): ?>
                            <div class="user-email"><?= htmlspecialchars($user['email']) ?></div>
                        <?php
                        endif; ?>
                    </div>
                </a>
            <?php
            endwhile; ?>
        </div>

        <div class="auth-links">
            <a href="index.php">← На главную</a>
        </div>

    </div>
</div>

</body>
</html>