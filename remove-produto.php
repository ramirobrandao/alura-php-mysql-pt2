<?php 
include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");
include("logica-usuario.php");
include("mostra-alerta.php");
?>

<?php mostraAlerta("success"); ?>

<p class="text-success">Produto <?=$id;?> removido!</p>

<?php
include("rodape.php");
?>