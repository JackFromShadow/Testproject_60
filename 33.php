<?php
/**
 * Created by PhpStorm.
 * User: stud07
 * Реализуйте анонимную функцию,
 * которая принимает на вход строку и возвращает ее последний символ (или null если строка пустая).
 * Запишите созданную функцию в переменную $last.
 *
 * @param $string
 *
 * @return null
 */

$last = function ($string) {
    if (empty($string)) {return null;}
    $len = strlen($string);
    return $string[ $len-1 ]; };


/*
var_dump($last('')); // => null
var_dump($last('pow')); // => w
var_dump($last('kids')); // => s
*/