<?php
/**
 * Created by PhpStorm.
 * User: stud07
 * Механизм дружбы в социальных сетях, обычно, реализуется через отдельную таблицу ссылающуюся на обоих пользователей.
 * Когда два человека начинают дружить, то в эту таблицу заносятся сразу две записи:
 *
 * id user1_id user2_id 1 3 10 2 10 3
 * Такой способ организации данных позволяет работать с понятием "дружба" независимо от того, кто был указан первым, а
 * кто вторым.
 *
 * solution.sql Составьте транзакцию, которая создает дружбу между пользователями Tirion и Jon.
 */


$mysqli = new mysqli('localhost', 'stud07', 'stud07', 'test');
$sql = <<<SQL
DROP TABLE IF EXISTS friendship;
DROP TABLE IF EXISTS users;

CREATE TABLE users (
id bigint PRIMARY KEY,
first_name varchar(255),
email varchar(255),
birthday timestamp
);

CREATE TABLE friendship (
id bigint PRIMARY KEY AUTO_INCREMENT,
user1_id bigint REFERENCES users(id),
user2_id bigint REFERENCES users(id)
);

INSERT INTO users (id, first_name, email, birthday) VALUES
(1, 'Sansa', 'sansa@winter.com', '1999-10-23'),
(2, 'Jon', 'jon@winter.com', '1999-10-07'),
(3, 'Daenerys', 'daenerys@drakaris.com', '1999-10-23'),
(4, 'Arya', 'arya@winter.com', '2003-03-29'),
(5, 'Robb', 'robb@winter.com', '1999-11-23'),
(6, 'Brienne', 'brienne@tarth.com', '2001-04-04'),
(7, 'Tirion', 'tirion@got.com', '1975-1-11');

START TRANSACTION;
INSERT INTO friendship (user1_id, user2_id)
VALUES ((SELECT id FROM users WHERE first_name = 'Tirion'), (SELECT id FROM users WHERE first_name = 'Jon')),
       ((SELECT id FROM users WHERE first_name = 'Jon'), (SELECT id FROM users WHERE first_name = 'Tirion'));
COMMIT;
SQL;