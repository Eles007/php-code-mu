<?php

/**@var mysqli $link */
require 'config/db.php';

/*if (!empty($_POST['login']) && !empty($_POST['password'])) {
    $password = $_POST['password'];
    $login = $_POST['login'];
    $query = "SELECT * FROM users WHERE login = '$login'";
    $user = mysqli_fetch_assoc(mysqli_query($link, $query));

    if (password_verify($password, $user['password'])) {
        if (!empty($user)) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['login'] = $user['login'];
            $_SESSION['auth'] = true;
            $_SESSION['role'] = $user['role'];
            $_SESSION['status'] = $user['status'];
            $message = 'Вы успешно зашли';
            header('Location: ./');
            exit;
        } else {
            $message = "Неправильный логин или пароль!";
        }
    } else {
        $message = "Неправильный логин или пароль!";
    }
} else {
    $message = 'Заполните форму';
}*/

$content = "<h1>Вход</h1>
<form>
    <input type=\"email\" placeholder=\"Email\">
    <input type=\"password\" placeholder=\"Пароль\">
    <button>Войти</button>
</form>
<h3>" . ($message ?? '') . "</h3>";

return $page = [
    'title' => 'Вход',
    'content' => $content,
];
?>