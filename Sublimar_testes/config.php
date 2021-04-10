<?php

// faz conex�o com o servidor MySQL
$localhost = "localhost"; 	 // local do servidor
$usuario = "root";		 // nome do usuario
$senha2 = "";			 	 // senha
$db = "sublimar"; 	 // nome do banco de dados

$conectado=mysqli_connect($localhost,$usuario,$senha2,$db);
?>