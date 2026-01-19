<?php

session_start();
require '../21_db_practice/db_connect.php';
$link = getDbConnection();
mysqli_query($link, "SET NAMES utf8");
if (!empty($_POST)) {
    if (isset($_POST['name']) and $_POST['age'] >= 16 and $_POST['salary'] > 0) {
        $query = "INSERT INTO test (name, age, salary) VALUES ('$_POST[name]','$_POST[age]','$_POST[salary]')";
        mysqli_query($link, $query);

        $_SESSION['flash'] = 'форма успешно сохранена';
        header("Location: index.php");
        die();
    } else {
        $_SESSION['flash'] = 'форма не прошла проверку';
    }
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Редиректы</title>
</head>
<body>
<a href="../"><h1>Главная страница</h1></a>
<form method="post">
    <input
            name="name"
            placeholder="<?= $_POST['name'] ?? 'Иван' ?>">
    <input name="age"
           placeholder="<?= $_POST['age'] ?? 0 ?>">
    <input name="salary"
           placeholder="<?= $_POST['salary'] ?? 0 ?>"
    >
    <input type="submit">
</form>

<?php
if (isset($_SESSION['flash'])) {
    echo $_SESSION['flash'];
    unset($_SESSION['flash']);
}
?>
</body>
</html>
