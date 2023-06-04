<?php

$arr = [];

for($i = 10; $i <= 20;$i++){

    array_push($arr,$i);
}
print_r($arr);
echo "<br>";

for($x = 0;$x < count($arr);$x++){

    if($arr[$x] % 2 == 1){
        echo $arr[$x] . "<br>";
    }
}