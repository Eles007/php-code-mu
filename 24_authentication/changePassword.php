<?php

session_start();
/**@var mysqli $link */
require_once 'config.php';

if (!empty($_POST['old_password']) && !empty($_POST['new_password']) && !empty($_POST['new_password_confim'])) {
    $newPassword = $_POST['new_password'];
    $newPasswordConfim = $_POST['new_password_confim'];
    if ($newPassword == $newPasswordConfim) {
        $id = $_SESSION['id'];
        $query = "SELECT * FROM users WHERE id = '$id'";

        $res = mysqli_query($link, $query);
        $user = mysqli_fetch_assoc($res);

        $hash = $user['password'];
        $oldPassword = $_POST['old_password'];

        if (password_verify($oldPassword, $hash)) {
            $newPasswordHash = password_hash($newPassword, PASSWORD_DEFAULT);

            $query = "UPDATE users SET password = '$newPasswordHash' WHERE id = '$id'";
            mysqli_query($link, $query);

            $message = 'Пароль успешно изменен';
        } else {
            $message = "Неверный пароль!";
        }
    } else {
        $message = "Повторите пароль!";
    }
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Смена пароля</title>
</head>
<body>
<form method="post">
    <h3>Логин <?= $_SESSION['login'] ?? '' ?></h3>
    Старый пароль <input type="password" name="old_password"><br>
    Новый пароль <input type="password" name="new_password">
    Повторите пароль <input type="password" name="new_password_confim">
    <input type="submit" name="submit">
</form>
<h3><?= $message ?? '' ?></h3>
</body>
</html>
