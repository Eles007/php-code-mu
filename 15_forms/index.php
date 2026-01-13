<?php

echo "<a href=\"../\"><h1>Главная страница</h1></a>";

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
//Остановился на 303
