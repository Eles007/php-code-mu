<?php

date_default_timezone_set("Europe/Samara");
echo "<a href=\"../\"><h1>Главная страница</h1></a>";

echo "<a href=\"./index.php\"><h1>Назад</h1></a>";
?>
    <h2>Задание 1</h2>
    <form action="" method="get">
        Введите температуру(Цельсиях)
        <input
                name="temperature"
                type="number"
                value="<?= $_GET['temperature'] ?? '0' ?>"
        >
        <input type="submit">
    </form>

<?php
if (!empty($_GET)) {
    if (!empty($_GET['temperature']) or $_GET['temperature'] == '0') {
        $tF = ((int)$_GET['temperature']) * 9 / 5 + 32;
        echo "В Фаренгейтах - " . $tF;
    } else {
        echo "Ошибка! Введите температуру";
    }
}
?>
    <h2>Задание 2</h2>
    <form action="" method="get">
        Введите число
        <input
                name="factorial"
                type="number"
                value="<?= $_GET['factorial'] ?? '0' ?>"
                step="1"
                min="0"
        >
        <input type="submit">
    </form>

<?php
function factorial($factorial)
{
    if ($factorial == 0 or $factorial == 1) {
        return 1;
    }
    return $factorial * factorial($factorial - 1);
}


if (!empty($_GET)) {
    if (!empty($_GET['factorial']) or $_GET['factorial'] == '0') {
        echo "Факториал($_GET[factorial]) = " . factorial((int)$_GET['factorial']);
    } else {
        echo "Ошибка! Введите число!";
    }
}
?>
    <h2>Задание 3</h2>
    <form action="" method="get">
        Введите число
        <input
                name="number"
                type="number"
                value="<?= $_GET['number'] ?? '0' ?>"
                step="1"
        >
        <input type="submit">
    </form>

<?php
function getDivisors($number): array
{
    $arr = [];
    for ($i = 1; $i <= $number; $i++) {
        if ($number % $i == 0) {
            $arr[] = $i;
        }
    }
    return $arr;
}

if (!empty($_GET)) {
    if (!empty($_GET['number']) or $_GET['number'] == '0') {
        echo "Количество делителей = " . json_encode(getDivisors((int)$_GET['number']));
    } else {
        echo "Ошибка! Введите число!";
    }
}
?>
    <h2>Задание 4</h2>
    <form action="" method="get">
        Введите число
        <input
                name="number1"
                type="number"
                value="<?= $_GET['number1'] ?? '0' ?>"
                step="1"
        >
        <input
                name="number2"
                type="number"
                value="<?= $_GET['number2'] ?? '0' ?>"
                step="1"
        >
        <input type="submit">
    </form>

<?php
function getCommonDivisors($num1, $num2): array
{
    $arr1 = getDivisors($num1);
    $arr2 = getDivisors($num2);

    return array_intersect($arr1, $arr2);
}

if (!empty($_GET)) {
    if (!empty($_GET['number1']) or $_GET['number1'] == '0' and
            !empty($_GET['number2']) or $_GET['number2'] == '0') {
        echo "Количество общих делителей = " . json_encode(
                        array_values(getCommonDivisors((int)$_GET['number1'], (int)$_GET['number2']))

                );
    } else {
        echo "Ошибка! Введите число!";
    }
}
?>
    <h2>Задание 5</h2>
    <form action="" method="get">
        Найти корни
        <input
                name="a"
                type="number"
                value="<?= $_GET['a'] ?? '0' ?>"
                step="1"
        > x<sup>2</sup> +
        <input
                name="b"
                type="number"
                value="<?= $_GET['b'] ?? '0' ?>"
                step="1"
        >x -
        <input
                name="c"
                type="number"
                value="<?= $_GET['c'] ?? '0' ?>"
                step="1"
        > = 0
        <input type="submit">
    </form>

<?php

if (!empty($_GET)) {
    if (!empty($_GET['a']) or $_GET['a'] == '0' and
            !empty($_GET['b']) or $_GET['b'] == '0' and
            !empty($_GET['c']) or $_GET['c'] == '0') {
        $D = $_GET['b'] * $_GET['b'] - 4 * $_GET['a'] * $_GET['c'];
        echo "D = $D <br>";
        if ($D === 0) {
            echo "x = " . (-$_GET['b']) / 2 * $_GET['a'];
        } elseif ($D > 0) {
            echo "x1 = " . ((-$_GET['b']) - sqrt($D)) / (2 * $_GET['a']) . "<br>";
            echo "x2 = " . ((-$_GET['b']) + sqrt($D)) / (2 * $_GET['a']);
        } else {
            echo "Нет корней";
        }
    } else {
        echo "Ошибка! Введите числа!";
    }
}
?>
    <h2>Задание 6</h2>
    <form action="" method="get">
        Проверить являются ли пифагоровой тройкой
        <input
                name="num1"
                type="number"
                value="<?= $_GET['num1'] ?? '0' ?>"
                step="1"
        >
        <input
                name="num2"
                type="number"
                value="<?= $_GET['num2'] ?? '0' ?>"
                step="1"
        >
        <input
                name="num3"
                type="number"
                value="<?= $_GET['num3'] ?? '0' ?>"
                step="1"
        >
        <input type="submit">
    </form>

<?php

function isPythagoreanTriple($n1, $n2, $n3): bool
{
    $arr = [(int)$n1, (int)$n2, (int)$n3];
    sort($arr);
    return $n3 * $n3 === $n2 * $n2 + $n1 * $n1;
}

if (!empty($_GET)) {
    if (!empty($_GET['num1']) and !empty($_GET['num2']) and !empty($_GET['num3'])) {
        if (isPythagoreanTriple($_GET['num1'], $_GET['num2'], $_GET['num3'])) {
            echo "Является пифагоровой тройкой!";
        } else {
            echo "НЕ является пифагоровой тройкой!";
        }
    } else {
        echo "Ошибка! Введите числа!";
    }
}
?>

    <h2>Задание 7</h2>
    <form action="" method="get">
        Введите дату рождения
        <input
                name="birth-date"
                type="date"
                value="<?= $_GET['birth-date'] ?? date('Y-m-d') ?>"
        >
        <input type="submit">
    </form>

<?php

function getDaysToBirthday($date)
{
    $yearNow = date('Y');
    $monthAndDayBirthday = date('-m-d', strtotime($date));

    return date('z', strtotime($yearNow . $monthAndDayBirthday)) - date('z');;
}

if (!empty($_GET)) {
    if (!empty($_GET['birth-date'])) {
        echo "Осталось до дня рождения = " . getDaysToBirthday($_GET['birth-date']);
    } else {
        echo "Ошибка! Введите дату!";
    }
}
?>

    <h2>Задание 8</h2>
    <form action="" method="get">
        Введите текст
        <textarea name="text"><?= $_GET['text'] ?? '' ?></textarea>
        <input type="submit">
    </form>

<?php
if (!empty($_GET)) {
    if (!empty($_GET['text'])) {
        echo 'Количество символов в тексте = ' . mb_strlen($_GET['text']) . '<br>';
        preg_match_all('#[\w-]+#u', $_GET['text'], $matches);
        echo 'Количество слов в тексте = ' . count($matches[0]) . '<br>';
    } else {
        echo "Ошибка! Введите текст!";
    }
}
?>

    <h2>Задание 9</h2>
    <form action="" method="get">
        Введите текст
        <textarea name="text2"><?= $_GET['text2'] ?? '' ?></textarea>
        <input type="submit">
    </form>

<?php
if (!empty($_GET)) {
    if (!empty($_GET['text2'])) {
        $totalChars = mb_strlen($_GET['text2']);
        $chars = mb_str_split($_GET['text2']);
        $result = array_count_values($chars);
        foreach ($result as $char => $count) {
            echo "'$char' = " . round($count / $totalChars * 100, 1) . "%<br>";
        }
    } else {
        echo "Ошибка! Введите текст!";
    }
}
?>
    <h2>Задание 10</h2>
    <form action="" method="get">
        День <select name="day-date-N10">
            <?php
            for ($i = 1; $i <= 31; $i++) {
                $selectedDay = ($i == $_GET['day-date-N10']) ? 'selected' : '';
                echo "<option value='$i' $selectedDay>$i</option>";
            } ?>
        </select>
        Месяц <select name="month-date-N10">
            <?php
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
            foreach ($months as $key => $value) {
                $selectedMonth = ($i == $_GET['month-date-N10']) ? 'selected' : '';
                echo "<option value='$key' $selectedMonth>$value</option>";
            } ?>
        </select>
        Год <select name="year-date-N10">
            <?php
            for ($i = (int)date('Y'); $i >= 1990; $i--) {
                $selectedYear = ($i == $_GET['year-date-N10']) ? 'selected' : '';
                echo "<option value='$i' $selectedYear>$i</option>";
            }
            ?>
        </select>
        <input type="submit">
    </form>

<?php
function getDayOfWeek($year, $month, $day)
{
    $days = [
            'Воскресенье',
            'Понедельник',
            'Вторник',
            'Среда',
            'Четверг',
            'Пятница',
            'Суббота'
    ];
    return $days[date('w', strtotime($year . $month . $day))];
}


if (!empty($_GET)) {
    echo getDayOfWeek($_GET['year-date-N10'], $_GET['month-date-N10'], $_GET['day-date-N10']);
} ?>

    <h2>Задание 12</h2>
    <form action="" method="get">
        Введите дату рождения
        <input
                name="horoscope-birth-date"
                type="date"
                value="<?= $_GET['horoscope-birth-date'] ?? date('Y-m-d') ?>"
        >
        <input type="submit">
    </form>

<?php
function getZodiacSign($date)
{
    $month = date('m', strtotime($date));
    $day = date('d', strtotime($date));

    if (($month == 3 && $day >= 21) || ($month == 4 && $day <= 19)) {
        return 'Овен';
    }
    if (($month == 4 && $day >= 20) || ($month == 5 && $day <= 20)) {
        return 'Телец';
    }
    if (($month == 5 && $day >= 21) || ($month == 6 && $day <= 20)) {
        return 'Близнецы';
    }
    if (($month == 6 && $day >= 21) || ($month == 7 && $day <= 22)) {
        return 'Рак';
    }
    if (($month == 7 && $day >= 23) || ($month == 8 && $day <= 22)) {
        return 'Лев';
    }
    if (($month == 8 && $day >= 23) || ($month == 9 && $day <= 22)) {
        return 'Дева';
    }
    if (($month == 9 && $day >= 23) || ($month == 10 && $day <= 22)) {
        return 'Весы';
    }
    if (($month == 10 && $day >= 23) || ($month == 11 && $day <= 21)) {
        return 'Скорпион';
    }
    if (($month == 11 && $day >= 22) || ($month == 12 && $day <= 21)) {
        return 'Стрелец';
    }
    if (($month == 12 && $day >= 22) || ($month == 1 && $day <= 19)) {
        return 'Козерог';
    }
    if (($month == 1 && $day >= 20) || ($month == 2 && $day <= 18)) {
        return 'Водолей';
    }
    if (($month == 2 && $day >= 19) || ($month == 3 && $day <= 20)) {
        return 'Рыбы';
    }

    return 'Неизвестный знак';
}

$horoscopes = [
    // Овен (21.03 — 19.04)
        'Овен' => [
                '2026-01-14' => 'Сегодня вас ждёт неожиданный поворот в делах. Не бойтесь брать на себя ответственность — это откроет новые возможности.',
                '2026-01-15' => 'Будьте открыты к новым знакомствам: среди них может оказаться человек, который изменит вашу жизнь.',
                '2026-01-16' => 'Сосредоточьтесь на долгосрочных планах — сейчас удачное время для их проработки.'
        ],

    // Телец (20.04 — 20.05)
        'Телец' => [
                '2026-01-14' => 'Финансовые вопросы потребуют внимания. Тщательно проверяйте документы и условия сделок.',
                '2026-01-15' => 'Ваша настойчивость принесёт плоды — не отступайте от намеченных целей.',
                '2026-01-16' => 'Найдите время для отдыха: переутомление может снизить эффективность работы.'
        ],

    // Близнецы (21.05 — 20.06)
        'Близнецы' => [
                '2026-01-14' => 'Общение принесёт радость и полезные связи. Используйте красноречие для убеждения оппонентов.',
                '2026-01-15' => 'Не спешите с решениями — дайте себе время взвесить все «за» и «против».',
                '2026-01-16' => 'Творческий проект потребует свежих идей. Обратитесь за помощью к друзьям.'
        ],

    // Рак (21.06 — 22.07)
        'Рак' => [
                '2026-01-14' => 'Семейные дела выйдут на первый план. Найдите баланс между работой и домом.',
                '2026-01-15' => 'Интуиция подскажет верный путь в сложной ситуации. Доверяйте внутреннему голосу.',
                '2026-01-16' => 'Небольшие траты принесут удовольствие. Позвольте себе маленькие радости.'
        ],

    // Лев (23.07 — 22.08)
        'Лев' => [
                '2026-01-14' => 'Ваша энергия вдохновит окружающих. Берите лидерство в свои руки!',
                '2026-01-15' => 'Избегайте конфликтов — дипломатичность сохранит важные отношения.',
                '2026-01-16' => 'Новые увлечения могут стать источником дохода. Пробуйте нестандартные идеи.'
        ],

    // Дева (23.08 — 22.09)
        'Дева' => [
                '2026-01-14' => 'Порядок в делах — залог успеха. Составьте список задач и следуйте ему.',
                '2026-01-15' => 'Здоровье требует внимания. Включите в распорядок дня лёгкие упражнения.',
                '2026-01-16' => 'Коллеги поддержат ваши инициативы. Не стесняйтесь просить помощи.'
        ],

    // Весы (23.09 — 22.10)
        'Весы' => [
                '2026-01-14' => 'Компромиссы помогут избежать напряжённых ситуаций. Ищите золотую середину.',
                '2026-01-15' => 'Романтические отношения расцветут. Устройте сюрприз для партнёра.',
                '2026-01-16' => 'Путешествия принесут вдохновение. Рассмотрите короткие поездки.'
        ],

    // Скорпион (23.10 — 21.11)
        'Скорпион' => [
                '2026-01-14' => 'Тайные знания откроются вам. Доверьтесь интуиции при анализе информации.',
                '2026-01-15' => 'Конкуренты не смогут помешать вашим планам. Действуйте уверенно.',
                '2026-01-16' => 'Эмоции могут захлестнуть — найдите способ их выразить творчески.'
        ],

    // Стрелец (22.11 — 21.12)
        'Стрелец' => [
                '2026-01-14' => 'Новые горизонты ждут вас. Смело планируйте дальние поездки.',
                '2026-01-15' => 'Обучение даст плоды — ваши знания оценят по достоинству.',
                '2026-01-16' => 'Оптимизм привлечёт удачу. Делитесь позитивом с окружающими.'
        ],

    // Козерог (22.12 — 19.01)
        'Козерог' => [
                '2026-01-14' => 'Карьерные амбиции оправдают себя. Проявите упорство в переговорах.',
                '2026-01-15' => 'Экономия окупится в будущем. Отложите часть доходов.',
                '2026-01-16' => 'Одиночество может наступить — найдите время для душевных разговоров.'
        ],

    // Водолей (20.01 — 18.02)
        'Водолей' => [
                '2026-01-14' => 'Новаторские идеи найдут отклик. Предложите нестандартные решения на работе.',
                '2026-01-15' => 'Друзья поддержат любые начинания. Организуйте совместный проект.',
                '2026-01-16' => 'Рутина утомит — внесите разнообразие в повседневность.'
        ],

    // Рыбы (19.02 — 20.03)
        'Рыбы' => [
                '2026-01-14' => 'Мечты станут ближе к реальности. Запишите цели и шаги к ним.',
                '2026-01-15' => 'Чувствительность к чужим проблемам поможет укрепить отношения.',
                '2026-01-16' => 'Творчество исцелит душу. Попробуйте рисование или музыку.'
        ]
];
foreach ($horoscopes as $zodiak => $horoscope) {
    if ($zodiak == getZodiacSign($_GET['horoscope-birth-date'])) {
        foreach ($horoscope as $key => $value) {
            echo $key . ': ' . $value . "<br>";
        }
    }
}
?>