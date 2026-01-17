<?php

require_once 'db_connect.php';

$link = getDbConnection();

if (isset($_GET['id'])):
    $id = $_GET['id'];
    $query = "SELECT * FROM test WHERE id = $id";
    $result = mysqli_query($link, $query);
    $user = mysqli_fetch_assoc($result);

    ?>

    <div>
        <p>
            имя: <span class="name"><?= $user['name'] ?></span>
        </p>
        <p>
            возраст: <span class="age"><?= $user['age'] ?></span>,
            зарплата: <span class="salary"><?= $user['salary'] ?>$</span>,
        </p>
    </div>
<?php
endif; ?>