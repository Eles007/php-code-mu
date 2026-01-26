<?php


$content = "<div class=\"home\">
    <h1> Добро пожаловать в MySocial </h1>

    <p class=\"home-text\">
        МояСеть — это учебная социальная сеть, в которой вы можете
        общаться с друзьями, публиковать записи на стене и обмениваться
        личными сообщениями .
    </p>

    <div class=\"home-actions\">
        <a href=\"" . $basePath . "/profile\" class=\"home-btn\"> Перейти в профиль </a><br>
        <a href=\"" . $basePath . "/friends\" class=\"home-btn secondary\"> Найти друзей </a>
    </div>
</div>";

return $page = [
    'title' => 'Главная страница',
    'content' => $content,
];