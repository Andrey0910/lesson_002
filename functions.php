<?php
function task1($arr, $bool = false)
{
    foreach ($arr as $item) {
        echo "<p>", $item, "</p>";
    }
    if ($bool) {
        return implode(" ", $arr);
    }
}

function task2($arrNum, $action)
{
    $actionArr = ["+", "-", "*", "/"];
    if (!in_array($action, $actionArr) || empty($action)) {
        echo "Арифметическое действие не определено.";
        return null;
    }
    $res = null;
    foreach ($arrNum as $item) {
        if (!is_numeric($item)) {
            echo "Массив содержит не число.";
            return null;
        }
        switch ($action) {
            case "+":
                $res += $item;
                break;
            case "-":
                $res -= $item;
                break;
            case "*":
                empty($res) ? $res = $item : $res *= $item;
                break;
            case "/":
                if (!empty($res) && $item == 0) {
                    echo "На ноль делить нельзя.";
                    return null;
                }
                empty($res) ? $res = $item : $res /= $item;
                break;
        }
    }
    return $res;
}

function task3()
{
    $args = func_get_args();
    $operation = $args[0];
    unset($args[0]);
    return task2($args, $operation);
}

function task4($sizeRows, $sizeColumns)
{
    if (!is_int($sizeRows)) {
        echo "Колличество строк в таблице заданно не верно.";
        return null;
    }
    if (!is_int($sizeColumns)) {
        echo "Колличество столбцов в таблице заданно не верно.";
        return null;
    }
    if ($sizeRows == 0 && $sizeColumns == 0) {
        return null;
    }
    if ($sizeRows != $sizeColumns) {
        echo "Колличество строк и столбцов в таблице должно быть одинаковое.";
        return null;
    }
    echo "<table>";
    for ($row = 1; $row <= $sizeRows; $row++) {
        echo "<tr>";
        for ($col = 1; $col <= $sizeColumns; $col++) {
            $num = $row * $col;
            echo "<td>", $num, "<td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "<br>";
    task4($sizeRows - 1, $sizeColumns - 1);
}

function isPalindrome($str)
{
    $str = str_replace(' ', '', $str);
    $str = mb_strtolower($str);
    $strLength = mb_strlen($str);
    for ($start = 0, $end = $strLength - 1; $start < $strLength; $start++, $end--) {
        if (mb_substr($str, $start, 1) != mb_substr($str, $end, 1)) {
            return false;
        }
    }
    return true;
}

function task5($str)
{
    echo $str, " - ", (isPalindrome($str)) ? "Палиндром!" : "Не палиндром.";
}

function task6()
{
    $date = date("d.m.Y H:i");
    return $date;
}

function task7($strDate)
{
    $date = strtotime($strDate);
    return $date;
}

function task8($fileName)
{
    $str = file_get_contents($fileName);
    echo $str;
}

function task9()
{
    $file = "anothertest.txt";
    $str = "Hello again!";
    file_put_contents($file, $str);
}