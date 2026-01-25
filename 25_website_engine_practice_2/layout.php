<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
</head>
<body>
<header>
    <a href="<?= $basePath ?>/">Главная</a> |
    <a href="<?= $basePath ?>/topics">Темы</a> |
    <?php
    if (isset($_SESSION['auth']) && $_SESSION['role'] === 'admin'):
        ?>
        <a href="<?= $basePath ?>/admin"> Админка </a>
    <?php
    endif; ?>
    <?php
    if (!empty($_SESSION['auth'])) : ?>
        <a href="<?= $basePath ?>/list"> Список пользователей </a>
        <a href="<?= $basePath ?>/logout"> Выйти </a>
        Здравствуйте, <?= $_SESSION['login'] ?> Доступ:<?= $_SESSION['role'] ?>
    <?php
    else : ?>
        <a href="<?= $basePath ?>/register"> Регистрация</a> |
        <a href="<?= $basePath ?>/login"> Вход</a>
    <?php
    endif; ?>
</header>
<hr>
<div>
    <?= $content ?>
</div>
</body>
</html>