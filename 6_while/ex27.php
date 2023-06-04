<?php

$arr = [1,"junior",5,6,true,false,"teste",10,"Ola",5];
$x = count($arr);
$y  = 0;

while($y < $x){
    if(is_string($arr[$y])){
        echo $arr[$y]. "<br>";
    }
    $y++;
}