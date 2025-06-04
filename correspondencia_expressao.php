<?php

$busca = 'x';

switch ($busca) {
    case '1':
        $retornoSwitch = "Encontrou";
        break;
    
    case 2:
        $retornoSwitch = "Encontrou";
        break;
    
    default:
        $retornoSwitch = "Não Encontrou";
        break;
}

echo "Resultado do Switch: " . $retornoSwitch;
echo "<hr>";

$retornoMatch = match($busca) {
    '1' => 'Encontrou o texto 1',
    1 => 'Encontrou o número 1',
    5, 12 => 'Encontrou o valor 5 ou 12',
    '8', 'x' => 'Encontrou o texto 8 ou x',
    default => 'Não Encontrou'
};

echo "Resultado do Match: " . $retornoMatch;
echo "<hr>";