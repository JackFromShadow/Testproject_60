<?php
/**
 * Created by PhpStorm.
 * User: stud07
 * Реализуйте функцию sayPrimeOrNot, которая проверяет переданное число на простоту и печатает на экран yes или no.
 *
 * <?php
 * sayPrimeOrNot(5); // => yes
 * sayPrimeOrNot(4); // => no
 *
 * Подсказки
 * Для этого выделите процесс определения того, является ли число простым, в отдельную функцию, возвращающую логическое значение.
 *
 * Это функция, с помощью которой мы отделяем чистый код от кода, интерпретирующего логическое значение
 * (как 'yes' или 'no') и делающего побочный эффект (печать на экран).
 *
 * @param $n
 *
 * @return bool
 */

function isPrime($n){
        for($x=2, $xMax = sqrt($n); $x <= $xMax; $x++) {
            if($n % $x == 0) {
                return false;
            }
        }
        return true;
}

/**
 * @param $num
 *
 * @return null
 */
function sayPrimeOrNot($num){
    $text = ' ';
    if (empty($num))
    {
        return null; //Guard Exeption
    }

    if (isPrime($num)===true) {$text='yes   ';}
    else if (isPrime($num)===false){$text='no   ';}
    print_r($text);

}

/*
sayPrimeOrNot(4);
sayPrimeOrNot(5); // => yes
