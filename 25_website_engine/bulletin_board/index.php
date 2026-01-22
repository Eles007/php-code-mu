<?php

session_start();
require '../db.php';

$url = urldecode($_SERVER['REQUEST_URI']);

$route = '/bulletin_board/login$';
if (preg_match("#$route#", $url)) {
    $page = include 'login.php';
}

$route = '/bulletin_board/category$';
if (preg_match("#$route#", $url)) {
    $page = include 'category.php';
}

$route = '/bulletin_board/category/ads$';
if (preg_match("#$route#", $url)) {
    $page = include 'ads.php';
}

$layout = file_get_contents('layout.php');
$layout = str_replace('{{ title }}', $page['title'], $layout);
$layout = str_replace('{{ content }}', $page['content'], $layout);

echo $layout;