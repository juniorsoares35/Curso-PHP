<?php

$jogadores = [
    'Junior'=>9999,
    'isa'=>11100,
    'fulano'=>3020,
    'matheus'=>7890
];
arsort($jogadores);
?>
<h1>Ranking</h1>
<ol>
    <?php foreach($jogadores as $nome=>$pont):?>
        <li><?= "$nome = $pont"?></li>
<?php endforeach; ?>
</ol>