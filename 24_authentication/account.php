<?php

session_start();
/** @var mysqli $link */
require_once 'config.php';

$id = $_SESSION['id'];
$query = "SELECT * FROM users WHERE id = '$id'";
$result = mysqli_query($link, $query);
$user = mysqli_fetch_assoc($result);

if (!empty($_POST['submit'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];

    $query = "UPDATE users SET name = '$name', surname = '$surname' WHERE id = '$id'";
    mysqli_query($link, $query);
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Account</title>
</head>
<body>
<?php
include 'header.php'; ?>
<form method="post">
    <input name="name" value="<?= $user['name'] ?>">
    <input name="surname" value="<?= $user['surname'] ?>">
    <input type="submit" name="submit">
</form>
</body>
</html>
