<?php

function quebrarLinha() {
    echo "<br>";
}

function exibirBoasVindas() {
    echo "Bem-vindo ao curso de PHP!";
}

function calcularAreaTerreno($largura, $comprimento) {
    $area = $largura * $comprimento;
    return $area; 
}

exibirBoasVindas();
quebrarLinha();
echo calcularAreaTerreno(20, 50);
quebrarLinha();
echo calcularAreaTerreno(3, 4);