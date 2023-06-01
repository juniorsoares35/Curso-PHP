<?php

$pessoa1 = ['nome'=>'Junior','idade'=>20];
$pessoa2 = ['nome'=>'Joao','idade'=>16];

echo $pessoa1['nome'];
if($pessoa1['idade'] > 18){
    echo " - Maior de idade <br>";
}

echo $pessoa2['nome'];
if($pessoa2['idade'] < 18){
    echo " - Menor de idade <br>";
}