<?php
function task1($arr, $bool = false)
{
    if ($bool) {
        $str = "";
        foreach ($arr as $item) {
            $str .= $item . " ";
        }
        echo "<p>", $str, "</p>";
    } else {
        foreach ($arr as $item) {
            echo "<p>", $item, "</p>";
        }
    }
    return null;
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
                if (!empty($res) && $item == 0){
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
    $actionArr = ["+", "-", "*", "/"];
    $data = func_get_args();
    $action = null;
    $result = null;
    $numArr = null;
    foreach ($data as $key => $item) {
        if (is_array($item)) {
            if (count($item) > 0) {
                empty($numArr) ? $numArr = $item : array_merge($numArr, $item);
            } else {
                unset($data[$key]);
            }
        } elseif (in_array($item, $actionArr)) {
            $action = $item;
            unset($data[$key]);
        }
        else{
            empty($numArr) ? $numArr[0] = $item : array_push($numArr, $item);
        }
    }
    $result = task2($numArr, $action);
    return $result;
}

function task4($sizeRows, $sizeColumns)
{
    if (!is_int($sizeRows) || $sizeRows < 0) {
        echo "Колличество строк в таблице заданно не верно.";
        return null;
    }
    if (!is_int($sizeColumns) || $sizeColumns < 0) {
        echo "Колличество столбцов в таблице заданно не верно.";
        return null;
    }
    if ($sizeRows != $sizeColumns) {
        echo "Колличество строк и столбцов в таблице должно быть одинаковое.";
        return null;
    }
    for ($i = 1; $i <= $sizeRows; $sizeRows--, $sizeColumns--) {
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
    }
}

function isPalindrome($str)
{
    $str = str_replace(' ', '', $str);
    $str = mb_strtolower($str);
    for ($start = 0, $end = mb_strlen($str) - 1; $start < $end; $start++, $end--) {
        if (mb_substr($str, $start, 1) == mb_substr($str, $end, 1)) {
            return true;
        } else {
            return false;
        }
    }
}

function task5($str)
{
    echo $str, " - ", (isPalindrome($str)) ? "Палиндромом!" : "Не палиндромом.";
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

function task8()
{
    // TODO:
}

function task9()
{
    // TODO:
}