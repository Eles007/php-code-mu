<?php


$content = "<div class=\"profile-header\">
    <div class=\"avatar\"></div>
    <div>
        <h2>Иван Иванов</h2>
        <p>г. Казань</p>
        <button>Добавить в друзья</button>
        <button class=\"secondary\">Написать</button>
    </div>
</div>";
return $page = [
    'title' => 'Профиль',
    'content' => $content,
];
?>