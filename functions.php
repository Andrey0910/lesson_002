<?php
function task1($arr, $bool = false)
{
    if ($bool) {
        $str = "";
        foreach ($arr as $item) {
            $str .= $item . " ";
        }
        return $str;
    } else {
        foreach ($arr as $item) {
            echo "<p>", $item, "</p>";
        }
    }
}

function task2($arrNum, $action)
{
    $actionArr = ["+", "-", "*", "/"];
    if (!in_array($action, $actionArr)){
        echo "Арифметическое действие не определено.";
        return null;
    }
    $res = 1;
    foreach ($arrNum as $item) {
        if (!is_numeric($item)){
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
                $res *= $item;
                break;
            case "/":
                $res /= $item;
                break;
        }
    }
    return $res;
}

function task3()
{
    // TODO:
}

function task4()
{
    // TODO:
}

function task5()
{
    // TODO:
}

function task6()
{
    // TODO:
}

function task7()
{
    // TODO:
}

function task8()
{
    // TODO:
}

function task9()
{
    // TODO:
}