<?php

/**@var mysqli $link */
require 'config/db.php';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $password = $_POST['password'];
    $email = $_POST['email'];
    $query = "SELECT * FROM users WHERE email = '$email'";
    $user = mysqli_fetch_assoc(mysqli_query($link, $query));

    if (password_verify($password, $user['password'])) {
        if (!empty($user)) {
            $_SESSION['auth'] = true;
            $_SESSION['user_id'] = $user['id'];
            $message = 'Вы успешно зашли';
            header('Location:' . $basePath);
            exit;
        } else {
            $message = "Неправильный логин или пароль!";
        }
    } else {
        $message = "Неправильный логин или пароль!";
    }
} else {
    $message = 'Заполните форму';
}

$content = "<h1>Вход</h1>
<form method='post'>
    <input type=\"email\" placeholder=\"Email\" name=\"email\">
    <input type=\"password\" placeholder=\"Пароль\" name=\"password\">
    <button type='submit'>Войти</button>
</form>
<h3>" . ($message ?? '') . "</h3>";

return $page = [
    'title' => 'Вход',
    'content' => $content,
];
?>