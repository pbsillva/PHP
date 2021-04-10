<?php
require_once("config.php");

$email=$_POST["email"];
$senha=md5($_POST["senha"]);


$busca_usuario = mysqli_query($conectado, "select * from usuario where email = '$email' and senha = '$senha'");

$linhas=mysqli_num_rows($busca_usuario);
echo $linhas;
if($linhas==1)
{
	echo"<script>window.location='menu_usuario.php';</script>";
}
else
	{
		echo "<script>alert ('Login ou senha inválido');
		window.location='index.php;</script>";
	}
	//mysqli_close();



?>