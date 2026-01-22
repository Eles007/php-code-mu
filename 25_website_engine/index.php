<?php

/*session_start();
$url = $_SERVER['REQUEST_URI'];

if (preg_match('#/user/add$#', $url)) {
    $page = include 'view/user/add.php';
} elseif (preg_match('#/user/all$#', $url)) {
    $page = include 'view/user/all.php';
} elseif (preg_match('#/user/(?<id>[0-9]+)$#', $url, $params)) {
    $user_id = $params['id'];
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

echo $layout;*/

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

$route = '/page/(?<catSlug>[a-z0-9_-]+)/(?<pageSlug>[a-z0-9_-]+)$';
if (preg_match("#$route#", $url, $params)) {
    $page = include 'view/page/show.php';
}
$route = '/page/(?<catSlug>[a-z0-9_-]+)$';
if (preg_match("#$route#", $url, $params)) {
    $page = include 'view/page/category.php';
}
$route = '/$';
if (preg_match("#$route#", $url, $params)) {
    $page = include 'view/page/all.php';
}

$layout = file_get_contents('layout.php');
$layout = str_replace('{{ title }}', $page['title'], $layout);
$layout = str_replace('{{ content }}', $page['content'], $layout);

echo $layout;*/

$link = require 'db.php';
$url = urldecode($_SERVER['REQUEST_URI']);

$route = '/location/(?<country>[А-Яа-яЁёa-z0-9_-]+)/(?<city>[А-Яа-яЁёa-z0-9_-]+)$';
if (preg_match("#$route#u", $url, $params)) {
    $page = include 'view/location/city.php';
}
$route = '/location/(?<country>[А-Яа-яЁёa-z0-9_-]+)$';
if (preg_match("#$route#u", $url, $params)) {
    $page = include 'view/location/country.php';
}
$route = '/$';
if (preg_match("#$route#", $url, $params)) {
    $page = include 'view/location/all.php';
}

$layout = file_get_contents('layout.php');
$layout = str_replace('{{ title }}', $page['title'], $layout);
$layout = str_replace('{{ content }}', $page['content'], $layout);

echo $layout;
