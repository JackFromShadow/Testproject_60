<?php
/**
 * Created by PhpStorm.
 * User: stud07
* Создайте таблицу article_categories с двумя полями:
 *
 * id - автогенерируемый первичный ключ name - текстовое поле
 *
 * Добавьте в эту таблицу две произвольные записи
 */

$mysqli = new mysqli('localhost', 'stud07', 'stud07', 'testdb');
$sql = <<<SQL

DROP TABLE IF EXISTS  article_categories;
CREATE TABLE article_categories (  
  id   MEDIUMINT NOT NULL AUTO_INCREMENT,
  name text,
  PRIMARY KEY (id)

);

INSERT INTO article_categories (name) 
VALUES ('RANDOM_NOTE_1'), ('RANDOM_NOTE_2');

SQL;
