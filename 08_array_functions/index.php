<?php

echo "<a href=\"../\"><h1>Главная страница</h1></a>";

//Практика 163.1
$arr = [1, 2, 3, 4, 5];
echo '163.1: ';
var_dump(in_array(3, $arr));
echo "<br>";
//Практика 163.2
$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
echo '163.2: ' . array_search('-', $arr) . "<br>";
//Практика 163.3
echo '163.3: ';
array_splice($arr, array_search('-', $arr), 1);
echo json_encode($arr);
echo "<br>";
//Практика 164.1
echo '164.1: ';
$arr = [1, 2, 3, 4, 5];
array_shift($arr);
array_pop($arr);
echo json_encode($arr);
echo "<br>";
//Практика 164.2
echo '164.2: ';
$arr = [1, 2, 3, 4, 5];
array_unshift($arr, 0);
array_push($arr, 6);
echo json_encode($arr);
echo "<br>";
//Практика 165
echo '165: ';
$arr = [1, 2, 3, 4, 5];
echo json_encode(array_slice($arr, 1, 3));
echo "<br>";
//Практика 166.1
echo '166.1: ';
$arr = [1, 2, 3, 4, 5];
array_splice($arr, 1, 2);
echo json_encode($arr);
echo "<br>";
//Практика 166.2
echo '166.2: ';
$arr = [1, 2, 3, 4, 5];
echo json_encode(array_splice($arr, 1, 3));
echo "<br>";
//Практика 166.3
echo '166.3: ';
$arr = [1, 2, 3, 4, 5];
array_splice($arr, 3, 0, ['a', 'b', 'c']);
echo json_encode($arr);
echo "<br>";
//Практика 166.4
echo '166.4: ';
$arr = [1, 2, 3, 4, 5];
array_splice($arr, 1, 0, ['a', 'b']);
array_splice($arr, 6, 0, ['c']);
array_splice($arr, 8, 0, ['e']);
echo json_encode($arr);
echo "<br>";
//Практика 167.1
echo '167.1: ';
echo json_encode(range(1, 100));
echo "<br>";
//Практика 167.2
echo '167.2: ';
echo json_encode(range('a', 'z'));
echo "<br>";
//Практика 167.3
echo '167.3: ';
echo json_encode(implode('-', range(1, 9)));
echo "<br>";
//Практика 167.4
echo '167.4: ';
echo array_sum(range(1, 100));
echo "<br>";
//Практика 167.5
echo '167.5: ';
echo array_product(range(1, 10));
echo "<br>";
//Практика 168.1
echo '168.1: ';
$arr = ['a', 'b', 'c'];
echo json_encode(array_pad($arr, 6, '-'));
echo "<br>";
//Практика 168.2
echo '168.2: ';
echo json_encode(array_fill(0, 10, 'x'));
echo "<br>";
//Практика 169.1
echo '169.1: ';
$arr1 = [1, 2, 3];
$arr2 = ['a', 'b', 'c'];
echo json_encode(array_merge($arr1, $arr2));
echo "<br>";
//Практика 169.2
echo '169.2: ';
$arr1 = ['a', 'b', 'c'];
$arr2 = [1, 2, 3];
echo json_encode(array_combine($arr1, $arr2));
echo "<br>";
//Практика 170.1
echo '170.1: ';
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
echo json_encode(array_keys($arr));
echo "<br>";
//Практика 170.2
echo '170.2: ';
echo json_encode(array_values($arr));
echo "<br>";
//Практика 171.1
echo '171.1: ';
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
echo json_encode(array_flip($arr));
echo "<br>";
//Практика 171.2
echo '171.2: ';
$arr = [1, 2, 3, 4, 5];
echo json_encode(array_reverse($arr));
echo "<br>";
//Практика 172
echo '172: ';
$arr = ['a', 'b', 'c', 'd', 'e'];
echo json_encode(array_replace($arr, [0 => '!', 3 => '!!']));
echo "<br>";
//Практика 173
echo '173: ';
$arr = ['a', 'b', 'c', 'b', 'a'];
echo json_encode(array_unique($arr));
echo "<br>";
//Практика 174
echo '174: ';
echo json_encode(array_count_values($arr));
echo "<br>";
//Практика 175
echo '175: ';
echo json_encode(array_chunk(range(1, 25), 5));
echo "<br>";
//Практика 176.1
echo '176.1: ';
$arr = ['3' => 'a', '2' => 'd', '1' => 'c', '5' => 'e', '4' => 'b'];
asort($arr);
echo json_encode($arr);
echo "<br>";
//Практика 176.2
echo '176.2: ';
$arr = [10, 2, 35, 4, 15];
rsort($arr);
echo json_encode($arr);
echo "<br>";
//Практика 176.3
echo '176.3: ';
$arr = ['z' => 'a', 'y' => 'd', 'x' => 'c', 'w' => 'b'];
ksort($arr);
echo json_encode($arr);
echo "<br>";
//Практика 176.4
echo '176.4: ';
$arr = ['a' => 1, 'c' => 3, 'b' => 2, 'e' => 5, 'd' => 4];
krsort($arr);
echo json_encode($arr);
echo "<br>";
//Практика 176.5
echo '176.5: ';
$arr = ['a' => 5, 'b' => 2, 'c' => 4, 'd' => 1, 'e' => 3];
asort($arr);
echo json_encode($arr);
echo "<br>";
//Практика 176.6
echo '176.6: ';
$arr = ['a' => 10, 'b' => 40, 'c' => 20, 'd' => 30];
arsort($arr);
echo json_encode($arr);
echo "<br>";
//Практика 176.7
echo '176.7: ';
$arr = ['img12.png', 'img10.png', 'img2.png', 'img1.png'];
natsort($arr);
echo json_encode($arr);
echo "<br>";
//Практика 176.8
echo '176.8: ';
$arr = ['IMG12.png', 'img10.png', 'img2.png', 'IMG1.png'];
natcasesort($arr);
echo json_encode($arr);
echo "<br>";
//Практика 177.1
echo '177.1: ';
$arr1 = [1, 2, 3, 4, 5];
$arr2 = [3, 4, 5, 6, 7];
echo json_encode(array_intersect($arr1, $arr2));
echo "<br>";
//Практика 177.2
echo '177.2: ';
echo json_encode(array_merge(array_diff($arr1, $arr2), array_diff($arr2, $arr1)));
echo "<br>";