<?php

session_start();
/**@var mysqli $link */
require_once 'config.php';

if (!empty($_POST['password'])) {
    $id = $_SESSION['id'];
    $query = "SELECT * FROM users WHERE id = '$id'";

    $res = mysqli_query($link, $query);
    $user = mysqli_fetch_assoc($res);

    $hash = $user['password'];

    if (password_verify($_POST['password'], $hash)) {
        $query = "DELETE FROM users WHERE id = '$id'";
        mysqli_query($link, $query);

        $message = "Пользователь удален!";
        header('Location: register.php');
        die();
    } else {
        $message = "Пароль введен не верно!";
    }
}

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Удаление пользователя</title>
</head>
<body>
<form method="post">
    <h2>Вы точно хотите удалить пользователя?</h2>
    <h3><?= $_SESSION['login'] ?></h3>
    Введите пароль <input type="password" name="password">
    <input type="submit">
</form>
<h3><?= $message ?? '' ?></h3>
</body>
</html>
