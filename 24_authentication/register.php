<?php

session_start();
/** @var mysqli $link */
require_once 'config.php';

$message = '';
$loginMessage = '';
$passwordMessage = '';

if (!empty($_POST)) {
    if (
            !empty($_POST['login']) &&
            !empty($_POST['password']) &&
            !empty($_POST['confim']) &&
            !empty($_POST['email']) &&
            !empty($_POST['birthdate']) &&
            !empty($_POST['name']) &&
            !empty($_POST['surname']) &&
            !empty($_POST['patronymic'])
    ) {
        $login = $_POST['login'];
        $password = $_POST['password'];
        $confim = $_POST['confim'];

        $isLogin = preg_match('#^[a-zA-Z0-9]+$#', $login);
        $isPassword = preg_match('#^[^\s]+$#', $password);

        if ($isLogin && $isPassword) {
            if (strlen($login) >= 4 && strlen($login) <= 10) {
                if (strlen($password) >= 6 && strlen($password) <= 12) {
                    if ($password === $confim) {
                        $email = $_POST['email'];
                        $birthdate = $_POST['birthdate'];
                        $name = $_POST['name'];
                        $surname = $_POST['surname'];
                        $patronymic = $_POST['patronymic'];
                        $registration_date = date('Y-m-d H:i:s');
                        $password_hash = password_hash($password, PASSWORD_DEFAULT);

                        $query = "SELECT * FROM users WHERE login = '$login'";
                        $user = mysqli_fetch_assoc(mysqli_query($link, $query));

                        if (empty($user)) {
                            $query = "INSERT INTO users SET
                                login = '$login',
                                password = '$password_hash',
                                birthdate = '$birthdate',
                                email = '$email',
                                name = '$name',
                                surname = '$surname',
                                patronymic = '$patronymic',
                                registration_date = '$registration_date'
                            ";
                            mysqli_query($link, $query);

                            $_SESSION['auth'] = true;
                            $_SESSION['login'] = $login;
                            $_SESSION['id'] = mysqli_insert_id($link);

                            header('Location: profile.php?id=' . mysqli_insert_id($link));
                            exit;
                        } else {
                            $message = 'Логин занят';
                        }
                    } else {
                        $message = 'Пароли не совпадают';
                    }
                } else {
                    $passwordMessage = 'Пароль от 6 до 12 символов';
                }
            } else {
                $loginMessage = 'Логин от 4 до 10 символов';
            }
        } else {
            $message = 'Недопустимые символы';
        }
    } else {
        $message = 'Заполните все поля';
    }
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="auth-wrapper">
    <div class="auth-card">
        <h1>Регистрация</h1>

        <?php
        if ($message): ?>
            <div class="alert"><?= $message ?></div>
        <?php
        endif; ?>

        <form method="post">

            <div class="form-group">
                <label>Логин</label>
                <input type="text" name="login" value="<?= $_POST['login'] ?? '' ?>" required>
                <small><?= $loginMessage ?></small>
            </div>

            <div class="form-group">
                <label>Пароль</label>
                <input type="password" name="password" required>
                <small><?= $passwordMessage ?></small>
            </div>

            <div class="form-group">
                <label>Повторите пароль</label>
                <input type="password" name="confim" required>
            </div>

            <div class="form-group">
                <label>Имя</label>
                <input type="text" name="name" required>
            </div>

            <div class="form-group">
                <label>Фамилия</label>
                <input type="text" name="surname" required>
            </div>

            <div class="form-group">
                <label>Фамилия</label>
                <input type="text" name="patronymic" required>
            </div>

            <div class="form-group">
                <label>Дата рождения</label>
                <input type="date" name="birthdate" value="<?= $_POST['birthdate'] ?? '' ?>" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="<?= $_POST['email'] ?? '' ?>" required>
            </div>

            <button type="submit">Зарегистрироваться</button>
        </form>

        <div class="auth-links">
            <a href="login.php">Войти</a>
            <a href="../index.php">На главную</a>
        </div>
    </div>
</div>

</body>
</html>
