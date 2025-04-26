<?php

function solveEquation($equation) {
    $equation = explode(" ", $equation);
    
    if (str_contains('+', $equation[1]) !== false) {
        $operator = '+';
    } elseif (str_contains('-', $equation[1]) !== false) {
        $operator = '-';
    } elseif (str_contains('*', $equation[1]) !== false) {
        $operator = '*';
    } elseif (str_contains('/', $equation[1]) !== false) {
        $operator = '/';
    } else {
        return "Неизвестный оператор.";
    }

    if ($equation[0] === 'x') {

        $b = (float) $equation[2];
        $c = (float) $equation[4];
        
        if ($operator === '+') {
            return "x = " . ($c - $b);
        } elseif ($operator === '-') {
            return "x = " . ($c + $b);
        } elseif ($operator === '*') {
            return "x = " . ($c / $b);
        } elseif ($operator === '/') {
            return "x = " . ($c * $b);
        }
    } elseif ($equation[2] === 'x') {
        $b = (float) $equation[0];
        $c = (float) $equation[4];

        if ($operator === '+') {
            return "x = " . ($c - $b);
        } elseif ($operator === '-') {
            return "x = " . ($b - $c);
        } elseif ($operator === '*') {
            return "x = " . ($c / $b);
        } elseif ($operator === '/') {
            return "x = " . ($b / $c);
        }
    } else {
        return "Уравнение не содержит переменной x.";
    }
}

$equation = "22 * x = 220";
$result = solveEquation($equation);
echo $result;
