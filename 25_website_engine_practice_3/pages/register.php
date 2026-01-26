<?php

require 'config/db.php';
/**@var mysqli $link */

if (
    !empty($_POST['register_email']) &&
    !empty($_POST['register_password']) &&
    !empty($_POST['register_password_confirm']) &&
    !empty($_POST['register_name']) &&
    !empty($_POST['register_surname'])
) {
    $email = $_POST['register_email'];
    $password = $_POST['register_password'];
    $password_confirm = $_POST['register_password_confirm'];
    $name = $_POST['register_name'];
    $surname = $_POST['register_surname'];
    if ($password == $password_confirm) {
        $query = "SELECT * FROM users WHERE email = '$email'";
        $user = mysqli_fetch_assoc(mysqli_query($link, $query));
        if (empty($user)) {
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            mysqli_query(
                $link,
                "INSERT 
                      INTO users (email	, password, created_at) 
                      VALUES ('$email', '$password_hash', NOW())"
            );
            mysqli_query(
                $link,
                "INSERT 
                      INTO profiles (user_id, name, surname) 
                      VALUES (LAST_INSERT_ID(), '$name', '$surname')"
            );

            $_SESSION['auth'] = true;
            $message = 'Успешно зарегистрировался';
            header('Location: ' . $basePath . '/profile');
            exit;
        } else {
            $message = 'Email занят';
        }
    } else {
        $message = "Повторите пароль";
    }
} else {
    $message = 'Заполните формы!';
}

$content = "<h1>Регистрация</h1>
<form method=\"post\">
    <input type=\"email\" placeholder=\"Email\" name=\"register_email\" />
    <input type=\"password\" placeholder=\"Пароль\" name=\"register_password\" />
    <input type=\"password\" placeholder=\"Повторите пароль\" name=\"register_password_confirm\" />
    <input type=\"text\" placeholder=\"Имя\" name=\"register_name\" />
    <input type=\"text\" placeholder=\"Фамилия\" name=\"register_surname\" />
    <button type='submit'>Зарегистрироваться</button>
</form>
<h3>" . ($message ?? '') . "</h3>";

return $page = [
    'title' => 'Регистрация',
    'content' => $content,
];
?>