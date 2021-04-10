<?php

function ola($texto = "mundo", $periodo = "Bom dia"){

    return "Ola $texto! $periodo!<br>";
}

echo ola();
echo ola("Eduardo", "Boa tarde");
echo ola("Paulo");

?>