<?php

$junior = [
    'nome'=>'Junior',
    'idade'=>20,
    'profissao'=>'Programador'
];

$fulano = [
    'nome'=>'Fulano',
    'idade'=>'23',
    'profissao'=>'Engenheiro'
];

$pessoas[0] = $junior;
$pessoas[1] = $fulano;

for($i = 0;$i < count($pessoas);$i++){
    echo "Pessoa ".$i+1 . ":<br>";
    foreach($pessoas[$i] as $keys => $values){
        echo "$keys = $values <br>";
    };
    echo"<br>";
};