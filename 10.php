<?php
/**
 * Created by PhpStorm.
 * User: stud07
 * Реализуйте функцию isContinuousSequence, которая проверяет
 * является ли переданная последовательность целых чисел - возрастающей непрерывно
 * (не имеющей пропусков чисел).
 *
 * Например, последовательность [4, 5, 6, 7] - непрерывная,
 * а [0, 1, 3] - нет.
 *
 * Последовательность может начинаться с любого числа, главное условие - отсутствие пропусков чисел.
 *
 * @param $mas
 *
 * @return bool
 */

function isContinuousSequence($mas)
{
    if (empty($mas)) {

        return false; //Guard Expression
    }
    (int)$a = $mas[0];
    $countmas = count($mas);
    for ($i = 0; $i < $countmas; ++$i) {
        echo $a . 'and' . $mas[$i] . '   ';
        if ($a != $mas[$i]) {
            return false;
        }
        $a += 1;
    }
    return true;
}


//var_dump(isContinuousSequence([10, 11, 12, 13]));     // => true
//var_dump(isContinuousSequence([10, 11, 12, 14, 15])); // => false
//var_dump(isContinuousSequence([1, 2, 2, 3]));         // => false
//var_dump(isContinuousSequence([]));                   // => false