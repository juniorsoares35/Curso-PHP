<?php

include_once "backend.php";

?>

<h1>Lorem Ipsum</h1>

<p><?= $nome; ?> veja as nossa ofertas</p>

<h2>Confira nosso principais produtos</h2>
<ul>
    <?php foreach($produtos as $produto):?>
    <li><?= $produto; ?></li>
    <?php endforeach; ?>
</ul>