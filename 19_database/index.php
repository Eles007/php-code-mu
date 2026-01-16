<meta charset="utf-8">
<a href="../index.php"><h1>Главная страница</h1></a>
<?php
$host = "localhost";
$user = "root";
$password = "";
$name = 'mydb';

$link = mysqli_connect($host, $user, $password, $name);
mysqli_query($link, "SET NAMES utf8");

$query = "SELECT COUNT(*) as count FROM users WHERE salary = 300 or age = 23";
$res = mysqli_query($link, $query) or die(mysqli_error($link));


for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row) {
    echo json_encode($row, JSON_UNESCAPED_UNICODE);
}
