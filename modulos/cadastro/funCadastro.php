<?
	include "../../lib/config.php";

	mysql_query("INSERT INTO usuarios (nome, email, senha, grupo) VALUES ('".$_POST['nome']."', '".$_POST['email']."', '".md5($_POST['senha'])."', '".$_POST['grupo']."')");

	echo 'Usuário cadastrado com Sucesso!';
?>