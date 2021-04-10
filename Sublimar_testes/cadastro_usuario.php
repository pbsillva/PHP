<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>

<body><h3>Cadastro de usuario</h3>
<form name="cadastro" action="salvar_cadastro.php" method="post">
<label>Nome</label>
<br>
<input type="text" name="nome" size="80">
<br>
<label>CPF</label>
<br>
<input type="text" name="cpf" size="12">
<br>
<label>Data de nascimento</label>
<br>
<input type="date" name="data_nasc" size="12">
<br>
<label>Sexo</label>
<br>
<input type="radio" name="sexo" value="M" checked>Masculino
<input type="radio" name="sexo" value="F">Feminino
<br>
<label>e-mail</label>
<br>
<input type="email" name="email" size="20">
<br>
<label>Senha</label>
<br>
<input type="password" name="senha" size="20">
<br>
<input type="hidden" name="ativo" value="1">
<input type="hidden" name="nivel" value="1">
<input type="submit" name="cadastro" value="Cadastrar">
</br>
</form>
</body>
</html>
