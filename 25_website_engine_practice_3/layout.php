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
        <div class="logo">МояСеть</div>

        <nav class="menu">
            <a href="/profile">Профиль</a>
            <a href="/friends">Друзья</a>
            <a href="/messages">Сообщения</a>
            <a href="/wall">Стена</a>
            <a href="/logout" class="logout">Выйти</a>
        </nav>
    </div>
</header>

<main class="main">
    <?= $content ?>
</main>

</body>
</html>