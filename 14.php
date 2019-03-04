<?php
/**
 * Created by PhpStorm.
 * User: stud07
 * Реализуйте функцию buildDefinitionList, которая генерирует html список определений (теги dl, dt и dd) и возвращает
 * получившуюся строку.
 *
 * Параметры функции:
 *
 * Список определений следующего формата:
 *
 * <?php
 *
 * $definitions = [
 * ['definition1', 'description1'],
 * ['definition2', 'description2']
 * ];
 *
 * То есть каждый элемент входного списка сам является массивом, содержащим два элемента: термин и его определение.
 *
 * Пример:
 *
 * <?php
 *
 *
 *
 * => '<dl><dt>Блямба</dt><dd>Выпуклость, утолщение на поверхности чего-либо</dd><dt>Бобр</dt><dd>Живтоное из отряда
 * грызунов</dd></dl>';
 *
 * @param $definitions
 *
 * @return string
 */


function buildDefinitionList($definitions)
{
    $rezult = '<dl>';


    foreach ($definitions as $definition) {
        $rezult .= '<dt>' . $definition[0] . '</dt><dd>' . $definition[1] . '</dd>';

    }

    $rezult .= '</dl>';
    return $rezult;
}

$definitions = [
    ['Блямба', 'Выпуклость, утолщения на поверхности чего-либо'],
    ['Бобр', 'Животное из отряда грызунов'],
];

//var_dump(buildDefinitionList($definitions));



