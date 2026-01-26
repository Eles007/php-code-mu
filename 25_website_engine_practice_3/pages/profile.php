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

} else {
    $message = 'Заполните формы!';
}

$content = "<h1>Мой профиль</h1>

<div class=\"profile-header\">
    <div class=\"avatar-wrapper\">
        <div class=\"avatar\"></div>
    </div>

    <form class=\"profile-form\">
        <label>
            Имя
            <input type=\"text\" value=\"Иван\">
        </label>

        <label>
            Фамилия
            <input type=\"text\" value=\"Иванов\" name=\"profile_name\" />
        </label>

        <label>
            Город
            <input type=\"text\" value=\"Казань\" name=\"profile_city\" />
        </label>

        <label>
            Дата рождения
            <input type=\"date\" value=\"2000-01-01\" name=\"profile_birthday\" />
        </label>

        <label>
            О себе
            <textarea name=\"\">Люблю программирование и спорт</textarea>
        </label>

        <button>Сохранить изменения</button>
    </form>
</div>";
return $page = [
    'title' => 'Профиль',
    'content' => $content,
];
?>