<?php
/**
 * Created by PhpStorm.
 * User: stud07
 * Реализуйте функцию getIntersectionForSortedArray,
 * которая принимает на вход два отсортированных массива
 * и находит их пересечение.
 *
 * Задачу реализовать двумя способами - используя штатные функции,
 * и перебором элементов массивов
 *
 * @param $mas1
 * @param $mas2
 *
 * @return bool
 */
function ifNotEmpty ($mas1, $mas2)
{
    if (empty($mas1) || empty($mas2))
    {
        return false;
        echo 'No one intersections';
    }
    else {
        return true;
    }
}

/**
 * @param $mas1
 * @param $mas2
 *
 * @return array|null
 */
function getIntersectionForSortedArrayStandart ($mas1, $mas2)
{$result=null;
 if (ifNotEmpty ($mas1, $mas2)==true)
 {
    $result=array_intersect($mas1,$mas2); echo $result;
 }
    return $result;
}


/**
 * @param $mas1
 * @param $mas2
 *
 * @return array
 */
function getIntersectionForSortedArrayBicycle ($mas1, $mas2)
{
    if (ifNotEmpty ($mas1, $mas2)==true)
    {
        $result = [];
        foreach ($mas1 as $item) {
            foreach ($mas2 as $items) {
                if ($item == $items) {
                    $result[] = $items;
                }
            }
        }
    }
    return $result;
}



var_dump(getIntersectionForSortedArrayStandart([10, 11, 24], [10, 13, 14, 18, 24, 30]));// => [10, 24]
var_dump(getIntersectionForSortedArrayBicycle([10, 11, 24], [10, 13, 14, 18, 24, 30]));