<?php
require_once("config.php");
$nome=$_POST["nome"];
$telefone=$_POST["telefone"];
$rua=$_POST["rua"];
$numero=$_POST["numero"];
$complemento=$_POST["complemento"];
$cidade=$_POST["cidade"];
$valor=$_POST["valor"];
$observacao=$_POST["observacao";
$_FILES=$_POST["imagens"];


$sql=mysqli_query($conectado,"INSERT INTO cadastro values ('','$nome','$telefone', '$rua','$numero','$complemento','$cidade','$valor', "$_FILES)");


if($sql)
{
	echo "<script>alert('Usuario cadastrado com sucesso!');</script>";
	echo "<script>window.location='index.php';</script>";
}
else
{
	echo "<script>alert('Erro ao cadastrar o usuário!');</script>";
	echo "<script>window.location='cadastro_usuario.php';</script>";	
}
mysqli_close();
	
?>

