<?php

session_start();

$basePath = '/php-code-mu/25_website_engine_practice_2';
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$path = str_replace($basePath, '', $uri);
$path = $path ?: '/';

if ($path === '/register') {
    $page = include 'pages/register.php';
} elseif ($path === '/logout') {
    $page = include 'pages/logout.php';
} elseif ($path === '/login') {
    $page = include 'pages/login.php';
} elseif ($path === '/topics') {
    $page = include 'pages/topics.php';
} elseif (preg_match('#/topics/([А-Яа-яЁёa-z0-9-_]+)$#u', $path, $params)) {
    $page = include 'pages/show.php';
} elseif ($path === '/admin') {
    $page = include 'pages/admin.php';
} elseif ($path === '/') {
    $page = include 'pages/home.php';
} else {
    http_response_code(404);
    $page = include 'pages/404.php';
}

$title = $page['title'];
$content = $page['content'];

require 'layout.php';