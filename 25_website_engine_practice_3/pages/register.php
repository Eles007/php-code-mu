<?php

require 'config/db.php';
/**@var mysqli $link */

/*if (
    !empty($_POST['login']) &&
    !empty($_POST['name']) &&
    !empty($_POST['password']) &&
    !empty($_POST['confirm_password'])
) {
    $query = 'SELECT COUNT(*) FROM users';
    $countRecord = mysqli_fetch_column(mysqli_query($link, $query));
    if ($countRecord == 0) {
        $role = 'admin';
    } else {
        $role = 'user';
    }

    $login = $_POST['login'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    if ($password == $confirm_password) {
        $query = "SELECT * FROM users WHERE login = '$login'";
        $user = mysqli_fetch_assoc(mysqli_query($link, $query));
        if (empty($user)) {
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            $query = "INSERT 
                      INTO users (login, name, password, role, status) 
                      VALUES ('$login', '$name', '$password_hash', '$role', 0)";
            mysqli_query($link, $query);

            $_SESSION['login'] = $login;
            $_SESSION['role'] = $role;
            $_SESSION['auth'] = true;
            $_SESSION['user_id'] = $user['id'];
            $message = 'Успешно зарегистрировался';
            header('Location: ./');
            exit;
        } else {
            $message = 'Логин занят';
        }
    } else {
        $message = "Повторите пароль";
    }
} else {
    $message = 'Заполните формы!';
}*/

$content = "<h1>Регистрация</h1>
<form method=\"post\">
    <input type=\"email\" placeholder=\"Email\">
    <input type=\"password\" placeholder=\"Пароль\">
    <input type=\"text\" placeholder=\"Имя\">
    <input type=\"text\" placeholder=\"Фамилия\">
    <button>Зарегистрироваться</button>
</form>
<h3>" . ($message ?? '') . "</h3>";

return $page = [
    'title' => 'Регистрация',
    'content' => $content,
];
?>