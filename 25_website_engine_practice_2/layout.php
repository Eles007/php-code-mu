<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
</head>
<body>
<header>
    <a href="./">Главная</a> |
    <a href="./topics">Темы</a> |
    <?php
    if (!empty($_SESSION['auth'])) : ?>
        <a href="./logout"> Выйти </a>
        Здравствуйте, <?= $_SESSION['login'] ?> Доступ:<?= $_SESSION['role'] ?>
    <?php
    else : ?>
        <a href="./register"> Регистрация</a> |
        <a href="./login"> Вход</a>
    <?php
    endif; ?>
</header>
<hr>
<div>
    <?= $content ?>
</div>
</body>
</html>