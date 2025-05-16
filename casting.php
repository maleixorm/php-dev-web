<?php

function quebraLinha() {
    echo "<br><br>";
}

$valor = 10;
$valor2 = (float) $valor;
$valor3 = (string) $valor;
$valor4 = 15.35;
$valor5 = (int) $valor4;
echo gettype($valor);
quebraLinha();
echo gettype($valor2);
quebraLinha();
echo gettype($valor3);
quebraLinha();
echo gettype($valor5);
quebraLinha();
echo $valor4;
quebraLinha();
echo $valor5;