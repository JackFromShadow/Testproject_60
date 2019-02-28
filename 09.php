<?php
/**
 * Created by PhpStorm.
 * User: stud07
 * Реализуйте функцию calculateAverage, которая высчитывает среднее арифметическое элементов массива.
 *
 * В случае пустого массива функция должна вернуть значение null (используйте в коде для этого guard expression):
 *
 * @param $arr
 *
 * @return float|int|null
 */

function calculateAverage ($arr)
{
    if (empty($arr)) {
        echo 'Massive must NOT be empty!';//Guard Expression
        return null;
    }
    return array_sum($arr)/count($arr);
}

/*$nums = array(3, 6, 9, 13, 16, 19, 23, 26, 29);
var_dump(calculateAverage($nums))