<?php

include("config.php");

$nome = $_POST['nome'];

//colocar demais variaveis

$sql = "INSERT into audiencia(cod_usuario, nome, ...) values ('','$nome','...')"; 

if(mysqli_query($sql))
{
	echo "<script>alert('Usuario cadastrado com sucesso!');</script>";
	echo "<script>window.location='menu.php';</script>";
}
else
{
	echo "<script>alert('Erro ao cadastrar o usuário!');</script>";
	echo "<script>window.location='cadastro_usuario.php';</script>";	
}
mysqli_close();
	
?>