<?php

// faz conexao com o servidor MySQL
$localhost = "localhost"; 	 // local do servidor
$usuario = "root";		 // nome do usuario
$senha = "root";			 	 // senha
$db = "sublimar_db"; 	 // nome do banco de dados

$conn = mysqli_connect($localhost,$usuario,$senha,$db) or die(mysqli_error());


$mysqli = new mysqli("localhost","root","root","sublimar_db");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>