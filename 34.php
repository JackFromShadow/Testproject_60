<?php
/**
 * Created by PhpStorm.
 * User: stud07
 * Реализуйте функцию takeOldest, которая принимает на вход список пользователей и возвращает самых взрослых.
 * Количество возвращаемых пользователей задается вторым параметром, который по-умолчанию равен единице.
 * Подсказки Для преобразования даты в unixtimestamp используйте функцию strtotime
 */

$users = [
    ['name' => 'Tirion', 'birthday' => '1988-11-19'],
    ['name' => 'Sam', 'birthday' => '1999-11-22'],
    ['name' => 'Rob', 'birthday' => '1975-01-11'],
    ['name' => 'Sansa', 'birthday' => '2001-03-20'],
    ['name' => 'Tisha', 'birthday' => '1992-02-27']
];


/**
 * @param $tab
 *
 * @return array
 */
function takeOldest($tab)
{

    foreach ($tab as $item) {
        $tab = strtotime($item['birthday']);
        $user = $item['name'];
        $newTab[$user] = $tab;
    }
    asort($newTab);
    $birthdayMas = array_slice($newTab, 0, 1);
    $oldest[] = [];
    foreach ($birthdayMas as $key => $items) {

        foreach ($tab as $item) {
            if ($item['name'] === $key) {
                $oldest[] = $item;
            }
        }
    }
    return $oldest;

}


takeOldest($users);
