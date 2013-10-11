<!doctype html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<title>Cadastro de Usuários</title>
</head>
<body>
	<form method="post" action="funCadastro.php">
		<label for="nome">Nome</label>
		<input type="text" name="nome" id="nome">
		<br>
		<label for="email">Email</label>
		<input type="email" name="email" id="email">
		<br>
		<label for="senha">Senha</label>
		<input type="password" name="senha" id="senha">
		<label for="grupo">Permissão</label>
		<select name="grupo" id="grupo">
			<option value="0">Usuário</option>
			<option value="1">Administrator</option>
		</select>
		<br>
		<button type="submit">Cadastrar</button>
	</form>
</body>
</html>