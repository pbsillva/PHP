<?php

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'João',
    'idade'=>20
));

array_push($pessoas, array(
    'nome' => 'Pedro',
    'idade'=>24
));

echo json_encode($pessoas);


?>