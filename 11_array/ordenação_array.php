<?php

$arr = [1,6,3,7654,67657,21,66,890];

sort($arr);

print_r($arr);
echo "<br>";
$arr2 = [1,6,3,7654,67657,21,66,890];

rsort($arr2);
print_r($arr2);

$nome = ['junior','soares','maria','amarildo'];
//ordem alfabetica
sort($nome);
echo "<br>";

print_r($nome);

//ordenar array associativos:

//pelo valor das chaves = arsort;

//pelas chaves - ksort;
