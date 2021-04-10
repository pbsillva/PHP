<?php

// faz conex�o com o servidor MySQL
$localhost = "localhost"; 	 // local do servidor
$usuario = "root";		 // nome do usuario
$senha = "root";			 	 // senha
$db = "imagens_devmedia"; 	 // nome do banco de dados

$conexao2 = mysqli_connect($localhost,$usuario,$senha,$db);


$conexao = new mysqli("localhost","root","root","imagens_devmedia");

// Check connection
if ($conexao -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>