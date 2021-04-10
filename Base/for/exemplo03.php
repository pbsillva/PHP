<?php

echo "<select>";
for ($i=date("Y");$i >= date("Y")-100; $i--){
    echo '<option value="'.$i.'">'.$i.'</option';   //ponto para concatenação
    echo "<br>";
}


echo "</select";


?>