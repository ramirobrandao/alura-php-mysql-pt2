<?php include("conecta.php");
	 include ("banco-usuario.php");

$usuario = buscaUsuario($conexao, $_POST['email'], $_POST['senha']);
	
	if($usuario == null) {
		header("location: index.php?login=0");
	} else {
		header("location: index.php?login=1");
		setcookie("usuario_logado", $usuario["email"], time() +60);
	}
		die();
?>