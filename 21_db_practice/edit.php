<?php

require_once 'db_connect.php';
$link = getDbConnection();

if (!empty($_GET)) :
    $id = $_GET['id'];
    $query = "SELECT * FROM test WHERE id=$id";
    $result = mysqli_query($link, $query);
    $user = mysqli_fetch_assoc($result);
    if ($user) :
        ?>
        <form action="save.php?id=<?= $_GET['id'] ?>" method="post">
            <input name="name" type="text" value="<?php
            echo $user['name'] ?>">
            <input name="age" type="number" min="0" step="1" value="<?php
            echo $user['age'] ?>">
            <input name="salary" type="number" value="<?php
            echo $user['salary'] ?>">
            <input type="submit">
        </form>
        <a href="index.php">Назад</a>
    <?php
    else :
        echo "Ошибка! Такого пользователя нет!";
    endif;
endif; ?>