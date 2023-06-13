<?php

function somaElementos($num){
    $soma =array_sum($num);
    print_r($soma);
};

$arr = [1,2,3,4,5,6];
somaElementos($arr);