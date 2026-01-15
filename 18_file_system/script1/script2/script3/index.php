<?php

include 'file1.php';
include 'file2.php';
include 'file3.php';

$path = __DIR__;
$path = preg_replace('#script#', 'dir', $path);

//echo "><h1>Главная страница</h1></a>";

/*$str1 = file_get_contents('1.txt');
$str2 = file_get_contents('2.txt');
function transformNumbersSquare($str)
{
    $arr = explode(' ', $str);
    foreach ($arr as &$item) {
        $item *= $item;
    }
    return implode(' ', $arr);
}

echo $str1 . "<br>";
file_put_contents('1.txt', transformNumbersSquare($str1));
file_put_contents('2.txt', transformNumbersSquare($str2));

$arr1 = [1, 2, 3, 4, 5, 6, 7, 8, 9];
file_put_contents('sum.txt', array_sum($arr1));

$str1 = file_get_contents('count.txt');
file_put_contents('count.txt', $str1 + 1);

$fileNamesArr = ['1.txt', '2.txt', '3.txt'];

$str = '';
foreach ($fileNamesArr as &$fileName) {
    $str .= file_get_contents($fileName) . " index.php";
}

file_put_contents('new.txt', $str);*/

echo file_get_contents($path . '/test.txt') . "<br>";
//rename(__DIR__ . '/new.txt', 'C:\xampp\htdocs\php-code-mu\18_file_system\script1\script2/new.txt');

/*for ($i = 1; $i <= 5; $i++) {
    unlink("copy/copy$i.txt");
}*/

echo "copy.txt " . filesize('copy.txt') / 1024 . " килобайт <br>";

echo 'img.jpg ' . round(filesize('img.jpg') / (1024 * 1024), 1) . " мегабайт<br>";

var_dump(file_exists('copy.txt'));

if (!file_exists('file.txt')) {
    file_put_contents('file.txt', '!');
}

if (file_exists('message.txt')) {
    echo file_get_contents('message.txt') . "<br>";
}

/*$arrNamesDir = ['dir01', 'dir02', 'dir03', 'dir04', 'dir05', 'dir06'];
foreach ($arrNamesDir as $nameDir) {
    mkdir($nameDir);
}*/

if (!is_dir('test')) {
    mkdir('test');
    for ($i = 1; $i <= 3; $i++) {
        copy('file.txt', 'test/' . $i . '.txt');
    }
}
//rmdir('dir');

//rename('dir07', 'dir01/dir07');

$files = array_diff(scandir('test'), ['.', '..']);
foreach ($files as $file) {
    $str = file_get_contents('test/' . $file);
    file_put_contents('test/' . $file, $str . ' ! ') . "<br>";
}

$path = 'test/1.txt';

if (is_file($path)) {
    echo "Это ФАЙЛ! <br>";
}
if (is_dir($path)) {
    echo "Это ПАПКА! <br>";
}

$pathSubFolders = '../script3/';
$files = array_diff(scandir($pathSubFolders), ['.', '..']);
foreach ($files as $file) {
    if (is_dir($pathSubFolders . $file)) {
        echo $file . "<br>";
    }
}
foreach ($files as $file) {
    if (is_file($pathSubFolders . $file)) {
        echo $file . "<br>";
    }
}
/*foreach ($files as $key => $file) {
    $time = date('H.i.s');
    if (is_file($pathSubFolders . $file)) {
        if ($file !== 'index.php') {
            $replaceNameFileAddTime = preg_replace('#([a-z-0-9_]+)(\.[a-z]+)#', "$1_$time$2", $file);
            rename($file, $replaceNameFileAddTime);
        }
    }
}*/
$WEEK_DAYS = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];

function getFile($name)
{
    ob_start();
    include $name;
    return ob_get_clean();
}

$res = getFile('script.php');

$select = generateDaySelect('select', $WEEK_DAYS);

require_once 'functions.php';
require_once 'sum.php';

echo sum(3, 2) . "<br>";

$arr = require 'days.php';
echo json_encode($arr, JSON_UNESCAPED_UNICODE);
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<?php
echo $select; ?>
</body>
</html>
