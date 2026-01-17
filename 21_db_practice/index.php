<meta charset="utf-8">
<a href="../index.php"><h1>Главная страница</h1></a>
<?php

require 'show.php';

$link = getDbConnection();

mysqli_query($link, "SET NAMES utf8");

$query = 'SELECT * FROM test';

$result = mysqli_query($link, $query);

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) {
}
?>

<?php
foreach ($data as $key => $value): ?>
    <div>
        <h2><?= $value['name'] ?></h2>
        <p>
            <?= $value['age'] ?>, <b><?= $value['salary'] ?>$</b>
        </p>
    </div>
<?php
endforeach; ?>


<table>
    <tr>
        <?php
        foreach ($data[0] as $key => $value): ?>
            <th><?= $key ?></th>
        <?php
        endforeach; ?>
    </tr>
    <?php
    foreach ($data as $key => $value): ?>
        <tr>
            <td><?= $value['id'] ?></td>
            <td><?= $value['name'] ?></td>
            <td><?= $value['age'] ?></td>
            <td><?= $value['salary'] ?></td>
        </tr>
    <?php
    endforeach; ?>
</table>

<ul>
    <?php
    foreach ($data as $key => $value): ?>
        <li><?= $value['name'] ?></li>
    <?php
    endforeach; ?>
</ul>


<table>
    <tr>
        <?php
        foreach ($data[0] as $key => $value): ?>
            <th><?= $key ?></th>
        <?php
        endforeach; ?>
        <th>delete</th>
    </tr>
    <?php
    foreach ($data as $key => $value): ?>
        <tr>
            <td><?= $value['id'] ?></td>
            <td><?= $value['name'] ?></td>
            <td><?= $value['age'] ?></td>
            <td><?= $value['salary'] ?></td>
            <td><a href="?del=<?= $value['id'] ?>">удалить</a></td>
        </tr>
    <?php
    endforeach; ?>
</table>

<?php
if (isset($_GET['del'])) {
    $del = $_GET['del'];
    $query = "DELETE FROM test WHERE id =$del";
    mysqli_query($link, $query) or die(mysqli_error($link));
}


foreach ($data as $value) {
    echo "Показать <a href=\"show.php/?id=$value[id]\">$value[name]</a><br>";
}
foreach ($data as $value) {
    echo "<li>$value[name] <a href=\"edit.php?id=$value[id]\">edit</a></li>";
}
?>