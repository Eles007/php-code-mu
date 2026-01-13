<?php

echo "<a href='../'><h1>Главная страница</h1></a>";

//Практика 223.1
$str = 'ahb acb aeb aeeb adcb axeb';
echo '223.1: ' . preg_replace('#a.b#', '!', $str) . "<br>";
//Практика 223.2
echo '223.2: ' . preg_replace('#a..b#', '!', $str) . "<br>";
//Практика 224.1
$str = 'aa aba abba abbba abca abea';
echo '224.1: ' . preg_replace('#ab+a#', '!', $str) . "<br>";
//Практика 224.2
echo '224.2: ' . preg_replace('#ab*a#', '!', $str) . "<br>";
//Практика 224.3
echo '224.3: ' . preg_replace('#ab?a#', '!', $str) . "<br>";
//Практика 224.4
echo '224.4: ' . preg_replace('#ab*a#', '!', $str) . "<br>";
//Практика 225
$str = 'ab abab abab abababab abea';
echo '225: ' . preg_replace('#(ab)+#', '!', $str) . "<br>";
//Практика 227.1
$str = 'a.a aba aea';
echo '227.1: ' . preg_replace('#a\.a#', '!', $str) . "<br>";
//Практика 227.2
$str = '2+3 223 2223';
echo '227.2: ' . preg_replace('#2\+3#', '!', $str) . "<br>";
//Практика 227.3
$str = '23 2+3 2++3 2+++3 345 567';
echo '227.3: ' . preg_replace('#2(\+)+3#', '!', $str) . "<br>";
//Практика 227.4
echo '227.4: ' . preg_replace('#2(\+)*3#', '!', $str) . "<br>";
//Практика 227.5
$str = '*+ *q+ *qq+ *qqq+ *qqq qqq+';
echo '227.5: ' . preg_replace('#\*q+\+#', '!', $str) . "<br>";
//Практика 227.6
$str = '[abc] {abc} abc (abc) [abc]';
echo '227.6: ' . preg_replace('#\[abc\]#', '!', $str) . "<br>";
//Практика 228.1
$str = 'aa aba abba abbba abbbba abbbbba';
echo '228.1: ' . preg_replace('#ab{2,4}a#', '!', $str) . "<br>";
//Практика 228.2
echo '228.2: ' . preg_replace('#ab{1,3}a#', '!', $str) . "<br>";
//Практика 228.3
echo '228.3: ' . preg_replace('#ab{4,}a#', '!', $str) . "<br>";
//Практика 229
$str = 'aba accca azzza wwwwa';
echo '229: ' . preg_replace('#a.+?a#', '!', $str) . "<br>";
//Практика 230.1
$str = 'a1a a2a a3a a4a a5a aba aca';
echo '230.1: ' . preg_replace('#a\da#', '!', $str) . "<br>";
//Практика 230.2
$str = 'a1a a22a a333a a4444a a55555a aba aca';
echo '230.2: ' . preg_replace('#a\d+a#', '!', $str) . "<br>";
//Практика 230.3
$str = 'aa a1a a22a a333a a4444a a55555a aba aca';
echo '230.3: ' . preg_replace('#a\d*a#', '!', $str) . "<br>";
//Практика 230.4
$str = 'avb a1b a2b a3b a4b a5b abb acb';
echo '230.4: ' . preg_replace('#a\Db#', '!', $str) . "<br>";
//Практика 230.5
$str = 'ave a#b a2b a$b a4b a5b a-b acb';
echo '230.5: ' . preg_replace('#a\Wb#', '!', $str) . "<br>";
//Практика 230.6
$str = 'ave a#a a2a a$a a4a a5a a-a aca';
echo '230.6: ' . preg_replace('#\s#', '!', $str) . "<br>";
//Практика 231.1
$str = 'aba aea aca aza axa';
echo '231.1: ' . preg_replace('#a[bex]a#', '!', $str) . "<br>";
//Практика 231.2
$str = 'a1a a3a a7a a9a aba';
echo '231.2: ' . preg_replace('#a[3-6]a#', '!', $str) . "<br>";
//Практика 231.3
$str = 'aba aea afa aha aga';
echo '231.3: ' . preg_replace('#a[a-g]a#', '!', $str) . "<br>";
//Практика 231.4
$str = 'aba aea afa aha aga';
echo '231.4: ' . preg_replace('#a[a-fj-z]a#', '!', $str) . "<br>";
//Практика 231.5
$str = 'aAa aea aEa aJa a3a';
echo '231.5: ' . preg_replace('#a[a-fA-D]a#', '!', $str) . "<br>";
//Практика 231.6
$str = 'aAXa aeffa aGha aza ax23a a3sSa';
echo '231.6: ' . preg_replace('#a[a-z]+a#', '!', $str) . "<br>";
//Практика 231.7
echo '231.7: ' . preg_replace('#a[a-zA-Z]+a#', '!', $str) . "<br>";
//Практика 231.8
echo '231.8: ' . preg_replace('#a[a-z0-9]+a#', '!', $str) . "<br>";
//Практика 232.1
echo '232.1: ' . preg_replace('#1[^ex]2#', '!', $str) . "<br>";
//Практика 232.2
echo '232.2: ' . preg_replace('#x[^2-7]z#', '!', $str) . "<br>";
//Практика 232.3
echo '232.3: ' . preg_replace('#x[^A-Z]+z#', '!', $str) . "<br>";
//Практика 232.4
echo '232.4: ' . preg_replace('#x[^a-zA-Z1-5]+z#', '!', $str) . "<br>";
//Практика 233.1
$str = 'wйw wяw wёw wqw';
echo '233.1: ' . preg_replace('#w[а-яё]w#u', '!', $str) . "<br>";
//Практика 233.2
$str = 'ааа ббб ёёё ззз ййй ААА БББ ЁЁЁ ЗЗЗ ЙЙЙ';
echo '233.2: ' . preg_replace('#[а-яёА-ЯЁ]+#u', '!', $str) . "<br>";
//Практика 234.1
$str = 'aba aea aca aza axa a.a a+a a*a';
echo '234.1: ' . preg_replace('#a[.+*]a#', '!', $str) . "<br>";
//Практика 234.2
$str = 'xaz x.z x3z x@z x$z xrz';
echo '234.2: ' . preg_replace('#x[^.@$]z#', '!', $str) . "<br>";
//Практика 235.1
echo '235.1: ' . preg_replace('#[\d.]+#', '!', $str) . "<br>";
//Практика 235.2
echo '235.2: ' . preg_replace('#[^\da-g]{3,7}+#', '!', $str) . "<br>";
//Практика 236.1
$str = 'x[]z x{}z x.z x()z';
echo '236.1: ' . preg_replace('#x[\[\]\{\}\(\)]+z#', '!', $str) . "<br>";
//Практика 236.2
$str = '[abc] {abc} abc (abc) [abc]';
echo '236.2: ' . preg_replace('#[\[\{\(].+?[\]\}\)]#', '!', $str) . "<br>";
//Практика 237.1
$str = '^xx axx ^zz bkk @ss';
echo '237.1: ' . preg_replace('#[@^][a-z][a-z]#', '!', $str) . "<br>";
//Практика 237.2
echo '237.2: ' . preg_replace('#[^@^\s][a-z][a-z]#', '!', $str) . "<br>";
//Практика 238.1
$str = 'xaz xBz xcz x-z x@z';
echo '238.1: ' . preg_replace('#x[a-z-A-Z]z#', '!', $str) . "<br>";
//Практика 238.2
$str = 'xaz x$z x-z xcz x+z x%z x*z';
echo '238.2: ' . preg_replace('#x[$+-]z#', '!', $str) . "<br>";
//Практика 239.1
$str = 'abc def xyz';
echo '239.1: ' . preg_replace('#^[a-z]{3}#', '!', $str) . "<br>";
//Практика 239.2
echo '239.2: ' . preg_replace('#[a-z]{3}$#', '!', $str) . "<br>";
//Практика 239.3
$str = '$aaa$ $bbb$ $ccc$';
echo '239.3: ' . preg_replace('#\$[a-z]{3}\$$#', '!', $str) . "<br>";
//Практика 240
$str = 'aaa xaa aaa xbb aaa';
echo '240: ' . preg_replace('#\bx.*?\b#', '!', $str) . "<br>";
//Практика 241.1
$str = 'aeeea aeea aea axa axxa axxxa';
echo '241.1: ' . preg_replace('#a(e+|x+)a#', '!', $str) . "<br>";
//Практика 241.2
echo '241.2: ' . preg_replace('#a(e{2}|x+)a#', '!', $str) . "<br>";
//Практика 242
echo '242: ' . preg_replace('~a(e{2}|x+)a~', '!', $str) . "<br>";
//Практика 244.1
$str = 'a\\b c\\d e\\f';
echo '244.1: ' . preg_replace('#[a-z]\\\\[a-z]#', '!', $str) . "<br>";
//Практика 244.2
$str = 'a\\b c\\\\d e\\\\\\f';
echo '244.2: ' . preg_replace('#[a-z]\\\\+[a-z]#', '!', $str) . "<br>";
//Практика 245.1
echo '245.1: ' . preg_match('#\d{3}#', '123') . "<br>";
//Практика 245.2
echo '245.2: ' . preg_match('#^http#', 'http') . "<br>";
//Практика 245.3
echo '245.3: ' . preg_match('#^(http|https)#', 'https') . "<br>";
//Практика 245.4
echo '245.4: ' . preg_match('#(txt|html|php)$#', 'text.php') . "<br>";
//Практика 245.5
echo '245.5: ' . preg_match('#(jpg|jpeg)$#', 'img.jpg') . "<br>";
//Практика 246
echo '246: ';
$reg = '#\d+\.\d+#';
$arr[] = 'aaa 12.3 bbb';
$arr[] = 'aaa 1.2345 bbb';
$arr[] = 'aaa 12x bbb';
$arr[] = 'aaa 12 bbb';
foreach ($arr as $str) {
    echo $str . ' ' . preg_match($reg, $str) . '<br>';
}
//Практика 247.1
echo '247.1: ';
$reg = '#^[a-z-0-9_]+\.(com|ru|travel)$#';
$arr = [];
$arr[] = 'site.ru';          // +
$arr[] = 'site.com';         // +
$arr[] = 'my-site.com';      // +
$arr[] = 'my-cool-site.com'; // +
$arr[] = 'my_site.com';      // +
$arr[] = 'site123.com';      // +
$arr[] = 'site.travel';      // +
$arr[] = 'si$te.com';        // -
$arr[] = 'site.r';           // -
foreach ($arr as $str) {
    echo $str . ' ' . preg_match($reg, $str) . '<br>';
}
//Практика 247.2
echo '247.2: ';
$reg = '#^[a-z-0-9_]+@(mail|site)\.ru$#';
$arr = [];
$arr[] = 'addr@mail.ru';    // +
$arr[] = 'addr123@mail.ru'; // +
$arr[] = 'my-addr@mail.ru'; // +
$arr[] = 'my_addr@mail.ru'; // +
$arr[] = 'addr@site.ru';    // +
$arr[] = 'addr.ru';         // -
$arr[] = 'addr@.ru';        // -
$arr[] = 'my@addr@mail.ru'; // -
foreach ($arr as $str) {
    echo $str . ' ' . preg_match($reg, $str) . '<br>';
}
//Практика 248.1
echo '248.1: ';
$str = '2025-12-31';
$reg = '#(\d{4})-(\d{2})-(\d{2})#';
preg_match($reg, $str, $res);
echo json_encode($res);
echo "<br>";
//Практика 248.2
echo '248.2: ';
$str = 'index.html';
$reg = '#([a-z0-9_-]+)\.([a-z]{4})#';
preg_match($reg, $str, $res);
echo json_encode($res);
echo "<br>";
//Практика 249
echo '249: ';
$str = '1 33 233 444';
echo preg_match_all('#[0-9]+#', $str);
echo "<br>";
//Практика 250
echo '250: ';
$str = '2023-10-29 2024-11-30 2025-12-31';
$reg = '#(\d{4})-(\d{2})-(\d{2})#';
preg_match_all($reg, $str, $res);
echo json_encode($res);
echo "<br>";
//Практика 251
echo '251: ';
$str = '2023-10-29 2024-11-30 2025-12-31';
preg_match_all($reg, $str, $res, PREG_SET_ORDER);
echo json_encode($res);
echo "<br>";
//Практика 252
echo '252: ';
$str = 'aaa$@bbb aaa$@$@bbb aaa$@$@$@bbb';
preg_match_all('#([a-z]+)(?:\$@)+([a-z]+)#', $str, $res);
echo json_encode($res);
echo "<br>";
//Практика 253.1
echo '253.1: ';
$str = '12 34 56 78';
echo preg_replace('#(\d)(\d)#', '$2$1', $str);
echo "<br>";
//Практика 253.2
echo '253.2: ';
$str = '31.12.2025';
echo preg_replace('#(\d\d)\.(\d\d)\.([0-9]{4})#', '$3.$2.$1', $str);
echo "<br>";
//Практика 254.1
echo '254.1: ';
$str = 'aaa bbb ccc xyz';
echo preg_replace('#([a-z])\g1\g1#', '!', $str);
echo "<br>";
//Практика 254.2
echo '254.2: ';
$str = 'a aa aaa abab bbbb';
echo preg_replace('#([a-z])\g1+#', '!', $str);
echo "<br>";
//Практика 254.3
echo '254.3: ';
$str = 'aaa aaa bbb bbb ccc ddd';
echo preg_replace('#([a-z]+)\s\g1#', '!', $str);
echo "<br>";
//Практика 255.1
echo '255.1: ';
$str = '12:59:59';
preg_match('#(?<hours>\d\d):(?<minutes>\d\d):(?<seconds>\d\d)#', $str, $res);
echo json_encode($res);
echo "<br>";
//Практика 255.2
echo '255.2: ';
$str = '12:59:59';
preg_match('#(?<hours>\d\d):(?<minutes>\d\d):(?<seconds>\d\d)#', $str, $res);
function removeNumberedBuckets($array)
{
    foreach ($array as $key => $value) {
        if (preg_match('#\d#', $key)) {
            unset($array[$key]);
        }
    }
    return $array;
}

echo json_encode(removeNumberedBuckets($res));
echo "<br>";
//Практика 256
echo '256: ';
$str = '12:59:59 12:59:12 09:45:09';
echo preg_replace('#(?<hours>\d\d):(\d\d):\k<hours>#', '!', $str);
echo "<br>";
//Практика 257
echo '257: ';
$arr = [
    '31-12-2025',
    '30-11-1995',
    '29-10-1990',
];
foreach ($arr as $key => $str) {
    preg_match('#(\d\d)-(\d\d)-(?|19(\d\d)|20(\d\d))#', $str, $arr[$key]);
}
echo json_encode($arr);
echo "<br>";
//Практика 258.1
echo '258.1: ';
$str = 'func1() func2() func3()';
preg_match_all('#[a-z]+[0-9](?=\(\))#', $str, $res);
echo json_encode($res);
echo "<br>";
//Практика 258.2
echo '258.2: ';
$str = '<a href="" class="eee" id="zzz">';
preg_match_all('#[a-z]+(?=")#', $str, $res);
echo json_encode($res);
echo "<br>";
//Практика 259
echo '259: ';
$str = '$aaa $bbb $ccc';
preg_match_all('#(?<=\$)[a-z]+#', $str, $res);
echo json_encode($res);
echo "<br>";
//Практика 260.1
echo '260.1: ';
$str = 'The numbers are 3, 7 and 12';
$res = preg_replace_callback('#(\d+)#', function ($matches) {
    $matches[0] **= 2;
    return $matches[0];
}, $str);
echo $res;
echo "<br>";
//Практика 260.2
echo '260.2: ';
$str = '2023-01-15 2022-12-31 2024-05-20';
$res = preg_replace_callback('#(\d{4})-(\d\d)-(\d\d)#', function ($matches) {
    return $matches[3] . "." . $matches[2] . "." . $matches[1];
}, $str);
echo $res;
echo "<br>";
//Практика 260.3
echo '260.3: ';
$str = 'Costs: $15, $20, $100';
$res = preg_replace_callback('#((?<=\$)\d+)#', function ($matches) {
    $matches[0] += $matches[0] * 0.1;
    return $matches[0];
}, $str);
echo $res;
echo "<br>";
//Практика 268.1
echo '268.1: ';
$str = 'file.*.txt';
echo preg_quote($str);
echo "<br>";
//Практика 268.2
echo '268.2: ';
$str = 'price+[10-20]';
echo preg_quote($str);
echo "<br>";
//Практика 268.3
echo '268.3: ';
$str = 'user\name@domain.com';
echo preg_quote($str);
echo "<br>";
//Практика 269.1
echo '269.1: ';
$array = ['apple', 'banana', 'cherry', 'date', 'fig'];
echo json_encode(preg_grep('#^b#', $array));
echo "<br>";
//Практика 269.2
echo '269.2: ';
$arr = ['error404', 'success', 'warning', 'info', 'error500'];
echo json_encode(preg_grep('#^error#', $arr));
echo "<br>";
//Практика 269.3
echo '269.3: ';
$arr = ['123', '45.6', '78', '9.0', 'text'];
echo json_encode(preg_grep('#^\d+$#', $arr));
echo "<br>";
//Практика 269.4
echo '269.4: ';
$arr = [
    'user1@example.com',
    'invalid',
    'user2@test.org',
    'not-email'
];
echo json_encode(preg_grep('#[a-z-0-9_]+@[a-z]+\.[a-z]{3}#', $arr));
echo "<br>";
//Практика 270.1
echo '270.1: ';
$str = "apple,banana;cherry|date orange";
echo json_encode(preg_split('#[,;|\s]#', $str));
echo "<br>";
//Практика 270.2
echo '270.2: ';
$str = '2025-12-31 12:30:45';
echo json_encode(preg_split('#[-\s:]#', $str));
echo "<br>";
//Практика 270.3
echo '270.3: ';
$str = 'first.second.third.forth';
echo json_encode(preg_split('#\.#', $str));
echo "<br>";