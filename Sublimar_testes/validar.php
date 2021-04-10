<?php
include_once("config.php");

//$email = mysqli_real_escape_string($mysqli, $_POST['email']);
//$senha = mysqli_real_escape_string($mysqli, $_POST['senha']);


$email = $_POST['email'];
$senha = $_POST['senha'];
$query = "SELECT * FROM usuario where email='$email' and senha='$senha'";
$achou = mysqli_query($mysqli,$query);
	while($res = mysqli_fetch_array($achou)) {
		
		echo $res['email'];
		echo "\n";
		echo $res['senha'];
	}
?>