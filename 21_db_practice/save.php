<?php

require_once 'db_connect.php';
$link = getDbConnection();


$id = $_GET['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$salary = $_POST['salary'];

$query = "UPDATE test SET name='$name', age='$age', salary='$salary' WHERE id=$id";

mysqli_query($link, $query);

echo 'test updated successfully';