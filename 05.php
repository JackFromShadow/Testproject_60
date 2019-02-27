<?php
/**
Задано: реализовать функцию, считающую дискриминант
 * param @a
 * param @b
 * param @c
 */

function discriminant ($a, $b, $c) {


//вычисляем дискриминант
$D = $b*$b - (4 * $a * $c);


if ($D > 0) {
    $x1 = ($b * (-1) + sqrt($D)) / (2 * $a);
    $x2 = ($b * (-1) - sqrt($D)) / (2 * $a);
} else if ($D < 0) {
    echo 'Корни только комплексные';
} else {
    $x1 = -$b / (2 * $a);
    $x2 = -$b / (2 * $a);
}

$roots = array($x1, $x2);
return ($roots);
}

//var_dump (discriminant( 10, 2,-5));
