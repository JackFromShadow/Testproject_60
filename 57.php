<?php
/**
 * Created by PhpStorm.
 * User: stud07
 * Реализуйте функцию cd,
 * принимающую на вход два параметра: текущую директорию и путь для перехода.
 * Функция должна вернуть директорию, в которую необходимо перейти.
 *
 * Пример использования:
 *
*
* <?php
 *
* cd('/current/path', '/etc'); // /etc
* cd('/current/path', '.././anotherpath'); // /current/anotherpath
 *
 * Правила перехода Если путь для перехода начинается с /, т
 * о он же и является конечным путем (так как абсолютный путь). ..
 * - на уровень выше . - та же директория
 */

function full_dir_all($a){
    $dir = opendir ($a);
    while (($file = readdir($dir)) !== FALSE) {
        if(is_file($a."/".$file)){
            echo $file." - это файл!!!<br>";
        }
        else if(is_dir($a."/".$file) && $file != '.' && $file != '..'){
            echo "<h5>".$file." - это каталог!!!</h5>";
            /* рекурсивно вызываем функцию */
            full_dir_all($a."/".$file);
        }

    }
    closedir ($dir);
}