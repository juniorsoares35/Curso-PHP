<?php

$arr = [
    'cor' => 'Vermelho',
    'forma' => 'Retangular',
    'material' => 'Aço'
];

extract($arr);

echo "$cor <br>";
echo "$forma <br>";
echo "$material <br>";

print_r($arr);  