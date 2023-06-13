<?php

$pessoa = ["Junior",20,"Programador","Preto"];

print_r($pessoa);
echo "<br>";

list($nome,$idade,$profissao,$corOlho) = $pessoa;

echo "$nome <br>";
echo "$idade <br>";
echo "$profissao <br>";
echo "$corOlho <br>";
