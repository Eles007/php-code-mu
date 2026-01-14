<?php

session_start();


echo "<a href=\"../\"><h1>Главная страница</h1></a>";

echo "<a href=\"./receiver.php\"><h1>Страница</h1></a>";


//319
if (!isset($_SESSION['user-first-login-time'])) {
    $_SESSION['user-first-login-time'] = time();
} else {
    $_SESSION['user-login-time'] = time() - $_SESSION['user-first-login-time'];
    if ($_SESSION['user-login-time'] >= 60) {
        unset($_SESSION['user-first-login-time']);
    }
}


echo $_SESSION['user-login-time'];
?>

<form method="get">
    Фамилия <input type="text" name="surname">
    Имя <input type="text" name="name">
    Возраст <input type="number" step="1" min="1" name="age">
    Зарплата <input type="number" name="salary">
    <input type="submit">
</form>

<?php
if (!empty($_GET)) {
    $_SESSION['user1'] = $_GET;
}
?>
