<?php
/**
 * Created by PhpStorm.
 * User: stud07
 *
Cоставьте запрос, который извлекает все записи из таблицы юзер по следующим правилам:

Пользователи должны быть рождены позже 23 октября 1999 года. Поле birthday.
Выборка отсортирована в алфавитном порядке по полю first_name. Нужно извлечь только три записи

Далее создать функцию php, которая позволит реализовать перечисленные выше запросы


 */

$mysqlQuery = new mysqli('localhost', 'stud07', 'stud07', 'testdb');
$sql = <<<SQL

DROP TABLE IF EXISTS users;
CREATE TABLE users (
first_name varchar(255),
email varchar(255),
birthday timestamp
);

INSERT INTO users (first_name, email, birthday) VALUES
('Sansa', 'sansa@winter.com', '1999-10-23'),
('Jon', 'jon@winter.com', '1999-10-07'),
('Daenerys', 'daenerys@drakaris.com', '1999-10-23'),
('Arya', 'arya@winter.com', '2003-03-29'),
('Robb', 'robb@winter.com', '1999-11-23'),
('Brienne', 'brienne@tarth.com', '2001-04-04'),
('Tirion', 'tirion@got.com', '1975-1-11');

SQL;

function phpQuery()
{
    $mysqlQuery = new mysqli('localhost', 'stud07', 'stud07', 'testdb');
    $sql = <<<SQL
SELECT *
FROM users
WHERE birthday >  '1999-10-23'
ORDER BY first_name
LIMIT 3
SQL;
    return mysqli_query($mysqlQuery, $sql);
}
