<?php


$content = "<h1>Чат</h1>

<div class=\"message\">Привет!</div>
<div class=\"message me\">Здарова 👋</div>

<form>
    <textarea placeholder=\"Введите сообщение\"></textarea>
    <button>Отправить</button>
</form>";
return $page = [
    'title' => 'Чат',
    'content' => $content,
];
