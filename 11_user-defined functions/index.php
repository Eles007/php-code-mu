<?php

echo "<a href='../'><h1>Главная страница</h1></a>";

//Практика 192.1
echo '192.1: ';
function printName()
{
    echo 'Эльес';
}

printName();
echo "<br>";
//Практика 192.2
echo '192.2: ';
function printFrom1To100()
{
    for ($i = 1; $i <= 100; $i++) {
        echo "$i ";
    }
}

printFrom1To100();
echo "<br>";
//Практика 193.1
echo '193.1: ';
function cube($num)
{
    return $num * $num * $num;
}

echo cube(3);
echo "<br>";
//Практика 193.2
echo '193.1: ';
function isPositive($num)
{
    echo $num > 0 ? '+++' : '---';
}

isPositive(3);
isPositive(-1);
echo "<br>";
//Практика 194
echo '194: ';
function sumNum1Num2($num1, $num2)
{
    echo $num1 + $num2;
}

sumNum1Num2(3, 4);
echo "<br>";
//Практика 195
echo '195: ';
$param1 = 1;
$param2 = 2;
$param3 = 3;
function printSumNum1Num2Num3($num1, $num2, $num3)
{
    echo $num1 + $num2 + $num3;
}

$param1 = 1;
$param2 = 2;
$param3 = 3;
printSumNum1Num2Num3($param1, $param2, $param3);
echo "<br>";
//Практика 197.1
echo '197.1: ';
$res = cube(3);
echo $res;
echo "<br>";
//Практика 197.2
echo '197.2: ';
$res = cube(3) + cube(2);
echo $res;
echo "<br>";
//Практика 198
echo '198: ';
function root($num)
{
    return pow($num, 1 / 3);
}

function norm($num)
{
    return round($num, 3);
}

$res = norm(root(2));
echo $res;
echo "<br>";
//Практика 201
echo '201: ';
function halveUntilLessThanTen($num)
{
    if ($num < 10) {
        return 0;
    }
    $i = 1;
    $halvedResult = $num;
    while (true) {
        $halvedResult /= 2;
        if ($halvedResult < 10) {
            return $i;
        }
        $i++;
    }
}

echo halveUntilLessThanTen(9);
echo "<br>";
//Практика 203.1
echo '203.1: ';
$mixedNumbers = [8, 2, 6, 4];
function isArrayConsistingOfEvenNumbers($array)
{
    foreach ($array as $value) {
        if ($value % 2 !== 0) {
            return false;
        }
    }
    return true;
}

var_dump(isArrayConsistingOfEvenNumbers($mixedNumbers));
echo "<br>";
//Практика 203.2
echo '203.2: ';
function isEveryDigitOdd($number)
{
    $strNumber = (string)$number;
    for ($i = 0; $i < strlen($strNumber); $i++) {
        if ($strNumber[$i] % 2 == 0) {
            return false;
        }
    }
    return true;
}

var_dump(isEveryDigitOdd(192));

echo "<br>";
//Практика 203.3
echo '203.3: ';
function hasAdjacentDuplicates($array)
{
    $length = count($array);
    for ($i = 0; $i < $length - 1; $i++) {
        if ($array[$i] == $array[$i + 1]) {
            return true;
        }
    }
    return false;
}

var_dump(hasAdjacentDuplicates([1, 2]));
echo "<br>";
//Практика 207.1
echo '207.1: ';
function getDivisors($number)
{
    $array = [];
    for ($i = 1; $i <= $number; $i++) {
        if ($number % $i == 0) {
            $array[] = $i;
        }
    }
    return $array;
}

$num = 6;
echo "Делители цифры $num - " . json_encode(getDivisors($num));
echo "<br>";
//Практика 207.2
echo '207.2: ';
function getCommonDivisors($num1, $num2)
{
    $divisorsOfA = getDivisors($num1);
    $divisorsOfB = getDivisors($num2);
    return array_intersect($divisorsOfA, $divisorsOfB);
}

echo 'Общие делители чисел -' . json_encode(getCommonDivisors(16, 24));
echo "<br>";
//Практика 207.3
echo '207.3: ';
function getDigitSum($number)
{
    return array_sum(str_split((string)$number));
}

echo getDigitSum(2153);
echo "<br>";
//Практика 207.4
echo '207.4: ';
function getDayOfWeekName($date = null)
{
    if ($date == null) {
        $date = time();
    }
    $days = [
        'Воскресенье',
        'Понедельник',
        'Вторник',
        'Среда',
        'Четверг',
        'Пятница',
        'Суббота'
    ];
    return $days[date('w', $date)];
}

echo getDayOfWeekName();
echo "<br>";
//Практика 207.5
echo '207.5: ';
function getWeekdayNameForDate($date = null)
{
    if ($date == null) {
        $date = time();
    }
    $date = strtotime($date);
    return getDayOfWeekName($date);
}

echo getWeekdayNameForDate('2025-02-25');
echo "<br>";
//Практика 207.6
echo '207.6: ';
function getDaysFromSeconds($seconds)
{
    $days = (int)($seconds / 86400);
    if ($days >= 1) {
        $hours = round(($seconds - 86400 * $days) / 3600);
    }
    return "Дней:$days Часов:$hours";
}

echo getDaysFromSeconds(162000);
echo "<br>";
//Практика 207.7
echo '207.7: ';
function isLeapYear($year)
{
    return (bool)date('L', strtotime("$year-01-01"));
}

var_dump(isLeapYear(2025));
echo "<br>";
//Практика 207.8
echo '207.8: ';
function isPrime($number)
{
    if ($number === 1) {
        return false;
    }

    for ($i = 2; $i < $number; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

var_dump(isPrime(10));
echo "<br>";