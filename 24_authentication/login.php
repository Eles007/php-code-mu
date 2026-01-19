<?php

session_start();
/** @var mysqli $link */
require_once 'config.php';

$is_login_in = false;

if (!empty($_POST['password']) and !empty($_POST['login'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
    $result = mysqli_query($link, $query);
    $user = mysqli_fetch_assoc($result);
    $message = '';

    if (!empty($user)) {
        $_SESSION['message'] = "$_POST[login] is logged in.";
        $is_login_in = true;
        $_SESSION['auth'] = true;
        $_SESSION['login'] = $login;
        header('Location: index.php');
        die();
    } else {
        $_SESSION['message'] = "Invalid username or password.";
    }
}
?>


<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Аутентификация</title>
</head>
<body>
<a href="../index.php"><h1>Главная страница</h1></a>
<?php
if (!$is_login_in) : ?>
    <form action="" method="post">
        <input name="login">
        <input name="password" type="password">
        <input type="submit">
    </form>
<?php
endif; ?>
<h4><?php
    if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }; ?></h4>
<a href="register.php"><h4>Регистрация</h4></a>
</body>
</html>
