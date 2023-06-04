<?php

$x = 4;

while($x < 30){
    echo "O x é $x <br>";
    $x += 2;
    if($x == 24){
        echo "O loop terminiou";
        break;
    }
}