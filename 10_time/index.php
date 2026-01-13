<?php

echo "<a href=\"../\"><h1>Главная страница</h1></a>";
date_default_timezone_set("Europe/Samara");
//Практика 182.1
echo '182.1: ' . time() . "<br>";
//Практика 182.2
echo '182.1: ' . mktime(0, 0, 0, 3, 1, 2025) . "<br>";
//Практика 182.3
echo '182.3: ' . mktime(0, 0, 0, 12, 31, 2026) . "<br>";
//Практика 182.4
echo '182.4: ' . time() - mktime(13, 12, 59, 3, 15, 2000) . "<br>";
//Практика 182.5
$time7h23m = mktime(7, 23, 48);
$diff_hours = (time() - $time7h23m) / 3600;
echo '182.5: ' . round($diff_hours, 2) . " часов <br>";
//Практика 183.1
echo '183.1:  Год - ' . date('Y') . " Месяц -  " .
    date('m') . " День - " .
    date('d') . " Час - " .
    date('H') . " Минут - " .
    date('i') . " Секунд - " .
    date('s') . "<br>";
//Практика 183.2
echo '183.2: ' . date('Y-m-d') . "<br>";
//Практика 183.3
echo '183.3: ' . date('d-m-Y') . "<br>";
//Практика 183.4
echo '183.4: ' . date('d-m-Y H:i:s') . "<br>";
//Практика 183.5
echo '183.5: ' . date('d.m.Y', mktime(0, 0, 0, 2, 12, 2025)) . "<br>";
//Практика 183.6
$days = [
    'Воскресенье',
    'Понедельник',
    'Вторник',
    'Среда',
    'Четверг',
    'Пятница',
    'Суббота'
];
echo '183.6: ' . $days[date('w')] . "<br>";
//Практика 183.7
$months = [
    1 => 'Январь',
    2 => 'Февраль',
    3 => 'Март',
    4 => 'Апрель',
    5 => 'Май',
    6 => 'Июнь',
    7 => 'Июль',
    8 => 'Август',
    9 => 'Сентябрь',
    10 => 'Октябрь',
    11 => 'Ноябрь',
    12 => 'Декабрь'
];
echo '183.7: ' . $months[date('n')] . "<br>";
//Практика 183.8
echo '183.8: ' . date('t', mktime(0, 0, 0, 2, 1, 2026)) . "<br>";
//Практика 184.1
echo '184.1: ' . date('d-m-Y', strtotime('2025-12-31')) . "<br>";
//Практика 184.2
echo '184.2: ' . date('m.d.Y', strtotime('2026-1-19')) . "<br>";
//Практика 184.3
echo '184.3: ' . date('m.d.Y', strtotime('2026-2-1')) . "<br>";
//Практика 184.4
echo '184.4: ' . $days[date('w', strtotime('2023-12-25'))] . "<br>";
//Практика 185.1
echo '185.1: ';
$date = '2025-12-31';
$dateArr = explode('-', $date);
var_dump(checkdate($dateArr[1], $dateArr[2], $dateArr[0]));
echo "<br>";
//Практика 185.2
echo '185.2: ';
$date = '2025-02-29';
$dateArr = explode('-', $date);
var_dump(checkdate($dateArr[1], $dateArr[2], $dateArr[0]));
echo "<br>";
//Практика 186.1
echo '186.1: ';
echo date('H:i:s');
echo "<br>";
//Практика 186.2
echo '186.2: ';
echo date_default_timezone_get();
echo "<br>";
//Практика 187.1
echo '187.1: ';
$date = '2025-12-31';
$date = date_create($date);
date_modify($date, '1 day');
echo date_format($date, 'Y-m-d');
echo "<br>";
//Практика 187.2
echo '187.2: ';
$date = '2025-12-31';
$date = date_create($date);
date_modify($date, '3 day 1 month');
echo date_format($date, 'Y-m-d');
echo "<br>";
//Практика 187.3
echo '187.3: ';
$date = '2025-12-31';
$date = date_create($date);
date_modify($date, '1 year');
echo date_format($date, 'Y-m-d');
echo "<br>";
//Практика 187.4
echo '187.4: ';
$date = '2025-12-31';
$date = date_create($date);
date_modify($date, '-3 day');
echo date_format($date, 'Y-m-d');
echo "<br>";
//Практика 187.5
echo '187.5: ';
$date = '2025-12-31';
$date = date_create($date);
date_modify($date, '-3 day -1 month');
echo date_format($date, 'Y-m-d');
echo "<br>";
//Практика 188
$date1 = '2020-11-30';
$date2 = '2020-12-01';
echo "188: ";
if ($date1 > $date2) {
    echo "$date1 - больше";
} else {
    echo "$date2 - больше";
}
echo "<br>";
//Практика 189
$date1 = '09-21';
$date2 = '09-23';
echo "188: ";
if ($date1 > $date2) {
    echo "$date1 - больше";
} else {
    echo "$date2 - больше";
}
echo "<br>";
//Практика 190
$date = '12-07';
echo "190: ";
if ($date >= '03-21' && $date <= '04-19') {
    echo 'Овен';
} elseif ($date >= '04-20' && $date <= '05-20') {
    echo 'Телец';
} elseif ($date >= '05-21' && $date <= '06-20') {
    echo 'Близнецы';
} elseif ($date >= '06-21' && $date <= '07-22') {
    echo 'Рак';
} elseif ($date >= '07-23' && $date <= '08-22') {
    echo 'Лев';
} elseif ($date >= '08-23' && $date <= '09-22') {
    echo 'Дева';
} elseif ($date >= '09-23' && $date <= '10-22') {
    echo 'Весы';
} elseif ($date >= '10-23' && $date <= '11-21') {
    echo 'Скорпион';
} elseif ($date >= '11-22' && $date <= '12-21') {
    echo 'Стрелец';
} elseif (($date >= '12-22') || ($date <= '01-19')) {
    echo 'Козерог';
} elseif ($date >= '01-20' && $date <= '02-18') {
    echo 'Водолей';
} elseif ($date >= '02-19' && $date <= '03-20') {
    echo 'Рыбы';
} else {
    echo 'Некорректная дата';
}
echo "<br>";
//Практика 191
$strDate1 = '2020-11-30';
$strDate2 = '2020-12-01';
$date1 = strtotime($strDate1);
$date2 = strtotime($strDate2);
echo "191: ";
if ($date1 > $date2) {
    echo "$strDate1 - больше";
} else {
    echo "$strDate2 - больше";
}
echo "<br>";