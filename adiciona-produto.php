<?php require_once("cabecalho.php"); 
	require_once("banco-produto.php");
	require_once("logica-usuario.php"); 
	verificaUsuario();
	
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$categoria_id = $_POST['categoria_id'];

if (array_key_exists('usado', $_POST)) {
		$usado = "true";
} else { 
		$usado = "false";
}

if(insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado)) { ?>
    <h3><p class="text-success">O produto <?= $nome; ?> de valor: R$ <?= $preco; ?> foi adicionado com sucesso!</p></h3	>
<?php } else {
    $msg = mysqli_error($conexao);
?>
    <p class="text-danger">O produto <?= $nome; ?> não foi adicionado: <?= $msg ?></p>
<?php
}
?>

<?php require_once("rodape.php"); ?>