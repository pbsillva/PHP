<?php

$anoNascimento = 1993;
$nomeCompleto = "";

$nome1 = "João";
$sobrenome = 'Rangel';
$nomeCompleto = $nome1 ." ". $sobrenome;
echo $nomeCompleto;

exit;

echo $nome1;
echo "<br/>";

if (isset($nome1)){ //isset = verifica se a variavel está com algum tipo de dados
    echo $nome1;
}

?>