<?php

if (!empty($_POST['login']) && !empty($_POST['password'])) {
    $login = $_POST['login'];

    $query = "SELECT * FROM users WHERE login = '$login'";

    $res = mysqli_query($link, $query) or die(mysqli_error($link));
    $user = mysqli_fetch_assoc($res);
    if ($user && password_verify($_POST['password'], $user['password'])) {
        $_SESSION['auth'] = true;
        header('Location: ../bulletin_board/category');
        exit;
    } else {
        $message = 'Неправильный логин или пароль!';
        $_SESSION['auth'] = false;
    }
}

$content = '
<form method="POST">
    <p>Логин:    <input type="text" name="login" required></p>
    <p>Пароль: <input type="password" name="password" required></p>
    <p><button type="submit">Войти</button></p>
    <h3>' . ($message ?? '') . '</h3>
</form>
';

$page = [
    'title' => 'Войти',
    'content' => $content
];

return $page;