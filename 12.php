<?php
/**
 * Created by PhpStorm.
 * User: stud07
 * Реализуйте функцию getSameParity, которая принимает на вход массив чисел
 * и возвращает новый, состоящий из элементов,
 * у которых такая же чётность, * как и у первого элемента входного массива.
 *
 * Проверка на чётность выполнена с помощью побитового оператора: (т.к. все нечетные числа имеют младший значащий бит 1
 * четные его же - 0.
 * В этом нет особой необходимости, отлично работало бы и через %2==0,
 * Просто есть еще и вот такой вот способ)
 *
 * @param $var
 *
 * @return int
 */

function odd($var)
{
    // является ли переданное число нечетным
    return($var & 1);
}

/**
 * @param $var
 *
 * @return bool
 */
function even($var)
{
    // является ли переданное число четным
    return(!($var & 1));
}

/**
 * @param $mas
 *
 * @return array
 */
function getSameParity ($mas)
{
  if (empty($mas)) { return $mas; }//Guard Expression

    if ($mas[0]%2==0)
    {
     $array=array_filter($mas, 'even');
    }

    elseif ($mas[0]%2!=0)
    {
        $array=array_filter($mas, 'odd');
    }
    return $array;
}




/*var_dump(getSameParity([]));        // => []
var_dump(getSameParity([1, 2, 3])); // => [1, 3]
var_dump(getSameParity([1, 2, 8])); // => [1]
var_dump(getSameParity([2, 2, 8])); // => [2, 2, 8]
**/