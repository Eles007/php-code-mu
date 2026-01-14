<?php

echo "<a href=\"../\"><h1>Главная страница</h1></a>";

echo "<a href=\"practice.php\"><h1>Практика</h1></a>";

?>

<form action="" method="GET">
    <input
            placeholder="Введите год"
            name="year"
            value="<?= $_GET['year'] ?? date('Y') ?>"
    >
    <input
            placeholder="Введите месяц"
            name="month"
            value="<?= $_GET['month'] ?? date('m') ?>"
    >
    <input
            placeholder="Введите день"
            name="day"
            value="<?= $_GET['day'] ?? date('d') ?>"
    >
    <input type="submit">
</form>

<?php
if (!empty($_GET['year']) && !empty($_GET['month']) && !empty($_GET['day'])) {
    $daysPassedThisYear = date('z', strtotime("$_GET[year]-$_GET[month]-$_GET[day]"));
    if (date('L', strtotime("$_GET[year]-01-01"))) {
        echo "Количество дней до Нового года - " . 366 - $daysPassedThisYear;
    } else {
        echo "Количество дней до Нового года - " . 365 - $daysPassedThisYear;
    }
}
?>
<h2>303</h2>
<form action="" method="GET">
    <textarea name="feedback"><?= $_GET['feedback'] ?? '' ?></textarea>
    <input type="submit">
</form>

<?php
$translitMap = [
    // Заглавные буквы
        'А' => 'A',
        'Б' => 'B',
        'В' => 'V',
        'Г' => 'G',
        'Д' => 'D',
        'Е' => 'E',
        'Ё' => 'E',
        'Ж' => 'ZH',
        'З' => 'Z',
        'И' => 'I',
        'Й' => 'I',
        'К' => 'K',
        'Л' => 'L',
        'М' => 'M',
        'Н' => 'N',
        'О' => 'O',
        'П' => 'P',
        'Р' => 'R',
        'С' => 'S',
        'Т' => 'T',
        'У' => 'U',
        'Ф' => 'F',
        'Х' => 'KH',
        'Ц' => 'TS',
        'Ч' => 'CH',
        'Ш' => 'SH',
        'Щ' => 'SHCH',
        'Ъ' => '',
        'Ы' => 'Y',
        'Ь' => '',
        'Э' => 'E',
        'Ю' => 'IU',
        'Я' => 'IA',

    // Строчные буквы
        'а' => 'a',
        'б' => 'b',
        'в' => 'v',
        'г' => 'g',
        'д' => 'd',
        'е' => 'e',
        'ё' => 'e',
        'ж' => 'zh',
        'з' => 'z',
        'и' => 'i',
        'й' => 'i',
        'к' => 'k',
        'л' => 'l',
        'м' => 'm',
        'н' => 'n',
        'о' => 'o',
        'п' => 'p',
        'р' => 'r',
        'с' => 's',
        'т' => 't',
        'у' => 'u',
        'ф' => 'f',
        'х' => 'kh',
        'ц' => 'ts',
        'ч' => 'ch',
        'ш' => 'sh',
        'щ' => 'shch',
        'ъ' => '',
        'ы' => 'y',
        'ь' => '',
        'э' => 'e',
        'ю' => 'iu',
        'я' => 'ia',
];
function translit($str, $translitMap)
{
    return strtr($str, $translitMap);
}

if (!empty($_GET['feedback'])) {
    echo translit($_GET['feedback'], $translitMap);
} ?>
<h2>306</h2>
<form action="" method="GET">
    <input name="name">
    <input type="checkbox" name="flag">
    <input type="submit">
</form>

<?php
if (!empty($_GET)) {
    if (isset($_GET['flag'])) {
        echo "Здравствуйте - $_GET[name]";
    } else {
        echo "До свидания, $_GET[name]";
    }
} ?>

<h2>307</h2>
<form action="" method="GET">
    Вам есть 18?
    <input type="hidden" name="flag" value="0">
    <input
            type="checkbox"
            name="flag"
            value="1"
            <?php
            if (!empty($_GET['flag'])) {
                echo "checked";
            }
            ?>
    >
    <input type="submit">
</form>

<?php
if (!empty($_GET)) {
    if ($_GET['flag'] === '1') {
        echo "Доступ разрешен";
    } else {
        echo "Доступ запрещен";
    }
} ?>

<h2>308</h2>
<form action="" method="GET">
    Выберите ответ:
    <input
            type="checkbox"
            name="flag1"
            value="1"
            <?php
            if (!empty($_GET['flag1'])) {
                echo "checked";
            }
            ?>
    >
    <input
            type="checkbox"
            name="flag2"
            <?php
            if (!empty($_GET['flag2'])) {
                echo "checked";
            }
            ?>
    >
    <input
            type="checkbox"
            name="flag3"
            <?php
            if (!empty($_GET['flag3'])) {
                echo "checked";
            }
            ?>
    >
    <input type="submit">
</form>

<h2>309</h2>

<form action="" method="GET">
    Выберите пол:
    М<input type="radio" name="radio" value="1" checked>
    Ж<input type="radio" name="radio" value="2">
    <input type="submit">
</form>

<?php
if (!empty($_GET)) {
    if ($_GET['radio'] === '1') {
        echo "Здравствуйте мужчина";
    } else {
        echo "Здравствуйте девушка";
    }
} ?>

<h2>310</h2>

<form action="" method="GET">
    Выберите язык:
    Русский<input
            type="radio"
            name="radio"
            value="1"
            <?php
            if (!empty($_GET['radio']) and $_GET['radio'] === '1') {
                echo 'checked';
            } ?>
    >
    Английский<input
            type="radio"
            name="radio"
            value="2"
            <?php
            if (!empty($_GET['radio']) and $_GET['radio'] === '2') {
                echo 'checked';
            } ?>
    >
    <input type="submit">
</form>

<?php
if (!empty($_GET)) {
    if ($_GET['radio'] === '1') {
        echo "Выбран русский язык";
    } else {
        echo "Выбран английский язык";
    }
} ?>

<h2>312</h2>

<form action="" method="GET">
    <select name="country">
        <option value="1"
                <?php
                if (!empty($_GET['country']) and $_GET['country'] === '1') {
                    echo 'selected';
                } ?>
        >Россия
        </option>
        <option value="2"
                <?php
                if (!empty($_GET['country']) and $_GET['country'] === '2') {
                    echo 'selected';
                } ?>
        >Китай
        </option>
        <option value="3"
                <?php
                if (!empty($_GET['country']) and $_GET['country'] === '3') {
                    echo 'selected';
                } ?>
        >Беларусь
        </option>
    </select>
    <input type="submit">
</form>

<h2>314</h2>

<?php
$arr = ['a', 'b', 'c', 'd', 'e'];
echo $arr[(int)$_GET['num1']];
?>

<h2>315</h2>

<?php
$arr = ['a', 'b', 'c', 'd', 'e'];
echo '$arr = [';
foreach ($arr as $ch) {
    echo " <a href=\"?par1=$ch\">$ch</a>, ";
}
echo ']';
?>

<?php
if (!empty($_GET)) {
    echo "<br> <h1>$_GET[par1] </h1>";
} ?>
