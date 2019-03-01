<?php
/**
 * Created by PhpStorm.
 * User: stud07
 * Реализуйте функцию bubbleSort, которая сортирует массив используя пузырьковую сортировку.
 * Постарайтесь не подглядывать в текст теории и попробуйте воспроизвести алгоритм по памяти.
 */

function bubbleSort ($data)
{
    if (empty($data)) {
        return $data;
    }

    $count_elements = count($data);
    $iterations = $count_elements - 1;

    for ($i=0; $i < $count_elements; $i++) {
        $changes = false;
        for ($j=0; $j < $iterations; $j++) {
            if ($data[$j] > $data[($j + 1)]) {
                $changes = true;
                list($data[$j], $data[($j + 1)]) = array($data[($j + 1)], $data[$j]);
            }
        }
        $iterations--;
        if (!$changes) {
            return $data;
        }
    }

    return $data;
}

var_dump(bubbleSort([3, 10, 4, 3])); // => [3, 3, 4, 10])