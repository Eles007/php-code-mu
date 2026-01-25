<?php

if (isset($_SESSION['status']) && $_SESSION['status'] === '1') {
    header('Location: ' . $basePath . '/ban');
}

return $page = [
    'title' => "Главная страница",
    'content' => "Это сайт форум"
];

