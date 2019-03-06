<?php
/**
 * Created by PhpStorm.
 * User: stud07
 * Сериализация — процесс перевода какой-либо структуры данных в последовательность битов.
 * Обратной к операции сериализации является операция десериализации (структуризации) — восстановление начального
 * состояния структуры данных из битовой последовательности.
 *
 * Функция serialize в php генерирует пригодное для хранения представление переменной.
 * Это полезно для хранения или передачи значений PHP между скриптами без потери их типа и структуры
 * . Для превращения сериализованной строки обратно в PHP-значение существует функция unserialize.
 *
 * src/App/Serializer.php Реализуйте функцию dump, которая принимает на вход имя файла и структуру данных.
 * После чего она сериализует эту структуру и записывает в файл.
 * Реализуйте функцию load, которая принимает на вход имя файла.
 * После этого она читает содержимое файла и проводит десериализацию. Пример:
 *
 * Serializer\dump($file, $structure);
 * $data = Serializer\load($file);
 *
 * $structure == $data;
 */


$data = [
    ['name' => 'Bronn', 'gender' => 'male', 'birthday' => '1973-03-23'],
    ['name' => 'Reigar', 'gender' => 'male', 'birthday' => '1973-11-03'],
    ['name' => 'Eiegon', 'gender' => 'male', 'birthday' => '1963-11-03'],
    ['name' => 'Sansa', 'gender' => 'female', 'birthday' => '2012-11-03'],
    ['name' => 'Jon', 'gender' => 'male', 'birthday' => '1980-11-03'],
    ['name' => 'Robb', 'gender' => 'male', 'birthday' => '1980-05-14'],
    ['name' => 'Tisha', 'gender' => 'female', 'birthday' => '2012-11-03'],
    ['name' => 'Rick', 'gender' => 'male', 'birthday' => '2012-11-03'],
    ['name' => 'Joffrey', 'gender' => 'male', 'birthday' => '1999-11-03'],
    ['name' => 'Edd', 'gender' => 'male', 'birthday' => '1973-11-03'],
];

/**
 * @param $file
 * @param $data
 */
function dump($file, $data)
{
    file_put_contents($file, serialize($data));
}


/**
 * @param $file
 *
 * @return mixed
 */
function load($file)
{
    if (!empty($file)) {
        return unserialize(file_get_contents($file));
    }

}


//var_dump(dump('Serializer.php', $data));
var_dump(load('Serializer.php'));


/*
 * function dump($file, $structure)
{


}

//dump('Serializer.php', $structure);

function load($file)
{


}

 */