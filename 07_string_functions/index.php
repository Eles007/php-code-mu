<?php

echo "<a href='../'><h1>Главная страница</h1></a>";
//Практика 148.1
$str = 'abcde';
echo '148.1: ' . strlen($str) . "<br>";
//Практика 148.2
$str = 'привет';
echo '148.2: ' . mb_strlen($str) . "<br>";
//Практика 148.3
$password = 'qqqfdgg,.';
$length = mb_strlen($password);
echo '148.2: ';
if ($length > 5 and $length < 10) {
    echo 'Пароль подходит!';
} else {
    echo 'Пароль не подходит!';
}
echo "<br>";
//Практика 149.1
echo '149.1: ';
$str = 'php';
echo strtoupper($str) . "<br>";
//Практика 149.2
echo '149.2: ';
$str = 'PHP';
echo strtolower($str) . "<br>";
//Практика 149.3
echo '149.3: ';
$str = 'london';
echo ucfirst($str) . "<br>";
//Практика 149.4
echo '149.4: ';
$str = 'London';
echo lcfirst($str) . "<br>";
//Практика 149.5
echo '149.5: ';
$str = 'london is the capital of great britain';
echo ucwords($str) . "<br>";
//Практика 149.6
echo '149.6: ';
$str = 'LONDON';
echo ucfirst(strtolower($str)) . "<br>";
//Практика 149.7
echo '149.7: ';
$str = 'привет';
echo mb_strtoupper($str) . "<br>";
//Практика 149.8
echo '149.8: ';
$str = 'ПРИВЕТ';
echo mb_strtolower($str) . "<br>";
//Практика 150.1
echo '150.1: ';
$str = 'html css php';
echo substr($str, 0, 4) . "<br>" .
    substr($str, 5, 3) . "<br>" .
    substr($str, -3, 3) . "<br>";
//Практика 150.2
echo '150.2: ';
$str = 'abcdefgh';
echo substr($str, -3, 3) . "<br>";
//Практика 150.3
echo '150.3: ';
$str = 'http://example.com';
echo substr($str, 0, 7) . "<br>";
//Практика 150.4
echo '150.4: ';
$str = 'https://example.com';
echo substr($str, 0, 8) . "<br>";
//Практика 150.5
echo '150.5: ';
$str = 'image.png';
echo substr($str, -4) . "<br>";
//Практика 150.6
echo '150.6: ';
$str = 'photo.jpg';
echo substr($str, -4) . "<br>";
//Практика 150.7
echo '150.7: ';
$str = 'This is a long string';
$length = mb_strlen($str);
if ($length > 5) {
    echo substr($str, 0, 5) . " ...<br>";
} else {
    echo $str . "<br>";
}
//Практика 150.8
echo '150.8: ';
$str = 'многобайтовые строки требуют особого подхода';
echo mb_substr($str, -7) . "<br>";
//Практика 150.9
echo '150.9: ';
$str = 'пример работы с кириллическими символами';
echo mb_substr($str, 7, 6) . "<br>" .
    mb_substr($str, 16, 14) . "<br>";
//Практика 151.1
echo '151.1: ';
$str = 'document.pdf';
var_dump(str_ends_with($str, '.pdf'));
echo "<br>";
//Практика 151.2
echo '151.2: ';
$str = 'https://example.com';
var_dump(str_starts_with($str, 'https://'));
echo "<br>";
//Практика 151.3
echo '151.3: ';
$str = 'The quick brown fox';
var_dump(str_contains($str, 'fox'));
echo "<br>";
//Практика 151.4
echo '151.4: ';
$str = 'image.png';
var_dump(str_ends_with($str, '.png') or str_contains($str, '.jpg'));
echo "<br>";
//Практика 151.5
echo '151.5: ';
$str = 'admin@example.com';
var_dump(str_contains($str, '@') and str_ends_with($str, '.com'));
echo "<br>";
//Практика 152.1
$str = 'abc abc abc';
echo '152.1: ' . strpos($str, 'b') . "<br>";
//Практика 152.2
echo '152.2: ' . strrpos($str, 'b') . "<br>";
//Практика 152.3
echo '152.3: ' . strpos($str, 'b', 3) . "<br>";
//Практика 152.4
$str = 'aaa aaa aaa aaa aaa';
echo '152.4: ' . strpos($str, ' ', strpos($str, ' ') + 1) . "<br>";
//Практика 152.5
$str = 'example..com';
echo '152.5: ';
var_dump(str_contains($str, '..'));
echo "<br>";
//Практика 152.6
$str = 'http://example.com';
echo '152.6: ' . (strpos($str, 'http://') === 0) . "<br>";
//Практика 153.1
echo '153.1: ';
$str = 'aaa bbb ccc';
$res = mb_split(' ', $str);
echo json_encode($res);
echo "<br>";
//Практика 153.2
$arr = ['a', 'b', 'c', 'd', 'e'];
echo '153.2: ' . implode(',', $arr) . "<br>";
//Практика 153.3
echo '153.3: ';
$str = '1234567890';
$res = mb_str_split($str, 2);
echo json_encode($res);
echo "<br>";
//Практика 153.4
echo '153.4: ';
$res = mb_str_split($str, 1);
echo json_encode($res);
echo "<br>";
//Практика 153.5
$newStr = chunk_split($str, 2, '-');
echo '153.5: ' . mb_substr($newStr, 0, strlen($newStr) - 1) . "<br>";
//Практика 153.6
$date = '2025-12-31';
$result = explode('-', $date);
echo '153.6: ' . $result[2] . "." . $result[1] . "." . $result[0] . "<br>";
//Практика 153.7
echo '153.7: ';
$str = 'word※word※word※word';
echo json_encode(mb_split('※', $str));
echo "<br>";
//Практика 153.8
echo '153.8: ';
$str = 'программирование';
print_r(mb_str_split($str));
echo "<br>";
//Практика 153.9
echo '153.9: ';
$str = 'кириллица';
print_r(mb_str_split($str, 2));
echo "<br>";
//Практика 154.1
echo '154.1: ';
$str = ' кириллица ';
echo trim($str);
echo "<br>";
//Практика 154.2
echo '154.2: ';
$str = '/php/';
echo trim($str, '/');
echo "<br>";
//Практика 154.3
echo '154.3: ';
$str = 'text text text.';
echo rtrim($str, '.') . '.';
echo "<br>";
//Практика 155.1
$price = 19.99;
printf('155.1: price: %.2f$', $price);
echo "<br>";
//Практика 155.2
$name = "John";
$age = 25;
printf('155.2: Name: %s, Age: %d years', $name, $age);
echo "<br>";
//Практика 155.3
$name = 'John';
$score = 95;
printf('155.3: student %s scored %d points', $name, $score);
echo "<br>";
//Практика 155.4
$product = "Laptop";
$price = 1299.99;
$discount = 15;
printf('155.4: Product: %s | Price: $%.2f | Discount: %d%%', $product, $price, $discount);
echo "<br>";
//Практика 155.5
$x = 10;
$y = 20;
$z = 30;
$sum = $x + $y + $z;
printf('155.5: Sum: %d + %d + %d = %d', $x, $y, $z, $sum);
echo "<br>";
//Практика 155.6
$day = 15;
$month = "March";
$year = 2023;
printf('155.6: Date: %2$s %1$d, %3$d', $day, $month, $year);
echo "<br>";
//Практика 156.1
$str = '12345678';
$num = (int)$str;
echo '156.1: ' . number_format($num, 0, '.', ' ') . "<br>";
//Практика 156.2
$number = 9876543.21;
echo '156.2: ' . number_format($number, 2, '.', ' ') . "<br>";
//Практика 156.3
$price = 1234.5678;
echo '156.3: ' . '€' . number_format($price, 2, ',', '.') . "<br>";
//Практика 157.1
$str = '12345';
echo '157.1: ' . strrev($str) . "<br>";
//Практика 157.2
$str = 'madam';
echo '157.1: ';
var_dump($str == strrev($str));
echo "<br>";
//Практика 158.1
echo '158.1: ' . "<br>";
for ($i = 1; $i <= 9; $i++) {
    echo str_repeat('x', $i) . "<br>";
}
//Практика 158.2
echo '158.2: ' . "<br>";
for ($i = 1; $i < 9; $i++) {
    echo str_repeat($i, $i) . "<br>";
}
echo "<b>" . str_repeat($i, $i) . "</b> <br>";
//Практика 159.1
$str = 'aaa <b>bbb</b> ccc';
echo '159.1: ' . strip_tags($str) . "<br>";
//Практика 159.2
$str = '
		<p>aaa</p>
		<b>bbb</b>
		<s>ccc</s>
		<i>ddd</i>
		';
echo '159.2: ' . strip_tags($str, '<b><i>') . "<br>";
//Практика 159.3
$str = 'aaa <b>bbb</b> <i>ccc</i>';
echo '159.3: ' . htmlspecialchars($str) . "<br>";
//Практика 160.1
echo '160.1: ' . ord('a') . " " .
    ord('b') . " " .
    ord('c') . " " .
    ord(' ') . "<br>";
//Практика 160.3
echo '160.3: ' . chr(33) . "<br>";
//Практика 160.4
$str = 'K';
echo '160.4: ' . (chr(75) === $str) . "<br>";
//Практика 160.5
$str = chr(97) . chr(100) . chr(105) . chr(122);
echo '160.5: ' . $str . "<br>";
//Практика 160.6
$str = 'a';
echo '160.6: ';
if (ord($str) >= 65 and ord($str) <= 90) {
    echo 'Верхний регистр!';
} elseif (ord($str) >= 97 and ord($str) <= 122) {
    echo 'Нижний регистр!';
} else {
    echo 'Это не буква латинского алфавита!';
}
echo "<br>";
//Практика 161.1
$str = 'aaa bbb ccc';
echo '161.1: ' . str_word_count($str) . "<br>";
//Практика 161.2
$str = 'hello hello world hello';
echo '161.2: ' . substr_count($str, 'hello') . "<br>";
//Практика 161.3
$str = '※※※';
echo '161.3: ' . substr_count($str, '※') . "<br>";
//Практика 161.4
$str = 'abracadabra';
echo '161.4: ';
var_dump(count_chars($str, 1));
echo "<br>";
//Практика 161.5
$str = 'The quick brown fox jumps over the lazy dog';
echo '161.5: ';
$res = (str_word_count($str, 1));
$count = 0;
foreach ($res as $value) {
    if (mb_strlen($value) > 3) {
        $count++;
    }
}
echo "$count <br>";
//Практика 162.1
$str = 'ab-cd-ef';
echo '162.1: ' . strchr($str, '-') . "<br>";
//Практика 162.2
echo '162.2: ' . strrchr($str, '-') . "<br>";
//Практика 162.3
$str = 'ab--cd--ef';
echo '162.3: ' . strstr($str, '-') . "<br>";
//Практика 162.4
$str = 'программирование-на-php';
echo '162.4: ' . mb_strrchr($str, '-') . "<br>";
//Практика 162.5
$str = 'Привет-Мир-Пока';
echo '162.5: ' . mb_strrichr($str, '-мир') . "<br>";
//Практика 162.6
$str = 'Функции-для-работы-со-строками';
echo '162.6: ' . mb_strstr($str, '-работы') . "<br>";
//Практика 162.7
$str = 'ппп ррр ссс ттт ууу';
echo '162.7: ' . mb_stristr($str, 'РРР') . "<br>";
//Практика 162.8
$str = 'Тестирование-многобайтовых-функций';
echo '162.8: ' . mb_strrchr($str, '-') . "<br>";
//Практика 162.9
$str = 'Пример-Поиска-Подстроки-В-Тексте';
echo '162.9: ' . mb_strrichr($str, '-в') . "<br>";