<?php

echo "<a href='../'><h1>Главная страница</h1></a>";

//Практика 132.1
echo '132.1: ';
$arr = [
    ['a', 'b', 'c'],
    ['d', 'e', 'f'],
    ['g', 'h', 'i'],
    ['j', 'k', 'l'],
];
var_dump($arr[3][2], $arr[1][1], $arr[2][0], $arr[0][0]);
echo "<br>";
//Практика 132.2
echo '132.2: ';
$arr = [
    [1, 2],
    [3, 4],
    [5, 6]
];
$sum = 0;
foreach ($arr as $nums) {
    foreach ($nums as $num) {
        $sum += $num;
    }
}
echo "$sum <br>";
//Практика 133
echo '133: ';
$arrs = [
    [
        [1, 2],
        [3, 4],
    ],
    [
        [5, 6],
        [7, 8],
    ],
];
$sum = 0;
foreach ($arrs as $arr) {
    foreach ($arr as $nums) {
        foreach ($nums as $num) {
            $sum += $num;
        }
    }
}
echo "$sum <br>";
//Практика 134.1
echo '134.1: ';
$arr = [
    'boys' => [1 => 'John', 2 => 'Jack', 3 => 'Ryan'],
    'girls' => [1 => 'Emma', 2 => 'Lily', 3 => 'Anna'],
];
echo $arr['boys'][1] . " " . $arr['girls'][2];
echo "<br>";
//Практика 134.2
echo '134.2: ';
$arr = [
    [
        'name' => 'user1',
        'age' => 30,
        'salary' => 1000,
    ],
    [
        'name' => 'user2',
        'age' => 31,
        'salary' => 2000,
    ],
    [
        'name' => 'user3',
        'age' => 32,
        'salary' => 3000,
    ],
];
echo $arr[0]['salary'] + $arr[2]['salary'];
echo "<br>";
//Практика 135
echo '135: ';
$arr = [
    [1, 2, 3, [4, 5, [6, 7]]],
    [8, [9, 10]]
];
echo($arr[0][0] + $arr[0][1] + $arr[0][2] +
    $arr[0][3][0] + $arr[0][3][1] + $arr[0][3][2][0] +
    $arr[0][3][2][1] + $arr[1][0] + $arr[1][1][0] +
    $arr[1][1][1]);
echo "<br>";
//Практика 138.1
echo '138.1: ';
$arr = [
    [
        'name' => 'user1',
        'age' => 30,
        'salary' => 1000,
    ],
    [
        'name' => 'user2',
        'age' => 31,
        'salary' => 2000,
    ],
    [
        'name' => 'user3',
        'age' => 32,
        'salary' => 3000,
    ],
];
foreach ($arr as $key1 => $sub) {
    foreach ($sub as $key2 => $elem) {
        echo $key2 . " " . $elem . "<br>";
    }
}
echo "<br>";
//Практика 138.2
echo '138.2: ';
$arr = [
    'group1' => ['user11', 'user12', 'user13', 'user43'],
    'group2' => ['user21', 'user22', 'user23'],
    'group3' => ['user31', 'user32', 'user33'],
    'group4' => ['user41', 'user42', 'user43'],
    'group5' => ['user51', 'user52'],
];
foreach ($arr as $key1 => $sub) {
    foreach ($sub as $key2 => $elem) {
        echo $key1 . " " . $elem . "<br>";
    }
}
echo "<br>";
//Практика 139.1
echo '139.1: ';
$arr = [];
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        $arr[$i][$j] = $j + 1;
    }
}
var_dump($arr);
echo "<br>";
//Практика 139.2
echo '139.2: ';
$arr = [];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 4; $j++) {
        $arr[$i][$j] = 'x';
    }
}
var_dump($arr);
echo "<br>";
//Практика 139.3
echo '139.3: ';
$arr = [];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 2; $j++) {
        for ($k = 0; $k < 5; $k++) {
            $arr[$i][$j][$k] = $k + 1;
        }
    }
}
var_dump($arr);
echo "<br>";
//Практика 140.1
echo '140.1: ';
$arr = [];
for ($i = 0, $k = 1; $i < 4; $i++) {
    for ($j = 0; $j < 2; $j++, $k++) {
        $arr[$i][$j] = $k;
    }
}
echo json_encode($arr);
echo "<br>";
//Практика 140.2
echo '140.2: ';
$arr = [];
for ($i = 0, $k = 2; $i < 4; $i++) {
    for ($j = 0; $j < 3; $j++, $k += 2) {
        $arr[$i][$j] = $k;
    }
}
echo json_encode($arr);
echo "<br>";
//Практика 140.3
echo '140.3: ';
$arr = [];
for ($i = 0, $d = 1; $i < 2; $i++) {
    for ($j = 0; $j < 2; $j++) {
        for ($k = 0; $k < 2; $k++, $d++) {
            $arr[$i][$j][$k] = $d;
        }
    }
}
echo json_encode($arr);
echo "<br>";
//Практика 141
echo '141: ';
$products = [
    [
        'name' => 'prod1',
        'price' => 100,
        'amount' => 5,
    ],
    [
        'name' => 'prod2',
        'price' => 200,
        'amount' => 6,
    ],
    [
        'name' => 'prod3',
        'price' => 300,
        'amount' => 7,
    ],
];
foreach ($products as $product) {
    echo $product['name'] . ': ' . $product['amount'] . " , $" . $product['price'] . '<br>';
}
echo "<br>";
//Практика 142.1
echo '142.1: ';
$arr = [
    [
        'country' => 'country1',
        'city' => 'city1',
    ],
    [
        'country' => 'country2',
        'city' => 'city2',
    ],
    [
        'country' => 'country1',
        'city' => 'city3',
    ],
    [
        'country' => 'country1',
        'city' => 'city4',
    ],
    [
        'country' => 'country3',
        'city' => 'city5',
    ],
    [
        'country' => 'country2',
        'city' => 'city6',
    ],
    [
        'country' => 'country3',
        'city' => 'city7',
    ],
];
$res = [];
foreach ($arr as $sub) {
    $res[$sub['country']][] = $sub['city'];
}
echo json_encode($res);
echo "<br>";
//Практика 142.2
echo '142.2: ';
$arr = [
    [
        'date' => '2019-12-29',
        'event' => 'name1'
    ],
    [
        'date' => '2019-12-31',
        'event' => 'name2'
    ],
    [
        'date' => '2019-12-29',
        'event' => 'name3'
    ],
    [
        'date' => '2019-12-30',
        'event' => 'name4'
    ],
    [
        'date' => '2019-12-29',
        'event' => 'name5'
    ],
    [
        'date' => '2019-12-31',
        'event' => 'name6'
    ],
    [
        'date' => '2019-12-29',
        'event' => 'name7'
    ],
    [
        'date' => '2019-12-30',
        'event' => 'name8'
    ],
    [
        'date' => '2019-12-30',
        'event' => 'name9'
    ],
];
$res = [];
foreach ($arr as $sub) {
    $res[$sub['date']][] = $sub['event'];
}
ksort($res);
echo json_encode($res);
echo "<br>";
$newArr = [];
//Практика 142.3
echo '142.3: ';
foreach ($res as $date => $names) {
    foreach ($names as $name) {
        $newArr[] = [
            'date' => $date,
            'event' => $name,
        ];
    }
}
echo json_encode($newArr);
echo "<br>";