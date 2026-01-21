<?php

session_start();
/** @var mysqli $link */
require_once 'config.php';

if (!empty($_POST['login']) && !empty($_POST['password'])) {
    $login = $_POST['login'];
    $query = "SELECT 
                users.*, 
                statuses.name as status 
              FROM users 
              LEFT JOIN statuses ON users.status_id = statuses.id 
              WHERE login = '$login'
    ";
    $result = mysqli_query($link, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($_POST['password'], $user['password'])) {
        $_SESSION['auth'] = true;
        $_SESSION['login'] = $login;
        $_SESSION['id'] = $user['id'];
        $_SESSION['status'] = $user['status'];
        header('Location: index.php');
        exit;
    } else {
        $_SESSION['message'] = 'Неправильный логин или пароль';
    }
}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вход</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include 'header.php'; ?>
<div class="auth-wrapper">
    <div class="auth-card">
        <h1>Вход</h1>

        <?php
        if (!empty($_SESSION['message'])): ?>
            <div class="alert">
                <?= $_SESSION['message']; ?>
            </div>
            <?php
            unset($_SESSION['message']); ?>
        <?php
        endif; ?>

        <form method="post">
            <div class="form-group">
                <label>Логин</label>
                <input type="text" name="login" required>
            </div>

            <div class="form-group">
                <label>Пароль</label>
                <input type="password" name="password" required>
            </div>

            <button type="submit">Войти</button>
        </form>

        <div class="auth-links">
            <a href="register.php">Регистрация</a>
            <a href="../index.php">На главную</a>
        </div>
    </div>
</div>
</body>
</html>
