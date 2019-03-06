<?php
/**
 * Created by PhpStorm.
 * User: stud07
* Напишите следующие запросы:
 *
 * Запрос, который удаляет пользователя с именем Sansa
 * Запрос, который вставляет в базу пользователя с именем Arya и почтой arya@winter.com
 * Запрос, который устанавливает флаг manager в true для пользователя с емейлом tirion@got.com
 *
 * Далее создать функцию php, которая позволит реализовать перечисленные выше запросы
 */

$mysqlQuery = new mysqli('localhost', 'stud07', 'stud07', 'testdb');
$sql = <<<SQL

DROP TABLE IF EXISTS users;
CREATE TABLE users (
    first_name varchar(255),
    email varchar(255),
    manager boolean
);

INSERT INTO users (first_name, email) VALUES
('Sansa', 'sansa@winter.com'),
('Tirion', 'tirion@got.com');
SQL;


function delete()
{
    $mysqlQuery = new mysqli('localhost', 'stud07', 'stud07', 'testdb');
    $sql = <<<SQL
    DELETE * FROM users
    WHERE first_name = 'Sansa';
    SQL;
    return mysqli_query($mysqlQuery, $sql);
}

function insert()
{
    $mysqlQuery = new mysqli('localhost', 'stud07', 'stud07', 'testdb');
    $sql = <<<SQL
    INSERT INTO users (first_name, email)
    VALUES ('Arya', 'arya@winter.com');
    SQL;
    return mysqli_query($mysqlQuery, $sql);
}

function makeFlag()
{
    $mysqlQuery = new mysqli('localhost', 'stud07', 'stud07', 'testdb');
    $sql = <<<SQL
    UPDATE users
    SET manager= true
    WHERE email = 'tirion@got.com';
    SQL;
    return mysqli_query($mysqlQuery, $sql);
}