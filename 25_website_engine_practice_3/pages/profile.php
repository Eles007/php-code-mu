<?php

require 'config/db.php';
/**@var mysqli $link */

if (!isset($_SESSION['auth'])) {
    header('Location:' . $basePath . '/login');
    exit;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        !empty($_POST['profile_name']) &&
        !empty($_POST['profile_surname']) &&
        !empty($_POST['profile_city']) &&
        !empty($_POST['profile_birthdate']) &&
        !empty($_POST['bio'])
    ) {
        $name = $_POST['profile_name'];
        $surname = $_POST['profile_surname'];
        $bio = $_POST['bio'];
        $city = $_POST['profile_city'];
        $birthdate = $_POST['profile_birthdate'];

        $query = "UPDATE profiles 
              SET name='$name', surname='$surname', bio='$bio', city='$city', birth_date='$birthdate'
              WHERE user_id='$_SESSION[user_id]'";

        mysqli_query($link, $query);
        header('Location: ' . $basePath . '/profile');
        exit;
    } else {
        $message = 'Заполните формы!';
    }
}

$user = mysqli_fetch_assoc(
    mysqli_query(
        $link,
        "SELECT users.id as user_id, profiles.name, profiles.surname, profiles.city, profiles.birth_date, profiles.bio
          FROM users
          LEFT JOIN profiles ON profiles.user_id = users.id
          WHERE user_id ='$_SESSION[user_id]'"
    )
);

$content = "<h1>Мой профиль</h1>
<div class=\"profile-header\">
    <div class=\"avatar-wrapper\">
        <div class=\"avatar\">
            <img src=\"pages/pug.jpg\"> 
        </div>
    </div>

    <form class=\"profile-form\" method=\"post\">
        <label>
            Имя
            <input type=\"text\" value=\"" . $user['name'] . "\" name=\"profile_name\"/>
        </label>

        <label>
            Фамилия
            <input type=\"text\" value=\"" . $user['surname'] . "\" name=\"profile_surname\"/>
        </label>

        <label>
            Город
            <input type=\"text\" value=\"" . ($user['city'] ?? '') . "\" name=\"profile_city\" />
        </label>

        <label>
            Дата рождения
            <input type=\"date\" value=\"" . ($user['birth_date'] ?? '') . "\" name=\"profile_birthdate\" />
        </label>

        <label>
            О себе
            <textarea name=\"bio\">" . ($user['bio'] ?? '') . "</textarea>
        </label>

        <button type='submit'>Сохранить изменения</button>
    </form>
</div>
<h2 align='center'>" . ($message ?? '') . "</h2>
";
return $page = [
    'title' => 'Профиль',
    'content' => $content,
];
?>