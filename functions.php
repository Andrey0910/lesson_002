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
    if (!in_array($action, $actionArr)) {
        echo "Арифметическое действие не определено.";
        return null;
    }
    $res = 1;
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
    $actionArr = ["+", "-", "*", "/"];
    $data = func_get_args();
    $action = null;
    $result = 0;
    $numArr = null;
    foreach ($data as $key => $item) {
        if (is_array($item)) {
            if (count($item) > 0) {
                $numArr = $item;
            } else {
                unset($data[$key]);
            }
        } elseif (in_array($item, $actionArr)) {
            $action = $item;
            unset($data[$key]);
        }
    }
    if (empty($action)) {
        echo "Арифметическое действие не определено.";
        return null;
    } else {
        if (!empty($numArr) && count($numArr) > 0) {
            foreach ($numArr as $item) {
                if (!is_numeric($item)) {
                    echo "Массив содержит не число.";
                    return null;
                }
                switch ($action) {
                    case "+":
                        ($result == 0) ? $result = $item : $result += $item;
                        break;
                    case "-":
                        ($result == 0) ? $result = $item : $result -= $item;
                        break;
                    case "*":
                        ($result == 0) ? $result = $item : $result *= $item;
                        break;
                    case "/":
                        ($result == 0) ? $result = $item : $result /= $item;
                        break;
                }
            }
            return $result;
        } else {
            foreach ($data as $key => $item) {
                if (!is_numeric($item)) {
                    echo "Массив содержит не число.";
                    return null;
                }
                if (!empty($item)) {

                    switch ($action) {
                        case "+":
                            ($result == 0) ? $result = $item : $result += $item;
                            break;
                        case "-":
                            ($result == 0) ? $result = $item : $result -= $item;
                            break;
                        case "*":
                            ($result == 0) ? $result = $item : $result *= $item;
                            break;
                        case "/":
                            ($result == 0) ? $result = $item : $result /= $item;
                            break;
                    }
                }
            }
            return $result;
        }
    }
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
    for ($i=1; $i <= $sizeRows; $sizeRows--) {
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
        $sizeColumns--;
    }
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