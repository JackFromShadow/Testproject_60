<?php
/**
 * Created by PhpStorm.
 * User: stud07
 * Реализуйте функцию isPalindrome, которая принимает на вход слово, определяет является ли оно палиндромом и возвращает логическое значение.
 * Для определения является ли слово палиндромом, достаточно сравнивать попарно символ с обоих концов слова. Если они все равны, то это палиндром
 *
 * @param $str
 *
 * @return bool
 */



    function isPalindrome($str) : bool
    {   if ((strlen($str) == 1) || (strlen($str) == 0)) { return true; }
        elseif (substr($str,0,1) == substr($str,(strlen($str) - 1),1))
                {
                return (isPalindrome(substr($str,1,strlen($str) -2)));
                }
                else {return false;}



    }




/*echo isPalindrome('aeeleea')."\n";

//var_dump (isPalindrome('aeelleea'));
var_dump(isPalindrome('radar')); // true
var_dump (isPalindrome('maam')); // true
var_dump (isPalindrome('a'));     // true
var_dump (isPalindrome('abs'));   // false*/