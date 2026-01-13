<?php

echo "<a href=\"../\"><h1>Главная страница</h1></a>";

//Практика 282
echo '282: ';
$arr = [
        ['name' => 'user1', 'age' => 30, 'salary' => 500],
        ['name' => 'user2', 'age' => 31, 'salary' => 600],
        ['name' => 'user3', 'age' => 32, 'salary' => 700],
];
$str = "<table>";
foreach ($arr as $item) {
    $str .= "<tr>
                <td>{$item['name']}</td>
                <td>{$item['age']}</td>
                <td>{$item['salary']}</td>
            </tr>";
}
$str .= "</table>";
echo $str;
echo "<br>";
?>
    <p><?= "282: " . date('Y-m-d') . "<br>";
        ?></p>
<?php
$show = true;
if ($show == true) {
    ?>
    <div>
        <p>text1</p>
        <p>text2</p>
        <p>text3</p>
    </div>
    <?php
} ?>
<?php
if ($show == false) {
    ?>
    <div>
        <p>text+</p>
        <p>text+</p>
        <p>text+</p>
    </div>
    <?php
} else { ?>
    <div>
        <p>text-</p>
        <p>text-</p>
        <p>text-</p>
    </div>
    <?php
} ?>
<?php
$test = 1;
if ($test === 1) { ?>
    <div>
        <p>text1</p>
        <p>text1</p>
        <p>text1</p>
    </div>
    <?php
} elseif ($test === 2) { ?>
    <div>
        <p>text2</p>
        <p>text2</p>
        <p>text2</p>
    </div>
    <?php
} else { ?>
    <div>
        <p>text-</p>
        <p>text-</p>
        <p>text-</p>
    </div>
    <?php
} ?>
<?php
echo '292: ';
echo "<ul>";
for ($i = 1; $i <= 5; $i++): ?>
    <li><?= $i ?></li>
<?php
endfor;
echo '</ul>';
echo "<br>"; ?>
<?php
$arr = ['user1', 'user2', 'user3'];
echo '293.1: ';
foreach ($arr as $elem): ?>
    <div>
        <h2><?= $elem ?></h2>
        <p>text</p>
    </div>
<?php
endforeach;
echo "<br>"; ?>
<?php
$arr = [
        [
                'name' => 'user1',
                'age' => 30,
        ],
        [
                'name' => 'user2',
                'age' => 31,
        ],
        [
                'name' => 'user3',
                'age' => 32,
        ],
];
echo '293.2: ';
foreach ($arr as $elem): ?>
    <div>
        <p><?= $elem['name'] ?></p>
        <p><?= $elem['age'] ?></p>
    </div>
<?php
endforeach;
echo "<br>"; ?>