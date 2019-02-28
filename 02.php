<?php
/**
 * Created by PhpStorm.
 * User: stud07
 * Date: 26.02.19
 * Time: 13:02
 *
 * @param $str
 *
 * @return bool
 */

function isPalindrome($str) : bool
{

    $firststr = strrev($str);
    if ($firststr !== $str)
        { return false; }
    return true;

}


/*
var_dump(isPalindrome('radar')); // true
var_dump (isPalindrome('maam')); // true
var_dump (isPalindrome('a'));     // true
var_dump (isPalindrome('abs'));   // false*/
