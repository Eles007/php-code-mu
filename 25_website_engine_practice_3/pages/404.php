<?php


$content = "<div class=\"error-404\">
    <h1>404</h1>
    <h2>Страница не найдена</h2>

    <p>
        Возможно, страница была удалена или вы ошиблись адресом.
    </p>

    <a href=\"" . $basePath . "/profile\" class=\"btn\">Вернуться на главную</a>
</div>";
return $page = [
    'title' => 'Ошибка',
    'content' => $content,
];
