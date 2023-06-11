<?php

$str = "O rato roeu a roupa do rei de roma";
$ContA = 0;
for($i = 0; $i < strlen($str);$i++){
    
    if($str[$i]=="a"){
        $ContA++;
    }
}

echo $ContA;