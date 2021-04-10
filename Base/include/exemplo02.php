<?php
//include "exemplo01.php"; include tenta funcionar mesmo com o arquivo com problema. recomendado usar include_path
// require "exemplo01.php"; //require obriga que o arquivo exista e que esteja funcionando corretamente. caso contrário, gera um erro fatal.
require_once "exemplo01.php" //importa somente uma vez, evitando erros.

$resultado = somar(10, 20);
echo $resultado;

?>