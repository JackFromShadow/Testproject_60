<?php

/**
 * @param $a
 * @param $b
 */
function mySwap(&$a, &$b)
{
    $temp = $a;
    $a=$b;
    $b=$temp;
}





$a=5; $b=8;
/*mySwap ($a,$b);
print_r($a); // 8
print_r($b); // 5*/