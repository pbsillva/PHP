<?php

$nome = "Paulo";

function teste(){

    global $nome;
    echo $nome;

}

function teste2(){
    $nome = "Eduardo";
    echo $nome." agora no teste2";

}

teste();
echo "<br/>";
teste2();


?>