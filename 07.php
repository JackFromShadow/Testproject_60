<?php
/**
 * Created by PhpStorm.
 * User: stud07
 *
 * @param $strarray
 * @param $pref
 *
 * @return mixed
 */
function addPrefix($strarray, $pref)
{
    foreach ($strarray as &$value) {
        $value = $pref . ' ' . $value;
        //$value *= ();
    }
    return $strarray;
}

$names = ['john', 'smith', 'karl'];

//var_dump(addPrefix($names, 'Mr'));

/**Так же это можно было бы решить с использованием array_walk вместо foreach
 * Но: есть более быстрый и простой способ: он будет изложен ниже*
 * функция php preg_filter(). С её помощью можно заменить элементы массива.
 * Однако она работает только в php 5.3 и выше. Зато есть мнение, что работает более чем в три раза быстрее, чем
 * foreach.
 */

function addPrefixPreg($strarray, $pref)
{
    $prefixed_array = preg_filter('/^/', $pref . ' ', $strarray);
    return $prefixed_array;
}

//var_dump(addPrefixPreg($names, 'Mss'));