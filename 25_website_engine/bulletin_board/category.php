<?php

if ($_SESSION['auth']) {
    $query = "SELECT * FROM category";

    $res = mysqli_query($link, $query) or die(mysqli_error($link));

    for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row) {
    }

    $content = '';
    foreach ($data as $category) {
        $content .= '
    <div>
        <a href="./category/ads">' . $category['name'] . ' </a >
    </div >
    ';
    }

    $page = [
        'title' => 'Выберите рубрику ',
        'content' => $content,
    ];
} else {
    $page = [
        'title' => 'Ошибка ',
        'content' => 'Войдите в профиль!',
    ];
}

return $page;