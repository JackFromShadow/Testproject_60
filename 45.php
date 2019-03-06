<?php
/**
 * Created by PhpStorm.
 * User: stud07
 * Создайте таблицу cars со следующими полями:
 * user_first_name - имя пользователя (соответствующее имени в таблице users)
 * brand - марка машины model - конкретная модель
 *
 * Добавьте в таблицу users две произвольные записи.
 *
 * Добавьте в таблицу cars 5 произвольных записей. Две из них должны указывать на одного пользователя
 * (соответствие по имени пользователя), а три других - на другого.
 *
 * Далее создать функции php, которые позволит реализовать перечисленные выше запросы

 */

$mysqli = new mysqli('localhost', 'stud07', 'stud07', 'testdb');
$sql = <<<SQL
DROP TABLE IF EXISTS cars;
CREATE TABLE cars
(
  first_name varchar(255),
  brand      varchar(255),
  model      varchar(255)
);

DROP TABLE IF EXISTS users;
CREATE TABLE users (
    first_name varchar(255),
    last_name varchar(255),
    created_at timestamp
);

SQL;



function addUsers(){
    $mysqli = new mysqli('localhost', 'stud07', 'stud07', 'testdb');
    $sql = <<<SQL
    INSERT INTO users (first_name, last_name)
    VALUES ('RANDOM_NAME_1', 'RANDOM_SURNAME_1'),
       ('RANDOM_NAME_2', 'RANDOM_SURNAME_2');
    SQL;
    return mysqli_query($mysqli, $sql); // mysqli_query выполняет запрос к БД
}

function addCars()
{
    $mysqli = new mysqli('localhost', 'stud07', 'stud07', 'testdb');
    $sql = <<<SQL
    INSERT INTO cars (first_name, brand, model)
    VALUES 
       ('RANDOM_NAME_1', 'RANDOM_BRAND_1', 'RANDOM_MODEL_1'),
       ('RANDOM_NAME_1', 'RANDOM_BRAND_2', 'RANDOM_MODEL_2'),
       ('RANDOM_NAME_1', 'RANDOM_BRAND_3', 'RANDOM_MODEL_3'),
       ('RANDOM_NAME_2', 'RANDOM_BRAND_4', 'RANDOM_MODEL_4'),
       ('RANDOM_NAME_2', 'RANDOM_BRAND_5', 'RANDOM_MODEL_5');
    SQL;
    return mysqli_query($mysqli, $sql);
}