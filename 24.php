<?php
/**
 * Created by PhpStorm.
 * User: stud07
 * Реализуйте функцию genDiff, которая возвращает ассоциативный массив, в котором каждому ключу из исходных массивов соответствует одно из четырёх значений:
 * added, deleted, changed или unchanged. Аргументы:
 *
 * @param $mas1
 * @param $mas2
 *
 * @return mixed
 */

function genDiff($mas1, $mas2)
{

    $merge = array_merge($mas1, $mas2);

    foreach ($merge as $key => $elem) {
        $condt1 = array_key_exists($key, $mas1);
        $condt2 = array_key_exists($key, $mas2);
        if ($condt1 !== true && $condt2 === true) {
            $result[$key] = 'added';
        }
        if ($condt1 === true && $condt2 !== true) {
            $result[$key] = 'deleted';
        }
        if ($condt1 === $condt2) {
            if ($mas1[$key] == $mas2[$key]) {
                $result[$key] = 'unchanged';
            } else {
                $result[$key] = 'changed';
            }
        }

    }

    return $result;
}


$result = genDiff(
    ['one' => 'eon', 'two' => 'two', 'four' => true],
    ['two' => 'own', 'zero' => 4, 'four' => true]
);
// => [
//  'one' => 'deleted',
//     'two' => 'changed'
//     'zero' => 'added',
//     'four' => 'unchanged',
// ];

