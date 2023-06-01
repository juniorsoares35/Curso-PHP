<?php

function teste(){
    $a = 0;
    $a++;

    echo "$a <br>";
}

echo "Var normal <br>";
teste();
teste();
teste();

echo "<br>";

function testeStatic(){
    static $a = 1;
    $a++;
    echo "$a <br>";
}

echo "Var static <br>";
testeStatic();
testeStatic();
testeStatic();