<?php

header('X-Content-type: text/html');
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>22_working_with_HTTP</title>
</head>
<body>
<a href="../index.php"><h1>Главная страница</h1></a>

<form action="request.php" method="post">
    Имя <input name="name" type="text" value="Иван">
    <input type="submit">
</form>

Метод <?= $_SERVER['REQUEST_METHOD']; ?> <br>
Accept <?= $_SERVER['HTTP_ACCEPT']; ?> <br>
Accept-Language <?= $_SERVER['HTTP_ACCEPT_LANGUAGE']; ?> <br>
<?php
foreach (getallheaders() as $name => $value) {
    echo "$name: $value<br>";
}

$arr = ['a', 'b', 'c'];

if (isset($_GET['key'])) {
    $key = $_GET['key'];

    if (isset($arr[$key])) {
        echo $arr[$key];
    } else {
        http_response_code(404);
        echo 'Not Found';
    }
} else {
    http_response_code(403);
    echo 'Forbidden';
}
?>
</body>
</html>
