<?php

$velocidade = 41;

if($velocidade <= 40){
    echo "Velocidade dentro do limite";
} else if($velocidade > 40 && $velocidade <= 80){
    echo "Velocidade acima do limite";
}else if($velocidade > 80){
    echo "Velocidade muito acima do permitido";
}