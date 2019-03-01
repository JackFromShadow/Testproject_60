<?php
/**
 * Created by PhpStorm.
 * User: stud07
 * Реализуйте функцию getSameCount,
 * которая считает количество общих уникальных элементов для двух массивов.
 *
 *
 * Аргументы:
 *
 * Первый массив
 * Второй массив
 *
 * @param $mas1
 * @param $mas2
 *
 * @return int
 */

function getSameCount ($mas1, $mas2)
{
   return count(array_intersect(array_unique($mas1), array_unique($mas2)));
}

/*var_dump(getSameCount([], [])); // => 0
var_dump(getSameCount([1, 10, 3], [10, 100, 35, 1])); // => 2
var_dump(getSameCount([1, 3, 2, 2], [3, 1, 1, 2])); // => 3*/