<?php
/**
 * Created by PhpStorm.
 * User: stud07
Если число положительно -
последовательно делим его на 10, а потом умножаем остаток от деления
Получая в результате "перевёрнутое" число.
 * Если число отрицательно - делаем его положительным, но не забываем, каким оно было изначально)

 Ниже в файле есть более простой метод через встроенную функцию strrev
 */
function reverseMatematic($number) : int
{
    $buffer = $number;
    $rezult = 0;
    if ($number <0)
    {$buffer = -1*$number;}

    while( $buffer > 0 )
    {
        $rezult = ( $rezult * 10 )+( $buffer % 10 );
        $buffer = (int)($buffer / 10);
    }
    if ($number <0)
    {$rezult = -1*$rezult;}
    return $rezult ;
}


/**
 * Это можно сделать и через простое переворачивание строки:
 * */

function reverse($number) : int
{
    $buffer = $number;


    if ($number <0)
    { $buffer = -1*$number;}
    $rezult = strrev((string)$buffer);
    if ($number <0)
    { $rezult = -1*$rezult;}
    return $rezult ;
}

/*var_dump (reverse(-1367543));
var_dump (reverse(543));

var_dump (reverseMatematic(-1367543));
var_dump (reverseMatematic(-123));*/