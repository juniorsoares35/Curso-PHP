<?php

function soma($n1,$n2){

    return $n1 + $n2;
}

echo soma(4,4) . "<br>";

$x = soma(4,2);

echo $x . "<br>";

$y = soma($x, 19);

echo $y;