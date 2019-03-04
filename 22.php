<?php
/**
 * Created by PhpStorm.
 * User: stud07
 * Обращение к вложенным массивам выглядит просто, только когда мы уверены в наличии всех ключей, попадающихся по пути:
 *Если же наличие данных ключей в массиве не обязательно, тогда код резко усложняется. Каждая попытка обратиться внутрь должна сопровождаться проверкой.ge
Реализуйте функцию getIn, которая извлекает из массива (который может быть любой глубины вложенности) значение по указанным ключам. Аргументы:

Исходный массив Массив ключей, по которым ведется поиск значения В случае, когда добраться до значения невозможно, возвращается null.


 */

function getIn($data, $keyData)
{

    if (!empty($keyData)) {
        $keySearch = array_shift($keyData);

        if (is_array($data)) {
            if (array_key_exists($keySearch, $data)) {

                $tmp = $data[$keySearch];
                $result = $data[$keySearch];
                $data = $tmp;

            } else {
                $result = null;
            }
        } else {
            $result = null;
        }

    }

    if (empty($keyData)) {
        return $result;
    }

    $result = getIn($data, $keyData);
    return $result;

}

print_r(getIn($data, ['name']));