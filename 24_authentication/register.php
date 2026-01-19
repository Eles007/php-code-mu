<?php

session_start();
/** @var mysqli $link */
require_once 'config.php';

if (!empty($_POST['login']) and !empty($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $birthdate = $_POST['birthdate'];
    $email = $_POST['email'];
    $registration_date = $_POST['registration_date'];

    $query = "INSERT INTO users SET 
                        login = '$login', 
                        password = '$password', 
                        birthdate = '$birthdate', 
                        email = '$email', 
                        registration_date = '$registration_date'
                  ";
    mysqli_query($link, $query);

    $_SESSION['auth'] = true;
    header('Location: index.php');
    die();
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
</head>
<body>
<form action="" method="post">
    <input name="login">
    <input name="password" type="password">
    <input name="birthdate" type="date">
    <input name="email" type="email">
    <input name="registration_date" type="datetime-local" value="<?= date('Y-m-d H:i:s') ?>">
    <input type="submit">
</form>
</body>
</html>
