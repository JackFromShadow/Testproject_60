<?php
/**
 * Created by PhpStorm.
 * User: stud07
 * Реализуйте функцию getChildren, которая
 * принимает на вход список пользователей
 * и возвращает плоский список их детей.
 * ети каждого пользователя хранятся в виде массива в ключе children
 */


$users = [
    [
        'name'     => 'Tirion',
        'children' => [
            ['name' => 'Mira', 'birdhday' => '1983-03-23']
        ]
    ],
    ['name' => 'Bronn', 'children' => []],
    [
        'name'     => 'Sam',
        'children' => [
            ['name' => 'Aria', 'birdhday' => '2012-11-03'],
            ['name' => 'Keit', 'birdhday' => '1933-05-14']
        ]
    ],
    [
        'name'     => 'Rob',
        'children' => [
            ['name' => 'Tisha', 'birdhday' => '2012-11-03']
        ]
    ]
];


/**
 * @param $tab
 *
 * @return array
 */
function getChildren($tab)
{

    foreach ($tab as $item) {
        foreach ($item['children'] as $items) {
            $result[] = $items;
        }
    }
    return $result;


}

var_dump(getChildren($users));
// [
//     ['name' => 'Mira', 'birdhday' => '1983-03-23'],
//     ['name' => 'Aria', 'birdhday' => '2012-11-03'],
//     ['name' => 'Keit', 'birdhday' => '1933-05-14'],
//     ['name' => 'Tisha', 'birdhday' => '2012-11-03']
// ]

