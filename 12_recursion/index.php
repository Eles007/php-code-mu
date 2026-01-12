<?php

echo "<a href='../'><h1>Главная страница</h1></a>";

//Практика 218
echo '218: ';
$arr = [
    'a' => 1,
    'b' => 2,
    'c' => 3,
    'd' => 4,
    'e'
    => 5
];
function printArrayRecursively($array)
{
    echo array_shift($array) . " ";
    if (count($array) > 0) {
        printArrayRecursively($array);
    }
}

printArrayRecursively($arr);
echo "<br>";
//Практика 219
echo '219: ';
function getSumArray($array)
{
    $sum = array_shift($array);
    if (count($array) > 0) {
        $sum += getSumArray($array);
    }
    return $sum;
}

echo getSumArray($arr);
echo "<br>";
//Практика 220
echo '220: ';
function printNestedArrayElementsRecursively($array)
{
    foreach ($array as $element) {
        if (is_array($element)) {
            printNestedArrayElementsRecursively($element);
        } else {
            echo $element . " ";
        }
    }
}

$arr = [1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]];
printNestedArrayElementsRecursively($arr);
echo "<br>";
//Практика 221.1
echo '221.1: ';
function calculateNestedArraySum($array)
{
    $sum = 0;
    foreach ($array as $element) {
        if (is_array($element)) {
            $sum += calculateNestedArraySum($element);
        } else {
            $sum += $element;
        }
    }
    return $sum;
}

$arr = [1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]];
echo calculateNestedArraySum($arr);
echo "<br>";
//Практика 221.2
echo '221.2: ';
function flattenArrayToStringRecursively($array)
{
    $str = '';
    foreach ($array as $element) {
        if (is_array($element)) {
            $str .= flattenArrayToStringRecursively($element);
        } else {
            $str .= $element;
        }
    }
    return $str;
}

$arr = [
    'a',
    ['b', 'c', 'd'],
    [
        'e',
        'f',
        [
            'g',
            [
                'j',
                'k'
            ]
        ]
    ]
];
echo flattenArrayToStringRecursively($arr);
echo "<br>";
//Практика 222
echo '222: ';
function squareAllNumericElementsRecursively($array)
{
    foreach ($array as &$element) {
        if (is_array($element)) {
            $element = squareAllNumericElementsRecursively($element);
        } else {
            $element **= 2;
        }
    }

    return $array;
}

$arr = [1, [2, 7, 8], [3, 4], [5, [6, 7]]];
echo json_encode(squareAllNumericElementsRecursively($arr));
echo "<br>";