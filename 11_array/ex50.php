<?php

$pessoas = [
    'Junior' => 20,
    'Isa' => 11,
    'fulano'=> 23,
    'matheus'=>29
];
?>

<table border = "1">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php foreach($pessoas as $nome => $idade):?>
        <tr>
            <td><?= $nome ?></td>
            <td><?= $idade ?></td>

        </tr>
    <?php endforeach; ?>
<table>