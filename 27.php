<?php
/**
 * Created by PhpStorm.
 * User: stud07
 * Реализуйте функцию wordsCount, которая считает количество одинаковых слов в предложении.
 * Результатом функции является ассоциативный массив, в ключах которого слова из исходного текста,
 * а значения это количество повторений.
 */




function wordsCount($sentence)
{
    $dictionary = [];
    $sentence = explode(' ', $sentence);
    foreach ($sentence as $word) {
        if (!empty($word)) {
            if (array_key_exists($word, $dictionary)) {
                $dictionary[$word]++;
            } else {
                $dictionary[$word] = 1;
            }
        }
    }
    return $dictionary;
}




var_dump(wordsCount('')); // []
var_dump(wordsCount('  one two one')); // ['one' => 2, 'two' => 1]
var_dump(wordsCount('  one      two       one     ')); // ['one' => 2, 'two' => 1]