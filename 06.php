<?php
/**
 * Created by PhpStorm.
 * User: stud07
 * Реализуйте функцию get, которая излекает из массива элемент по указанному индексу, если индекс существует, либо возвращает значение по умолчанию. Функция принимает на вход три аргумента:
 *
 * Массив Индекс Значение
 *
 * По умолчанию значение null
 *
 * @param      $mass
 * @param      $index
 * @param null $value
 *
 * @return null
 */
function myGet ($mass, $index, $value=null)
{
    if (array_key_exists($index, $mass))
    {
        $value=$mass[$index];
    }
    return $value;
}

$cities = ['moscow', 'london', 'berlin', 'porto'];
//var_dump(myget($cities, 4));
//print_r(myget($cities, 4, 'paris'));