<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Социальная сеть' ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="header">
    <div class="header-inner">
        <div class="logo"><a href="<?= $basePath ?>/">МояСеть</a></div>

        <nav class="menu">
            <a href="<?= $basePath ?>/profile">Профиль</a>
            <a href="<?= $basePath ?>/friends">Друзья</a>
            <a href="<?= $basePath ?>/messages">Сообщения</a>
            <a href="<?= $basePath ?>/wall">Стена</a>
            <?php
            if (isset($_SESSION['auth'])): ?>
                <a href="<?= $basePath ?>/logout" class="logout">Выйти</a>
            <?php
            else: ?>
                <a href="<?= $basePath ?>/register">Регистрация</a>
                <a href="<?= $basePath ?>/login">Войти</a>
            <?php
            endif; ?>
        </nav>
    </div>
</header>

<main class="main">
    <?= $content ?>
</main>

</body>
</html>