<?php
/**
 * Created by PhpStorm.
 * User: stud07
 * Реализуйте функцию findIndex
 * которая возвращает первый встретившийся индекс переданного элемента в случае, если элемент присутствует в массиве,
 * и -1 в случае, если он отсутствует.
 *
 * Параметры функции: Массив Элемент
 *
 * <?php
 *
 *
 * @param $mas
 * @param $elem
 *
 * @return false|int|string
 */
function findIndex ($mas, $elem)
{

$finded= array_search($elem, $mas, true);
if ($finded==false) {return -1;}
return $finded;

}

$temperatures = [37.5, 34, 39.3, 40, 38.7, 41.5, 40];
/*
var_dump(findIndex($temperatures, 34)); // => 1
var_dump(findIndex($temperatures, 40)); // => 3
var_dump(findIndex($temperatures, 3));  // => -1*/