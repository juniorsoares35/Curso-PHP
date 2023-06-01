<?php

$num = 60;
$num2 = "teste";

if(is_int($num)){
    $num2 = $num*2;
    echo "$num x 2 = $num2";
    echo "<br>";
    if($num2 > 100){
        echo "O número é maior que 100";
    }
} else {
    echo " não é um numero";
}