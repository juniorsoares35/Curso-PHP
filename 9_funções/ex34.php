<?php

function parimpar($num){

    if($num % 2 == 0){
        echo "O número $num é par <br>";
    }else{
        echo "O número $num é impar <br>";
    }
}

parimpar(4);
parimpar(3);
parimpar(1411);