<?php

require_once 'db_connect.php';
$link = getDbConnection();

if (!empty($_POST)) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];
    $query = "INSERT INTO test(name,age,salary) VALUES ('$name','$age','$salary')";
    mysqli_query($link, $query);
}
?>
<form action="" method="post">
    <input name="name" type="text">
    <input name="age" type="number" min="0" step="1">
    <input name="salary" type="number">
    <input type="submit">
</form>
