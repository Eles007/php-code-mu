<?php

session_start();
$url = $_SERVER['REQUEST_URI'];

if (preg_match('#/user/add$#', $url)) {
    $page = include 'view/user/add.php';
} elseif (preg_match('#/user/all$#', $url)) {
    $page = include 'view/user/all.php';
} elseif (preg_match('#/user/([0-9]+)$#', $url, $params)) {
    $user_id = $params[1];
    $page = include 'view/user/show.php';
} else {
    $page = [
        'title' => '404',
        'content' => 'Page not found'
    ];
}

$layout = file_get_contents('layout.php');
$layout = str_replace('{{ title }}', $page['title'], $layout);
$layout = str_replace('{{ content }}', $page['content'], $layout);

echo $layout;

/*$url = 'view/dir/page2.php';

$layout = file_get_contents('layout.php');
$content = file_get_contents($url);

preg_match('#\{\{ title: "(.+?)" \}\}#', $content, $matches);
$title = $matches[1];
$content = preg_replace('#\{\{ title: "(.+?)" \}\}#', '', $content);


$layout = str_replace('{{ content }}', $content, $layout);
$layout = str_replace('{{ title }}', $title, $layout);

$path = 'view/dir/page2.php';

if (file_exists($path)) {
    $content = file_get_contents($path);
} else {
    header("HTTP/1.1 404 Not Found");
    $content = file_get_contents('view/404.php');
    die();
}

echo $layout;*/

/*$link = require 'db.php';
$url = $_SERVER['REQUEST_URI'];


if (preg_match('#/page/all$#', $url, $params)) {
    $page = include 'view/page/all.php';
} elseif (preg_match('#/page/([a-z0-9_-]+)$#', $url, $params)) {
    $slug = $params[1];
    $page = include 'view/page/show.php';
}

$layout = file_get_contents('layout.php');
$layout = str_replace('{{ title }}', $page['title'], $layout);
$layout = str_replace('{{ content }}', $page['content'], $layout);

echo $layout;*/
