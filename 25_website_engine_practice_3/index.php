<?php

session_start();

$basePath = '/php-code-mu/25_website_engine_practice_3';
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$path = str_replace($basePath, '', $uri);
$path = $path ?: '/';

if ($path === '/register') {
    $page = include 'pages/register.php';
} elseif ($path === '/login') {
    $page = include 'pages/login.php';
} elseif ($path === '/profile') {
    $page = include 'pages/profile.php';
} elseif ($path === '/friends') {
    $page = include 'pages/friends.php';
} elseif ($path === '/messages') {
    $page = include 'pages/messages.php';
} elseif ($path === '/chat') {
    $page = include 'pages/chat.php';
} elseif ($path === '/wall') {
    $page = include 'pages/wall.php';
}else {
    http_response_code(404);
    $page = include 'pages/404.php';
}

$title = $page['title'];
$content = $page['content'];

require 'layout.php';