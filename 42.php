<?php
/**
 * Created by PhpStorm.
 * User: stud07
    * #Ответ на Главный Вопрос Жизни, Вселенной, И Всего Такого:)
 *
 * Напишите запрос создающий таблицу courses со следующими полями, запрос обернуть в функцию createTable на php
 * name типа varchar длинной 255. body типа text.
 * created_at типа timestamp.
 *
 *
 * Напишите запрос создающий таблицу users со следующими полями
 * first_name типа varchar длинной 255.
 * email типа varchar длинной 255. manager типа boolean.
 *
 * Напишите запрос создающий таблицу course_members со следующими полями
 * user_id типа integer course_id типа integer created_at типа timestamp
 */


function createTable()
{
    $mysqlQuery = new mysqli('localhost', 'stud07', 'stud07', 'testdb');
    $sql = <<<SQL
    CREATE TABLE users (first_name varchar(255), email varchar(255), manager boolean);
    CREATE TABLE courses (name varchar(255), body text, created_at timestamp );
    CREATE TABLE course_members (user_id integer, course_id integer, created_at timestamp );
    SQL;
    return mysqli_multi_query($mysqlQuery, $sql);
}
