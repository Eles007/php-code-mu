<?php


$content = "<h1>Стена</h1>

<form>
    <textarea placeholder=\"Что у вас нового?\"></textarea>
    <button>Опубликовать</button>
</form>

<div class=\"post\">
    <strong>Анна</strong>
    <p>Отличная соцсеть 👍</p>
    <span>5 минут назад</span>
</div>";
return $page = [
    'title' => 'Стена',
    'content' => $content,
];
