<?php

//basicos
$nome = "HCode";
$site = 'www.hcode.com.br';
$ano = 1990;
$salario = 5500.99;
$bloqueado = false;

//compostos
$frutas = array("abacaxi", "laranja", "manga");

echo $frutas[2];
echo "<br/";
var_dump($frutas);
echo "<br/";

$nascimento = new DateTime();
//var_dump($nascimento);

//especiais

$arquivo = fopen("exemplo03.php","r");
var_dump($arquivo);

$nulo = NULL;
$vazio = "";

?>