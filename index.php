<?php

// Подключаем задания
require_once('functions.php');
// Магия которая пригодится в жизни
ob_start();
// начало вывода первого задания
echo "<div class='jumbotron'>";
echo "<h5>", "Задание 1", "</h5>";
// Вариант 1
echo "<h6>", "Вариант 1", "</h6>";
$data = [
    "Пусть всегда будет солнце,",
    "Пусть всегда будет небо,",
    "Пусть всегда будет мама,",
    "Пусть всегда буду я."
];
echo "<p>", task1($data), "</p>";
// Вариант 2
echo "<h6>", "Вариант 2", "</h6>";
$data = [
    "От",
    "улыбки",
    "хмурый",
    "день",
    "светлей"
];
echo "<p>", task1($data, true), "</p>";
echo "</div>";
// конец вывода первого задания
// начало вывода второго задания
echo "<div class='jumbotron'>";
echo "<h5>", "Задание 2", "</h5>";
$data = [1, 2, 3, 4, 5];
echo "<p>", task2($data, "+"), "</p>";
echo "<p>", task2($data, "-"), "</p>";
echo "<p>", task2($data, "*"), "</p>";
$data = [16, 8, 2, 1];
echo "<p>", task2($data, "/"), "</p>";
echo "<p>", task2($data, "k"), "</p>";
echo "</div>";
// конец вывода второго задания
// начало вывода третьего задания
echo "<div class='jumbotron'>";
echo "<h5>", "Задание 3", "</h5>";
$data = [];
echo "<p>", task3("+", 1, 2, 3, 4, 5), "</p>";
echo "<p>", task3($data, "-", 1, 2, 3, 4, 5), "</p>";
echo "<p>", task3($data, "*", 1, 2, 3, 4, 5), "</p>";
$data = [16, 8, 2, 1];
echo "<p>", task3($data, "/"), "</p>";
echo "</div>";
// конец вывода третьего задания
// начало вывода четвертого задания
echo "<div class='jumbotron'>";
echo "<h5>", "Задание 4", "</h5>";
echo task4(8, 8);
echo "</div>";
// конец вывода четвертого задания
// начало вывода пятого задания
echo "<div class='jumbotron'>";
echo "<h5>", "Задание 5", "</h5>";
echo "<p>", task5("А роза упала на лапу Азора"), "</p>";
echo "<p>", task5("radar"), "</p>";
echo "<p>", task5("reader"), "</p>";
echo "</div>";
// конец вывода пятого задания
// начало вывода шестого задания
echo "<div class='jumbotron'>";
echo "<h5>", "Задание 6", "</h5>";
echo "<p>", task6(), "</p>";
echo "</div>";
// конец вывода шестого задания
// начало вывода седьмого задания
echo "<div class='jumbotron'>";
echo "<h5>", "Задание 7", "</h5>";
echo "<p>", task7("24.02.2016 00:00:00"), "</p>";
echo "</div>";
// конец вывода седьмого задания
// ...
$content = ob_get_contents();
ob_end_clean();
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Второе домашнее задание от loftschool.com</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md">
            <h1>Второе домашнее задание</h1>
            <?= $content ?>
        </div>
    </div>
</div>
</body>
</html>