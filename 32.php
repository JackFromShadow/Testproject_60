<?php
/**
 * Created by PhpStorm.
 * User: stud07
 * Слаг - часть адреса сайта которая используется для идентификации ресурса в Человекопонятном виде.
 * Без слага /posts/3, со слагом /posts/my-super-post, где слаг это my-super-post.
 * Слаг обычно генерируется автоматически на основе названия ресурса, например статьи.
 *
 * Реализуйте функцию slugify. Преобразования которые она должна делать:
 * Приводить к нижнему регистру все символы в строке Удалять все пробелы Соединять слова с помощью дефисов
 *
 * @param $str
 *
 * @return string|string[]|null
 */
function slugify($str)
{
    if (!empty($str)) {
        $str = preg_replace(['/[^a-zA-Z0-9 -]/','/[ -]+/','/^-|-$/'], ['','-',''], strtolower(trim($str)));
    }

    return $str;
}




/*
var_dump(slugify('')); // ''
var_dump(slugify('test')); // 'test'
var_dump(slugify('test me')); // 'test-me'
var_dump(slugify('La La la LA')); // 'la-la-la-la'
var_dump(slugify('O la      lu')); // 'o-la-lu'
var_dump(slugify(' yOu   ')); // 'you'*/
