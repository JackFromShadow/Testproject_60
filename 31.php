<?php
/**
 * Created by PhpStorm.
 * User: stud07
 * Реализуйте функцию union, которая находит объединение всех переданных массивов. Ф
 * ункция принимает на вход от одного массива и больше. Ключи исходных массивов не сохраняются
 * (т.е. все значения итогового массива заново индексируются: 0, 1, 2, ...).
 */


function union(...$arrays)
{
    $unionArray = [];
    foreach ($arrays as $currentArray) {
        foreach ($currentArray as $value) {
            if (!in_array($value, $unionArray, true)) {
                $unionArray[] = $value;
            }
        }
    }
    return $unionArray;
}

var_dump(union([3])); // => [3]
var_dump(union([3, 2], [2, 2, 1])); // => [3, 2, 1]
var_dump(union(['a', 3, false], [true, false, 3], [false, 5, 8])); // => ['a', 3, false, true, 5, 8]