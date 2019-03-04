<?php
/**
 * Created by PhpStorm.
 * User: stud07
 * Реализуйте функцию pick, которая извлекает из переданного массива все элементы по указанным ключам и возвращает
 * новый массив. Аргументы:
 *
 * Исходный массив Массив ключей, по которым должны быть выбраны элементы (ключ и значение) из исходного массива,
 * и на основе выбранных данных сформирован новый массив
 *
 * @param $keydata
 * @param $mass
 *
 * @return array
 */

function pick($keydata, $mass)
{
    $result = [];
    foreach ($keydata as $key) {
        if (array_key_exists($key, $mass)) {
            $answer[$key] = $mass[$key];
        }
    }
    return $result;

}

$data = [
    'user'  => 'ubuntu',
    'cores' => 4,
    'os'    => 'linux',
];

