<?php
/**
 * Created by PhpStorm.
 * User: stud07
 *
 *
 * Реализуйте функцию average, которая возвращает среднее арифметическое всех переданных аргументов.
 * Если функции не передать ни одного аргумента, то она должна вернуть null.
 *
 * @param array $nums
 *
 * @return float|int|null
 */

function average(...$nums){
    if (empty($nums))
    {
        return null; //Guard Exeption
    }
    else {
        return array_sum($nums) / count($nums);
    }
}

/*
var_dump(average(0)); // => 0
var_dump(average(0, 10)); // => 5
var_dump(average(-3, 4, 2, 10)); // => 3.25
var_dump(average()); // => null*/