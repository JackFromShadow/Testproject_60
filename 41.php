<?php
/**
 * Created by PhpStorm.
 * User: stud07
Реализуйте функцию getDifference, которая принимает на вход два массива, а возвращает массив, составленный из элементов первого, которых нет во втором.

Эту задачу можно решить с помощью функции array_diff, но подразумевается что вы сделаете это без ее использования.
 */

function getDifference($mas2, $mas1)
{
    foreach (mas1 as $key=>$item) {
        foreach (mas2 as $item2) {
            if ($item1===item2) {unset ($mas1[$key]);}
        }
    }
    return mas1;
}