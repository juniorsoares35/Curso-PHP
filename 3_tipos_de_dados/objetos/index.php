<?php

class pessoa{

    function falar() {
        echo "Olá mundo";
    }

}

$junior = new pessoa();

$junior->nome = 'Junior';

echo $junior->nome;

echo "<br>";

$junior->falar();