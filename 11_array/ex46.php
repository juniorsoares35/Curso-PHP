<?php

$arr = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];

for($i = 0;$i < count($arr);$i++){
    echo "Imprimindo array ".$i + 1 . "<br>";
    for($z = 0; $z < count($arr);$z++)
        echo $arr[$i][$z] . " ";
    echo "<br>";
}