<?php
/**
 * Created by PhpStorm.
 * User: stud07
 *
 * Реализуйте функцию swap, которая меняет местами два элемента относительно переданного индекса. Н
 * апример, если передан индекс 5, то функция меняет местами элементы, находящиеся по индексам 4 и 6.
 *
 * Параметры функции:
 * Массив Индекс
 * Если хотя бы одного из индексов не существует, функция возвращает исходный массив.
 *
 * @param $mass
 * @param $index
 *
 * @return mixed
 */
function swap ($mass, $index)
{
    if (array_key_exists($index, $mass) && array_key_exists($index+1, $mass) && array_key_exists($index-1, $mass) )
    {
        $buf = $mass[$index+1];
        $mass[$index+1]= $mass[$index-1];
        $mass[$index-1]=$buf;
    }


    return $mass;
}

$names = ['john', 'smith', 'karl', 'hello'];


//var_dump(swap($names, 0));