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
    echo $num * $num * $num;
}

cube(3);
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