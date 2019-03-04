<?php
/**
 * Created by PhpStorm.
 * User: stud07
 * Реализуйте функцию getSortedNames, которая принимает на вход список пользователей,
 * извлекает их имена, сортирует
 * возвращает отсортированный список имен.
 *
 * @param array $users
 *
 * @return array
 */


function getSortedNames(array $users)
{
    $names = [];
    foreach ($users as $value) {
        $names[] = $value['name'];
    }
    sort($names);
    return $names;
}

$users = [
    ['name' => 'Bronn', 'gender' => 'male', 'birthday' => '1973-03-23'],
    ['name' => 'Reigar', 'gender' => 'male', 'birthday' => '1973-11-03'],
    ['name' => 'Eiegon', 'gender' => 'male', 'birthday' => '1963-11-03'],
    ['name' => 'Sansa', 'gender' => 'female', 'birthday' => '2012-11-03'],
];

//var_dump(getSortedNames($users)); // => ['Bronn', 'Eiegon', 'Reigar', 'Sansa']