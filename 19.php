<?php
/**
 * Created by PhpStorm.
 * User: stud07
 * Реализуйте функцию checkIfBalanced, которая проверяет балансировку круглых скобок в арифметических выражениях.
 * ПРИМЕЧАНИЕ:
 * Можно было бы проще, используя встроенные функции... Но уж как есть) Поставленную задачу выполняет...
 *
 * @param $str
 *
 * @return bool
 */

function checkIfBalanced ($str)
{
    $hooksA = ['(', ')'];
    $iLength = strlen($str);
    $hooksB = '';
    for($i = 0; $i < $iLength; $i++)
    {
        if(in_array($str[$i], $hooksA)) {
            $hooksB .= $str[$i];
        }
    }
   // unset($str);
    $iLength = strlen($hooksB);
    for($i = 0; $i < $iLength; $i++) {
        $hooksB = str_replace(['()'], ['', ''], $hooksB);
    }

    return strlen($hooksB) == 0;

}


/*var_dump(checkIfBalanced('(5 + 6) * (7 + 8)/(4 + 3)')); // => true
var_dump(checkIfBalanced('(4 + 3))')); // => false*/